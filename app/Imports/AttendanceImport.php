<?php

namespace App\Imports;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Category;
use App\Models\Employee;
use App\Models\Attendance;
use App\Models\ActivityLog;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\ToCollection;

class AttendanceImport implements ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        $errors = []; // Array to store errors

        try {
            $rows = $rows->skip(1);

            foreach ($rows as $row) {
                $employeeCode = $row[0];
                $employee = Employee::where('code', $employeeCode)->first();

                if ($employee) {
                    $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format('Y-m-d');
                    $startTime = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[2])->format('H:i:s');
                    $endTime = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3])->format('H:i:s');

                    // Check for duplicate entry
                    $existingRecord = Attendance::where('employee_code', $employeeCode)
                        ->where('date', $date)
                        ->first();

                    if (!$existingRecord) {
                        $basicDailyRate = $employee->basic_daily_rate;
                        $hourRate = $basicDailyRate / 8;

                        $totalMinutesWorked = Carbon::parse($endTime)->diffInMinutes($startTime);

                        // Subtract 1 hour for break time
                        $totalMinutesWorked -= 60;

                        // Ensure the total minutes worked is not negative
                        if ($totalMinutesWorked < 0) {
                            $totalMinutesWorked = 0; // Set to 0 if negative
                        }

                        // Convert total minutes worked to hours
                        $hoursWorked = $totalMinutesWorked / 60;

                        // Round the hours worked to one decimal place
                        $hoursWorkedRounded = round($hoursWorked, 1);

                        $earnings = $hoursWorkedRounded * $hourRate;

                        $attendanceRecord = [
                            'employee_code' => $employeeCode,
                            'date' => $date,
                            'time_in' => $startTime,
                            'time_out' => $endTime,
                            'working_hours' => $hoursWorkedRounded,
                            'earnings' => $earnings,
                            'status' => 'on time'
                        ];

                        $description = 'Attendance record created for ' . $employee->first_name . ' ' . $employee->last_name . ' through import';
                        $actionType = 'create';

                        ActivityLog::create([
                            'user_email' => Auth::user()->email,
                            'description' => $description,
                            'ip_address' => $_SERVER['REMOTE_ADDR'],
                            'action_type' => $actionType,
                        ]);

                        Attendance::create($attendanceRecord);
                        Log::info("Attendance record created for employee code: $employeeCode");
                    } else {
                        $errors[] = "Duplicate entry found for employee code: $employeeCode, date: $date";
                        // Log error
                        Log::error("Duplicate entry found for employee code: $employeeCode, date: $date");
                    }
                } else {
                    $errors[] = "Employee code: '$employeeCode' not found in the database.";
                    // Log error
                    Log::error("Employee code: '$employeeCode' not found in the database.");
                }
            }
        } catch (\Exception $e) {
            $errors[] = "An error occurred while processing attendance records: " . $e->getMessage();
            // Log error
            Log::error("An error occurred while processing attendance records: " . $e->getMessage());
        }

        return $errors; // Return errors array back to the controller
    }
}
