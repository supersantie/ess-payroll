<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;

class LogsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
}
