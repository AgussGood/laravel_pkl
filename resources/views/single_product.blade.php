@extends('layouts.frontend')

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-area">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="breadcrumb__title">
          <h1 class="mb-0">Product Details</h1>
        </div>
        <ul class="breadcrumb__wrap">
          <li><a href="/">Home</a></li>
          <li class="color--blue">Product Details</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- breadcrumb end -->

<!-- Product Details Start -->
<div class="single-product sp_top_50 sp_bottom_80">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-lg-6">
        <div class="single-product__img">
          <div class="featurearea__big__img">
            <div class="featurearea__single__big__img">
              <img src="{{ Storage::exists($product->image) ? Storage::url($product->image) : asset('assets/frontend/img/grid/grid_1.png') }}"
                   alt="{{ $product->name }}">
            </div>
          </div>
          <div class="featurearea__thumb__img featurearea__thumb__img_slider__active slider__default__arrow">
            <div class="featurearea__single__thumb__img">
              <img src="{{ Storage::exists($product->image) ? Storage::url($product->image) : asset('assets/frontend/img/grid/grid_1.png') }}"
                   alt="{{ $product->name }}">
            </div>
          </div>
        </div>
      </div>

      <!-- Product Info -->
      <div class="col-xl-6 col-lg-6">
        <div class="single-product__wrap">
          <div class="single-product__heading">
            <h2>{{ $product->name }}</h2>
          </div>

          <div class="single-product__price mb-2">
            <span>Rp {{ number_format($product->price, 0, ',', '.') }}</span>
          </div>

          <hr>

          <div class="single-product__description mb-3">
            <p>{!! $product->description !!}</p>
          </div>

          <div class="single-product__special__feature mb-3">
            <ul>
              <li class="product__variant__inventory">
                <strong class="inventory__title">Availability:</strong>
                <span class="variant__inventory">
                  {{ $product->stock > 0 ? $product->stock . ' left in stock' : 'Out of stock' }}
                </span>
              </li>
              <li>
                @php $averageRating = $product->reviews()->avg('point'); @endphp
                @if($averageRating)
                  <p>Rating rata-rata: <strong>{{ number_format($averageRating, 1) }}/5</strong></p>
                @endif
              </li>
            </ul>
          </div>

          <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <div class="single-product__quantity mb-3">
              <div class="qty-container me-3">
                <button type="button" class="qty-btn-minus btn-qty">-</button>
                <input type="number" name="qty" value="1" max="{{ $product->stock }}" class="input-qty">
                <button type="button" class="qty-btn-plus btn-qty">+</button>
              </div>
              <button type="submit" class="default__button">
                <i class="fas fa-shopping-cart"></i> Add to Cart
              </button>
              <a href="#" class="default__button black__button">Buy it Now</a>
            </div>
          </form>

          <div class="single-product__bottom__menu">
            <ul>
              <li><a href="#"><i cla
