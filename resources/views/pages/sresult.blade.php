@extends('app')

@section('content')


<div class="container-fluid">
	<div class="popularconf col-md-2 hidden-xs hidden-sm">
        @include('pages/popularconf')
	</div>
	
	<div class="col-md-1 hidden-xs hidden-sm"></div>

	<div class="col-md-6">
		<div>
			
				<b>Search results: </b>
			
		</div>
		<table class="table" >
			@foreach($results as $result)
			<tr>
				<td width="20" style="padding: 1% 0% 0% 5%;">
					<center><img src="{{ asset($result->user_image) }}" alt="D.P." height="100px" width="100px"></center>
				</td>
				<td>
					<a href="localhost:8888/friend"><b>{{ $result->name}}</b></a>
				</td>
			</tr>
			@endforeach
		</table>
	</div>	
</div>
@endsection