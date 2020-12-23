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

    $data = config('site-data');

    $lunghe = [];
    $corte = [];
    $cortissime = [];

    foreach ($data as $key => $box){

        $box['id'] = $key;

        if($box['tipo'] == 'lunga'){
            $lunghe[] = $box;
        }
        elseif ($box['tipo'] == 'corta'){
            $corte[] = $box;
        }
        elseif ($box['tipo'] == 'cortissima'){
            $cortissime[] = $box;
        }
    }


    //dd($lunghe, $corte, $cortissime);

    //return view('welcome', ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime]);

    //$collection = ['lunghe' => $lunghe, 'corte' => $corte, 'cortissime' => $cortissime];
    //return view('welcome' , $collection);

    return view('welcome' , compact('lunghe', 'corte', 'cortissime'));

})->name('welcome');


// Product detail 
Route::get('/product/{id}', function ($id) {
    //dump($id);

    $data = config('site-data');

    $product = $data[$id];
    $length = count($data) -1;

    return view('product', compact('product', 'length', 'id'));
})->name('product');


// News page
Route::get('/news', function () {
    return view('news');
})->name('news');
