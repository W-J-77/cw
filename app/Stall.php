<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stall extends Model
{
    //
    public function grapes()
    {
      return $this->hasMany('App\grape');
    }
}
