<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grape extends Model
{
    //
    public function stall()
    {
      return $this->belongsTo('App\Stall');
    }
    public function keepers()
    {
      return $this->belongsToMany('App\Keeper');
    }
    public function label()
    {
      return $this->hasOne('App\Label');
    }
}
