<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Course extends Model
{
    use HasFactory;
    protected $table = 'Student_Course';

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'student_courses');
    }

    

}


