@extends('layouts.app')
@section('more-style')
  <style>
    .best-sellers {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
      grid-template-rows: 1fr 1fr;
      grid-gap: 1rem;
    }
    .product {
      border: 1px solid rgba(0,0,0,.125);
      border-radius: 25px;
      display: grid;
      grid-template-rows: 1fr 1fr;
      cursor: pointer;
      background-color: #F0FFD7;
    }
  </style>
@endsection
@section('more-css')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('title', 'Well Plant')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
    <div class="d-flex flex-column align-items-center justify-content-center" style="height: 82vh">
      <h1 class="font-weight-bold">Make Your Own Plan to Grow Your Plant</h1>
      <form action="">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Find your plant here!">
          <div class="input-group-append">
            <span class="input-group-text" style="background-color: #1F2A01; color: #F4F0E3">
              <i class="material-icons">search</i>
            </span>
          </div>
        </div>
      </form>
      <a class="btn d-flex align-items-center mt-2" href="#best-sellers" style="text-decoration: none; color: #1F2A01">
        <i class="material-icons mr-2">expand_more</i>
        See products
      </a>
    </div>
    <div class="best-sellers container pt-5" id="best-sellers">
      @foreach ($bestSellers as $product)
        <div class="product">
          <div class="product-img">
            <img src="{{ asset('assets/categories/'.$product->categoryId.'/'.$product->subCategoryId.'/'.$product->id.'.png') }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 25px; border-top-right-radius: 25px">
          </div>
          <div class="d-flex flex-column container pt-3">
            <div style="flex-grow: 1">
              <h5>{{ $product->name }}</h5>
              <p>Rp{{ $product->price }}</p>
            </div>
            <p class="d-flex align-items-center">
              <i class="material-icons mr-2">location_on</i>
              {{ $product->seller->city }}
            </p>
          </div>
        </div>
      @endforeach
    </div>
@endsection

@section('more-components')
@endsection

{{-- @section('footer')
  @include('components.footer')
@endsection --}}