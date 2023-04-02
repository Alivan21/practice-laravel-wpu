@extends('layouts.main')

@section('content')
  <div class="row justify-content-center align-items-center my-5">
    <div class="col-6 d-flex flex-column gap-3">
      <h1 class="text-center h3 mb-3">Register</h1>
      <form action="/register" class="d-flex flex-column gap-3" method="POST">
        @csrf
        <div class="form-floating">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
            id="floatingName" placeholder="John Doe" required value="{{ old('name') }}">
          <label for="floatingName">Full Name</label>
          @error('name')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
            id="email" placeholder="name@example.com" required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
            id="password" placeholder="Password" required value="{{ old('password') }}">
          <label for="password">Password</label>
          @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
          @enderror
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
      </form>
      <small class="mx-auto">Have an account? <a href="/login">Login Now!</a></small>
    </div>
  </div>
@endsection
