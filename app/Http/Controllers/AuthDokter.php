<?php

namespace App\Http\Controllers;
use App\dokter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthDokter extends Controller
{
    public function auth(){
      return view('authDokter/login');
  }
  public function index(){
      if(!session::get('login')){
          return redirect('home')->with('alert', 'You are not loged in!');
      }
      else{
          $data = array(
              'title' => "Dashboard | Temuin",
          );
          return view('dokter/index')->with($data);
      }
  }

public function welcome(){
  return view('welcome');
}
  public function login(Request $request){
        $username = $request->username;
        $password = $request->password;

        $data = dokter::where('username', $username);
        if(count($data->get()) > 0){
            $data = $data->first();
            if(Hash::check($password, $data->password)){
                Session::put('id', $data->id);
                Session::put('name_dokter', $data->name_dokter);
                Session::put('nip', $data->nip);
                Session::put('specialist', $data->specialist);
                Session::put('status_dokter', $data->status_dokter);
                Session::put('username', $data->username);
                Session::put('avatar', $data->avatar);
                Session::put('login', TRUE);
                return redirect('/dokter/index');
            }
            else{
                return redirect('authDokter/login')->with('alert', 'Password salah!');
            }
        }
        else{
            return redirect('authDokter/login')->with('alert', 'Username salah!');
        }
    }
    public function logout(){
          Session::flush();
          return redirect('authDokter/login')->with('alert', 'Berhasil Logout.');
      }

    public function data(){
      if(!session::get('login')){
          return redirect('/authDokter/login')->with('alert', 'You are not loged in!');
      }
      else{

          $data = dokter::where('id', Session::get('id'))->first();

          if($data != null){

              return view('dokter/index', compact('data'));
          }

          }
    }
}
