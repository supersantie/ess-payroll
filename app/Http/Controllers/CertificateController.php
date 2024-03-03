<?php

namespace App\Http\Controllers;

use App\Models\ActivityLog;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $requests = Certificate::where('employee_code', session('info')->code)->get();

        // dd($employee);

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
        ];

        return view('pages.ess.certificate', compact('requests', 'statusColors'));
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

        // dd($request);

        try {
            $perkRecord = Certificate::create([
                "certificate_type" => $request->certificate_type,
                "employee_code" =>  session('info')->code,
                "reason_type" => $request->reason_type,
                "remarks" => $request->remarks,
            ]);


            return response()->json(['perk_record' => $perkRecord], 200);
        } catch (QueryException $e) {
            return response()->json(['error' => $e], 500);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Certificate $certificate)
    {
        //
    }
}
