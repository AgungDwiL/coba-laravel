@extends('layouts.main')

@section('title', "Blog")

@section('body')
<div class="container mt-3">
    @foreach ($posts as $post)
        <article>
            <a href="{{ url('/post/'.$post->slug) }}">  
                <h3>{{ $post->title }}</h3>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</div>
@endsection