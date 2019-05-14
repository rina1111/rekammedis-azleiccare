<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
  protected $guard = 'dokter';
    protected $table='dokters';
    protected $fillable = ['nip','name_dokter','specialist','address','hp','avatar','username','password','status_dokter'];

    public function schedules () {
		 return $this->belongsToMany('App\schedule');
	}

  public function visits () {
   return $this->belongsToMany('App\visit');
}
}
