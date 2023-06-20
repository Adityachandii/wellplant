@extends('layouts.app')

@section('more-style')
    <style>
      .plants {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
        grid-gap: 20px;
      }
      .see-more-plants {
        text-decoration: none;
        color: black;
        padding: 0.5rem;
      }
      .see-more-plants:hover {
        color: white;
        text-decoration: none;
      }
      .see-more-plants-wrapper:hover {
        background-color: #1f2a01;
      }
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
    <div class="container">
      <div class="d-flex justify-content-between mb-3">
        <h4><b>Your Plants</b></h4>
        <div class="d-flex rounded align-items-center see-more-plants-wrapper">
          <a class="see-more-plants" href="">See More</a>
        </div>
      </div>
      <div class="plants">
        @foreach ($plants as $plant)
          <div class="card">
            <img class="card-img-top" src="{{ asset('assets/categories/'.$plant->product->categoryId.'/'.$plant->product->subCategoryId.'/'.$plant->product->id.'.png') }}" alt="{{ $plant->name }}" style="width: 100%; height: 50%; object-fit: cover;">
            <div class="card-body">
              <p>{{ $plant->name }}</p>
            </div>
          </div>
        @endforeach
      </div>
      <div class="d-flex justify-content-between mt-5">
        <div class="card p-4 mr-5">
          <h5><b>Watering Plant</b></h5>
          <div class="card-body">
            @foreach ($plants as $plant)
              <ul>
                @foreach ($plant->reminder as $reminder)
                  @if (@$reminder->type == 'water')
                    <li>Time to water your {{ $plant->name }} at {{ $reminder->date }} {{ $reminder->hour }}</li>
                  @endif
                @endforeach
              </ul>
            @endforeach
          </div>
        </div>
        <div class="card p-4">
          <h5><b>Fertilizing Plant</b></h5>
          <div class="card-body">
            @foreach ($plants as $plant)
              <ul>
                @foreach ($plant->reminder as $reminder)
                  @if (@$reminder->type == 'fertilize')
                    <li>Time to water your {{ $plant->name }} at {{ $reminder->date }} {{ $reminder->hour }}</li>
                  @endif
                @endforeach
              </ul>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
