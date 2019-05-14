<?php

namespace App\Http\Controllers;
use DB;
use DataTables;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\obat;
class ObatController extends Controller
{
  public function index_apoteker()
  {
    return view('apoteker/index');
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
      $visit=DB::table('pasiens')
        ->leftjoin('visits', 'pasiens.id', '=', 'visits.id_pasien')
      ->get();
      return view('apoteker/resepobat',['visit'=> $visit]);
    }
    public function resepobatdetail(Request $request,$id)
    {

      $visit=DB::table('pasiens')
      ->leftjoin('visits', 'pasiens.id', '=', 'visits.id_pasien')
      ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
      ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
      ->where ('visits.id', $id)
      ->get();
      $obat=DB::table('reseps')
              ->join('visits', 'visits.id', '=', 'reseps.visitor_id')
              ->join('obats', 'obats.id', '=', 'reseps.obat_id')
              ->where ('visits.id', $id)
                ->get();
        $dataobat=DB::table('obats')->get();
        $masterobat = DB:: table('obats')->where('id', $request->get('obats'))->first();
              $data =  new Transaksi();


              if($vMasterProduk->id_jenis_produk == "1"){
                  $data->id_user = Session::get('id');
                  $data->uid_produk = $request->get('produk');
                  $data->harga_transaksi = $vMasterProduk->harga_produk;
                  $data->diskon_transaksi = $vMasterProduk->diskon;
                  $data->total_transaksi = $total;
                  $data->status_transaksi = "0";
                  $data->image_transaksi = "#";

                  if($data->save()){
                      return redirect('/user/transaksi')->with('alert-success', 'Berhasil menambahkan Transaksi!');
                  }
      return view('apoteker/detailresep',['visit'=> $visit,'obat'=> $obat,'dataobat'=> $dataobat,'order'=> $order]);
    }
public function findobat(Request $request,$id)
{
  $visit=DB::table('reseps')
  ->leftjoin('visits', 'reseps.visitor_id', '=', 'visits.id')
  ->leftjoin('obats','reseps.obat_id', '=', 'obats.id')
  ->where ('obats.id', $id)
  ->get();
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

 public function hargaobat(Request $request)
{
  $data=DB::table('obats')->select('harga')->where('id',$request->id)->first();
  return response()->json($data);
}

}
