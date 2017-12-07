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

Route::get('/page', 'PagesController@index');

Route::get('/info', 'PagesController@info');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return ('hello world');
});

Route::get('/about', function (){
    return view('pages.about');
});

Route::get('/users/{id}/{name}', function ($id, $name){
    return 'this is ' .$name. ' with id of ' .$id;
});

Route::prefix('dance') ->group (function () {
    Route::get('samba', function(){
      return('samba dance');
    });
    Route::get('waltz', function(){
      return('waltz dance');
    });
});
