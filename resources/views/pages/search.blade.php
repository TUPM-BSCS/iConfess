@extends('app')

@section('content')
  <div class="col-md-2 hidden-sm hidden-xs"></div>
  <div class="col-md-4 col-sm-12 col-xs-12" style="border: 1px #b2b2b2 solid; border-radius: 5px;">
    <h2 class="subheader">Following</h2>
    <form method="POST" action="{{ url('/search/removeFriend') }}">
             <input type="hidden" name="_token" value="{{ csrf_token() }}">
             <div>
              <label class="control-label" style="font-size: 11px;">Type User no. to Unfollow: </label>
              <input type="text" name="id">
               <button type="submit" class="btn btn-primary btn-sm">Unfollow</button>

              </div>
        </form>
    <div style="max-height: 500px; min-height: 500px; overflow-y: scroll;">
      <table class="table" style="width:100%;">
        <thead>
          <tr>
           
          </tr>
        </thead>
        <tbody>
          @foreach (Auth::user()->friends as $friend)
          <tr>
              <td width="20" style="padding: 1% 0% 1% 5%;">
                <center><img src="{{ asset($friend->user_image) }}" alt="D.P." width="125px"></center>
              </td>
              <td>
                Name: <a href="localhost:8888/friend"><b>{{ $friend->name }}</b></a>
                <br/><br/>
                User No: {{ $friend->id }}
              </td>          
          </tr>
              @endforeach

          
        <br>
          
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-1 hidden-sm hidden-xs"></div>
  <div class="col-md-4 col-sm-12 col-xs-12" style="border: 1px #b2b2b2 solid; border-radius: 5px;">
    <h2 class="subheader">Other People</h2>
    <form method="POST" action="{{ url('/search/addFriend') }}">
           <input type="hidden" name="_token" value="{{ csrf_token() }}">
           <div>
            <label class="control-label" style="font-size: 11px;">Type User no. to Follow: </label>
            <input type="text" name="id">
           <button type="submit" class="btn btn-primary btn-sm">Follow</button>
          </div>
    </form>
    <div style="max-height: 500px; min-height: 500px; overflow-y: scroll;">
    <table class="table" style="width:100%;">
      <tbody>
        @foreach ($not_friends as $friend)
        <tr>
          <td width="20" style="padding: 1% 0% 1% 5%;">
            <center><img src="{{ asset($friend->user_image) }}" alt="D.P."width="100px"></center>
          </td>
          <td>
            Name: <a href="localhost:8888/friend"><b>{{ $friend->name }}</b></a>
            <br/><br/>
            User No: {{ $friend->id }}
          </td>
          
        </tr>
        <!-- <tr>
            <td></td>
            <td><img src="{{ asset($friend->user_image) }}" alt="D.P." height="150px" width="150px"></td>
            <td>{{ $friend->id }}</td>
            

        </tr> -->
        @endforeach
          
  		  
        <br>
      </tbody>
    </table>
    </div>
  </div>
@stop

<?php
//  echo link_to_action('MainController@getRemoveFriend', 'Remove friend', array('id' => $friend->id));
// echo link_to_action('MainController@getRemoveFriend', 'Remove friend', array('id' => $friend->id));
 ?>