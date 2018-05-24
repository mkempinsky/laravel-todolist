@extends('layouts.app')


@section('content')

	<a href="/"><button class="btn btn-default">Back</button></a>

	<h1>{{ $todo->text }}</h1>
	<span class="label label-danger">Due: {{ $todo->due }}</span>
	<hr>
	<p class="well">{{ $todo->body }}</p>

@endsection