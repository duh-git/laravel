@extends('base')
@section('content')
<h1>Details</h1>
<h2>{{$article->title}}</h2>
<p>{{$article->desc}}</p>
<span>{{$article->date}}</span>
<a href="/articles/{{$article->id}}/edit" class="first">Edit</a>
<form action="/articles/{{$article->id}}" method="post">
  @csrf
  @method('DELETE')
  <button type="submit">Delete</button>
</form>
@endsection