@extends('layouts.app')

@section('content')
    <div class="container-fluid p-4">
        <div class="row">
            <!-- <div class="col-12">
                <h2>{{$post->title}}</h2>
                <img src="{{ asset('./storage/'. $post->cover_image) }}" alt="{{ $post->title }}">
                <p>{{$post->slug}}</p>
                <p>{{$post->content}}</p>
            </div> -->
            <div class="card p-2" style="width: 18rem;">
            <img class="img-fluid" src="{{ asset('./storage/'. $post->cover_image) }}" alt="{{ $post->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{$post->title}}</h5>
                    <p class="card-text">{{$post->slug}}</p>
                    <p class="card-text">{{$post->content}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection


