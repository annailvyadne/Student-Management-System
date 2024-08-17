<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    use HasFactory;

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'students_courses', 'student_id', 'course_id');
    }

    protected $table="students";

}
