<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PizzaController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/pizzas',[PizzaController::class, 'index'])->middleware('auth')->name('pizzas.index');
Route::get('/pizzas/create',[PizzaController::class,'create'])->name('pizzas.create');
Route::post('/pizzas',[PizzaController::class, 'store']);
Route::get('/pizzas/{id}',[PizzaController::class,'show'])->middleware('auth');
Route::DELETE('/pizzas/{id}',[PizzaController::class,'destroy']);



Auth::routes(
    ['register' => false]
);
Route::get('/home', [HomeController::class, 'index'])->name('home');


