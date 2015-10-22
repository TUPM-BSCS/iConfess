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
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a href="{{ url('/') }}">
					<img class="imgs" src="{{ URL::asset('http://localhost/iConfess/resources/assets/image/icon.png') }}" height="40px" weight="50px" style="margin-top: 5px;">
				</a>
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
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        	<span class="sr-only">Toggle navigation</span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
        	<span class="icon-bar"></span>
      	</button>
      	<a href="{{ url('/') }}">
			<img class="imgs" src="{{ URL::asset('http://localhost/iConfess/resources/assets/image/icon.png') }}" height="40px" weight="50px" style="margin-top: 5px;">
		</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      	<ul class="nav navbar-nav">
        	<li style="margin: 0px;"><a href="{{ url('/home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
    			<li style="margin: 0px;"><a href="{{ url('/confess') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Confess</a></li>
    			<li style="margin: 0px;"><a href="{{ url('/profile') }}"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> My Profile</a></li>
      	</ul>
      <form class="navbar-form navbar-left" method="POST" action="{{ url('/results') }}">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
          <input type="text" class="form-control" name="search" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown" style="margin: 0px;">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }}<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ url('/settings') }}"><span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Settings</a></li>
			     <li><a href="{{ url('/auth/logout') }}"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

	<div class="container">
		 @if(Session::has('flash_message'))
 			<div class="alert alert-success">{{ Session::get('flash_message') }}</div>
 		 @endif
	</div>

	<div class="container">
		 @if(Session::has('error_message'))
 			<div class="alert alert-danger">{{ Session::get('error_message') }}</div>
 		 @endif
	</div>


@yield('content')				

@endif



	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>

</html>