@extends('layouts.app')


@section('content')

<h2>Create New Todo Item</h2>

{!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
{!! Form::close() !!}


@endsection