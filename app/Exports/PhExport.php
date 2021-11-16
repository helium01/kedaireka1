<?php

namespace App\Exports;

use App\Models\ph;
use Maatwebsite\Excel\Concerns\FromCollection;

class PhExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ph::all();
    }
}
