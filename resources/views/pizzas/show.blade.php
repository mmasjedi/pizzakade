@extends('layouts.app')


@section('content')
    <div class="wrapper pizza-details">
        <p style="color:peru;">Name: <h style="color:indigo;">{{$pizzaview->name}}</h></p>
        <p style="color:peru;" class="type"> Type : <h style="color:indigo;">{{ $pizzaview->type }}</h></p>
        <p style="color:peru;" class="Base"> Base : <h style="color:indigo;">{{ $pizzaview->base }}</h></p>
        <p style="color:peru;" class="toppings">Extra Toppings: </p>
        <ul>
            @foreach($pizzaview->toppings as $g)
                <li style="color:peru;">{{ $g }}</li>
            @endforeach
        </ul>
        <form action="/pizzas/{{$pizzaview->id}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete & Archive Order</button>
        </form>
        <form action="/pizzas/" method="GET">
            <button>Back</button>
        </form>
    </div>
    
@endsection
