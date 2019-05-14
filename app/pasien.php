<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pasien extends Model
{
    protected $table='pasiens';
    protected $fillable=['name','age','gender','address','hp','bpjs'];

    public function visit () {
     return $this->belongsToMany('App\visit');
  }

}
