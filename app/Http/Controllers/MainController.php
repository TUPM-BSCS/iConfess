<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Validator;
use Input;
use Illuminate\Database\Query\Builder;
use DB;
use Sentinel;
use Hash;

class MainController extends Controller
{

    public function index(){
        return view('auth.register');
    }

	   public function home(){
        $use = \Auth::user()->id;
        $user = \App\User::where('id','=',$use)->get();
        $articles = \App\Confession::latest('con_published')->published()->get();
        $count = \App\Confession::where('user_id','=', $use)->count();
		    return view('pages.home', compact('user','articles', 'count'));
    }

    public function sideprof(){
         $use = \Auth::user()->id;
         $count = \App\Confession::where('user_id','=', $use)->count();
         return view('pages.sideprof', compact('count'));
    }

    public function topconfess(){

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
      $rules = array('users' => 'required|mimes:jpeg,jpg,png|max:2000px'); //mimes:jpeg,bmp,png and for max size max:10000
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

     public function postSearch() {
            $search = '%'.Input::get('search').'%';

            $pages      = DB::table('users')
                            ->select('users.name', 'users.user_image')
                            ->where('name', 'LIKE', $search);

            // $blogitems  = DB::table('confessions')
            //                 ->select('confessions.con_id', 'confessions.con_title', 'confessions.con_tags', 'confessions.con_body')
            //                 ->where('con_title', 'LIKE', $search)
            //                 ->orWhere('con_tags', 'LIKE', $search)
            //                 ->orWhere('con_body', 'LIKE', $search);

            $results = $pages->get();

            // return view('pages.sresult', compact($search));
            return view('pages.sresult')->with('results', $results, $search);
    }

    public function friend(){
      return view('pages.friend');
    }

        public function getIndex()
        {
        $not_friends = \App\User::where('id', '!=', \Auth::user()->id);

        if (\Auth::user()->friends->count()) {
          $not_friends->whereNotIn('id', \Auth::user()->friends->modelKeys());
        }
          $not_friends = $not_friends->get();
          
        return view('pages.search')->with('not_friends', $not_friends);
      }

      public function getAddFriend()
      {
        $id = Request::get('id');
      $user = \App\User::find($id);
      \Auth::user()->addFriend($user);
      return redirect('search');
      }

      public function getRemoveFriend()
      {
      $id = Request::get('id');
      $user = \App\User::find($id);
      \Auth::user()->removeFriend($user);
      return redirect('search');
      }

      public function updatepass() {

          $use = \Auth::user()->id;
          $oldPassword = Input::get('old_password');
          $password = Input::get('password');
          $passwordConf = Input::get('password_confirmation');
          $crypt = Hash::make($passwordConf);

          if($password!=$passwordConf){
            \Session::flash('error_message', 'Passwords didnt match!');
            return redirect('settings');
          }
          else{
            \App\User::where('id', $use)->update(array('password'=>$crypt));
           \Session::flash('flash_message', 'You have successfully updated your password!');
            return redirect('settings');
          }

        
      }

}

?>