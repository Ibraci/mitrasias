<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['course_name', 'course_sujects', 'course_code', 'course_type', 'course_shift', 'course_fees'];
}
