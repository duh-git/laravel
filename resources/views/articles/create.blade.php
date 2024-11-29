@extends('base')
@section('content')
<h1>Registration</h1>
<form action="/articles" method="post">
  @csrf
  <label for="title">
    Title
    <input type="text" id="title" name="title" class="first">
  </label>
  <label for="shortDesc">
    Short Descryption
    <input type="text" id="shortDesc" name="shortDesc">
  </label>
  <label for="desc">
    Descryption
    <textarea id="desc" name="desc"></textarea>
  </label>
  <!-- <label for="date">
    Date
    <input type="date" name="date" id="date">
  </label> -->
  <button type="submit">Save</button>
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