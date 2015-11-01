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

	<div class="sideprofile col-md-3 col-xs-11 col-sm-11">
		@include('pages/sideprofile')
	</div>

	<div class="col-md-8 col-xs-11 col-sm-11">
		<div class="confessions">
			@foreach($conf as $con)
			<div class="confessiondetails">
				<h3>{{ $con->con_title }}</h3>
				<p class=" conftags">
                    <span class="glyphicon glyphicon-tags"></span> {{ $con->con_tags }}
                </p>
				<div class="confcontent">
					{{ $con->con_body }}
				</div>
			</div>
			@endforeach
			
		</div>
				
		
	</div>

	

@endsection