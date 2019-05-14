<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function master()
     {
       return view('/master');
     }
    public function index()
    {
      if (auth()->check()&&  Auth::user()->level == 'admin')
      {
        $login='Admin';
        return view('admin.index')->with('login');
      }
      elseif (auth()->check()&& Auth::user()->level == 'apoteker')
      {
        $login='Apoteker';
        return view('apoteker.index')->with('login');
      }
      elseif (auth()->check()&& Auth::user()->level == 'frontoffice')
      {
        $login='Front Office';
        return view('frontoffice.index')->with('login');
      }

      else{
        echo "halaman tidak ada";
      }

    }


}
