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

	<div class="col-md-8 ">
		<div class="confessions">
			
			<div class="confessiondetails">
				<h6>Profile Page is under construction. All your details will be uploaded here soon. </h6>
			</div>
			
		</div>
				
		
	</div>

	

@endsection