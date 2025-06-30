<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;
    protected $table = "students";
    protected $fillable = [
        "first_name",
        "middle_name",
        "surname_name",
        "mother_name",
        "email",
        "contact",
        "university",
        "agent",
        "type",
    ];
}
