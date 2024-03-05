<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @page {
            margin: 0;
        }

        body {
            height: 100%;
            font-family: 'Roboto', sans-serif;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            /* Define 6 columns */
            gap: 20px;
            /* Adjust the gap between columns as needed */
        }

        .col {
            background-color: #f0f0f0;
            /* Example background color */
            padding: 20px;
            /* Example padding */
        }

        .col-span-6 {
            grid-column: span 6;
            /* Span across 6 columns */
        }
        .custom-table {
    width: 100%;
    border-collapse: collapse;
}

.custom-table thead {
    background-color: #333;
    color: white;
}

.custom-table th {
    text-align: center;
    padding: 10px;
}

.custom-table td,
.custom-table th {
    border: 1px solid #ccc;
    padding: 8px;
}

.custom-table tbody tr:nth-child(even) {
    background-color: #f2f2f2;
}

    </style>
</head>

<body style="padding: 16px;"">
    <div style="text-align: center;">
        <h3>Workfolio ESS Payslip</h3>
    </div>
    <table style="width: 100%; margin-bottom: 24px;">
        <tbody>
            <tr>
                <td>
                    Employee Code: {{ $employee->code }}
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>
                    Cutoff Period: {{ \Carbon\Carbon::parse($payroll->start_date)->format('d M Y') . ' - ' . \Carbon\Carbon::parse($payroll->end_date)->format('d M Y') }}
                </td>
            </tr>
            <tr>
                <td>
                    Employee Name: {{ $employee->first_name . ' ' . $employee->last_name }}
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>Generated Date: {{ \Carbon\Carbon::parse($payroll->created_at)->format('d M Y') }}</td>
            </tr>
        </tbody>
    </table>

    <table class="custom-table">
        <thead>
            <tr>
                <th>Earnings</th>
                <th>Amount</th>
                <th>Deductions</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>BASIC SALARY</td>
                <td style="text-align: right;">PHP {{ doubleval($employee->basic_daily_rate) }} </td>
                <td>COMPANY LOAN </td>
                <td style="text-align: right;">PHP {{ doubleval($payroll->company_loan) }} </td>
            </tr>
            <tr>
                <td>OVERTIME</td>
                <td style="text-align: right;">PHP {{ doubleval($total_overtime_pay) }}</td>
                <td>PAG IBIG </td>
                <td style="text-align: right;">PHP {{ doubleval($payroll->pag_ibig) }} </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; </td>
                <td>PHILHEALTH </td>
                <td style="text-align: right;">PHP {{ doubleval($payroll->phil_health) }} </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; </td>
                <td>SSS </td>
                <td style="text-align: right;">PHP {{ doubleval($payroll->sss) }} </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; </td>
                <td></td>
                <td>&nbsp; </td>
            </tr>

            <tr>
                <td style="font-weight: bold;">Gross Earnings</td>
                <td style="text-align: right;">PHP {{ floatval($payroll->net_pay) + floatval($payroll->sss + $payroll->pag_ibig + $payroll->phil_health) }}</td>
                <td style="font-weight: bold;">Total Deductions</td>
                <td style="text-align: right;">PHP {{ floatval($payroll->sss + $payroll->pag_ibig + $payroll->phil_health) }}</td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td>&nbsp; </td>
                <td>&nbsp; </td>
                <td>&nbsp; </td>
            </tr>
            <tr>
                <td colspan="3" style="text-align: right; font-weight: bold;">Net Pay</td>
                <td>PHP {{ doubleval($payroll->net_pay) }}</td>
            </tr>
            
        </tbody>
    </table>

    <table style="width: 100%; margin-top: 48px;">
        <tbody>
            <tr>
                <td style="text-align: center;">
                    ______________________
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td style="text-align: center;">
                    ______________________
                </td>
            </tr>
            < tr>
                <td style="text-align: center;">
                    Signature over printed name
                </td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td style="text-align: center;">HR Manager</td>
            </tr>
        </tbody>
    </table>



</body>

</html>
