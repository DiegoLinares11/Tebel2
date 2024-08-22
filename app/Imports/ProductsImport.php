<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
     * @param array $row
     *
     * @return Product|null
     */
    public function model(array $row)
    {
        return new Product([
           'CODIGO_PT'     => $row[0],
           'NOMBRE_PRODUCTO'    => $row[2], 
           'PRECIO'    => $row[3], 
           'FACTOR_CONVERSION_EXISTENCIA'    => $row[4], 
           'PESO_UNIDAD_MAYOR'    => $row[5], 
           'VOLUMEN_UNIDAD_MAYOR'    => $row[6], 
           'PRECIO_UNITARIO'    => $row[7], 
        ]);
    }
}