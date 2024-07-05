<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'tbl_course';

    protected $fillable = [
        'course_name', 'dept',
    ];

    public function optedCourses()
    {
        return $this->hasMany(StudentOptedCourse::class, 'course_id', 'id');
    }
}
