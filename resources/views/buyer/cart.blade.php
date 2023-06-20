@extends('layouts.app')

@section('more-style')
    <style>

    </style>
@endsection
@section('title', 'Cart')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
    <div id="error"></div>
    <div class="container mt-5">
      @if ($isEmpty)
        <p class="mt-5">No Product</p>
      @else
        @foreach ($carts as $cart)
          <div 
            id="{{ 'cart-wrapper-'.$cart->id }}"
          >
            <div class="card p-3 mb-4" style="background-color: #ebebeb;">
              <div class="d-flex justify-content-between">
                <div class="d-flex align-items-center">
                  <img class="rounded mr-3" src="{{ asset('assets/categories/'.$cart->product->categoryId.'/'.$cart->product->subCategoryId.'/'.$cart->product->id.'.png') }}" alt="{{ $cart->product->name }}" style="width: 100px; object-fit: contain;">
                  <h5>{{ $cart->product->name }}</h5>
                </div>
                <div class="d-flex align-items-center">
                  <form action="/delete-cart" method="post">
                    @csrf
                    <input class="mr-3" type="hidden" name="cartId" id="cartId" value="{{ $cart->id }}">
                    <input class="mr-3" type="number" name="quantity" id="quantity" value="{{ $cart->quantity }}" style="width: 50px;">
                    <button type="submit" class="btn btn-danger">Delete</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        @endforeach
        <a class="btn btn-success" href="{{ route('checkout') }}">Checkout</a>
      @endif
    </div>
@endsection

@section('more-js')
  <script>
    
  </script>
@endsection
