<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headmaster extends Model
{
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
    public function users()
    {
        return $this->morphMany(User::class, 'userable');
    }
}
