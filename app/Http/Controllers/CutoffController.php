<?php

namespace App\Http\Controllers;

use App\Models\Cutoff;
use Illuminate\Http\Request;

class CutoffController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cutoffs = Cutoff::all();

        return view('pages.payroll.reports.cut_off', compact("cutoffs"));
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
    public function show(Cutoff $cutoff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cutoff $cutoff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cutoff $cutoff)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cutoff $cutoff)
    {
        //
    }
}
