@extends('app')

@section('content')
<h1>Article: {!! $article->title !!}</h1>

{!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/'. $article->id]) !!}

@include('articles._form', ['submitButtonText' => 'Edit Article'])

{!! Form::close() !!}

@include('errors.list')    
        
@stop