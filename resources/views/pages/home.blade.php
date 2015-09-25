@extends('app')

@section('content')



<head>
	<script src="{{ URL::asset('http://localhost/iConfess/resources/assets/js/jquery.js') }}"/></script>
	<script>
		$(document).ready(function(){
		    $(".confessiondetails").click(function(){
		    	$(".confcontent").hide("fast");
		        $(this).closest("div").find(".confcontent").toggle("fast");
		    });
		    $(".lastconfession").click(function(){
		    	$(".confcontent").hide("fast");
		        $(this).closest("div").find(".confcontent").toggle("fast");
		    });
		});
	</script>
</head>
<body>
<div class="homecont container-fluid">

	<div class="sideprofile col-md-3 hidden-xs hidden-sm">
		<ul>
			<li style="padding-left: 10px">
				<a>
					<span class="sideprofile-stats">Confessions</span><br>
					<span><b>1</b></span>
				</a>
			</li>
			<li>
				<a>
					<span class="sideprofile-stats">Following</span><br>
					<span ><b>1</b></span>
				</a>
			</li>
			<li>
				<a>
					<span class="sideprofile-stats">Followers</span><br>
					<span><b>1</b></span>
				</a>
			</li>
		</ul>
	</div>

	<div class="col-md-5">
		<?php //insert retrieve codes for tags and put all in a dropdown menu ?>
		<div class="dropdown">
		  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
		    Select Tag:
		    <span class="caret"></span>
		  </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
		    <li><a href="#">Sparks</a></li>
		    <li><a href="#">LGBT</a></li>
		    <li><a href="#">SPG</a></li>
		    <li><a href="#">Friends</a></li>
		  </ul>
		</div>


		<?php //insert loop here to retrieve confessions: start ?>

		@foreach($articles as $article)
		<div class="confessions">
			<div class="confessiondetails">
				<h3>{{ $article->con_title }}</h3>
				<?php 
					$userID = $article->user_id;
					$userinfo = \App\User::where('id','=',$userID)->get();
					// $uname = DB::table('users')->select('name')->where('id','=', $article['user_id'])->get();
				// echo $userinfo;
				?>
				@foreach($userinfo as $fuck)
				<p class="confcodename">by {{ $fuck->name }}</p>
				@endforeach
				<div class="confcontent">
					{{ $article->con_body }}
				</div>
			</div>
			<!-- <div class="confessiondetails">
				<h3>#SampleConfession2</h3>
				<p class="confcodename">by CodeName</p>
				<div class="confcontent">
					Lorem Ipsum ng ina mong wala akong maisip para mapahaba tong kuking ng ama nitong confession na ito. Sana sapat na ito.
				</div>
			</div>

			<?php //RONA: yung last confession na napag-usapan natin, lagyan mo ng "lastconfession na tag" ?>
			<div class="lastconfession">
				<h3>#SampleConfession3</h3>
				<p class="confcodename">by CodeName</p>
				<div class="confcontent">
					Lorem Ipsum ng ina mong wala akong maisip para mapahaba tong kuking ng ama nitong confession na ito. Sana sapat na ito.
				</div>
			</div> -->
			@endforeach
			<?php //end ?>
		</div>
	</div>

	<div class="popularconf col-md-2 hidden-xs hidden-sm">
		<br>
		<br>
		<br>
	</div>
</div>


<!-- bookmarks na lang prob natin. HOORAYS-->


@endsection

