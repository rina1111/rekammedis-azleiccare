<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adduser(Request $request)
    {
      \App\User::create($request->all());
      return redirect('/admin')->with('sukses','Data telah tersimpan');

    }

    public function master()
    {
      return view('/master');
    }

}
