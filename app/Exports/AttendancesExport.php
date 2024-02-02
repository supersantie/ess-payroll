<?php

namespace App\Exports;
use App\Models\User;
use App\Models\Employee;
use Maatwebsite\Excel\Concerns\FromCollection;

class AttendancesExport implements FromCollection {
    
    public function collection()
    {
        $employees = Employee::whereHas('attendances', function ($query) {
            $query->where('payroll_status', '!=', 'recorded');
        })->get();
        
        return $employees;
    }
}