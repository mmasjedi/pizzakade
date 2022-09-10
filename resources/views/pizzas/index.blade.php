@extends('layouts.layout');


@section('content')

<div class="wrapper pizza-index">
    <h1>Pizza Orders <a class="tab" href="/pizzas/create">Create a New Pizza
 > </a>

    @foreach($keyname as $y)
        <div class="pizza-item">
            <img src="/img/pizza.png" alt="">
            <p><a class="pizza-item" href="/pizzas/{{$y->id}}">{{ $y->name }}</a></p>
        </div>
    @endforeach
</div>

@endsection
