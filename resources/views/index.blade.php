@extends('layouts.app')
@section('more-css')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('title', 'Well Plant')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
    <div class="d-flex flex-column align-items-center justify-content-center" style="width: 100%; height: 100%">
      <h1 class="font-weight-bold">Make Your Own Plan to Grow Your Plant</h1>
      <form action="">
        <input type="text" class="form-control" placeholder="Find your plant here!">
      </form>
      <a class="d-flex align-items-center mt-2" href="#best-sellers" style="text-decoration: none; color: #1F2A01">
        <i class="material-icons">expand_more</i>
        See products
      </a>
    </div>
    {{-- <div id="best-sellers">
      @foreach ($bestSellers as $product)
        <div>
          <img src="" alt="">
          <h5></h5>
          <p></p>
        </div>
      @endforeach
    </div> --}}
@endsection

@section('footer')
  @include('components.footer')
@endsection