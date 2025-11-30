@extends('dashboard.layouts.main')

@section('body')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
  <form method="POST" action="{{ url('dashboard/posts') }}">
    @csrf
    <div class="form-group mb-3">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group mb-3">
      <label for="slug">Slug</label>
      <input type="text" class="form-control" id="slug" name="slug" readonly>
    </div>
    <div class="form-group mb-3">
      <label for="category" class="form-label">Category</label>
      <select class="form-control" name="category_id" id="category">
        <option value="" disabled selected>-- Select category here --</option>  
        @foreach ($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="form-group mb-3">
      <label for="body">Body</label>
      <input id="body" type="hidden" name="body">
      <trix-editor input="body"></trix-editor>
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