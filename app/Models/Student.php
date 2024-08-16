<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'student_details';
    protected $fillable = ['id', 'st_name', 'st_roll_no', 'st_class','st_subject','st_email','st_percentage'];
    public $timestamps = false;
}
