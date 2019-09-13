<?php

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

use App\Http\Controllers\CidadeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return "Esta aplicação é a primeira do curso de laraval.";
});

Route::get('/phpinfo', function () {
    phpinfo();
});

Route::get('/helloworld',"TesteController@index" );

Route::get('/helloworld/{nome}/{idade}',"TesteController@index2" );



//Route::middleware('CheckAge')->group(function(){
    Route::get('/index1',"TesteController@index" );
    Route::post('/index1',"TesteController@indexPost" );
  
//}); 



//Route::redirect('/welcome','/welcome');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('cidades','CidadeController');
