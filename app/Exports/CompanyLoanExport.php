<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class CompanyLoanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
}
