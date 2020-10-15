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

Route::get('/toni', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    echo('olá mundo');
});

Route::get('/', function(){
	echo('<h1>Olá mundo</h1>');
});

Route::get('/bem-vindo/aedah', function(){
	echo('<h1>esta é para o Agrupamento :)</h1>');
});

Route::get('/nome/{nome}', function($nome){
	echo('<h1>Olá '.$nome.'</h1>');
});
Route::get('/nome/{nome}/{apelido}', function($nome, $apelido){
	echo('<h1>Olá '.$nome.' '.$apelido.'</h1>');
});

Route::get('/nomes/{nome}/{n}', function($nome, $n){
	$numero=is_numeric($n)? $n:5;
	for ($i=0; $i < $numero; $i++) { 
		echo('<h1>Olá '.$nome.'</h1>');
	};
	return;
});

Route::get('/bien-venido', function () {
    return view('bem-vindo');
});