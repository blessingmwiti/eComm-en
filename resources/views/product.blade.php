@extends('master')
@section('content')
<div class="custom-product">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <img src="{{$item['gallery']}}" class="d-block slider-img" alt="...">
    </div>
    @endforeach
  </div>
</div>
</div>
@endsection