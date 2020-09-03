<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromArray;

class OrigenExport implements FromArray
{

    private $datos;

    public function __construct(array $datos)
    {
        $this->datos = $datos;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    function array(): array
    {
        return $this->datos;
    }
}
