<?php

namespace App\Models\Core;

use App\Models\Loan;
use App\Models\Perk;
use App\Models\Leave;
use App\Models\Payroll;
use App\Models\Payslip;
use App\Models\Overtime;
use App\Models\Attendance;
use App\Models\EssAccount;
use App\Models\CompanyLoan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Employee extends Model
{

    use HasFactory;

    protected $connection = 'core';
    protected $table = 'employees';

    public function getRouteKeyName(): string
    {
        return 'code';
    }

    public function essAccount()
    {
        return $this->hasOne(EssAccount::class, 'employee_code', $this->getRouteKeyName());
    }
    
    public function attendances(){
        return $this->hasMany(Attendance::class, 'employee_code', $this->getRouteKeyName());
    }

    public function overtimes(){
        return $this->hasMany(Overtime::class, 'employee_code', $this->getRouteKeyName());
    }

    public function perks(){
        return $this->hasMany(Perk::class, 'employee_code', $this->getRouteKeyName());
    }

    public function payrolls(){
        return $this->hasMany(Payroll::class, 'employee_code', $this->getRouteKeyName());
    }

    public function payslips(){
        return $this->hasMany(Payslip::class, 'employee_code', $this->getRouteKeyName());
    }

    public function companyLoans(){
        return $this->hasMany(CompanyLoan::class, 'employee_code', $this->getRouteKeyName());
    }

    public function leaves(){
        return $this->hasMany(Leave::class, 'employee_code', $this->getRouteKeyName());
    }
    
    public function loans(){
        return $this->hasMany(Loan::class, 'employee_code', $this->getRouteKeyName());
    }  

    public function jobRole(){
        return $this->hasOne(\App\Models\Core\JobRole::class, 'id', 'job_role_id');
    }

}
