@extends('layouts.main')

@section('body')
 <div class="container-form d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow" style="width: 350px;">
      <div class="text-center">
        <form class="form-registration">
          <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Registration Form</h1>
          <label for="name" class="sr-only">Name</label>
          <input type="text" id="name" name="name" class="form-control rounded-top" placeholder="Name" required>
          <label for="username" class="sr-only">Username</label>
          <input type="text" id="username" name="username" class="form-control" placeholder="Username" required>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control rounded-bottom" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Register</button>
        </form>
        <small>Have an account? <a href="{{ url('/login') }}" class="text-decoration-none">Login Here</a></small>
        <p class="mt-5 mb-3 text-muted fs-6">&copy; 2025</p>
      </div>
    <div>
  </div>
@endsection