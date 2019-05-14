<?php

namespace App\Http\Controllers;
use Cart;
use DB;
use App\visit;
use Illuminate\Http\Request;

class checkout extends Controller
{
  public function index(){
      $visit=DB::table('visits')->get();
  return view('apoteker.checkout',[
    'visit'=>$visit  ,'data' => Cart::content()
    ]);
}

public function placeOrder(Request $request){
  
  foreach(Cart::content() as $cData){
    $order->orderCols()->attach($cData->id,[
      'total_price' => $cData->qty * $cData->price,
      'qty' => $cData->qty
    ]);

  $this->validate($request, [
      'user_id' => 'required',
        'invoice' => 'required',

      ]);
  $data = new order;
  $data->invoice =$request->invoice;
  $data->user_id =$request->user_id;
  $data->total_price=$cData->qty * $cData->price;
    $data->save();

}
  order::createOrder();

  Cart::destroy();
  return redirect('apoteker/resepobat');
}


}
