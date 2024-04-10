<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Dompdf\Dompdf;
use Dompdf\Options;
use App\Models\Payroll;
use App\Models\Payslip;
use App\Models\Employee;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;

class PayslipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $payrolls = \App\Models\Core\Employee::with('payrolls')->where('code', session('info')->code)->first();
        // dd($payslips->payrolls);

        return view('pages.payroll.reports.payslip', compact('payrolls'));
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
    public function show(Payslip $payslip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payslip $payslip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payslip $payslip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payslip $payslip)
    {
        //
    }

    public function export()
    {
    }


    public function pdf($id)
    {
        $payroll = Payroll::with(['employee', 'employee.overtimes'])->findOrFail($id);

        $totalOvertimePay = 0;
        
        foreach ($payroll->employee->overtimes as $overtime) {
            $overtimeRate = $payroll->employee->basic_daily_rate / 8 * 0.25 + $payroll->employee->basic_daily_rate / 8;
        

            $overtimePay = $overtime->no_of_hours * $overtimeRate;
        
            $totalOvertimePay += $overtimePay;
        }

        $data = [
            'payroll' => $payroll,
            'employee' => $payroll->employee,
            'overtimes' => $payroll->employee->overtimes,
            'total_overtime_pay' => $totalOvertimePay,
        ];
        // Load the view into a variable
        $view = view('pdf.invoice')->with($data); // Pass the $payroll variable to the view

        // Instantiate Dompdf with our view content
        $dompdf = new Dompdf();
        $options = new Options();

        // Register the custom font
        $options->set('fontDir', public_path('fonts/')); // Path to the directory containing font files
        $options->set('fontCache', storage_path('fonts/')); // Path to the font cache directory
        $options->set('isPhpEnabled', true); // Enable PHP
        $dompdf->setOptions($options);
        $dompdf->loadHtml($view->render());

        // Render the PDF
        $dompdf->render();

        // Set the response headers
        $date = Carbon::parse($payroll->created_at)->format('Y-m-d-h:i:s'); // Format the date
        $fileName = 'payslip_'. Str::lower($payroll->employee->code) . '-' . $date . '.pdf'; // Concatenate the date to the file name
        $headers = [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="' . $fileName . '"', // Set the filename in the response headers
        ];

        // Stream the PDF directly to the browser
        return response()->make($dompdf->output(), 200, $headers);
    }
}
