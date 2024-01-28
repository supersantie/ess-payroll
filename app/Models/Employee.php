<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    public function getRouteKeyName(): string
    {
        return 'code';
    }

    public function attendances(){
        return $this->hasMany(Attendance::class, 'employee_code', $this->getRouteKeyName());
    }

    public function overtimes(){
        return $this->hasMany(Overtime::class, 'employee_code', $this->getRouteKeyName());
    }

    public function leaves(){
        return $this->hasMany(Leave::class, 'employee_code', $this->getRouteKeyName());
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
    
}
