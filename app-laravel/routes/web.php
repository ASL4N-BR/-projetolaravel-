<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\produtocontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return view('teste');

});
Route::get('produtos\{id}',[ProdutoController:: class, 'show']);
  



