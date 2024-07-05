<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ParentModel extends Model
{
    protected $table = 'tbl_parent';

    protected $fillable = [
        'name', 'email',
    ];

    public function students()
    {
        return $this->hasMany(Student::class, 'fk_parent_id', 'id');
    }
}
