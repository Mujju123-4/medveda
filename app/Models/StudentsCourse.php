<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentsCourse extends Model
{
    use HasFactory;
    protected $table = "students_cources";
    protected $fillable = [
        'student_id',
        'neet',
        'course',
        'qualifyingtest',
        'qualifying_status',
        'qualification_document',
    ];
}
