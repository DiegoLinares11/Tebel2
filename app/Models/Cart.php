<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['CODIGO_PT', 'NOMBRE_PRODUCTO', 'PRECIO', 'CANTIDAD'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
