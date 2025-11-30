@extends('layouts.main')

@section('title', 'Blog')

@section('body')

@if(request('search') ?? false)
    <?php $currentFilter = ['search' => request('search')] ?>
@else
    <?php $currentFilter = [] ?>
@endif

<div class="container">
    <h1 class="mb-2 mt-2 text-center">{!! $headingPage !!}</h1>

    <div class="mb-3 row justify-content-center">
        <div class="col-md-6">
            <form action="{{ url('posts') }}">
                <div class="input-group mb-3">
                    @if(request('category') ?? false)
                        <input type="hidden" name="category" value="{{ request('category') }}">
                        <?php $currentFilter = array_merge($currentFilter, ['category' => request('category')]) ?>
                    @endif
                    @if(request('author') ?? false)
                        <input type="hidden" name="author" value="{{ request('author') }}">
                        <?php $currentFilter = array_merge($currentFilter, ['author' => request('author')]) ?>
                    @endif
                    <input type="text" class="form-control" name="search" placeholder="Search.." value="{{ $search ?? '' }}">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-dark"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height:400px; aspect-ratio: 3/1; object-fit: cover; object-position: center; overflow: hidden;">
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://www.sourcesplash.com/i/random?q={{ $posts[0]->category->name }}&w=1200&h=400" alt="{{ $posts[0]->category->name }}" class="card-img-top img-fluid w-100" style="height: 400px; object-fit: cover;">
            @endif
            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark" href="{{ url('post/'.$posts[0]->slug) }}">{{ $posts[0]->title }}</a></h3>
                
                <p>
                    <small class="text-muted">
                    By: 
                    <a href="{{ url('posts?' . http_build_query(array_merge($currentFilter, ['author' => $posts[0]->author->name]))) }}" class="text-decoration-none">
                        {{ $posts[0]->author->name }}
                    </a>
                    in 
                    <a href="{{ url('posts?' . http_build_query(array_merge($currentFilter, ['category' => $posts[0]->category->slug]))) }}" class="text-decoration-none">
                        {{ $posts[0]->category->name }}
                    </a>| {{ $posts[0]->created_at->diffForHUmans() }}
                    </small>
                </p>
                
                <p class="card-text">{{ $posts[0]->excerpt }}</p>

                <a href="{{ url('post/'.$posts[0]->slug) }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
        </div>
    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-4 d-flex">
                <div class="card d-flex flex-column w-100">
                    <a class="text-decoration-none" href="{{ url('posts?' . http_build_query(array_merge($currentFilter, ['category' => $post->category->slug]))) }}"><div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0,0,0,0.7);">{{ $post->category->name }}</div></a>
                    @if ($post->image)
                        <div style="max-height:200px; aspect-ratio: 3/1; object-fit: cover; object-position: center; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                        </div>
                    @else
                        <img src="https://www.sourcesplash.com/i/random?q={{ $post->category->name }}&w=1200&h=400" alt="{{ $post->category->name }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                    @endif
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">
                            <a href="{{ url('post/'.$post->slug) }}" class="text-decoration-none">  
                            {{ $post->title }}
                            </a>
                        </h5>
                        <small class="text-muted">
                            By: 
                            <a href="{{ url('posts?' . http_build_query(array_merge($currentFilter, ['author' => $post->author->name]))) }}" class="text-decoration-none">
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
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
</div>
    @else
        <p class="text-center fs-4">No post found.</p>
    @endif
@endsection