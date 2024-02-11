<?php

namespace App\Http\Controllers;

use App\Models\Perk;
use App\Models\Employee;
use Illuminate\Http\Request;

class PerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $perks = Employee::with('perks')->get();


        $statusColors = [
            'released' => 'bg-success bg-opacity-10 text-success',
            'hold' => 'bg-secondary bg-opacity-10 text-secondary',
            'issued' => 'bg-warning bg-opacity-10 text-warning',
        ];
        //
        return view('pages.payroll.incentives_and_allowance', compact('employees','perks', 'statusColors'));
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
    public function show(Perk $perk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Perk $perk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Perk $perk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Perk $perk)
    {
        //
    }
}
