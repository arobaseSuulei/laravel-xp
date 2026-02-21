<?php

use Illuminate\Support\Facades\Route;

Route::view('/','welcome',[
    'greeting'=>'hello',
    'person'=>request('person','world'),
]);


Route::get('/about', function () {
    return view('about');
});




// une autre façon de faire les views
Route::view('/contact','contact');
