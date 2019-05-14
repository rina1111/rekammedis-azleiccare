<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class schedule extends Model
{
    protected $table = 'schedules';
    protected $fillable = ['id_dokter','monday','tuesday','wednesday','thursday','friday','saturday'];
    public $primarykey ='id';

    use SoftDeletes;
    public function dokters () {
	 return $this->belongsToMany('App\dokter');
	}
}
