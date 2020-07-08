<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function period()
    {
        return $this->belongsTo(Period::class);                
    }
    
    public function students()
    {
        return $this->belongsToMany(Student::class,'section_student_teacher')
        ->withPivot('teacher_id');
    }
    
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,'section_student_teacher')
        ->withPivot('student_id');
    }
}
