@extends('layouts.app')


@section('content')

<div class="wrapper pizza-index">
    <h1>Pizza Orders</h1> 
    <form action="/" method="get">
        <input type="submit" value="Back"  >
    </form>
    <br />
    <br />
    @foreach($keyname as $y)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="">
            <p><a class="pizza-item" href="/pizzas/{{$y->id}}">{{ $y->name }}</a></p>
        </div>
    @endforeach
</div>

@endsection
