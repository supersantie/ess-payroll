<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Modules\Mssp\Checkup;
use App\Models\Modules\Mssp\Counselling;
use App\Models\Modules\Mssp\CounsellingService;
use Illuminate\Database\QueryException;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function checkupAppointmentIndex()
    {
        $checkups = Checkup::where('employee_id', session('info')->code)->get();

        return view('pages.ess.checkup_appointment', compact('checkups'));
    }

    public function storeCheckupAppointment(Request $request)
    {
        $validatedData = $request->validate([
            'schedule' => 'required',
            'checkup_type' => 'required',
        ]);

        try {

            Checkup::create([
                "employee_id" => session('info')->code,
                "checkup_date" => Carbon::parse($validatedData['schedule'])->toDateString(),
                "checkup_time" => Carbon::parse($validatedData['schedule'])->toTimeString(),
                "checkup_type" => $validatedData['checkup_type'],
                "note" => $request->note,
            ]);

            return response()->json(["success" => "Inserted successfully!"]);
        }catch (QueryException $e) {
            return response()->json(['error' => 'Database error', 'message' => $e], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred', 'message' => $e], 500);
        }
    }

    public function counsellingAppointmentIndex()
    {

        
        $services = CounsellingService::all();

        $counsellings = Counselling::with('counsellingService')->where('employee_id', session('info')->code)->get();

        foreach($counsellings as $counselling){

            dd($counselling);
        }

        return view('pages.ess.counselling_appointment', compact('services', 'counsellings'));
    }

    public function storeCounsellingAppointment(Request $request)
    {

        $validatedData = $request->validate([
            'schedule' => 'required',
            'service_type' => 'required',
        ]);

        try {

            Counselling::create([
                "employee_id" => session('info')->code,
                "appointment_date" => Carbon::parse($validatedData['schedule'])->toDateString(),
                "appointment_time" => Carbon::parse($validatedData['schedule'])->toTimeString(),
                "service_id" => $validatedData['service_type'],
                "note" => $request->note,
                "appointment_status" => 'Pending',
            ]);

            return response()->json(["success" => "Inserted successfully!"]);
        }catch (QueryException $e) {
            return response()->json(['error' => 'Database error', 'message' => $e], 500);
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred', 'message' => $e], 500);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
