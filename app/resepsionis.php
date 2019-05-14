<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resepsionis extends Model
{
    protected $table='resepsionis';
    protected $fillabe=['name_front', 'username_front','address_front','hp_front','password_front'];  
}
