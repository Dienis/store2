@extends('app')

@section('content')

@foreach($pages as $page)

    <h2>{{ $page->title }}</h2>
    <div class="row">
      <div class="col-md-5">
        <img class="img-fluid" src="{{ Voyager::image($page->image) }}" alt="">
      </div>
      <div class="col-md-7">
        {!! $page->body !!}
      </div>
      <div class="col-md-12 contact-form">
        {!! Form::open(['id' => 'contactform', 'metod' => 'POST']) !!}
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) !!}
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              {!! Form::textarea('msg', null, ['class' => 'form-control', 'placeholder' => 'Body', 'rows' => '5']) !!}
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group btn-form">
              <button type="submit" class="btn btn-primary">Click Me! <span></span></button>
            </div>
          </div>
        </div>

        {!! Form::close() !!}
      </div>
    </div>

@endforeach

@stop
