@extends('app')

@section('content')

  <h1>{{ $news->title }}</h1>
  <div class="row">
    <div class="col-md-4">
      <img class="img-fluid" src="{{ Voyager::image($news->image)}}" alt="">
    </div>
    <div class="col-md-8">
      {!! $news->body !!}
    </div>
  </div>

@stop
