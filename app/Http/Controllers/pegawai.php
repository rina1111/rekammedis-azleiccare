<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\resepsionis;
use App\admin;
use Alert;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
class pegawai extends Controller
{

  public function store(Request $request)
  {

      $data =  new resepsionis();
      $data->name_front= $request->get('name_front');
      $data->username_front = $request->get('username_front');
      $data->password = Hash::make($request->get('password'));
      $data->address_front = $request->get('address_front');
      $data->hp_front = $request->get('hp_front');
      $data->level = $request->get('level');
      if($data->save()){
          return redirect('admin/index')->with('success', 'Data Receptionist Has Been Saved!');
      }
      else{
          return redirect('admin/index')->with('error', 'Failed to add data!');
      }
  }

public function deletefront($id)
{
  $resepsionis= \App\resepsionis::find($id);
  $resepsionis->delete();
  return redirect('admin/index')->with('sukses','data has been deleted');
}
public function storeadmin(Request $request)
{

    $data =  new admin();
    $data->name_admin= $request->get('name_admin');
    $data->username_admin = $request->get('username_admin');
    $data->pass = Hash::make($request->get('pass'));
    $data->address_admin = $request->get('address_admin');
    $data->hp_admin = $request->get('hp_admin');
    $data->level_admin = $request->get('level_admin');
    if($data->save()){
        return redirect('admin/index')->with('success', 'Data Admin Has Been Saved!');
    }
    else{
        return redirect('admin/index')->with('error', 'Failed to add data!');
    }
}
public function createuser(Request $request)
{

    $data =  new User();
    $data->name= $request->get('name');
    $data->username = $request->get('username');
    $data->password = Hash::make($request->get('password'));
    $data->email = $request->get('email');
    $data->level = $request->get('level');
    if($data->save()){
        return redirect('/home')->with('success', 'Data Has Been Saved!');
    }
    else{
        return redirect('admin/index')->with('error', 'Failed to add data!');
    }
}


}
