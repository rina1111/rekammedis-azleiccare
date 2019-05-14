<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class visit extends Model
{
    protected $table='visits';
    protected $fillable=['id_pasien','id_dokter','status'];

   const CREATED_AT = 'tgl_kunjungan';
   const UPDATED_AT = 'updated_kunjungan';


    use SoftDeletes;
    public function dokters () {
	 return $this->belongsToMany('App\dokter');
	}

  use SoftDeletes;
  public function pasiens () {
 return $this->belongsToMany('App\pasien');
}
public function orders(){
 return $this->hasMany('App\order');
}
}
