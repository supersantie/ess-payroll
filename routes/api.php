<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', function(Request $request){
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $user = User::where('email', $request->email)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $token = $user->createToken($request->token_name ?? 'My Token')->plainTextToken;

    return response()->json(['token' => $token]);
});

Route::middleware('auth:sanctum')->group(function(){
    Route::controller(\App\Http\Controllers\Api\EmployeeController::class)->group(function(){
        Route::get('/employees', 'index')->name('api.employee.index');
        Route::post('/employee/update/{employee}', 'update')->name('api.employee.update');
    });

    Route::get('/get-users', function(){
        $users = DB::connection('second_db')->select("SELECT * FROM users");    
        return response()->json(['data'=>$users]);
    });

    Route::get('/get-employees', function(){
        $users = DB::connection('second_db')->table("employees")->get();    
        return response()->json(['data'=>$users]);
    });

    Route::get('/get-employee/{id}', function($id){
        $users = DB::connection('second_db')->table("employees")->where('id', $id)->first();    
        return response()->json(['data'=>$users]);
    });




});

