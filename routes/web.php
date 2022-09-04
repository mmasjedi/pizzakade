<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizza', function () {

    $pizza = [
      ["type" => "special", "crust" => "thin" ,"price" => 45] ,
      ["type" => "mix", "crust" => "thick" ,"price" => 18] ,
      ["type" => "meat and mushroom", "crust" => "garlic" ,"price" => 94]
    ];
    return view('pizzas' ,['keyname' => $pizza] );
});
