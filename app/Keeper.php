<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keeper extends Model
{
    //
    public function grapes()
    {
      return $this->belongsToMany('App\grape');
    }
}
