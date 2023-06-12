@extends('layouts.app')
@section('more-style')
  <style>
    /* .best-sellers {
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
    } */
    .features {
      background-color: #F0FFD7;
    }
  </style>
@endsection
@section('more-css')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('title', 'About Us')

@section('header')
    @include('components.navbar')
@endsection
{{-- class="d-flex flex-column align-items-center justify-content-center" style="height: 82vh" --}}
@section('main')
    <div class="d-flex flex-column align-items-center justify-content-center">
      <div class="container mt-5">
        <h1 class="font-weight-bold">What is Well Plant?</h1>
        <p>Well Plant is a website to help people who want to try farming as beginners or those who really have a hobby of farming</p>
      </div>
      <div class="container mt-4" id="">
        <h1 class="text-center mb-3">Well Plant Features</h1>
        <div class="row">
          <div class="col p-3 mr-3" style="background-color: #F0FFD7">
            <i class="material-icons">info</i>
            <h4>Information</h4>
            <p>We provide plant information from understanding, origin, how to care for it and the location of the plant shop that sells it</p>
          </div>
          <div class="col p-3 mr-3" style="background-color: #F0FFD7">
            <i class="material-icons">schedule</i>
            <h4>Reminder</h4>
            <p>We have a reminder tab which functions to water and fertilize the plants added by the user</p>
          </div>
          <div class="col p-3" style="background-color: #F0FFD7">
            <i class="material-icons">paid</i>
            <h4>Transaction</h4>
            <p>We connect sellers and buyers to make transactions easier in our application</p>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('footer')
  @include('components.footer')
@endsection