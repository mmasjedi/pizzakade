<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function index(){

//          $pizzas = Pizza ::all();                     # tamame data dar database ra dar $pizzas mirizad
//            $pizzas = Pizza::orderBy('name')->get();     # bar asase name sort mikonad
//            $pizzas = Pizza::orderBy('price','desc')->get();     # bar asase price sort mikonad be soorat nozooli
//            $pizzas = Pizza::where('type','special')->get();     # record haiee ra neshoon bede ke type anha special ast
            $pizzas = Pizza::latest()->get();     # bar asase akhrin record ha namayesh mideh az filed create at estefade mikone

             return view('pizzas.index' ,[
            'keyname' => $pizzas ,
            'name' => request('name'),
            'age' => request('age')
           ]);
    }

       public function show($id){

//            $pizza_id = Pizza::find($id);              # peydakardan bar asase id
            $pizza_id = Pizza::findOrFail($id);          # Dar soorat naboodan yek id safheye debug nemiayad va 404 midahad

            return view('pizzas.show',['pizzaview' => $pizza_id]);

       }

       public function create(){

        return view('pizzas.create');

    }
}

