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
    protected $fillable = ['id', 'name', 'description', 'price', 'image_path', 'category_id']; // Assuming 'category_id' is the foreign key

    // Define the relationship with the Category model
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id'); // Assuming 'category_id' is the foreign key in 'products' table
    }
}
