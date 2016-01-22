@extends('app')

@section('content')
    <h2>{{ $article->title}}</h2>
    <p>Authors:  {{$article->authors}} </p>
    <p>Publication Date: {{$article->publication_date }}</p>
    <a href="{{$article->link_to_article }}"> {{$article->link_to_article }}</a>

    {{--@unless ($article->tags->isEmpty())--}}
        {{--<h3>Tags:</h3>--}}
        {{--<ul>--}}
            {{--@foreach($article->tags as $tag)--}}
                {{--<li>{{ $tag->name }}</li>--}}
            {{--@endforeach--}}
        {{--</ul>--}}
    {{--@endunless--}}
@stop