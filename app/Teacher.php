<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function sections()
    {
        return $this->belongsToMany(Section::class,'section_student_teacher')
            ->withPivot('section_id');
    }
    public function students()
    {
        return $this->belongsToMany(Student::class,'section_student_teacher')
            ->withPivot('student_id');
    }
    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
    public function phones()
    {
        return $this->morphMany(Phone::class, 'poneable');
    }
    public function emails()
    {
        return $this->morphMany(Email::class, 'emailable');
    }
}
