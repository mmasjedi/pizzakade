@extends('layouts.layout');


@section('content')
    <div class="wrapper pizza-details">
        <h1> Order For {{ $pizzaview->name}}</h1>
        <p class="type"> Type - {{ $pizzaview->type }}</p>
        <p class="Base"> Base - {{ $pizzaview->base }}</p>
    </div>
    <a href="/pizzas" class="back"><- Back to All Pizzas</a>
@endsection
