@extends('layouts.layout');


@section('content')
    <div class="wrapper pizza-details">
        <h1> Order For {{ $pizzaview->name}}</h1>
        <p class="type"> Type - {{ $pizzaview->type }}</p>
        <p class="Base"> Base - {{ $pizzaview->base }}</p>
        <p class="toppings">Extra Toppings: </p>
        <ul>
            @foreach($pizzaview->toppings as $g)
                <li>{{ $g }}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{$pizzaview->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete & Complite Order</button>
        </form>
        <form action="/pizzas/" method="GET">
            <button>Back To Home</button>
        </form>
    </div>
    <a class="a-link-color" href="/pizzas" class="back"><- Back to All Pizzas</a>
@endsection
