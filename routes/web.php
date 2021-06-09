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


/* Home route */
Route::get('/', function () {
    
    $comics_array = config('comics');
    
    $data = [
        "comics_array" => $comics_array
    ];
    
    return view('home', $data);
})->name('home');


/* Comic route */
Route::get('comic/{id}', function($id){
    $comics_array = config('comics');
    $selected_comic = [];


    //itera l'array alla ricerca del prodotto con id $id
    foreach($comics_array as $item){

        //se trovato, allora selected_comic diventa l'array con id corrispondente a quello passato nell url
        if($item['id'] === (int)$id){
            $selected_comic = $item;
        }
    }

    //se il prodotto non viene trovato, allora errore 404
    if(empty($selected_comic)){
        abort('404');
    }


    $data = [
        'selected_comic' => $selected_comic
    ];

    return view('comic', $data);
})->name('comic');