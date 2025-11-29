@extends('layouts.main')

@section('body')
 <div class="container-form d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow" style="width: 350px;">
      <div class="text-center">
        <form class="form-signin">
          <img class="mb-4" src="{{ asset('img/logo.png') }}" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
        <small>Not resgistered? <a href="{{ url('/register') }}" class="text-decoration-none">Register Now</a></small>
        <p class="mt-5 mb-3 text-muted fs-6">&copy; 2025</p>
      </div>
    <div>
  </div>
@endsection