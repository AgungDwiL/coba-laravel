@extends('dashboard.layouts.main')

@section('body')
<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h1 class="mb-3">{{ $post->title }}</h1>

      <a href="{{ url('dashboard/posts') }}" class="btn btn-secondary"><span data-feather="arrow-left"></span> Back to All My Posts</a>
      <a href="{{ url('dashboard/posts/' . $post->slug . '/edit') }}" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
      <form action="{{ url('dashboard/posts/' . $post->slug) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn bg-danger" onclick="return confirm('Are you sure?')"><span data-feather="x"></span> Delete</button>
      </form>

      @if ($post->image)
        <div style="max-height:400px; aspect-ratio: 3/1; object-fit: cover; object-position: center; overflow: hidden;">
          <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
        </div>
      @else
        <img src="https://www.sourcesplash.com/i/random?q={{ $post->category->name }}&w=1200&h=400" alt="{{ $post->category->name }}" class="img-fluid mt-3">
      @endif
      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>
@endsection