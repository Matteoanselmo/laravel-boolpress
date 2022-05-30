@extends('layouts.main')

@section('main-content')
    <h1 class="text-center">
        Nuovo Post
    </h1>
    <div class="container mt-5">
        <form class="row g-3 bg-primary rounded shadow text-white p-4" action="{{route('andim.posts.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-4">
                <label for="title">Titolo</label>
                <input type="text" name="title" id="title">
            </div>
            <div class="col-4">
                <label for="author">Autore</label>
                <input type="text" name="author" id="author">
            </div>
            <div class="col-4">
                <label for="description">Descrizione</label>
                <input type="text" name="description" id="description">
            </div>
            <div class="col-4">
                <label for="image">Immagine</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="col-12">
                <button class="btn btn-success text-white">send</button>
            </div>
        </form>
    </div>
@endsection
