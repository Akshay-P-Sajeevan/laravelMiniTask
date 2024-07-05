<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'tbl_student';

    protected $fillable = [
        'name', 'fk_parent_id', 'gender',
    ];

    public function parent()
    {
        return $this->belongsTo(ParentModel::class, 'fk_parent_id', 'id');
    }

    public function optedCourses()
    {
        return $this->hasMany(StudentOptedCourse::class, 'student_id', 'id');
    }
}
