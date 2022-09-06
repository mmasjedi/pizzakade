@extends('layouts.layout');


@section('content')

<div class="wrapper pizza-index">
    <h1>Pizza Orders <a class="tab" href="/pizzas/create">Home > </a>

    @foreach($keyname as $y)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="">
            <h4><a class="a-link-color " href="/pizzas/{{$y->id}}">{{ $y->name }}</a> </h4>
        </div>
    @endforeach
</div>

@endsection
