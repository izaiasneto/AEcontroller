<?php

namespace App\Exports;

use App\Models\Event;
use Maatwebsite\Excel\Concerns\FromCollection;

class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Event::all();
    }

    public function headings(): array
    {
        return [
            ['Title'],
            [
                'col_1',
                'col_2',
                'col_3',
                'col_3',
                'col_3',
                'col_3',
                'col_3',
                'col_3',
                'col_3',
                'col_3',
                'col_3',
            ]
        ];
    }
}
