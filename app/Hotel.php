<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function hotel()
    {
        return $this->belongsToMany('App\Hotel');
    }
}
