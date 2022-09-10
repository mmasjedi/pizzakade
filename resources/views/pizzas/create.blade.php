@extends('layouts.layout');


@section('content')
<div class="wrapper create-pizza">
    <h1>Create a New Pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <!-- name -->
        <label for="name">Your Name:</label>
        <input type="text" name="name" id="name" required>


        <!-- type -->
        <label for="type">Choose Type Of Pizza:</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="vegtable">Vegtable</option>
            <option value="special">special</option>
            <option value="mix">mix</option>
            <option value="pepperoni">pepperoni</option>
            <option value="steak">steak</option>
            <option value="meat-and-mushrom">meat-and-mushrom</option>
            <option value="chicke">chicke</option>
            <option value="neaplitan">neaplitan</option>
        </select>


        <!-- base -->
        <label for="type">Choose crust:</label>
        <select name="base" id="base">
            <option value="thick">Thick</option>
            <option value="thin">Thin</option>
            <option value="cheese">Cheese</option>
            <option value="garlic">Garlic</option>
            <option value="flat">Flat</option>
        </select>



        <!-- toppings -->
        <br />
        <br />
        <fieldset>
            <lable>Extra Toppings:</lable>
            <br />
            <br />
{{--                        Chon besoorat jeyson va araye toopings ersal mishe bayad dar [] bashad--}}
            <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br />
            <input type="checkbox" name="toppings[]" value="garlic">Garlic<br />
            <input type="checkbox" name="toppings[]" value="cheese">Cheese<br />
            <input type="checkbox" name="toppings[]" value="tomato">Tomato<br />
            <input type="checkbox" name="toppings[]" value="olives">Olives<br />
            <input type="checkbox" name="toppings[]" value="peperoni">Peperoni<br />
        </fieldset>

        <!-- submit -->
        <input type="submit" value="Order Pizza">
    </form>
    <form action="/pizzas" method="get">  
    <input type="submit" value="back">
    </form>
</div>
@endsection
