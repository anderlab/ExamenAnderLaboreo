<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
 public function cliente()
 {
     return $this->belongsToMany('App\Cliente');
 }
}
