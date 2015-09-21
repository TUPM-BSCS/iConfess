<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function index(){
        return view('auth.register');
    }

	public function home(){
		return view('pages.home');
    }
	
     

    // public function contact()
    // {
    // 	return view('pages.contact');
    // }
    
}
?>