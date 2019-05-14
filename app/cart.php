<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
  
    $id_obat= $id;
    if(isset($_SESSION['keranjang'][$id_obat])){
    $_SESSION['keranjang'][$id_obat]+=1;

    }
    else
    {
    $_SESSION['keranjang'][$id_obat]=1;
  }
}
