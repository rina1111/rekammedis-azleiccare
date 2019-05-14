<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\medical;
use DB;
use data;
class RekammedisController extends Controller
{
  public function create(Request $request){

        $medis = new medical();
        $medis->id_visitor = $request->get('id_visitor');
        $medis->keluhan =$request->get('keluhan');
        $medis->diagnosa =$request->get('diagnosa');
        $medis->saran =$request->get('saran');
        $medis->fee =$request->get('fee');
        if($medis->save()){
              return redirect('/dokter/visitor')->with('sukses','Data has been saved');
        }
        else{
            return redirect('/dokter/record')->with('alert', 'Gagal menambahkan data!');
        }
  }
  public function edit ($id)
  {
    $visit = DB::table('visits')->find($id);
    $visit=DB::table('visits')
    ->join('pasiens', 'pasiens.id', '=', 'visits.id_pasien')
    ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
    ->where ('visits.id', $id)
    ->get();
    $medis=DB::table('visits')
              ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
              ->where ('visits.id', $id)
              ->get();
      return view ('dokter/editrecord',['medis'=> $medis,'visit'=>$visit]);
  }

  public function riwayat($id){
    $riwayat=DB::table('visits')
              ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
              ->where ('visits.id', $id)
              ->get();
    $visit=DB::table('visits')
              ->join('pasiens', 'pasiens.id', '=', 'visits.id_pasien')
              ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
              ->where ('visits.id', $id)
              ->get();
                return view ('dokter/history',['riwayat'=> $riwayat,'visit'=>$visit]);
  }

  public function update(Request $request, $id)
          {
              $visit = DB::table('visits')->find($id);
        $id_visitor=$_POST['id_visitor'];
          $keluhan=$_POST['keluhan'];
              $diagnosa=$_POST['diagnosa'];
                  $saran=$_POST['saran'];
                      $fee=$_POST['fee'];


          $medis= DB::table('medicals')
           ->where('medicals.id', $id)
                    ->update([
                      'id_visitor'=> $id_visitor,
                      'keluhan'=>$keluhan,
                      'diagnosa'=>$diagnosa,
                      'saran'=>$saran,
                      'fee'=>$fee,
                    ]);


             return redirect('/dokter/visitor')->with('sukses','data has been updated');
          }

          public function delete($id)
                  {
                      $visit = DB::table('visits')->find($id);


                  $medis= DB::table('medicals')
                          ->join('visits','visits.id', '=', 'medicals.id_visitor')
                          ->where('medicals.id_visitor', $id)
                          ->delete();

                     return redirect('/dokter/visitor')->with('sukses','data has been deleted');
                  }
          function fetch(Request $request)
                   {
                    if($request->get('query'))
                    {
                     $query = $request->get('query');
                     $data = DB::table('diagnosas')
                       ->where('diagnosa', 'like', "%{$query}%")
                       ->get();
                     $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
                     foreach($data as $row)
                     {
                      $output .= '
                      <li><a href="#">'.$row->diagnosa.'</a></li>
                      ';
                     }
                     $output .= '</ul>';
                     echo $output;
                    }
                   }


            public function showfetch()
            {
              return view ('dokter/fetch');
            }
}
