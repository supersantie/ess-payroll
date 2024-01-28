<?php

use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CutoffController;
use App\Http\Controllers\DeductionController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LimitlessController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\PerkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'web'], function () {
    Route::get('/', function () {
        return view('auth.login');
    });

    // Auth::routes();

    Route::controller(LoginController::class)->group(function () {
        Route::post('/', 'login')->name('login');
        Route::post('/logout', 'logout')->name('logout');
    });

    Route::controller(EmployeeController::class)->group(function() {
        Route::get('/employees', 'index')->name('employees');
    });

    Route::controller(AttendanceController::class)->group(function() {
        Route::get('/attendance', 'index')->name('attendance');
    });

    Route::controller(OvertimeController::class)->group(function() {
        Route::get('/overtime', 'index')->name('overtime');
    });

    Route::controller(DeductionController::class)->group(function() {
        Route::get('/deductions', 'index')->name('deductions_and_contributions.deductions');
    });

    Route::controller(LeaveController::class)->group(function() {
        Route::get('/leaves', 'index')->name('leaves');
    });

    Route::controller(PerkController::class)->group(function() {
        Route::get('/perks', 'index')->name('perks');
    });

    Route::controller(ActivityLogController::class)->group(function() {
        Route::get('/activity_logs', 'index')->name('activity_logs');
    });

    Route::controller(PayrollController::class)->group(function() {
        Route::get('/payroll', 'index')->name('reports.payroll');
    });

    Route::controller(PayslipController::class)->group(function() {
        Route::get('/payslip', 'index')->name('reports.payslip');
    });

    Route::controller(CutoffController::class)->group(function() {
        Route::get('/cutoff', 'index')->name('reports.cut_off');
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('{any}', [LimitlessController::class, 'index'])->name('index');
    });
});


require __DIR__ . '/auth.php';