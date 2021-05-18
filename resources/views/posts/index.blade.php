@extends('layouts.app')

@section('pageTitle','Blog')
@section('content')

<a href="{{route('posts.create')}}" class="btn btn-info">Crea nuovo post</a>

<table class="table">
    {{-- intestazione tabella --}}
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Category</th>
            <th>Text</th>
            <th>Details</th>
        </tr>
    </thead>

    {{-- corpo tabella --}}
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->author}}</td>
            <td>{{$post->category}}</td>
            <td>{{$post->text}}</td>
            <td>
                {{-- dettagli --}}
                <a href="{{route('posts.show',['post'=>$post->id])}}" class="btn btn-info">Leggi</a>

                {{-- modifiche --}}
                {{-- <a href="{{route('dresses.edit',['dress'=>$dress->id])}}" class="btn btn-warning">Modifica</a> --}}

                {{-- elimina --}}
                {{-- <form action="{{route('dresses.destroy', ['dress'=>$dress->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">Elimina</button> 
                </form> --}}
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

    
@endsection