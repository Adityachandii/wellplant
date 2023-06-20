@extends('layouts.app')

@section('meta-csrf')
  <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

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
  <div class="container mt-5" style="width: 100%;">
    <form class="d-flex" action="/payment" method="POST">
      @csrf
      <div class="card d-flex flex-column align-items-center py-5" style="width: 50%;">
        <h4 class="mb-4"><b>Contact and Shipment Information</b></h4>
        <div class="row mb-3">
          <div class="col">
            Name
          </div>
          <div class="col-8">
            <input class="form-control" type="text" name="username" value="{{ $buyer->username }}" >
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            Phone
          </div>
          <div class="col-8">
            <input class="form-control" type="text" name="phone" value="{{ $buyer->phone }}" >
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            Address
          </div>
          <div class="col-8">
            <textarea class="form-control" name="address" id="" cols="18" rows="4" >{{ $buyer->address }}</textarea>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            City
          </div>
          <div class="col-8">
            <input class="form-control" type="text" name="city" value="{{ $buyer->city }}" >
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            Province
          </div>
          <div class="col-8">
            <input class="form-control" type="text" name="province" value="{{ $buyer->province }}" >
          </div>
        </div>
        <div class="row mb-3">
          <div class="col">
            Postcode
          </div>
          <div class="col-8">
            <input class="form-control" type="text" name="postcode" value="{{ $buyer->postcode }}" >
          </div>
        </div>
        <div class="row">
          <div class="col">
            Shipment Type
          </div>
          <div class="col-8">
            <select name="shipmentType" class="custom-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              @foreach ($shipmentMethods as $shipment)
                <option value="{{ $shipment->id }}">{{ $shipment->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="card ml-5 p-5" style="width: 50%;">
        <div class="row">
          <div class="col">Order Summary</div>
          <div class="col">@currency($orderSummary)</div>
        </div>
        <hr>
        @foreach ($cartProducts as $item)
        <div class="row mb-3">
          <div class="col">{{ $item->product->name }}</div>
          <div class="col">@currency($item->product->price)</div>
        </div>
        @endforeach
        <input type="hidden" name="cartProducts" value="{{ $cartProducts }}">
        <div class="d-flex mb-3">
          <input class="form-control" type="text" name="voucherCode" id="voucher-code" placeholder="Discount Code" style="width: 200px; margin-right: 1rem;">
          <button id="voucher-code-btn" class="btn btn-warning" type="button">Use Voucher</button>
        </div>
        <div class="row mb-3">
          <div class="col">Subtotal</div>
          <div id="sub-total" class="col">@currency($subTotal)</div>
        </div>
        <div class="row mb-3">
          <div class="col">Shipping</div>
          <div class="col">Free shipping!</div>
        </div>
        <div class="row mb-3" id="discount">
        </div>
        <div class="row">
          <div class="col">
            Payment Method
          </div>
          <div class="col-8">
            <select name="paymentMethod" class="custom-select" id="validationCustom04" required>
              <option selected disabled value="">Choose...</option>
              @foreach ($payments as $payment)
                <option value="{{ $payment->id }}">{{ $payment->name }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <hr>
        <div class="row mb-3">
          <div class="col"><b>Total</b></div>
          <div id="total-price" class="col"><b>@currency($totalPrice)</b></div>
          <input id="form-total-price" type="hidden" name="totalPrice" value="{{ $totalPrice }}">
        </div>
        <button class="btn btn-success" type="submit">Continue to payment</button>
      </div>
    </form>
  </div>
  <div id="modal-voucher-success" class="modal fade" id="buy-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5>Voucher applied!</h5>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>    
        </div>
      </div>
    </div>
  </div>
  <div id="modal-voucher-fail" class="modal fade" id="buy-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h5>Failed to apply voucher.</h5>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>    
        </div>
      </div>
    </div>
  </div>
@endsection

@section('more-js')
  <script>
    let voucherBtn = document.getElementById('voucher-code-btn');
    let voucherInput = document.getElementById('voucher-code');
    let subTotal = {!! $subTotal !!};
    let subTotalEl = document.getElementById('sub-total');
    let totalPriceEl = document.getElementById('total-price');
    let formTotalPrice = document.getElementById('form-total-price');
    let discountWrapper = document.getElementById('discount');

    voucherBtn.addEventListener('click', async function(e) {
      let voucherCode = voucherInput.value.trim();
      if (voucherCode == "" || voucherCode == null) {
        e.preventDefault();
        return;
      }

      let res = await fetch('/voucher', {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        credentials: "same-origin",
        body: JSON.stringify({
          'voucherCode': voucherCode,
          'subTotal': subTotal
        })
      });

      let result = await res.json();

      if (result.code != 200) {
        $('#modal-voucher-fail').modal('show');
      } else {
        let discount = new Intl.NumberFormat("id-ID", {
          style: "currency",
          currency: "IDR"
        }).format(result.result.discount);

        let newSubTotal = new Intl.NumberFormat("id-ID", {
          style: "currency",
          currency: "IDR"
        }).format(result.result.subTotal);

        let newTotalPrice = new Intl.NumberFormat("id-ID", {
          style: "currency",
          currency: "IDR"
        }).format(result.result.totalPrice);

        subTotalEl.innerHTML = `<b>${newSubTotal}</b>`;
        discountWrapper.innerHTML = `<div class="col">Discount</div>
        <div class="col"><b>${discount}</b></div>`;
        totalPriceEl.innerHTML = `<b>${newTotalPrice}</b>`;
        formTotalPrice.value = newTotalPrice;
        $('#modal-voucher-success').modal('show');
      }
    });
  </script>
@endsection