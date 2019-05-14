<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class obat extends Model
{
    protected $table='obats';
    protected $fillable=['nm_obat','golongan','harga','satuan','ket','status','stok','gambar'];

    public function orders(){
 return $this->belongsToMany('App\order');

}
public function reseps(){
  return $this->hasMany('App\resep');
}
}
