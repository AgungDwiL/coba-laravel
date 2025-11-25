@extends('layouts.main')

@section('title', "Blog")

@section('body')
<div class="container mt-3">
    <h1 class="mb-4">{{ $headingPage }}</h1>
    
    @if ($posts->count())
        <div class="card mb-3">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
    
    @foreach ($posts as $post)
        <article class="mb-5 border-bottom p-2">
            <a href="{{ url('post/'.$post->slug) }}" class="text-decoration-none">  
                <h3>{{ $post->title }}</h3>
            </a>

            <p>
                By: 
                <a href="{{ url('author/' . $post->author->username) }}" class="text-decoration-none">
                    {{ $post->author->name }}
                </a>
                 in 
                <a href="{{ url('category/' . $post->category->slug)}}" class="text-decoration-none">
                    {{ $post->category->name }}
                </a>
            </p>

            <p>{{ $post->excerpt }}</p>

            <a href="{{ url('post/'.$post->slug) }}" class="text-decoration-none">Read more...</a> 
        </article>
    @endforeach
</div>
@endsection