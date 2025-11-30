@extends('layouts.main')

@section('title', 'Blog: ' . $post->title)

@section('body')

<div class="container">
  <div class="row justify-content-center mb-5">
    <div class="col-md-8">
      <h1 class="mb-3">{{ $post->title }}</h1>
      <p>by: <a href="{{ url('posts?author=' . $post->author->name) }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="{{ url('posts?category=' . $post->category->slug) }}">{{ $post->category->name }}</a></p>

      <img src="https://www.sourcesplash.com/i/random?q={{ $post->category->name }}&w=1200&h=400" alt="{{ $post->category->name }}" class="img-fluid">

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
    
      <a href="{{ url('posts') }}" class="btn btn-secondary mt-4">Back</a>
    </div>
  </div>
</div>
@endsection