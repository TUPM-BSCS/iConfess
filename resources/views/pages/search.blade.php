@extends('app')

@section('content')

  <h2 class="subheader">Friends</h2>
  <table style="width:100%;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach (Auth::user()->friends as $friend)
      <tr>
          <td>{{ $friend->name }}</td>
          <td>{{ $friend->email }}</td>
          <td>{{ $friend->id }}</td>
          
      </tr>
      <form method="POST" action="{{ url('/search/removeFriend') }}">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div>
         	<input type="text" name="id">
			<button type="submit" class="btn btn-primary btn-sm">Unfollow</button>
		</div>
		</form>

      @endforeach
    </tbody>
  </table>

  <h2 class="subheader">Other People</h2>
  <table style="width:100%;">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($not_friends as $friend)
      <tr>
          <td>{{ $friend->name }}</td>
          <td>{{ $friend->email }}</td>
          <td>{{ $friend->id }}</td>

      </tr>
        <form method="POST" action="{{ url('/search/addFriend') }}">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div>
         	<input type="text" name="id">
			<button type="submit" class="btn btn-primary btn-sm">Follow</button>
		</div>
		</form>
      @endforeach
    </tbody>
  </table>

@stop

<?php
//  echo link_to_action('MainController@getRemoveFriend', 'Remove friend', array('id' => $friend->id));
// echo link_to_action('MainController@getRemoveFriend', 'Remove friend', array('id' => $friend->id));
 ?>