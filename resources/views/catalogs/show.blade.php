@extends('app')

@section('content')

<h1>{{ $catalog->title }}</h1>
<div class="row">
 <div class="col-md-4">
   <img class="img-fluid" src="{{ Voyager::image($catalog->img, 'small'), 'small' }}" alt="">
 </div>
 <div class="col-md-8">
   {!! $catalog->description !!}
 </div>
</div>

@unless($catalog->products->isEmpty())
  <h3>Products:</h3>
  <div class="row">
    @foreach($catalog->products as $product)
      <div class="col-md-4">
        <a href="#">
          <h4>{{ $product->title }}</h4>
        </a>
        <a href="product/{{ $product->id }}">
          <img class="img-fluid" src="{{ Voyager::image($product->img) }}" alt="{{ $product->title }}">
          <div class="price">
            {{ $product->price }}
          </div>
        </a>
        <div class="">
          {!! str_limit($product->description, $limit = 150, $end = '...') !!}
        </div>
      </div>
    @endforeach
  </div>
@endunless

@stop
