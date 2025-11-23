@extends('layouts.main')

@section('title', "Kategori")

@section('body')
<div class="container mt-3">
  <h2>Post's Category</h2>
    @foreach ($categories as $category)
        <ul>
          <li>
            <a href="{{ url('category/' . $category->slug) }}">  
                <h4>{{ $category->name }}</h4>
            </a>
          </li>
        </ul>
    @endforeach
</div>
@endsection