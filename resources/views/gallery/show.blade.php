@extends('base')
@section('content')
<h1>Details</h1>
<div class="full-view">
  <img src="/{{$img}}">
  <p>{{$desc}}</p>
</div>
@endsection