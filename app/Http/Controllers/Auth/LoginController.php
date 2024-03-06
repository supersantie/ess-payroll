<?php

namespace App\Http\Controllers\Auth;

use App\Models\ActivityLog;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // /**
    //  * Where to redirect users after login.
    //  *
    //  * @var string
    //  */
    protected $redirectTo = RouteServiceProvider::HOME;

    // /**
    //  * Create a new controller instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if (
            method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)
        ) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            $userEmail = $request->user()->email ?? '';
            $description = 'Logged In to the system';
            $ipAddress = $request->ip();
            $actionType = 'login';

            ActivityLog::create([
                'user_email' => $userEmail,
                'description' => $description,
                'ip_address' => $ipAddress,
                'action_type' => $actionType,
            ]);

            return $this->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {

        $userEmail = $request->user()->email ?? '';
        $description = 'Logged Out to the system';
        $ipAddress = $request->ip();
        $actionType = 'logout';

        ActivityLog::create([
            'user_email' => $userEmail,
            'description' => $description,
            'ip_address' => $ipAddress,
            'action_type' => $actionType,
        ]);

        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {

            return $response;
        }



        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/');
    }

    protected function sendLoginResponse(Request $request)
    {
        $request->session()->regenerate();

        $request->session()->regenerateToken();

        $this->clearLoginAttempts($request);

        return redirect('/dashboard');
    }


    protected function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/home';
    }
}
