@extends('layouts.app')

@section('more-style')
    <style>
      .row-1 {
        display: grid;
        grid-template-columns: 2fr 1fr;
      }
      .row-2 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
      }
      .categories {
          border: 2px solid #015581;
          width: 200px;
          text-align: center;
      }
      .is-active {
          background-color: #015581;
          font-weight: 500;
      }
    </style>
@endsection
@section('title', 'Home')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
    <div class="row-1 container mt-5">
      <a class="card p-4 mr-5" href="{{ route('plantProgress') }}" style="text-decoration: none; color: #1E1E1E">
        <div class="">
          <h3 class="text-center">Plant Progress</h3>
          <div class="d-flex justify-content-between">
            <div class="text-center">
              <p>Total of Plants</p>
              <p>{{ $totalPlant }}</p>
            </div>
            <div class="text-center">
              <p>Total of Watering</p>
              <p>{{ $totalWatering }}</p>
            </div>
            <div class="text-center">
              <p>Total of Fertilizer</p>
              <p>{{ $totalFertilizered }}</p>
            </div>
          </div>
        </div>
      </a>
      <a class="card p-3" href="" style="text-decoration: none; color: #1E1E1E">
        <div class="">
          <h1>Vouchers</h1>
        </div>
      </a>
    </div>
    <div class="row-2 container mt-5">
        <a class="card p-4 mr-4" href="{{ route('showByCategoryId', ['categoryId' => 1]) }}" style="text-decoration: none; color: #1E1E1E">
          <div class="">
            <img src="" alt="">
            <h4>Plants and Seeds</h4>
          </div>
        </a>
        <a class="card p-4 mr-4" href="{{ route('showByCategoryId', ['categoryId' => 2]) }}" style="text-decoration: none; color: #1E1E1E">
          <div class="">
            <img src="" alt="">
            <h4>Vitamin and Plant's Needs</h4>
          </div>
        </a>
        <a class="card p-4" href="{{ route('showByCategoryId', ['categoryId' => 3]) }}" style="text-decoration: none; color: #1E1E1E">
          <div class="">
            <img src="" alt="">
            <h4>Gardening Tools</h4>
          </div>
        </a>
    </div>
@endsection
