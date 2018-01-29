<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

  <ol class="carousel-indicators">
    @foreach( $sliders as $slider )
      <li data-target="#carouselExampleIndicators" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>
    @endforeach
  </ol>

  <div class="carousel-inner" role="listbox">
    @foreach( $sliders as $slider )
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}" style="background-image: url('{{ Voyager::image($slider->img) }}')">
        <div class="carousel-caption d-none d-md-block">
          <h3>{{ $slider->title }}</h3>
          <p>{{ $slider->description }}</p>
        </div>
      </div>
    @endforeach
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
