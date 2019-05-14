<?php

namespace App\Http\Controllers\AuthDokter;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request ;
use Illuminate\support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */



    public function __construct()
    {
        $this->middleware('guest:dokter')->except('logout');
    }

    public function showLoginForm()
    {
        return view('authDokter.login');
    }

    public function login (Request $request)
    {
      $this->validate($request,[
        'username'=>'required|username',
        'password'=>'required|password'
      ]);

      $credential = [
        'username'=>$request->username;
        'password'=>$request->password;

      ];

      if (Auth::guard('dokter')->attempt($credential, $request->member)){
             // If login succesful, then redirect to their intended location
             return redirect()->intended(route('dokter.index'));
         }

  return redirect()->back()->withInput($request->only('username', 'remember'));
   }

}
