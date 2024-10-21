<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// home
Route::get('/home', function () {
$title = "PRODOTTI";
$productList = ["Mele",
                "banane",
                "arance",
                "kiwi",
                "fragole"];
return view('home',compact("title", "productList"));});

Route::get('/animals', function(){
    $title = "ANIMALS";
    $animalList = ["Gatto",
                    "Cane",
                    "Pecora",
                    "Volpe"];
    return view('animals',compact("title","animalList"));})->name('animals');