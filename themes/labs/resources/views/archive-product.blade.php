@extends('layouts.app')

@section('content')
  @include('partials.page-header')

<div class="wrapper--products-sl">
  <ul class="products">
    @foreach ($products as $product)
      @include('partials.product-in-slider')
    @endforeach
  </ul>
</div>
  
@endsection
