@extends('base')
@section('content')
<h1>Articles</h1>
<ul class="article__list">
  @foreach ($articles as $article)
  <li class="article__card">
    <a href="/articles/{{$article->id}}">
      <h3>{{$article->title}}</h3>
      <p>{{$article->shortDesc}}</p>
      <span>{{$article->created_at}}</span>
    </a>
  </li>
  @endforeach
</ul>
{{$articles->links()}}
@endsection