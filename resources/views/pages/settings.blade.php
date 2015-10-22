@extends('app')

@section('content')

<head>
	<script src="{{ URL::asset('http://localhost/iConfess/resources/assets/js/jquery.js') }}"/></script>
	<script>
		$(document).ready(function(){
		    $(".settings-editbtn-cn").click(function(){
		    	$(".codenamediv").show("fast");
		    	$(".settings-editbtn-cn").hide();
		    });
		    $(".cancelcodename").click(function(){
		    	$(".settings-editbtn-cn").show();
		    	$(".codenamediv").hide("fast");
		    });

		    $(".settings-editbtn-pw").click(function(){
		    	$(".passworddiv").show("fast");
		    	$(".settings-editbtn-pw").hide();
		    });
		    $(".cancelpassword").click(function(){
		    	$(".settings-editbtn-pw").show();
		    	$(".passworddiv").hide("fast");
		    });
		});
	</script>
</head>

<body>


<div class="container-fluid">
	<div class="col-md-2 hidden-xs hidden-sm">
	</div>
	<div class="col-md-8">
		<h2>SETTINGS</h2>
		<div class="settingsdiv">
			<div class="settingsdivwrap">
				<div class="changedp">
					<form method="POST" action="{{ url('/settings/upload') }}" enctype="multipart/form-data" file="true">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						@foreach($user as $posts)
						
						<div class="form-group">
                            <label class="col-md-4 control-label">Change Profile Picture</label>
                            <img src="{{ asset($posts->user_image) }}" alt="D.P." width="200px">
                            <div class="col-md-12">
                                <center><input type="file" name="user_image"></center>
                            </div>
                            	<center><button type="submit" class="btn btn-primary btn-sm">Submit</button></center>
                        </div>  
                        @endforeach
                        
					</form>
				</div>

				<br>

				<div class="settingsfield">
					<form method="POST" action="{{ url('/settings/changename') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<table width="100%">

							<tr>
								<td width="15%">
									<b>Codename</b>
								</td>
								<td style="color: gray; text-align: center;" width="75%">
									<!-- insert retrieve name here-->
									@foreach($user as $me)
									{{ $me->name }}
								</td>
								<td class="settings-editbtn-cn">
									<a class="settings-editbtn-cn">
										<span class="glyphicon glyphicon-pencil"></span>
										Edit
									</a>
								</td>
							</tr>

						</table>
						<div class="codenamediv">
							<table class="table">
								<thead>
									<th>
										New Codename:
									</th>
									<th>
										<input type="text" name="name" value="{{ old('name') }}">
									</th>
								</thead>
							</table>
							<!-- <input class="btn btn-primary btn-sm" type="submit"> -->
							<button type="submit" class="btn btn-primary btn-sm">Submit</button>
							<button class="btn btn-default btn-sm cancelcodename" type="button">Cancel</button>
						</div>
					</form>
				</div>
				
				<div class="settingsfield">
					<form method="POST" action="{{ url('/resetpasswordcomplete') }}">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<table width="100%">
							<tr>
								<td width="15%">
									<b>Passsword</b>
								</td>
								<td style="color: gray; text-align: center;" width="75%">
									<!-- insert retrieve name here-->
									You updated your account last: {{ $me->created_at }}
									@endforeach
								</td>
								<td class="settings-editbtn-pw">
									<a class="settings-editbtn-pw">
										<span class="glyphicon glyphicon-pencil"></span>
										Edit
									</a>
								</td>
							</tr>

						</table>

						<div class="passworddiv">
							<table class="table">

								<thead>
									<th>
										Old Password:
									</th>
									<th>
										<input type="password" name="old_password" required />
									</th>
								</thead>
								<thead>
									<th>
										New Password:
									</th>
									<th>
										<input type="password" name="password" required />
									</th>
								</thead>
								<thead>
									<th>
										Confirm New Password:
									</th>
									<th>
										<input type="password" name="password_confirmation" required />
									</th>
								</thead>
							</table>
							<input class="btn btn-primary btn-sm" type="submit" name="savenewpassword">
							<button class="btn btn-default btn-sm cancelpassword" type="button">Cancel</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

</body>	

@endsection