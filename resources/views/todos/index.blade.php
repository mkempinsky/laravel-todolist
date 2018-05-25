
@extends('layouts.app')


@section('content')


<h1>Laravel Todos</h1>


@if( count($todos) > 0 )

	@foreach ($todos as $todo)
		<div class="well animated flipInX">
			<h3><a href="todo/{{$todo->id}}">{{ $todo->text }}</a></h3>
			<span class="label label-danger">Due: {{ $todo->due }}</span><span class="text-muted text-right pull-right">Created: {{ \Carbon\Carbon::parse($todo->created_at)->format('M d, Y') }}</span>
		</div>
	@endforeach

@endif

@endsection