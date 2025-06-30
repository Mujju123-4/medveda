<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = "product";
    protected $fillable = [
        "id",
        "category_id",
        "name",
        "cut",
        "description",
        "is_active",
        "created_at",
        "updated_at"
    ];
}
