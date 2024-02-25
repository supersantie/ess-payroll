<?php

namespace App\Exports;

use App\Models\ActivityLog;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ActivityLogExport implements FromCollection,  WithHeadings, WithStyles, ShouldAutoSize
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        //
        return ActivityLog::select('user_email', 'description', 'ip_address', 'action_type')->get();
    }

    public function headings(): array
    {
        return [
            'User Email',
            'Description',
            'IP Address',
            'Action Type',
        ];
    }


    public function map($row): array
    {
        return [
            $row->user_email,
            $row->description,
            $row->ip_address,
            $row->action_type,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getStyle('A1:D1')->applyFromArray([
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => ['rgb' => 'e74c3c']
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
