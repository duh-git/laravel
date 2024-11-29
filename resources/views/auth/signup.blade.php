@extends('base')
@section('content')
<h1>Registration</h1>
<form action="/auth/register" method="post">
  @csrf
  <label for="email">
    Email
    <input type="email" id="email" name="email" value="{{ old('email') }}" class="first">
  </label>
  <label for="password">
    Password
    <input type="password" id="password" name="password" value="{{ old('password') }}">
  </label>
  <button type="submit">Register</button>
</form>

@if ($errors->any())
  <div class="alert alert-danger">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
    </ul>
  </div>
@endif

@endsection