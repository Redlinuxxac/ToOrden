<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    public function users()
    {
        return $this->hasMany(User::class);
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
