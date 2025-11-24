@extends('layouts.main')

@section('title', "Blog")

@section('body')
<div class="container mt-3">
    <h1 class="mb-4">{{ $headingPage }}</h1>
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