<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\TimeLog;
use Illuminate\Http\Request;

class TimeLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $attendances = Attendance::where('employee_code', session('info')->code)->get();

        // dd($employee);

        $statusColors = [
            'on time' => 'bg-success bg-opacity-10 text-success',
            'undertime' => 'bg-secondary bg-opacity-10 text-secondary',
            'late' => 'bg-danger bg-opacity-10 text-danger',
            'processed' => 'bg-success bg-opacity-10 text-success',
        ];

        return view('pages.ess.tna', compact('attendances', 'statusColors'));
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

        // Get the image (required)
        // Get the time in (required)
        // Get the time out (required)
        // Get the current date 
        // Get the current employee logged in
        // Store all the data
        // Store the image into storage

        // Throw an error if the user doesnt provide each
    }

    /**
     * Display the specified resource.
     */
    public function show(TimeLog $timeLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TimeLog $timeLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TimeLog $timeLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TimeLog $timeLog)
    {
        //
    }
}
