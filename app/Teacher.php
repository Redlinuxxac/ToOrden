<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
    public function students()
    {
        return $this->hasManyThrough(Student::class, Classes::class,'country_id', 'teacher_id');
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
