<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = ['payroll_status'];


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

    


    
}
