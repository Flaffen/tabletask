<?php

namespace App\Imports;

use App\Models\Thing;
use Maatwebsite\Excel\Concerns\ToModel;

class ThingsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if (!empty($row[0])) {
            return new Thing([
                'date' => $row[0],
                'name' => $row[1],
                'sum' => $row[2]
            ]);
        }
    }
}
