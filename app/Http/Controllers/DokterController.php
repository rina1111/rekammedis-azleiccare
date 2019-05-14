<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use DB;
use App\dokter;
use App\schedule;
class DokterController extends Controller
{


  public function index(){
    $dokter=dokter::all();
      return view ('admin.doctors_data', compact('dokter'));
  }


      public function create(Request $request){

      $data = new \App\dokter();
      $data->nip = $request->get('nip');
      $data->name_dokter = $request->get('name_dokter');
      $data->specialist = $request->get('specialist');
      $data->address = $request->get('address');
      $data->hp = $request->get('hp');
       $data->status_dokter = $request->get('status_dokter');
      $data->username = $request->get('username');
      $data->password = Hash::make($request->get('password'));
      if($request -> file('avatar')){
         $file = $request->file('avatar')->store('avatar', 'public');
         $data->avatar = $file;
        }
        $data->save();
       return redirect('/admin/doctors_data')->with('sukses','data has been saved');
    }

    public function edit($id)
        {
        $data= \App\dokter::find($id);
        return view ('/admin/edit_dokter',['data'=> $data]);
        }

    public function update(Request $request, $id)
        {
         $data = \App\dokter::findOrFail($id);
         $data->nip = $request->get('nip');
         $data->name_dokter = $request->get('name_dokter');
         $data->specialist = $request->get('specialist');
         $data->address = $request->get('address');
         $data->hp = $request->get('hp');
          $data->status_dokter = $request->get('status_dokter');
         $data->username = $request->get('username');
        $data->password = Hash::make($request->get('password'));

         if($data->avatar && file_exists(storage_path('app/public/' . $data->avatar)))
         {
           \Storage::delete('public/'.$data->avatar);
         }
         if($request -> file('avatar')){
            $file = $request->file('avatar')->store('avatar', 'public');
            $data->avatar = $file;

         }
         $data->save();
         return redirect('/admin/doctors_data')->with('sukses','data has been updated');
        }
    public function delete($id)
        {
      	$data= \App\dokter::find($id);
        $data->delete();
        return redirect('/admin/doctors_data')->with('sukses','data has been deleted');

        }

    public function view($id)
        {
        $data= \App\dokter::find($id);
        return view('/admin/add_schedule',['data'=> $data]);
        }

    public function addschedule(Request $request, $id)
        {
        $schedule = new \App\schedule();
        $schedule->id_dokter = $request->get('id_dokter');
        $schedule->monday = $request->get('monday');
        $schedule->tuesday = $request->get('tuesday');
        $schedule->wednesday = $request->get('wednesday');
        $schedule->thursday = $request->get('thursday');
        $schedule->friday = $request->get('friday');
        $schedule->saturday = $request->get('saturday');


          $schedule->save();

         return redirect('/admin/jadwal')->with('sukses','data has been saved');
      }
      public function dataschedule()
              {
                $schedule = DB::table('schedules')
            					->get();
               	return view('/admin/jadwal', ['schedule' => $schedule ]);

              }

      public function editjadwal($id)
          {
          $schedule= DB::table('schedules')->find($id);
          return view('admin/editjadwal' , ['schedule' => $schedule]);
          }


    public function deletejadwal($id)
        {
        $schedule= DB::table('schedules')->delete($id);
        return redirect('/admin/jadwal')->with('sukses','data has been deleted');
        }

    public function updatejadwal(Request $request, $id)
            {
          $id_dokter=$_POST['id_dokter'];
            $monday=$_POST['monday'];
                $tuesday=$_POST['tuesday'];
                    $wednesday=$_POST['wednesday'];
                        $thursday=$_POST['thursday'];
                            $friday=$_POST['friday'];
                                $saturday=$_POST['saturday'];

            $schedule= DB::table('schedules')
                       ->where('id', $id)
                      ->update([
                        'id_dokter'=> $id_dokter,
                        'monday'=>$monday,
                        'tuesday'=>$tuesday,
                        'wednesday'=>$wednesday,
                        'friday'=>$friday,
                        'saturday'=>$saturday,
                      ]);

               return redirect('/admin/jadwal')->with('sukses','data has been updated');
            }

            public function detailjadwal($id)
            {

              $jadwal_dokter = DB::table('schedules')
  					->join('dokters', 'dokters.id', '=', 'schedules.id_dokter')
            ->where ('schedules.id', $id)
  					->get();
     	        return view('/admin/detailjadwal', ['jadwal_dokter' => $jadwal_dokter ]);
            }

          public function caridokter(Request $request)
          {
            $caridokter=$request->caridokter;
            $dokter=DB::table('dokters')
            ->where('dokters.name_dokter','like','%'.$caridokter.'%')
            ->get();
            return view('admin/doctors_data',['dokter' => $dokter]);

          }

          public function detailjadwal2($id)
          {

          $jadwal_dokter = DB::table('dokters')
          ->leftJoin('schedules', 'dokters.id', '=', 'schedules.id_dokter')
          ->where ('dokters.id', $id)
        	->get();
              return view('/admin/detailjadwal', ['jadwal_dokter' => $jadwal_dokter ]);
          }

          public function schedule_show()
          {
            $jadwal_dokter = DB::table('schedules')
                  ->join('dokters', 'dokters.id', '=', 'schedules.id_dokter')
                  ->get();
            return view('/frontoffice/doctorschedule', ['jadwal_dokter' => $jadwal_dokter ]);
          }



          public function updatestatus(Request $request,$id)
          {

            $status_dokter=$_POST['status_dokter'];

            $visit= DB::table('dokters')
                       ->where('dokters.id', $id)
                      ->update([

                        'status_dokter'=> $status_dokter,
                      ]);

               return redirect('/dokter/index')->with('sukses','Status has been updated');
          }
public function doctor(){
  $dokter=dokter::all();
  return view ('frontoffice/doctor', compact('dokter'));
}



}
