@extends('layouts.main')
@section('title', 'Login')

@section('body')
 <div class="container-form d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow" style="width: 350px;">
      <div class="text-center">

        @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            {{ session('success') }}
          </div>
        @endif

        @if(session()->has('error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              <span class="sr-only">Close</span>
            </button>
            {{ session('error') }}
          </div>
        @endif

        <form class="form-signin" method="POST" action="{{ url('login') }}">
          @csrf
          <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          
          <label for="email" class="sr-only">Email address</label>
          <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address" value="{{ old('email') }}" required autofocus>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <label for="password" class="sr-only">Password</label>
          <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
          
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        <small>Not resgistered? <a href="{{ url('/register') }}" class="text-decoration-none">Register Now</a></small>
        <p class="mt-5 mb-3 text-muted fs-6">&copy; 2025</p>
      </div>
    <div>
  </div>
@endsection