@extends('layouts.app')

@section('more-style')
    <style>
      
    </style>
@endsection
@section('more-css')
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
@endsection
@section('title', 'Plant Progress')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
  <div class="mt-5">
    <div>
      <h4>Your Plants</h4>
      {{-- ! Nanti kasih carousel --}}
    </div>
  </div>
@endsection
