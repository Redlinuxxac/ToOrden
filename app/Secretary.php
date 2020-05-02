<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Secretary extends Model
{    
    public function addresses()
    {
        return $this->morphMany(Address::class, 'addressable');
    }
    public function phones()
    {
        return $this->morphMany(Phone::class, 'phoneable');
    }
    public function emails()
    {
        return $this->morphMany(Email::class, 'emailable');
    }
}
