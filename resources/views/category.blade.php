@extends('layouts.main')

@section('title', "Blog")

@section('body')
<div class="container mt-3">
  <h2 class="mb-5">
    Post Category : {{ $category->name }}
  </h2>

    @foreach ($category->posts as $post)
        <article>
            <a href="{{ url('post/'.$post->slug) }}">  
                <h3>{{ $post->title }}</h3>
            </a>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</div>
@endsection