@extends('dashboard.layouts.main')

@section('body')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Post Categories</h1>
</div>

<div class="table-responsive col-lg-6">
  @if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ session('success') }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  @endif

  <a href="{{ url('dashboard/categories/create') }}" class="btn btn-primary mb-3"> Create New Category</a>
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>#</th>
        <th>Category Name</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($categories as $category)
      <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $category->name }}</td>
        <td>
          <a href="{{ url('dashboard/categories/' . $category->slug) }}" class="badge bg-info text-body text-decoration-none"><span data-feather="eye"></span></a>
          <a href="{{ url('dashboard/categories/' . $category->slug . '/edit') }}" class="badge bg-warning text-body text-decoration-none"><span data-feather="edit"></span></a>
          <form action="{{ url('dashboard/categories/' . $category->slug) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span data-feather="x"></button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection