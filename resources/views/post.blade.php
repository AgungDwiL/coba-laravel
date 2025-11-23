@extends('layouts.main')

@section('title', 'Blog: ' . $post->title)

@section('body')
<div class="container mt-3">
    <article>
      <h3>{{ $post->title }}</h3>
      <h6>by: Author in <a href="{{ url('category/' . $post->category->slug) }}">{{ $post->category->name }}<a></h6>
      {!! $post->body !!}
    </article>
    
    <a href="{{ url('posts') }}" class="btn btn-secondary mt-4">Back</a>  
</div>
@endsection