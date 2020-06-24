@extends('app')

@section('sliders')
  @include('sliders')
@stop

@section('content')

<div class="row">
  <div class="col-md-12">
    <br>
    <h2>jijijij</h2>
  </div>
    @foreach($featured as $featured)
      <div class="col-md-4">
        <div class="row">
          <div class="col-md-12">
            <h4>
              <a href="catalogs/product/{{ $featured->id }}">
                {{ $featured->title }}
              </a>
            </h4>
          </div>
          <div class="col-md-12">
            <a href="catalogs/product/{{ $featured->id }}">
                <img class="img-fluid" src="{{ Voyager::image( $featured->img ) }}" data-image="{{ $featured->img }}" >
              </a>
            <div class="price">
              {{ $featured->price }}
            </div>
          </div>
{{--          <div class="col-md-12">
            {!! $featured->description !!}
          </div>--}}
        </div>
      </div>


    @endforeach

    <div class="col-md-12">
      <br>
      <h2>New products</h2>
    </div>
      @foreach($products as $product)
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <h4>
                <a href="catalogs/product/{{ $product->id }}">
                {{ $product->title }}
                </a>
              </h4>
            </div>
            <div class="col-md-12">
              <a href="catalogs/product/{{ $product->id }}">
                  <img class="img-fluid" src="{{ Voyager::image( $product->img ) }}" data-image="{{ $product->img }}" >
              </a>
              <div class="price">
                {{ $product->price }}
              </div>

            </div>
  {{--          <div class="col-md-12">
              {!! $product->description !!}
            </div>--}}
          </div>
        </div>


      @endforeach
</div>
@stop
