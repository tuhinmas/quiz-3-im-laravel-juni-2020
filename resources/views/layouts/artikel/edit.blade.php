@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-8">
        <form action="/artikel/{{$artikel ->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul Artikel:</label>
            <input type="text" 
                   name="judul" 
                   class="form-control" 
                   placeholder="Apa judul artikel Anda?" 
                   id="judul"
                   value="{{$artikel->judul}}">
        </div>
        <div class="form-group">
            <label for="comment">Artikel:</label>
            <textarea name="isi" class="form-control" id="comment">
            {{$artikel -> isi}}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="/artikel" class="btn btn-danger ml-2">Back</a>
        </form>
    </div>
</div>
@endsection