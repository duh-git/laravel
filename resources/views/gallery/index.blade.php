@extends('base')
@section('content')
<h1>Gallery</h1>
<ul class="gallery__list">
  @foreach ($articles as $article)
    <li class="gallery_card">
      <a href="/gallery/{{$article->full_image}}&&{{$article->desc}}">
        <img src="{{$article->preview_image}}" width="250px">
        <h3>{{ $article->name }}</h3>
        <p>{{ $article->shortDesc }}</p>
        <span>{{ $article->date }}</span>
      </a>
    </li>
  @endforeach
</ul>

@endsection