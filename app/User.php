<?php

namespace App;

use Request;

use App\Http\Requests;
use Input;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function articles()
    {
        return $this->hasMany('App\Confession');
    }

    public function post(){


        $file = array('users' => Request::all());
      // setting up rules
      $rules = array('users' => 'required','mimes' => 'jpeg,jpg,png', 'max' => '200px'); //mimes:jpeg,bmp,png and for max size max:10000
      // doing the validation, passing post data, rules and the messages
      $validator = Validator::make($file, $rules);
      if ($validator->fails()) {
        // send back to the page with the input data and errors
        return redirect('settings')->withInput()->withErrors($validator);
      }
      else {
        // checking file is valid.
        if (Input::file('user_image')->isValid()) {
          $extension = Input::file('user_image')->getClientOriginalExtension(); // getting image extension
          $fileName = rand(11111,99999).'.'.$extension; // renaming image
          Input::file('user_image')->move('uploads/', $fileName); // uploading file to given path
          $file->user_image = $fileName;
          \Auth::user()->post->save();
          // sending back with message
          \Session::flash('flash_message', 'You have successfully updated your codename!');
          return redirect('settings');
        }
        else {
          // sending back with error message.
          \Session::flash('error', 'uploaded file is not valid');
          return redirect('home');
        }
      }
    }

    public function friends()
    {
      return $this->belongsToMany('App\User', 'followers', 'user_id', 'follow_id');
    }

    public function addFriend(User $user)
    {
      $this->friends()->attach($user->id);
    }

    public function removeFriend(User $user)
    {
      $this->friends()->detach($user->id);
    }

}


