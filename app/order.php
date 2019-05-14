<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
protected $table='obats';

    public function visit(){
 return $this->belongsTo('App\visit');
}
public function obat(){
 return $this->belongsToMany('App\obat')->withPivot('quantity');;
}
protected $fillable = ['total_price'];
    public function orderCols(){
      return $this->belongsToMany(obat::class);
    }
    public  static function createOrder(){
      
       $order = $user->orders()->create([
         'total_price' => Cart::total()
       ]); // insert order table data
       // place order and insert data to orders_products
       foreach(Cart::content() as $cData){
         $order->orderCols()->attach($cData->id,[
           'total_price' => $cData->qty * $cData->price,
           'qty' => $cData->qty
         ]);
       }
       Cart::destroy(); // make cart empty
    }
    public function obat_order(){
      return $this->hasMany('App\obat_order', 'id_order');
    }
  }
