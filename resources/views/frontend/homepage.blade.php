@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <style>
      #ice ,.primary-btn{
        background-color:#96d9da;
      }
    </style>
    <section class="mb-5">
      <div class="container">
          <div class="hero__item set-bg" data-setbg="{{ asset('frontend/img/hero/banner.JPEG') }}">
              <div class="hero__text">
                  <span>Fruit fresh</span>
                  <h2>Good Mood <br />Good IceCream</h2>
                  <p>Free Pickup and Delivery Available</p>
                  <a href="#" id="ice" class="btn btn">SHOP NOW</a>
              </div>
          </div>
      </div>
    </section>
      <!-- Breadcrumb Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
      <div class="container">
        <div class="row">
          <div class="categories__slider owl-carousel">
            @foreach($menu_categories as $menu_category)
              <div class="col-lg-3">
                <div
                  class="categories__item set-bg"
                  data-setbg="{{ $menu_category->photo->getUrl() }}"
                >
                  <h5><a href="{{ route('shop.index', $menu_category->slug) }}">{{ $menu_category->name }}</a></h5>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="section-title">
              <h2>Featured Product</h2>
            </div>
          </div>
        </div>
        <div class="row featured__filter" id="product-list">
        </div>
      </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    
@endsection
