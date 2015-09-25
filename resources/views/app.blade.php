<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>iConfess</title>

	  <link rel="stylesheet" href="{{ URL::asset('http://localhost/iConfess/resources/assets/css/bootstrap2.css') }}"/>
         <!-- FONTAWESOME STYLES-->
         <link rel="stylesheet" href="{{ URL::asset('http://localhost/iConfess/resources/assets/css/font-awesome.css') }}"/>
         <link rel="stylesheet" href="{{ URL::asset('http://localhost/iConfess/resources/assets/font-awesome/css/font-awesome.min.css') }}"/>
            <!-- CUSTOM STYLES-->
        <link rel="stylesheet" href="{{ URL::asset('http://localhost/iConfess/resources/assets/css/custom.css') }}"/>
        <link rel="stylesheet" href="{{ URL::asset('http://localhost/iConfess/resources/assets/css/custom-made.css') }}"/>
        <!-- Custom Fonts -->
        <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

        <!-- include the BotDetect layout stylesheet -->
  @if (class_exists('CaptchaUrls'))
    <link href="{{ CaptchaUrls::LayoutStylesheetUrl() }}" type="text/css" 
      rel="stylesheet">
  @endif
</head>
<body>

@if (Auth::guest())
	<nav class="navbar navbar-default navbar-custom">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/') }}">
					<img src="{{ URL::asset('http://localhost/iConfess/resources/assets/image/icon.png') }}" height="50px" weight="50px"></a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">
						<!-- <button type="submit" class="btn btn-primary">-->
						<li><a href="{{ url('/auth/login') }}"><font size="20px"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></font></a></li>
						<!-- <li><a href="{{ url('/auth/login') }}"><i class="glyphicon glyphicon-log-in" width="10%"></i>Log in</a></li>
						 --><!--
						<li><a href="{{ url('/auth/register') }}"><font color="#fff">Register</font></a></li> -->
				</ul>
			</div> 
		</div> 
	</nav>

	<nav>
		<div class="panel panel-defaults">
			<h1 padding-left="100px">Welcome to iConfess!</h1>
		</div>
	</nav>
@yield('guest')


@else
	<nav class="navbar navbar-default navbar-custom">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li><a href="{{ url('/home') }}"><span style="font-size:20px" class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
					<li><a href="{{ url('/confess') }}"><span style="font-size:20px" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Confess</a></li>
					<li><a href="{{ url('/chat') }}"><span style="font-size:20px" class="glyphicon glyphicon-comment" aria-hidden="true"></span> Chat</a></li>
					<li><a href="{{ url('/bookmark') }}"><span style="font-size:20px" class="glyphicon glyphicon-star" aria-hidden="true"></span> Bookmark</a></li>	
					
					<li><a href="{{ url('/') }}">
						<img class="imgs" src="{{ URL::asset('http://localhost/iConfess/resources/assets/image/icon.png') }}" height="40px" weight="50px">
					</a></li>
				</ul>

				<ul class="nav navbar-nav navbar-right">

						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/settings') }}">Settings</a></li>
								<li><a href="{{ url('/auth/logout') }}">Logout</a></li>
							</ul>
						</li>
				</ul>
			</div> 
		</div> 
	</nav>		

	<div class="container">
		 @if(Session::has('flash_message'))
 			<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
 		 @endif
	</div>


@yield('content')				

@endif



	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>