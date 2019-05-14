<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{


    public function visit(){
 return $this->belongsTo('App\visit');
}
public function obat(){
 return $this->belongsToMany('App\obat')->withPivot('quantity');;
}

  }
