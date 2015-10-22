<div>
    @foreach($user as $posts)
		<center><img src="{{ asset($posts->user_image) }}" alt="D.P." width="150px"></center>
	@endforeach
</div>

<?php
	 $use = \Auth::user()->id;
     $count = \App\Confession::where('user_id','=', $use)->count();
     $follow = \App\Follower::where('user_id', '=', $use)->count();
     $follower = \App\Follower::where('follow_id','=', $use)->count();
?>

<div>
	<ul>

		<li style="padding-left: 10px">
			<a href="{{ url('/profile') }}">
				<span class="sideprofile-stats">Confessions</span><br>
				<span><b><?php echo $count ?></b></span>
			</a>
		</li>
		<li>
			<a href="{{ url('/search') }}">
				<span class="sideprofile-stats">Following</span><br>
				<span ><b><?php echo $follow ?></b></span>
			</a>
		</li>
		<li>
			<a>
				<span class="sideprofile-stats">Followers</span><br>
				<span><b><?php echo $follower ?></b></span>
			</a>
		</li>
	</ul>
</div>