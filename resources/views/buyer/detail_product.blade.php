@extends('layouts.app')

@section('more-style')
    <style>
      
    </style>
@endsection
@section('more-css')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('title', $product->name)

@section('header')
    @include('components.navbar')
@endsection

@section('main')
  <div class="container d-flex mt-5" style="width: 100%;">
    <div class="d-flex flex-column align-items-center pr-5" style="border-width: 1px; width: 50%;">
      <img class="rounded" src="{{ asset('assets/categories/'.$product->categoryId.'/'.$product->subCategoryId.'/'.$product->id.'.png') }}" alt="{{ $product->name }}" style="width: 100%; object-fit: contain;">
    </div>
    <div class="ml-5" style="width: 50%;">
      <div>
        <h3>Description</h3>
        <p>{{ $product->description }}</p>
      </div>
      @if (@$product->takeCareDesc != null)
        <div class="mt-5">
          <h3>How to take care</h3>
          <p>{{ $product->takeCareDesc }}</p>
        </div>
      @endif
      <div class="mt-5">
        <h3>Price</h3>
        <p>@currency($product->price)</p>
      </div>
      <div class="d-flex justify-content-end">
        <button id="add-plant" class="btn btn-warning mr-2" style="width: 100px;">Add Plant</button>
        <button class="btn btn-success" data-toggle="modal" data-target="#buy-modal" style="width: 100px;">Buy</button>
      </div>
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
  <div id="add-plant-success" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Success add plant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="add-plant-fail" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Failed add plant</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Okay</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="buy-success" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Transaction Success</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Okay</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div id="buy-fail" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Transaction Failed</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary">Okay</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('more-js')
  <script>
    let productId = {!! Js::from($product->id) !!}
    let addPlantBtn = document.getElementById('add-plant');
    let buyBtn = document.getElementById('buy');

    addPlantBtn.addEventListener('click', async function(e) {
      let res = await fetch('/add-plant/' + productId);
      let result = await res.json();

      if (result?.code != 200) {
        $('#add-plant-fail').modal('show');
        return;
      } else {
        $('#add-plant-success').modal('show');
        $("#add-plant-success").on("hidden.bs.modal", function () {
          window.location.href = 'http://127.0.0.1:8000/home';
        });
      }
    });

    // buyBtn.addEventListener('click', async function(e) {
    //   let res = await fetch('');
    //   let data = res.json();

    //   if (result?.code != 200) {
    //     $('#buy-fail').modal('show');
    //     return;
    //   } else {
    //     $('#buy-success').modal('show');
    //     $("#buy-success").on("hidden.bs.modal", function () {
    //       window.location.href = 'http://127.0.0.1:8000/';
    //     });
    //   }
    // });
  </script>
@endsection