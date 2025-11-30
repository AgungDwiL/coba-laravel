@extends('dashboard.layouts.main')

@section('body')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">My Posts</h1>
</div>

<div class="table-responsive col-lg-8">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Title</th>
        <th>Category</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($posts as $post)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->category->name }}</td>
        <td>
          <a href="{{ url('dashboard/posts/' . $post->slug) }}" class="badge bg-info text-body text-decoration-none"><span data-feather="eye"></span></a>
          <a href="" class="badge bg-warning text-body text-decoration-none"><span data-feather="edit"></span></a>
          <a href="" class="badge bg-danger text-body text-decoration-none"><span data-feather="x"></span></a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection