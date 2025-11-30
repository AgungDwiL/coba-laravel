@extends('dashboard.layouts.main')

@section('body')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ url('dashboard/posts') }}" class="mb-5">
    @csrf
    <div class="form-group mb-3">
      <label for="title">Title</label>
      <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required value="{{ old('title') }}">
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="slug">Slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly value="{{ old('slug') }}">
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-control @error('category_id') is-invalid @enderror" name="category_id" id="category" required>
        <option value="" disabled selected>-- Select category here --</option>
        @foreach ($categories as $category)
          @if(old('category_id') == $category->id)
            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
          @else
            <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endif
        @endforeach
      </select>
      @error('category_id')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>
    <div class="form-group mb-3">
      <label for="body">Body</label>
      <input id="body" type="hidden" name="body" value="{{ old('body') }}" required>
      <trix-editor input="body" class="@error('body') is-invalid @enderror"></trix-editor>
      @error('body')
        <div class="invalid-feedback d-block">
          {{ $message }}
        </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){

    fetch("{{ url('dashboard/posts/createSlug') }}?title=" + encodeURIComponent(title.value))
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script>
@endsection