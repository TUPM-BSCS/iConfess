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
						<img class="imgs" src="{{ URL::asset('http://localhost/iConfess/resources/assets/image/icon.png') }}" height="40px" weight="50px">
					</a></li>

					<!-- <li>
					    <div class="col-md-13">
                            <input type="text" class="form-control"  name="search" placeholder="Search" style="margin-top: 5%;" />
                        </div>
					</li> -->

					<li><a href="{{ url('/home') }}"><span style="font-size:20px" class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
					<li><a href="{{ url('/confess') }}"><span style="font-size:20px" class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Confess</a></li>
					<li><a href="{{ url('/profile') }}"><span style="font-size:20px" class="glyphicon glyphicon-star" aria-hidden="true"></span> My Profile</a></li>	
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