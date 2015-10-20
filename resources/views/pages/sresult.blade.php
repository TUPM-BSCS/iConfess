@extends('app')

@section('content')


<div>
@foreach($results as $result)

	{{ $result->name}}

@endforeach
</div>