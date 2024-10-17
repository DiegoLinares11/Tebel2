<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Define the table if it's different from the default 'products'
    protected $table = 'products';

    // Define fillable fields to avoid mass assignment issues
    protected $fillable = ['name', 'description', 'price', 'image_path'];
}