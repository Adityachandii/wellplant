@extends('layouts.app')

@section('more-style')
    <style>
      .products {
        width: 100%;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-template-rows: 1fr 1fr;
        grid-gap: 2rem;
      }
      .product {
        border: 1px solid rgba(0,0,0,.125);
        border-radius: 25px;
        display: grid;
        grid-template-rows: 200px 250px;
        cursor: pointer;
        background-color: #F0FFD7;
      }
      .category:hover {
        color: white;
        background-color: #577503;
        /* border-radius: 5px; */
      }
    </style>
@endsection
@section('more-css')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('title', 'Plant and Seeds')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
  <div class="d-flex mt-5">
    <div class="d-flex flex-column align-items-center mx-5 pr-5" style="border-width: 1px; border-right-style: solid; border-color: #1F2A01; width: 200px;">
      @foreach ($subCategories as $subCategory)
        <a href="{{ route('showByCategoryId', ['categoryId' => $subCategory->categoryId, 'subCategory' => $subCategory->id]) }}" class="" style="text-decoration: none; color: #1F2A01;">
          <div class="category mb-4 px-3 py-2 rounded" style="@if($subCategory->id == $activeSubCategory->id) color: white; background-color: #3b5001; @endif">
            <h4 class="m-0">{{ $subCategory->name }}</h4>
          </div>
        </a>
      @endforeach
    </div>
    <div class="products">
      @foreach ($products as $product)
        <div class="product">
          <div class="product-img">
            <img src="{{ asset('assets/categories/'.$product->categoryId.'/'.$product->subCategoryId.'/'.$product->id.'.png') }}" alt="{{ $product->name }}" style="width: 100%; height: 100%; object-fit: cover; border-top-left-radius: 25px; border-top-right-radius: 25px">
          </div>
          <div class="d-flex flex-column container pt-3">
            <div style="flex-grow: 1">
              <h5>{{ $product->name }}</h5>
              <p>@currency($product->price)</p>
            </div>
            <p class="d-flex align-items-center">
              <i class="material-icons mr-2">location_on</i>
              {{ $product->seller->city }}
            </p>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection
