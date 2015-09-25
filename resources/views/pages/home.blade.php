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
		<div class="confessions">
			@foreach($articles as $article)
			<div class="confessiondetails">
				<h3>{{ $article->con_title }}</h3>
				<?php 
					$userID = $article->user_id;
					$userinfo = \App\User::where('id','=',$userID)->get();
				?>
				@foreach($userinfo as $fuck)
				<p class="confcodename">by {{ $fuck->name }}</p>
				@endforeach
                <p class=" conftags">
                    <span class="glyphicon glyphicon-tags"></span> SPG, School. LGBT, Beastmode
                </p>
				<div class="confcontent">
					{{ $article->con_body }}
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="popularconf col-md-2 hidden-xs hidden-sm">
        <h5>Top Confessors</h5>
		<br>
		<br>
		<br>
	</div>
</div>


<!-- bookmarks na lang prob natin. HOORAYS-->


@endsection

