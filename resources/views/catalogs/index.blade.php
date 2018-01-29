@extends('app')

@section('content')

  @foreach($catalogs as $catalog)
    <div class="row">
      <div class="col-md-12">
        <h3>{{ $catalog->name }}</h3>
      </div>
      <div class="col-sm-4">
        <img class="img-fluid" src="{{ Voyager::image($catalog->img) }}" alt="">
      </div>
      <div class="col-sm-8">
        {!! $catalog->description !!}
        <a class="btn btn-outline-primary btn-lg" href="catalogs/{{ $catalog->id }}">Show <span class="badge badge-light">{{$catalog->products->count()}}</span></a>
      </div>
    </div>

  <hr>
  @endforeach

@stop
