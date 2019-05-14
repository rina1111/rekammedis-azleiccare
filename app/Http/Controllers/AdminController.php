<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\resepsionis;
use App\admin;
use DB;
use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
  public function auth(){
    return view('authadmin/login');
}
public function index(){
    if(!session::get('login_admin')){
        return redirect('authadmin/login')->with('alert', 'You are not loged in!');
    }
    else{
        $data = array(
            'title' => "Dashboard | Temuin",
        );
        return view('admin/index')->with($data);
    }
}
public function deleteuser($id)
{
$data=DB::table('users')->find($id)->delete();
return redirect('/home');
}
public function datapasien()
{
  $data=DB::table('pasiens')->get();
  return view ('admin/patientreport',['data'=>$data]);
}
public function dataobat()
{
  $data=DB::table('obats')->get();
  return view ('admin/drugreport',['data'=>$data]);
}
public function datatransaksi(){
    $data= DB::table('sale')
    ->join('obats','obats.id','=','sale.barang_id')->get();

      return view('admin/salesreport',compact('data'));
    }


public function login(Request $request){
      $username_admin = $request->username_admin;
      $password = $request->password;

      $data = admin::where('username_admin', $username_admin);
      if(count($data->get()) > 0){
          $data = $data->first();
          if(Hash::check($password, $data->password)){
              Session::put('id', $data->id);
              Session::put('name_admin', $data->name_dokter);
              Session::put('username_admin', $data->username_admin);
              Session::put('address_admin', $data->address_admin);
              Session::put('hp_admin', $data->hp_admin);
              Session::put('level_admin', $data->level_admin);
              Session::put('login_admin', TRUE);
              return redirect('/admin/index');
          }
          else{
              return redirect('authadmin/login')->with('alert', 'Password salah!');
          }
      }
      else{
          return redirect('authadmin/login')->with('alert', 'Username salah!');
      }
  }
  public function logout(){
        Session::flush();
        return redirect('authadmin/login')->with('alert', 'Berhasil Logout.');
    }

  public function data(){
    if(!session::get('login_admin')){
        return redirect('authadmin/login')->with('alert', 'You are not loged in!');
    }
    else{

        $data = admin::where('id', Session::get('id'))->first();

        if($data != null){

            return view('admin/index', compact('data'));
        }

        }
  }




}
