<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $ideas = session()->get('ideas', []);

    return view('welcome', [
        'greeting' => 'hello',
        'person' => request('person', 'world'),
        'ideas' => $ideas // passage de la variable vers la vue
    ]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/ideas', function () {

    $ideas = session()->get('ideas','nothing');
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
