<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\pasien;
use App\dokter;
use App\visit;
use DB;
class VisitController extends Controller
{
    public function index()
    {
      $visit = DB::table('visits')

              ->get();
        return view('/frontoffice/datavisit', ['visit' => $visit ]);



    }

    public function create(Request $request){

          $visit = new visit();
          $visit->id_pasien = $request->get('id_pasien');
          $visit->id_dokter =$request->get('id_dokter');
          $visit->status =$request->get('status');
          $visit->status_obat =$request->get('status_obat');


          if($visit->save()){
                return redirect('/frontoffice/pasiendata')->with('sukses','Data has been saved');
          }
          else{
              return redirect('/frontoffice/visit')->with('alert', 'Gagal menambahkan data!');
          }

    }

    public function edit ($id)
    {
      $dokter = dokter::all();
      $visit = DB::table('visits')->find($id);
        return view ('frontoffice/visitedit',['visit'=> $visit, 'dokter'=> $dokter]);
    }

    public function update(Request $request,$id)
    {
    $id_pasien=$_POST['id_pasien'];
      $id_dokter=$_POST['id_dokter'];
      $status=$_POST['status'];
      $status_obat=$_POST['status_obat'];

      $visit= DB::table('visits')
                 ->where('id', $id)
                ->update([
                  'id_dokter'=> $id_dokter,
                  'id_pasien'=> $id_pasien,
                  'status'=> $status,
                  'status_obat'=> $status_obat,
                ]);

         return redirect('/frontoffice/datavisit')->with('sukses','data has been updated');
    }

    public function delete($id)
    {
      $visit=DB::table('visits')->delete($id);
  return redirect('/frontoffice/datavisit')->with('sukses','data has been deleted');
    }

    public function visitor1()
    {
      if(!session::get('login')){
          return redirect('/authDokter/login')->with('alert', 'You are not loged in!');
        }else{
          $visit = DB::table('visits')-> where('id_dokter',Session::get('id'));
          if($visit->count() > 0){
              $visit= $visit->get();

              return view('dokter/visitor', compact('visit'));
          }
        }

  }



    public function editstatus($id)
    {
      $visit = DB::table('visits')->find($id);
        return view ('dokter/editstatus',['visit'=> $visit]);
    }
    public function updatestatus(Request $request,$id)
    {

      $status=$_POST['status'];

      $visit= DB::table('visits')
                 ->where('visits.id', $id)
                ->update([

                  'status'=> $status,
                ]);

         return redirect('/dokter/visitor')->with('sukses','Status has been updated');
    }

    public function updatestatus_obat(Request $request,$id)
    {

      $status_obat=$_POST['status_obat'];

      $visit= DB::table('visits')
                 ->where('visits.id', $id)
                ->update([

                  'status_obat'=> $status_obat,
                ]);

         return redirect('/dokter/visitor')->with('sukses','Status has been updated');
    }

    public function getrecord(Request $request, $id)
    {
      $visit=DB::table('visits')
      ->join('pasiens', 'pasiens.id', '=', 'visits.id_pasien')
      ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
      ->where ('visits.id', $id)
      ->get();
      $visitor=DB::table('visits')->find($id);

      return view ('/dokter/record',['visit'=> $visit,'visitor'=>$visitor]);
    }
    public function getRx($id)
    {
      $visit=DB::table('visits')
      ->join('pasiens', 'pasiens.id', '=', 'visits.id_pasien')
      ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
      ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
      ->where ('visits.id', $id)
      ->get();
      $data=DB::table('visits')->find($id);
      $obat=DB::table('obats')->get();
      $resep=DB::table('reseps')
              ->join('visits', 'visits.id', '=', 'reseps.id_visitor')
              ->where ('visits.id', $id)
                ->get();
      return view ('/dokter/Rx',['visit'=> $visit, 'data'=>$data, 'resep'=>$resep,'obat'=>$obat]);
    }

}
