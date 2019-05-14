<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\resep;
use DB;
use DataTables;
use Validator;
use Response;
use Alert;
use Illuminate\Support\Facades\Input;
use App\http\Requests;

class ResepDokter extends Controller
{
 public function indexku($id){
   $visit=DB::table('visits')
   ->join('pasiens', 'pasiens.id', '=', 'visits.id_pasien')
   ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
   ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
   ->where ('visits.id', $id)
   ->get();
   $data=DB::table('visits')->find($id);
   $resep=DB::table('reseps')
           ->join('visits', 'visits.id', '=', 'reseps.visitor_id')
           ->where ('visits.id', $id)
             ->get();
              $obat=DB::table('obats')->get();
   return view ('/dokter/Rx1',['visit'=> $visit, 'data'=>$data, 'resep'=>$resep,'obat'=>$obat]);
 }

              public function deletePost(request $request,$id_resep){
              $post = DB::table('reseps')->where('id_obat',$id_resep)->delete();
              return response()->json();
              }

    public function addPost(Request $request,$id){
      $post = new resep;
       $post->visitor_id = $request->visitor_id;
       $post->obat_id= $request->obat_id;
        $post->dosis= $request->dosis;
        $post->konsumsi= $request->konsumsi;
        $post->jumlah= $request->jumlah;

     if($post->save()){
       $visit=DB::table('visits')
       ->join('pasiens', 'pasiens.id', '=', 'visits.id_pasien')
       ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
       ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
       ->where ('visits.id', $id)
       ->get();
       $data=DB::table('visits')->find($id);
       $resep=DB::table('reseps')
               ->join('visits', 'visits.id', '=', 'reseps.visitor_id')
               ->join('obats', 'obats.id', '=', 'reseps.obat_id')
               ->where ('visits.id', $id)
                 ->get();
                  $obat=DB::table('obats')->get();
                  return view ('/dokter/Rx1',['visit'=> $visit, 'data'=>$data, 'resep'=>$resep,'obat'=>$obat,'post'=>$post]);
}
}
public function delete(Request $request,$id){


$post= DB::table('reseps')
      ->join('obats','obats.id', '=', 'reseps.obat_id')
      ->where('reseps.obat_id', $id)
      ->delete();


      Alert::message('Welcome back!');

                   return redirect ('/dokter/visitor');

}

 function fetchobat(Request $request)
          {
           if($request->get('query'))
           {
            $query = $request->get('query');
            $data = DB::table('obats')
            ->select('id', 'nm_obat')
              ->where('nm_obat', 'like', "%{$query}%")
              ->get();
            $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
            foreach($data as $row)
            {
             $output .= '
             <li><a href="#">'.$row->nm_obat.'</a></li>
             ';
            }
            $output .= '</ul>';
            echo $output;
           }
          }

}
