<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $fillable = ['batch_name', 'batch_number', 'batch_subject', 'batch_course', 'batch_academic_year'];
}
