<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['gender', 'first_name', 'last_name','date_of_birth', 'address', 'email', 'phone', 'rollno', 'course_name', 'course_academic_year ', 'course_quantity ', 'course_fees ', 'course_total_fees ', 'school_college'];
}
