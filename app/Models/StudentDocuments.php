<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentDocuments extends Model
{
    use HasFactory;
    protected $table = "student_document";
    protected $fillable = [
        'student_id',
        'hscmarksheet', //yes or no
        'hsc_image',
        'passport',
        'passport_image',
        'passport_number',
        'surname',
        'surname_georg',
        'name',
        'name_georg',
        'nationality',
        'nationality_georg',
        'sex',
        'dob',
        'birth_place',
        'issue_place',
        'issue_date',
        'expiry_date',
        'address',
        'spouse_name',
        'mother_name',
    ];
}
