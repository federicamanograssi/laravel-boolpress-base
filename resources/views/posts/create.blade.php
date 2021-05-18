@extends('layouts.app')
@section('pageTitle','Nuovo Post')
    
@section('content')
<h1>Inserisci nuovo post</h1>

<form action="{{route('posts.store')}}" method="POST">
@csrf
@method('POST')
    <div class="form-group">
        <label for="title">Title :</label>
        <input type="text" class="form-control" name="title" id="title" value={{old('title')}}>
    </div>
    <div class="form-group">
        <label for="author">author :</label>
        <input type="text" class="form-control" name="author" id="author" value={{old('author')}}>
    </div><div class="form-group">
        <label for="publication_date">Publication Date :</label>
        <input type="text" class="form-control" name="publication_date" id="publication_date" value={{old('publication_date')}}>
    </div><div class="form-group">
        <label for="category">category :</label>
        <input type="text" class="form-control" name="category" id="category" value={{old('category')}}><div class="form-group">
            <label for="text">text :</label>
            <input type="text" class="form-control" name="text" id="text" value={{old('text')}}>
        </div>
    </div>
    <button type="submit" class="btn btn-default" href="">Submit</button>
</form>
@endsection 