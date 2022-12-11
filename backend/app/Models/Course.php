<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = [
        'name_course',
        'credits',
        'name_proffesor',
        'course_prerequisite',
        'self_work_hours',
        'class_work_hours',
    ];
}
