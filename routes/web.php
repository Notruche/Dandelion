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

Route::get('/', function () {
    return view('home');
});

Auth::routes(['verify' => true]);

Route::post('/home/comment/store', 'CommentaireController@store')->name('storeComment');

Route::get('/home', 'UserController@index')->name('home');

Route::get('/profil', 'HomeController@profil')->name('profil');

Route::get('/boucho', 'UserController@boucho')->name('boucho');

Route::get('/portfolio', 'UserController@portfolio')->name('portfolio');

Route::get('/portfolio-en', 'UserController@portfolioen')->name('portfolioen');

Route::get('/memoire', 'UserController@memoire')->name('memoire');

Route::get('/rubiks', 'UserController@rubiks')->name('rubiks');

Route::get('/chapitres', 'ChapitreController@index')->name('chapitre');

Route::get('chapitres/{id}', 'ChapitreController@show')->name('showChapitre');

Route::delete('/home/commentaire/delete/{id}','CommentaireController@destroy')->name('deleteComment');

Route::put('home/comment/update/{id}','CommentaireController@update')->name('updateComment');

Route::put('home/user/update/{id}','UserController@update')->name('updateUser');

Route::delete('/home/commentaire/delete/{id}','CommentaireController@destroy')->name('deleteComment');

Route::post('/home/user/store', 'UserController@store')->name('storeUser');
