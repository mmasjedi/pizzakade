<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){

        $pizza = [
            ["type" => "special", "crust" => "thin" ,"price" => 45] ,
            ["type" => "mix", "crust" => "thick" ,"price" => 18] ,
            ["type" => "meat and mushroom", "crust" => "garlic" ,"price" => 94]
          ];
          
          $name = request('name');
      
          return view('pizzas' ,[
            'keyname' => $pizza , 
            'name' => $name ,
            'age' => request('age')
           ]);
    }

       public function show($id){

        return view('details',['id' => $id]);

       }
}

