<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variations extends Model
{
    use HasFactory;

    protected $table = 'product_variants';
    protected $fillable = [
        "product_id",
        "weight",
        "unit",
        "serve",
        "qty",
        "discount",
        "mrp",
        "price"
    ];
}
