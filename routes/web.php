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
    return view('home');
})->name('home');

Route::get('/prodotti', function () {
    $data = [
        'products' => config('paste'),
        'app_name' => config('app.name')
    ];

    return view('products.index', $data);
})->name('prodotti');

Route::get('/prodotti/{id}', function ($id) {

    $paste = config('paste');
    if ($id < count($paste)) {
        $pastaBellissima = $paste[$id];
        $data = [
            'pasta' => $pastaBellissima
        ];

        return view('products.show', $data);
    } else {
        abort(404);
    }
})->where('id', '[0-9]+')->name('prodotto');

Route::get('/prodotti/sostenibilita', function () {
    return 'pagina prodotti/sostenibilita';
})->name('sostenibilita');

Route::get('/contatti', function () {
    return view('contact');
})->name('contatti');
