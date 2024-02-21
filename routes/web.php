<?php

use App\Mail\PayrollNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssController;
use App\Http\Controllers\PerkController;
use App\Http\Controllers\CutoffController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\TimeLogController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\LimitlessController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EssAccountController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\CompanyLoanController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PayrollSettingController;

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


    Route::prefix('ess')->group(function () {

        // Route::controller(EssController::class)->group(function(){
        //     Route::get('/login', 'index')->name('ess.login');
        //     Route::post('/verify', 'verify')->name('ess.login.verify');
        //     Route::get('/validate', 'validateOTP')->name('ess.validate.otp');
        //     Route::post('/logout', 'destroy')->name('ess.logout');
        // })->prefix('auth');

        Route::controller(EssController::class)->group(function () {
            Route::get('/login', 'index')->name('ess.login');
            Route::post('/verify', 'verify')->name('ess.login.verify');
            Route::post('/validate_otp', 'validateOTP')->name('auth.validate.otp');
            Route::post('/logout', 'destroy')->name('ess.logout');

            Route::get('/tna/capture', 'captureAttendance')->name('ess.tna.capture');
        })->prefix('auth');

        Route::middleware(['ess.account'])->group(function () {
            Route::get('/dashboard', function (Request $request) {
                return view('pages.ess.dashboard');
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
            })->prefix('payslips');
            // End of Payslip


        });
    });


    // Auth::routes();

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
        Route::get('/attendance/import', 'import')->name('attendance.import');
    });

    Route::controller(OvertimeController::class)->group(function () {
        Route::get('/overtime', 'index')->name('overtime');

        Route::post('/overtime/store', 'store')->name('overtime.store');
    });

    Route::controller(PerkController::class)->group(function () {
        Route::get('/perks', 'index')->name('perks');
    });

    Route::controller(ActivityLogController::class)->group(function () {
        Route::get('/activity_logs', 'index')->name('activity_logs');
    });

    Route::controller(PayrollController::class)->group(function () {
        Route::get('/payroll', 'index')->name('reports.payroll');
        Route::post('/payroll/store', 'store')->name('reports.payroll.store');
    });

    Route::controller(PayslipController::class)->group(function () {
        Route::get('/payslip', 'index')->name('reports.payslip');
    });

    Route::controller(CutoffController::class)->group(function () {
        Route::get('/cutoff', 'index')->name('reports.cut_off');
    });

    Route::controller(PayrollSettingController::class)->group(function () {
        Route::get('/payroll_settings', 'index')->name('payroll_settings');
        Route::post('/payroll_settings', 'update')->name('update');
    });

    Route::controller(CompanyLoanController::class)->group(function () {
        Route::get('/company_loans', 'index')->name('deductions_and_contributions.company_loans');

        Route::post('/company_loans/store', 'store')->name('deductions_and_contributions.company_loans.store');
    });

    Route::controller(LoanController::class)->group(function () {
        Route::get('/sss', 'sss')->name('deductions_and_contributions.sss');
        Route::get('/pagibig', 'pagibig')->name('deductions_and_contributions.pagibig');
    });


    Route::get('/test_email', function () {
        try {
            Mail::to('gcristianber@gmail.com')->send(new PayrollNotify());
            return response()->json(['Great! Successfully send in your mail']);
        } catch (Exception $e) {
            return response()->json(['Sorry! Please try again latter']);
        }
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('{any}', [LimitlessController::class, 'index'])->name('index');
    });
});



require __DIR__ . '/auth.php';
require __DIR__ . '/exports.php';
require __DIR__ . '/imports.php';
