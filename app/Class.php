<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    //
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
    
    public function students()
    {
        return $this->belongsToMany(Student::class, 'class_student');
    }
}
