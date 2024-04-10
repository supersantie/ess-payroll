<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PerkController;
use App\Http\Controllers\CutoffController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\LimitlessController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CompanyLoanController;
use App\Http\Controllers\PayrollDashboardController;
use App\Http\Controllers\PayrollSettingController;


Route::group(['middleware' => 'web'], function () {
    // Auth::routes();

    Route::get('/', function () {
        return view('auth.login');
    });

    Route::get('/dashboard', [PayrollDashboardController::class, 'index'])->name('payroll.dashboard');

    Route::controller(LoginController::class)->group(function () {
        Route::post('/', 'login')->name('login');
        Route::post('/logout', 'logout')->name('logout');
    });

    Route::controller(EmployeeController::class)->group(function () {
        Route::get('/employees', 'index')->name('employees');
    });

    Route::controller(AttendanceController::class)->group(function () {
        Route::get('/attendance', 'index')->name('attendance');
        Route::post('/attendance/store', 'store')->name('attendance.store');


        Route::get('/attendance/export', 'export')->name('attendance.export');
        Route::post('/attendance/import', 'import')->name('attendance.import');
    });

    Route::controller(OvertimeController::class)->group(function () {
        Route::get('/overtime', 'index')->name('overtime');

        Route::post('/overtime/store', 'store')->name('overtime.store');
    });

    Route::controller(PerkController::class)->group(function () {
        Route::get('/perks', 'index')->name('perks');
        Route::post('/perks/store', 'store')->name('perks.store');
    });

    Route::controller(ActivityLogController::class)->group(function () {
        Route::get('/activity_logs', 'index')->name('activity_logs');

        Route::get('/activity_logs/export', 'export')->name('activity_logs.export');
    });

    Route::controller(PayrollController::class)->group(function () {
        Route::get('/payroll', 'index')->name('reports.payroll');
        Route::post('/payroll/store', 'store')->name('reports.payroll.store');
        Route::get('/payroll/export', 'export')->name('reports.payroll.export');
    });

    Route::controller(PayslipController::class)->group(function () {
        Route::get('/payslip', 'index')->name('reports.payslip');
    });

    Route::controller(CutoffController::class)->group(function () {
        Route::get('/cutoff', 'index')->name('reports.cut_off');
        Route::get('/cutoff/export', 'export')->name('reports.cut_off.export');
    });

    Route::controller(PayrollSettingController::class)->group(function () {
        Route::get('/payroll_settings', 'index')->name('payroll_settings');
        Route::post('/payroll_settings', 'update')->name('payroll_settings.update');
    });

    Route::controller(CompanyLoanController::class)->group(function () {
        Route::get('/company_loans', 'index')->name('deductions_and_contributions.company_loans');

        Route::post('/company_loans/store', 'store')->name('deductions_and_contributions.company_loans.store');
    });

    Route::controller(LoanController::class)->group(function () {
        Route::get('/sss', 'sss')->name('deductions_and_contributions.sss');
        Route::get('/pagibig', 'pagibig')->name('deductions_and_contributions.pagibig');
        Route::post('/loans/store', 'store')->name('deductions_and_contributions.pagibig.store');
    });

    Route::controller(CertificateController::class)->group(function () {
        Route::get('/certificate', 'index')->name('certificate.index');
        Route::post('/certificate/store', 'store')->name('certificate.store');
    });
});