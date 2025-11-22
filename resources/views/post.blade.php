@extends('layouts.main')

@section('title', 'Blog: ' . $post['title'])

@section('body')
<div class="container mt-3">
    <article>
      <h3>{{ $post['title'] }}</h3>
      <h6>by: {{ $post['writer'] }}</h6>
      <p>{{ $post['content'] }}</p>
    </article>
    
    <a href="{{ url('posts') }}" class="btn btn-secondary">Back</a>  
</div>
@endsection