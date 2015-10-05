<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Validator;
use Input;
use Illuminate\Database\Query\Builder;

class MainController extends Controller
{

    public function index(){
        return view('auth.register');
    }

	public function home(){
        $use = \Auth::user()->id;
        $user = \App\User::where('id','=',$use)->get();
        $articles = \App\Confession::latest('con_published')->published()->get();
		return view('pages.home', compact('user','articles'));
    }

    public function confess(){
        $use = \Auth::user()->id;
        $user = \App\User::where('id','=',$use)->get();
        return view('pages.confess', compact('user'));
    }

    public function chat(){
        return view('pages.chat');
    }

    public function profile(){
        $use = \Auth::user()->id;
        $conf = \App\Confession::where('user_id','=',$use)->get();
        $user = \App\User::where('id','=',$use)->get();
        return view('pages.profile', compact('user','conf'));
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

    public function changename(){
        $use = \Auth::user()->id;
        $upname = Request::get('name');
        \App\User::where('id', $use)->update(array('name'=>$upname));
        \Session::flash('flash_message', 'You have successfully updated your codename!');
        return redirect('settings');

    }

   public function upload(){
         $use = \Auth::user()->id;
        // getting all of the post data
      $file = array('users' => Input::file('user_image'));
      $post = new \App\User();
        // $file = array('users' => Request::all());
      // setting up rules
      $rules = array('users' => 'required|mimes:jpeg,jpg,png|max:200px'); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
          \Session::flash('error_message', 'You are trying to upload an invalid image file!');
          return redirect('settings');
      }
      else {
        // checking file is valid.
        if (Input::file('user_image')->isValid()) {
          $extension = Input::file('user_image')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renaming image
          $path = Input::file('user_image')->move('uploads/', $fileName); // uploading file to given path
          $file['user_image'] = $fileName;
          // $post->update(['user_image']);
          \App\User::where('id', $use)->update(array('user_image'=>$path));
          // \Auth::user()->post()->save($file);
          // sending back with message
          \Session::flash('flash_message', 'You have successfully updated your picture!');
          return redirect('settings');
        }
        else {
          // sending back with error message.
          \Session::flash('error_message', 'invalid');
          return redirect('home');
        }
      }
    }

}
?>