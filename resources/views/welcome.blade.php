@extends('layouts.layout')

<!--section can be called what ever you want-->
@section('content')

<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
        <img src="../public/img/pizza-house.png" alt="logo">
        <div class="title m-b-md">
            Best Pizza EVER!
        </div>

    
    </div>
</div>

@endsection