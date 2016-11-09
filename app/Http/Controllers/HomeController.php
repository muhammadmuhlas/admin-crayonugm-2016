<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pendaftar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$pendaftar = new Pendaftar();
	    $data_pendaftar = $pendaftar->getAllPendaftar();
        return view('home', ['data_pendaftar' => $data_pendaftar]);
    }
    
    public function activateBayar($id){
    	
    	$pendaftar = new Pendaftar();
	    $pendaftar->activateBayar($id);
    	
    }
    
	public function deactivateBayar($id){
		
		$pendaftar = new Pendaftar();
		$pendaftar->deactivateBayar($id);
		
	}
}
