@extends('layouts.app')

@section('more-style')
    <style>
      
    </style>
@endsection
@section('more-css')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('title', 'Checkout')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
  <div class="container d-flex mt-5" style="width: 100%;">
    <div class="card d-flex flex-column align-items-center" style="width: 50%;">
      <h4>Contact Information</h4>
      <div class="row">
        <div class="col">
          Name
        </div>
        <div class="col-8">
          <input type="text" value="{{ $buyer->name }}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Phone
        </div>
        <div class="col-8">
          <input type="text" value="{{ $buyer->phone }}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Address
        </div>
        <div class="col-8">
          <input type="text" value="{{ $buyer->address }}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col">
          City
        </div>
        <div class="col-8">
          <input type="text" value="{{ $buyer->city }}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Province
        </div>
        <div class="col-8">
          <input type="text" value="{{ $buyer->province }}" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col">
          Postcode
        </div>
        <div class="col-8">
          <input type="text" value="{{ $buyer->postcode }}" disabled>
        </div>
      </div>
    </div>
    <div class="card ml-5" style="width: 50%;">
      <div class="row">
        <div class="col">Order Summary</div>
        <div class="col">@currency($orderSummary)</div>
      </div>
      <hr>
      @foreach ($cartProducts as $item)
      <div class="row">
        <div class="col">{{ $item->product->name }}</div>
        <div class="col">@currency($item->product->price)</div>
      </div>
      @endforeach
      <form action="" class="d-flex">
        <input type="text" name="" id="" placeholder="Discount Code" class="mr-3">
        <button class="btn btn-warning" type="submit">Use Voucher</button>
      </form>
      <div class="row">
        <div class="col">Subtotal</div>
        <div class="col">@currency($orderSummary)</div>
      </div>
      <div class="row">
        <div class="col">Shipping</div>
        <div class="col">@currency($orderSummary)</div>
      </div>
      <hr>
      <div class="row">
        <div class="col">Total</div>
        <div class="col">@currency($orderSummary)</div>
      </div>
      <button class="btn btn-success" type="submit">Continue to payment</button>
    </div>
  </div>
  <div class="modal fade" id="buy-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">How many do you want to buy?</h5>
        </div>
        <div class="modal-body">
          <form action="/buy" method="POST">
            @csrf
            <input class="mb-3" name="quantity" type="number" placeholder="Quantity" style="display: block;">
            <input class="mb-3" name="productId" type="hidden" style="display: block;" value="{{ $product->id }}">
            <button type="submit" class="btn btn-primary">Add to cart</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('more-js')
  <script>
    
  </script>
@endsection