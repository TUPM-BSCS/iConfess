@extends('app')

@section('content')



<head>
	<script src="{{ URL::asset('jquery.js') }}"/></script>
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
		@include('pages/sideprofile')
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
                    <span class="glyphicon glyphicon-tags"></span> {{ $article->con_tags}}
                </p>
				<div class="confcontent" >
					{{ $article->con_body }}
				</div>
			</div>
			@endforeach
		</div>
	</div>

	<div class="popularconf col-md-2 hidden-xs hidden-sm">
        @include('pages/popularconf')
	</div>
</div>


@endsection