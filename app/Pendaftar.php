<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pendaftar extends Model
{
    public function getAllPendaftar(){
    	
    	$data = DB::table('crayonugm.pendaftar')
		    ->where([
			    ['nama', '<>', ''],
			    ['telepon', '<>', ''],
		    ])
		    ->orderBy('nama', 'asc')
		    ->get();
	    return $data;
    }
}
