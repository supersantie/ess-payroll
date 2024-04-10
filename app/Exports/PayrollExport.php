<?php

namespace App\Exports;

use App\Models\Payroll;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PayrollExport implements FromCollection,  WithHeadings, WithStyles, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //
        return Payroll::with('employee')->get()->map(function ($payroll) {
            return [
                'employee_name' => optional($payroll->employee)->first_name . ' ' . optional($payroll->employee)->last_name,
                'paid_hours' =>  $payroll->paid_hours,
                'overtime' =>  $payroll->overtime ? '' : '',
                'company_loan' =>  $payroll->company_loan ? '' : '',
                'sss' =>  $payroll->sss ? '' : '',
                'phil_health' =>  $payroll->phil_health ? '' : '',
                'pag_ibig' =>  $payroll->pag_ibig ? '' : '',
                'net_pay' =>  $payroll->net_pay,
                'date_issued' =>  $payroll->date_issued,
                'start_date' =>  $payroll->start_date,
                'end_date' =>  $payroll->end_date,
                'status' =>  $payroll->status,
            ];
        });
        
    }

    public function headings(): array
    {
        return [
            'employee_name',
            'paid_hours',
            'overtime',
            'company_loan',
            'sss',
            'phil_health',
            'pag_ibig',
            'net_pay',
            'date_issued',
            'start_date',
            'end_date',
            'status',
        ];
    }


    public function map($row): array
    {
        return [
            'employee_name' => optional($row->employee)->first_name . ' ' . optional($row->employee)->last_name,
            'paid_hours' => $row->paid_hours,
            'overtime' => $row->overtime,
            'company_loan' => $row->company_loan ,
            'sss' => $row->sss,
            'phil_health' => $row->phil_health ,
            'pag_ibig' => $row->pag_ibig,
            'net_pay' => $row->net_pay,
            'date_issued' => $row->date_issued,
            'start_date' => $row->start_date,
            'end_date' => $row->end_date,
            'status' => $row->status,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:L1')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => '27ae60']
            ],

            'font' => [
                'bold' => true,
                'color' => ['rgb' => 'ecf0f1'],
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER,
            ],
            'borders' => [
                'outline' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['rgb' => '000000'],
                ],
            ],
        ]);

        $lastRow = $sheet->getHighestRow();
        $lastColumn = $sheet->getHighestColumn();

        for ($row = 1; $row <= $lastRow; $row++) {
            for ($col = 'A'; $col <= $lastColumn; $col++) {
                $sheet->getStyle("{$col}{$row}")->applyFromArray([
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                            'color' => ['rgb' => '000000'],
                        ]
                    ],
                ]);
            }
        }
    }
}
