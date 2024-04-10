<?php

use Carbon\Carbon;
use App\Models\Cutoff;
use App\Models\Employee;
use Carbon\Carbon;
use App\Models\Cutoff;
use App\Models\Employee;
use App\Mail\PayrollNotify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EssController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\EssController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\PerkController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\CutoffController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\PayslipController;
use App\Http\Controllers\TimeLogController;
use App\Http\Controllers\TimeLogController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\LimitlessController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EssAccountController;
use App\Http\Controllers\EssAccountController;
use App\Http\Controllers\ActivityLogController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CompanyLoanController;
use App\Http\Controllers\PayrollDashboardController;
use App\Http\Controllers\ReimbursementController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CompanyLoanController;
use App\Http\Controllers\PayrollDashboardController;
use App\Http\Controllers\ReimbursementController;
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


require __DIR__ . '/modules/payroll.php';
require __DIR__ . '/modules/ess.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/exports.php';
require __DIR__ . '/imports.php';
