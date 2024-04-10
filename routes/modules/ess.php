<?php

use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\TimeLogController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ReimbursementController;


// dd(Hash::make('123456'));
Route::group(['middleware' => 'web'], function () {
    Route::prefix('ess')->group(function () {
        Route::controller(EssController::class)->group(function () {
            Route::get('/login', 'index')->name('ess.login');
            Route::post('/verify', 'verify')->name('ess.login.verify');
            Route::post('/validate_otp', 'validateOTP')->name('auth.validate.otp');
            Route::post('/logout', 'destroy')->name('ess.logout');
        })->prefix('auth');

        Route::middleware(['ess.account'])->group(function () {
            Route::get('/dashboard', function (Request $request) {

                // dd(session('info'));
                
                $payrolls = \App\Models\Core\Employee::with('payrolls')->where('code', session('info')->code)->first();


                $articles = \App\Models\Modules\Mssp\Article::all();
                $programs = \App\Models\Modules\Mssp\Program::all();

                // dd($articles);
                // $article = Str::of($article->hwarticle_content)->toHtmlString();

                return view('pages.ess.dashboard_2', compact('payrolls', 'articles', 'programs'));
            })->name('ess.dashboard');

            // Time and Attendance
            Route::controller(TimeLogController::class)->group(function () {
                Route::get('/tna', 'index')->name('tna.index');
                Route::post('/tna', 'store')->name('tna.store');
            })->prefix('tna');
            // End of Time and Attendance

            // Payslip
            Route::controller(PayslipController::class)->group(function () {
                Route::get('/payslips', 'index')->name('payslips.index');
                Route::get('/payslips/pdf/{id}', 'pdf')->name('payslips.pdf');
            })->prefix('payslips');
            // End of Payslip

            Route::controller(LeaveController::class)->group(function () {
                Route::get('/leaves', 'index')->name('leaves.index');
                Route::post('/leaves/store', 'store')->name('leaves.store');
            })->prefix('leaves');

            Route::controller(ReimbursementController::class)->group(function () {
                Route::get('/reimbursements', 'index')->name('reimbursements.index');
                Route::post('/reimbursements/store', 'store')->name('reimbursements.store');
            })->prefix('reimbursement');

            
            Route::controller(AppointmentController::class)->group(function () {
                Route::get('appointment/checkup', 'checkupAppointmentIndex')->name('appointment.checkup.index');
                Route::post('appointment/checkup/store', 'storeCheckupAppointment')->name('appointment.checkup.store');
                Route::get('appointment/counselling', 'counsellingAppointmentIndex')->name('appointment.counselling.index');
                Route::post('appointment/counselling/store', 'storeCounsellingAppointment')->name('appointment.counselling.store');
            })->prefix('appointment');


            

        });
    });
});
