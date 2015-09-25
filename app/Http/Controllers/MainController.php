<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Database\Query\Builder;

class MainController extends Controller
{

    public function index(){
        return view('auth.register');
    }

	public function home(){
        $articles = \App\Confession::latest('con_published')->published()->get();
		return view('pages.home', compact('articles'));
    }

    public function confess(){
        return view('pages.confess');
    }

    public function chat(){
        return view('pages.chat');
    }

    public function profile(){
        return view('pages.profile');
    }
	
    public function settings(){
        $use = \Auth::user()->id;
        $user = \App\User::where('id','=',$use)->get();
        return view('pages.settings', compact('user'));
    }

    public function store(){
        $article = new \App\Confession(Request::all());
        \Auth::user()->articles()->save($article);
        \Session::flash('flash_message', 'Your confession has been created!');
        return redirect('confess');
        
    }

    // public function contact()
    // {
    // 	return view('pages.contact');
    // }
    
}
?>