<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table='admins';
    protected $fillable=['name_admin','username_admin','pass','address_admin','hp_admin','level_admin'];
}
