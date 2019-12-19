<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Label extends Model
{
    //
    public function grape()
    {
      return $this->belongsTo('App\grape');
    }
}
