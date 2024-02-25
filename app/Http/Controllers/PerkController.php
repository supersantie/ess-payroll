<?php

namespace App\Http\Controllers;

use App\Models\Perk;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class PerkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        $perks = Employee::with('perks')->get();

        // dd("test");
        $statusColors = [
            'released' => 'bg-success bg-opacity-10 text-success',
            'hold' => 'bg-secondary bg-opacity-10 text-secondary',
            'issued' => 'bg-warning bg-opacity-10 text-warning',
        ];
        //
        return view('pages.payroll.incentives_and_allowance', compact('employees', 'perks', 'statusColors'));
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

        try {
            $perkRecord = Perk::create([
                "perk_type" => $request->perk_type,
                "employee_code" => $request->employee,
                "amount" => doubleval(str_replace(',', '', Str::of($request->amount)->replaceFirst("PHP ", ""))),
                "remarks" => $request->remarks,
            ]);

            return response()->json(['perk_record' => $perkRecord], 200);
        }catch (QueryException $e) {
            return response()->json(['error' => 'Database error'], 500);
        } catch (\Throwable $th) {
            return response()->json(['error' => 'An error occurred'], 500);
        }
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
