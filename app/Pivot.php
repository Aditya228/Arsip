<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Karyawan;

class Pivot extends Model
{
    //
    public function karyawans()
    {
    	return $this->belongsToMany('app\karyawan')
    	->withPivot('status_karyawan')
    	->withTimestamps();
    }
}
