<?php

namespace App\Exports;

use Carbon\Carbon;
use App\Models\DataScienceUsers;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\Exportable;

use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection, WithHeadings
{

    use Exportable;

    protected $from_date;
    protected $to_date;

    function __construct($from_date, $to_date)
    {
        $this->from_date = $from_date;
        $this->to_date = $to_date;
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {

        $data = DataScienceUsers::whereBetween('created_at', [$this->from_date, $this->to_date])
            ->get(['name', 'email']);

        return $data;
    }

    public function headings(): array
    {
        return [
            'id',
            'name',
            'email',
        ];
    }
}