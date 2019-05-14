<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pasien;
use App\dokter;
use App\schedule;
use Illuminate\Support\Facades\Session;
use DB;
class FrontofficeController extends Controller
{
  public function index(){


          return view('frontoffice/pendaftaranpasien');
      }


  public function create(Request $request){

    \App\pasien::create($request->all());
    return redirect('/frontoffice/pasiendata')->with('sukses','Data has been saved');
}

  public function pasien_data(Request $request){

    $pasien=pasien::all();
      return view ('frontoffice/pasiendata', compact('pasien'));

  }
  public function edit($id)
  {

    $pasien= \App\pasien::find($id);
    return view ('frontoffice/editpasien',['pasien'=> $pasien]);
  }

  public function update(Request $request,$id)
  {

    $pasien= \App\pasien::find($id);
    $pasien->update($request->all());
    return redirect('frontoffice/pasiendata')->with('sukses','Data has been updated');
}


  public function delete($id)
  {

  $pasien= \App\pasien::find($id);
  $pasien->delete();
  return redirect('frontoffice/pasiendata')->with('sukses','Data has been deleted');
}

  public function read($id)
  {

    $dokter = dokter::all();
    $pasien = pasien::find($id);

      return view ('frontoffice/visit',['pasien'=> $pasien, 'dokter'=> $dokter]);

}
  public function history($id){

    $riwayat=DB::table('visits')
              ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
              ->where ('visits.id', $id)
              ->get();
    $visit=DB::table('pasiens')
              ->join('visits', 'visits.id', '=', 'visits.id_pasien')
              ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
              ->where ('visits.id', $id)
              ->get();
                return view ('frontoffice/Detailhistory',['riwayat'=> $riwayat,'visit'=>$visit]);

}
  public function historypatient($id){

    $visit=DB::table('pasiens')
              ->leftjoin('visits', 'pasiens.id', '=', 'visits.id_pasien')
              ->leftjoin('medicals','visits.id', '=', 'medicals.id_visitor')
              ->join('dokters', 'dokters.id', '=', 'visits.id_dokter')
              ->orderBy('visits.id','desc')
              ->where ('pasiens.id', $id)
              ->get();
                return view ('frontoffice/Patienthistory',['visit'=>$visit]);

}
}
