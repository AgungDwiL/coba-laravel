@extends('layouts.main')

@section('title', "Blog")

@section('body')
<div class="container">
    <h1 class="mb-4 mt-2">{{ $headingPage }}</h1>
    
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://www.sourcesplash.com/i/random?q={{ $posts[0]->category->name }}&w=1200&h=400" alt="{{ $posts[0]->category->name }}" class="card-img-top img-fluid w-100" style="height: 400px; object-fit: cover;"/>
            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark" href="{{ url('post/'.$posts[0]->slug) }}">{{ $posts[0]->title }}</a></h3>
                
                <p>
                    <small class="text-muted">
                    By: 
                    <a href="{{ url('author/' . $posts[0]->author->username) }}" class="text-decoration-none">
                        {{ $posts[0]->author->name }}
                    </a>
                    in 
                    <a href="{{ url('category/' . $posts[0]->category->slug)}}" class="text-decoration-none">
                        {{ $posts[0]->category->name }}
                    </a>| {{ $posts[0]->created_at->diffForHUmans() }}
                    </small>
                </p>
                
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="{{ url('post/'.$posts[0]->slug) }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    
    <div class="contain">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-4 d-flex">
                <div class="card d-flex flex-column w-100">
                    <a class="text-decoration-none" href="{{ url('category/' . $post->category->slug)}}"><div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0.7);">{{ $post->category->name }}</div></a>
                    <img src="https://www.sourcesplash.com/i/random?q={{ $post->category->name }}&w=1200&h=400" class="card-img-top" alt="{{ $post->category->name }}" style="height: 200px; object-fit: cover;" >
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="{{ url('post/'.$post->slug) }}" class="text-decoration-none">  
                            {{ $post->title }}
                            </a>
                        </h5>
                        <small class="text-muted">
                            By: 
                            <a href="{{ url('author/' . $post->author->username) }}" class="text-decoration-none">
                                {{ $post->author->name }}
                            </a>
                            | {{ $post->created_at->diffForHumans() }}
                        </small>
                        <p class="card-text">{{ $post->excerpt }}</p>
                        <a href="{{ url('post/'.$post->slug) }}" class="text-decoration-none btn btn-primary mt-auto">Read more</a>
                    </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection