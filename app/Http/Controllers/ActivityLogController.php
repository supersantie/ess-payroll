<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use App\Models\ActivityLog;
use Illuminate\Http\Request;
use App\Exports\ActivityLogExport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class ActivityLogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $logs = ActivityLog::where('user_email', Auth::user()->email)->get();

        $logs = User::with('activity_logs')->get();

        $actionColors = [
            'login' => 'bg-success bg-opacity-10 text-success',
            'logout' => 'bg-pink bg-opacity-10 text-pink',
            'create' => 'bg-secondary bg-opacity-10 text-secondary',
            'edit' => 'bg-warning bg-opacity-10 text-warning',
            'delete' => 'bg-danger bg-opacity-10 text-danger',
            'view' => 'bg-info bg-opacity-10 text-info',
            'upload' => 'bg-indigo bg-opacity-10 text-indigo',
        ];

        return view('pages.payroll.activity_logs', compact('logs', 'actionColors'));
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
    public function show(ActivityLog $activityLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ActivityLog $activityLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ActivityLog $activityLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ActivityLog $activityLog)
    {
        //
    }

    public function export()
    {
        $currentDate = Carbon::now()->format('m-d-Y');
        $fileName = $currentDate . "-activity-logs.xlsx"; // Specify the file extension

        return Excel::download(new ActivityLogExport, $fileName);

    }
}
