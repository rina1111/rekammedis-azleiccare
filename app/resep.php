<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resep extends Model
{
    protected $table='reseps';
    protected $fillable=['visitor_id','obat_id','dosis','konsumsi','jumlah'];
}
