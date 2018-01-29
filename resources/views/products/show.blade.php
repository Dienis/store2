@extends('app')

@section('content')

<h1>{{ $product->title }}</h1>
<div class="row">
 <div class="col-md-4">
   <img class="img-fluid" src="{{ Voyager::image($product->img) }}" alt="">
 </div>
 <div class="col-md-8">
   <div class="price">
     {{ $product->price }}
   </div>
   {!! $product->description !!}

   <p>
     <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
       Buy
     </button>
   </p>
   <div class="collapse" id="collapseExample">
     <div class="card card-body">
       {!! Form::open(['url' => 'catalogs/product/' . $product->id, 'id' => 'prodform']) !!}
       {{--{{ csrf_field() }}--}}
       <div class="row">
         {!! Form::hidden('product_id', $product->id) !!}
         {!! Form::hidden('product_name', $product->title) !!}
         {!! Form::hidden('product_prise', $product->price) !!}
         <div class="col-md-4">
           <div class="form-group">
             {!! Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => 'Phone', 'required' => 'required']) !!}
           </div>
         </div>

         <div class="col-md-4">
           <div class="form-group">
             {!! Form::submit('Click Me!', ['class' => 'btn btn-primary']) !!}
           </div>
         </div>
       </div>

       {!! Form::close() !!}
     </div>
   </div>
 </div>
</div>

@stop
