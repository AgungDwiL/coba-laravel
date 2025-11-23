@extends('layouts.main')

@section('title', "Kategori")

@section('body')
<div class="container mt-3">
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