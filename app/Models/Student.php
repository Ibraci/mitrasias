<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'rollno',
        'first_name',
        'middle_name',
        'last_name',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'address',
        'pictures',
        'documents',
        'school_college',
        'guardian_title_name',
        'guardian_first_name',
        'guardian_middle_name',
        'guardian_last_name',
        'guardian_relation',
        'guardian_phone',
        'guardian_email',
        'guardian_gender',
        'guardian_occupation',
        'course_name',
        'course_academic_year',
        'course_quantity',
        'course_fees',
        'course_discount',
        'course_discount_method',
        'course_total_fees',
        'course_notes',
        'course_batch',
        'payment_method',
        'payment_installment',
    ];
}
