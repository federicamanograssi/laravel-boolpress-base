@extends('layouts.app')

@section('pageTitle','Dettagli')

@section('content')

    <h1>{{$post->title}}</h1>
    <h4>di {{$post->author}}</h4>
    <span>pubblicato il {{$post->publication_date}}</span>

    <p>{{$post->text}}</p>
@endsection