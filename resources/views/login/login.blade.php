@extends('layouts.app')

{{-- @section('more-style')
    <style>
        a {
       style="text-decoration: none; color: #F4F0E3;"
    }
    </style>
@endsection --}}
@section('title', 'Login')

@section('header')
    @include('components.navbar')
@endsection

@section('main')
    <div class="d-flex flex-column justify-content-center align-items-center container mt-4 mb-5" style="height: 100%;">
        <div class="text-center mb-5">
            <img src="{{ asset('assets/logo/desktop_logo.png') }}" alt="Logo Well Plant" style="width: 35%">
        </div>
        <div class="rounded d-flex flex-column justify-content-center align-items-center container p-5" style="background-color: #F0FFD7; width: 35%;">
            <h4 class="mb-3" style="color: #1F2A01;">Login as</h4>
            <a class="btn btn-block mb-3" href="{{ route('login.buyer') }}" style="text-decoration: none; background-color: #1F2A01; width: 100%; height: 100%;">
                <div style="color: #F0FFD7;">
                    Buyer
                </div>
            </a>
            <h4 class="mb-3" style="color: #1F2A01;">Or</h4>
            <a class="btn btn-block" href="" style="text-decoration: none; background-color: #1F2A01; width: 100%; height: 100%;">
                <div style="color: #F0FFD7;">
                    Seller
                </div>
            </a>
        </div>
    </div>
@endsection