<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
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
    
    public function activateBayar($id){
	    
    	DB::table('crayonugm.pendaftar')
		    ->where('id', $id)
		    ->update([
		        'bayar' => 'Y'
		    ]);
    }
	
	public function deacivateBayar($id){
		
		DB::table('crayonugm.pendaftar')
			->where('id', $id)
			->update([
				'bayar' => 'N'
			]);
	}
}
