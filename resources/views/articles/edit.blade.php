@extends('base')
@section('content')
<h1>Registration</h1>
<form action="/articles/{{$article->id}}" method="post">
  @csrf
  @method('PUT')
  <label for="title">
    Title
    <input type="text" id="title" name="title" value="{{$article->title}}" class="first">
  </label>
  <label for="shortDesc">
    Short Descryption
    <input type="text" id="shortDesc" name="shortDesc" value="{{ $article->shortDesc}}">
  </label>
  <label for="desc">
    Descryption
    <textarea id="desc" name="desc">{{$article->desc}}</textarea>
  </label>
  <button type="submit">Save</button>
</form>

@if ($errors->any())
  <div class="error">
    <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
    </ul>
  </div>
@endif

@endsection