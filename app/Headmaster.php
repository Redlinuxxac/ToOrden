<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Headmaster extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'lastname1', 'lastname2', 'birthday', 'sex',
    ];
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
    public function users()
    {
        return $this->morphMany(User::class, 'userable');
    }
}
