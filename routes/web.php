<?php

use Illuminate\Support\Facades\Route;
use App\Models\Anime;

Route::get('/', function () {


    $idea=Anime::query()->when(request('season'),function ($query,$state){
        $query->where('season',$state);
    })->get();

    return view('welcome',[
        'ideas'=>$idea,
    ]);




    //$ideas=DB::table('anime')->get();

    //return view('welcome', [

      //  'ideas' => $ideas // passage de la variable vers la vue
    //]);
});

Route::get('/about', function () {
    return view('about');
});


Route::get('/ideas', function () {

    $idea=Anime::all();
    return view('ideas', [
        'ideas'=>$idea // passage de la variable vers la vue
    ]);
});



Route::get('/add_anime',function () {
    DB::table('anime')->insert([
        'name' => 'MHA',
        'season' => 8,
        'platform' => 'Crunchyroll'
    ]);

    return redirect('/');
});



Route::post('/ideas', function () {
    $anime = new Anime();

    $anime->name = request('name');
    $anime->season= request('season');
    $anime->platform = request('platform');
    $anime->save();


    return redirect('/');
});


// une autre façon de faire les views
Route::view('/contact','contact');
