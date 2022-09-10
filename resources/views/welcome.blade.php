@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">

        @if(Route::has('login'))
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
            <img src="img/pizza-kade.png" alt="">
            <div class="title m-b-md">
                The Tehran's Best Pizzas
            </div>
            <p class="mssg">{{ session('mssg') }}</p>
            <form action="/pizzas/create" method="get">
                
                <input type="submit" value="Create a new pizza">

            </form>
          <br>
            <form action="{{ route('pizzas.create') }}" method="get">
                <input type="submit" value="List of order">
            </form>
        </div>
    </div>
@endsection
