<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname1', 'lastname2','birthday', 'sex',
    ];
    
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
    public function sections()
    {
        return $this->belongsToMany(Section::class,'section_student_teacher')
            ->withPivot('section_id');
    }
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,'section_student_teacher')
            ->withPivot('teacher_id');
    }
}
