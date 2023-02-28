@extends('master')
@section('content')
<div class="custom-product">
<div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    @foreach ($products as $item)
    <div class="carousel-item {{$item['id']==1?'active':''}}">
      <img src="{{$item['gallery']}}" class="d-block slider-img" alt="...">
      <div class="carousel-caption d-none d-md-block img-text">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
    </div>
    @endforeach
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
    <span class="visually-hidden bg-primary-subtle">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<div class="trending-wrapper">
  <h3 class="text-center">Trending Products</h3>
  @foreach ($products as $item)
    <div class="trend-item">
      <img src="{{$item['gallery']}}" class="trend-img" alt="...">
      <div class="">
        <h5>{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>
    </div>
    @endforeach
</div>
</div>
@endsection