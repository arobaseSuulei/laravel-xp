<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $ideas=DB::table('anime')->get();

    return view('welcome', [

        'ideas' => $ideas // passage de la variable vers la vue
    ]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/ideas', function () {

    $ideas=DB::table('anime')->get();
    return view('ideas', [
        'ideas'=>$ideas // passage de la variable vers la vue
    ]);
});

Route::post('/ideas', function () {
    $idea = request('idea');
     session()->push('ideas',$idea);

    return redirect('/');
});




// une autre façon de faire les views
Route::view('/contact','contact');
