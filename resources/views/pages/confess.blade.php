@extends('app')

@section('content')
<head>
	<script type="text/javascript">
		function onload()
			{
			  var today = new Date();
			  var dd = today.getDate();
			  var mm = today.getMonth()+1; 
			  var yyyy = today.getFullYear();
			  yyyy = parseInt(yyyy) + 1;
			  today = dd+'/'+mm+'/'+yyyy;
			  document.getElementById("publish_date").value = today;
			}
	</script>
</head>
<body>

<div class="container-fluid">
	<div class="sideprofile col-md-3 hidden-xs hidden-sm">
		@include('pages/sideprofile')
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
		   <!--  <input type="select" multiple="multiple" "Hello" name="tags" class="form-control"> -->
		   
		  </div>
		  <div class="col-md-12">
		  	<input class="form-control" type="text" name="con_tags" required/>
		  </div>
	</div>

	<div class="form-group">
	  <textarea name="con_body"class="form-control" rows="13" id="myconfession" style="width: 97%; margin: auto;" required/></textarea>
	</div>

	<div class="form-group">
        <label class="col-md-2 control-label" style="font-size: 14px;">Publish On</label>
        <div class="col-md-10">
            <input type="date" id="publish_date" class="form-control" name="con_published" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>" required/>
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