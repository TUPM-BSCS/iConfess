@extends('app')

@section('content')

	<body>
		<h1>User Settings</h1>
		@foreach ($user as $online)
			<article>
			<h2>{{ $online->name }}</h2>

			<div class="body">{{ $online->email }}</div>
			</article>
		@endforeach

	</body>

@endsection