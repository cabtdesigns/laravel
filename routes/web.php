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

Route::get('/og', function () {
    return view('welcome-OG');
});

Route::get('/pizza', function () {
    //get from db
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust', 'price' => 10],
        ['type' => 'volcano', 'base' => 'garlic crust', 'price' => 10],
        ['type' => 'veg supreme', 'base' => 'thin and crispy', 'price' => 10]
    ];
    
    return view('pizza', ['pizzas' => $pizzas]);
});

Route::get('/notes', function () {
    //get from db
    $pizza = [
        'type' => 'hawaiian',
        'base' => 'cheesy crust',
        'price' => 10
    ];
    
    return view('notes', $pizza);
});