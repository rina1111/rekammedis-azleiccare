<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medical extends Model
{
    protected $table='medicals';
    protected $fillable=['id_rm','id_visitor','keluhan','diagnosa_id','saran','fee'];
    public function diagnosa () {
     return $this->belongsToMany('App\diagnosa');
  }
}
