<?php

namespace App\Http\Controllers;

use App\Models\EssRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EssRequestsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function requests()
    {

        $requests = EssRequests::all();

        $statusColors = [
            'pending' => 'bg-warning bg-opacity-10 text-warning',
            'denied' => 'bg-danger bg-opacity-10 text-danger',
            'in-process' => 'bg-info bg-opacity-10 text-info',
            'approved' => 'bg-success bg-opacity-10 text-success',
        ];

        return view('pages.ess.requests', compact('requests', 'statusColors'));
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
}
