<?php

namespace App\Exports;
use App\User;

use Maatwebsite\Excel\Concerns\FromCollection;

class WinnersExport implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}

?>