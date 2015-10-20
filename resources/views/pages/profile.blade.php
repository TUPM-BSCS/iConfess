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

		<div class="popularconf col-md-2 hidden-xs hidden-sm">
	        @foreach($user as $posts)
				<img src="{{ asset($posts->user_image) }}" alt="D.P." height="150px" width="150px">
			@endforeach
		</div>
		<div>
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
	</div>

	<div class="col-md-8 ">
		<div class="confessions">
			@foreach($conf as $con)
			<div class="confessiondetails">
				<h3>{{ $con->con_title }}</h3>
				<p class=" conftags">
                    <span class="glyphicon glyphicon-tags"></span> SPG, School. LGBT, Beastmode
                </p>
				<div class="confcontent">
					{{ $con->con_body }}
				</div>
			</div>
			@endforeach
			
		</div>
				
		
	</div>

	

@endsection