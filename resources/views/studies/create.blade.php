@extends('app')

@section('content')
    <h1>Add a New Study</h1>

    {!! Form::open(['url' => 'study']) !!}

    @include('studies._form', ['submitButtonText' => 'Add Study'])

    {!! Form::close() !!}

    @include('errors.list')
@stop