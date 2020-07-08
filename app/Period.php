<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    /**
     * Get the sections.
     */
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
