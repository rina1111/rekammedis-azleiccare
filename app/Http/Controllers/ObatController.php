<?php

namespace App\Http\Controllers;
use DB;
use DataTables;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\obat;
use App\resep;
use Cart;
use Uuid;

class ObatController extends Controller
{
  public function index_apoteker()
  {
    $code = \DB::table('code')->where('code_id',1)->value('code');
    if($code == '0'){
      $code = Uuid::generate(4);

  }

  	return view('apoteker/index',['code'=>$code]);
  }
    public function index(){
      $data=obat::all();
      return view ('apoteker/obat',['data'=>$data])->with( 'sukses','data has been saved');
    }
    public function create(Request $request)
    {

      $obat = new obat;
      $obat->nm_obat = $request->nm_obat;
      $obat->golongan= $request->golongan;
       $obat->harga= $request->harga;
      $obat->satuan= $request->satuan;
       $obat->stok= $request->stok;
        $obat->status= $request->status;
       $obat->ket= $request->ket;
       if($request -> file('gambar')){
          $file = $request->file('gambar')->store('avatar', 'public');
          $obat->gambar = $file;
         }
       if ($obat->save()){
         $data=obat::all();
         return view ('apoteker/obat')->with( 'data',$data);
       }

      }

    public function edit($id){
      $obat=obat::find($id);
      return view ('apoteker/editobat',['obat'=> $obat]);

    }
    public function update(Request $request,$id)
    {
      $obat = obat::findOrFail($id);
      $obat->nm_obat = $request->nm_obat;
      $obat->golongan= $request->golongan;
       $obat->harga= $request->harga;
      $obat->satuan= $request->satuan;
       $obat->stok= $request->stok;
        $obat->status= $request->status;
       $obat->ket= $request->ket;
       if($request->file('gambar')){
           if($obat->gambar && file_exists(storage_path('app/public/' .
          $obat->gambar))){
           \Storage::delete('public/' . $obat->gambar);
           }
           $new_image = $request->file('gambar')->store('avatar',
          'public');
           $obat->gambar = $new_image;
           }
       $obat->save();

         return redirect ('apoteker/obat')->with('sukses' ,'data has been updated');

    }
    public function delete ($id){
      $obat = obat::findOrFail($id);
      $obat->delete();
        return redirect ('apoteker/obat')->with( 'gagal','data has been deleted');
      }


    public function resepobat()
    {
      $visit=DB::table('visits')

      ->get();
      return view('apoteker/resepobat',['visit'=> $visit]);
    }
    public function resepobatdetail(Request $request,$id)
    {

      $visit=DB::table('visits')
                ->join('pasiens', 'pasiens.id', '=', 'visits.id_pasien')
                ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
                ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
                ->where ('visits.id', $id)
                ->get();


      $obat=DB::table('reseps')
              ->join('visits', 'visits.id', '=', 'reseps.visitor_id')
              ->join('obats', 'obats.id', '=', 'reseps.obat_id')
              ->where ('visits.id', $id)
                ->get();

        $dataobat=DB::table('obats')->get();
        $code = \DB::table('code')->where('code_id',1)->value('code');
      	if($code == '0'){
      		$code = Uuid::generate(4);
      	}

      return view('apoteker/detailresep',['visit'=> $visit,'obat'=> $obat,'dataobat'=> $dataobat,'code'=> $code]);
    }

public function findobat(Request $obat_id,$id)
{

  $pro = obat::find($id);
      $add = Cart::add(['id' => $pro->id, 'name' => $pro->nm_obat,
        'qty' => 1, 'price' => $pro->harga,'items' => $pro->satuan,
        'options' =>[
        'img' => $pro->gambar,
        'size' => $pro->ket,
        'item' => $pro->satuan,
        ]]);
       if($add){
         return view('apoteker/cart',[
           'data' => Cart::content()
         ]);
       }
}
public function cart(Request $request, $id)
{
  $cart=Cart::content();
  return view('apoteker.cart', [
        'data' => $cart]);

}

public function updatecart(Request $request){
   $qty = $request->newQty;
   $rowId = $request->rowID;
   // update cart
   Cart::update($rowId,$qty);
   echo "Cart updated successfully";
 }
 public function removeItem($rowId){
   Cart::remove($rowId);
   return back();
 }

 public function updatestatusobat(Request $request,$id)
 {

   $status_obat=$_POST['status_obat'];

   $visit= DB::table('visits')
              ->where('visits.id', $id)
             ->update([

               'status_obat'=> $status_obat,
             ]);

      return redirect('/apoteker/resepobat')->with('sukses','Status has been updated');
 }

function fetchobat(Request $request)
         {
          if($request->get('query'))
          {
           $query = $request->get('query');
           $data = DB::table('obats')
             ->where('nm_obat', 'like', "%{$query}%")
             ->get();
           $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
           foreach($data as $row)
           {
            $output .= '<li><a href="#">'.$row->nm_obat.'</a></li>';
           }
           $output .= '</ul>';
           echo $output;
          }
         }


}
