@extends('layouts.app')

@section('more-style')
    {{-- <style>
        a {
       style="text-decoration: none; color: #F4F0E3;"
    }
    </style> --}}
@endsection
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
            <h4 class="mb-3" style="color: #1F2A01;">Login</h4>
            <form action="/login" method="post">
              @csrf
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
              </div>
              <input type="hidden" name="user" value="buyer">
              <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>
@endsection