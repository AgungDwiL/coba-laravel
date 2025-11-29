@extends('layouts.main')

@section('title', "Kategori")

@section('body')
<div class="container mt-3">
  <h1 class="mb-5">Post's Category</h1>
  <div class="container">
    <div class="row">
      @foreach ($categories as $category)
        <div class="col-md-4 p-2">
          <a href="{{ url('category/' . $category->slug) }}">
            <div class="card bg-dark text-white">
              <img class="card-img" src="https://www.sourcesplash.com/i/random?q={{ $category->name }}&w=500&h=300" alt="{{ $category->name }}">
              <div class="card-img-overlay d-flex align-items-center p-0">
                <h4 class="card-title text-center flex-fill p-3 fs-3" style="background-color: rgba(0,0,0,0.7);">{{ $category->name }}</h4>
              </div>
            </div>
          </a>
        </div>  
      @endforeach
    </div>
  </div>
</div>
@endsection