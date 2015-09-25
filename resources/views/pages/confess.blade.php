@extends('app')

@section('content')

<body>

<div class="container-fluid">
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



  <div class="createconf col-md-8">

  <form class="form-horizontal" role="form" method="POST" action="{{ url('/confess') }}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
	<div class="form-group">
        <div class="col-md-12">
        <input type="text" class="form-control" name="con_title" placeholder="#Title" required/>
        </div>
	</div>

	<div class="form-group">
		<div class="dropdown col-md-1">
		    <!-- <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">Tags
		    <span class="caret"></span></button>
		    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
		      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Love</a></li>
		      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Heartaches</a></li>
		      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Professor</a></li>
		    </ul> -->
		  </div>
		  <div class="col-md-12">
		  	<input class="form-control" type="text" name="con_tags">
		  </div>
	</div>

	<div class="form-group">
	  <textarea name="con_body"class="form-control" rows="13" id="myconfession" style="width: 97%; margin: auto;"></textarea>
	</div>

	<div class="form-group">
        <label class="col-md-2 control-label">Publish On</label>
        <div class="col-md-10">
            <input type="date" class="form-control" name="con_published" required/>
        </div>
    </div>

	<div>
		<button type="submit" class="btn btn-primary btn-sm">Confess</button>
	</div>

	</form>
  </div>
</div>

</body>

@endsection