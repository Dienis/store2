@extends('app')

@section('content')

  @foreach($news as $news)
    <div class="row">
      <div class="col-md-12">
        {{-- {{ dd($news) }}--}}
        <h3>{{ $news->title }}</h3>
      </div>
      <div class="col-sm-4">
        <a href="news/{{ $news->id }}">
          <img class="img-fluid" src="{{ Voyager::image($news->image) }}" alt="">
        </a>
      </div>
      <div class="col-sm-8">
        {!! $news->excerpt !!}
        <a class="btn btn-outline-primary btn-lg" href="news/{{ $news->id }}">Show</a>
      </div>
    </div>

    <hr>
  @endforeach

@stop
