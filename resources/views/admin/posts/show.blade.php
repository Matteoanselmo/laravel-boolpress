@extends('layouts.main')

@section('main-content')
    <main>
        @if (session("message"))
            <div class="alert alert-success">
                {{session("message")}}
            </div>
        @endif
        <div class="container-fluid">
            <div class="row ">
                <h1 class="text-center">Single post </h1>
                {{-- <a href="{{route('comics.create')}}" class="text-end">
                    <button class="btn btn-warning">Add Comic</button>
                </a> --}}
                <div class="col-12 d-flex justify-content-center">
                    <div class="card mb-2" style="width: 18rem;">
                        @if (str_starts_with($post->image_url, 'https://') || str_starts_with($post->image_url, 'http://'))
                            <img src="{{$post->image_url}}" class="card-img-top" alt="{{$post->title}}">
                        @else
                            <img src="{{asset('/storage') . '/' .  $post->image_url}}" class="card-img-top" alt="{{$post->title}}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{$post->title}}</h5>
                            <h6 class="card-title">{{$post->author}}</h6>
                            <p class="card-text">{{$post->description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
