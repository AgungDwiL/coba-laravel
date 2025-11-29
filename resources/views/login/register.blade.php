@extends('layouts.main')
@section('title', 'Register')

@section('body')
 <div class="container-form d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow" style="width: 350px;">
      <div class="text-center">
        <form class="form-registration" action="{{ url('register') }}" method="POST">
          @csrf
          <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Registration Form</h1>

          <label for="name" class="sr-only">Name</label>
          <input type="text" id="name" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}" required autofocus>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <label for="username" class="sr-only">Username</label>
          <input type="text" id="username" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required>
          @error('username')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address"  value="{{ old('email') }}" required>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" placeholder="Password"required>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror

          <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
        </form>
        <small>Have an account? <a href="{{ url('/login') }}" class="text-decoration-none">Login Here</a></small>
        <p class="mt-5 mb-3 text-muted fs-6">&copy; 2025</p>
      </div>
    <div>
  </div>
@endsection