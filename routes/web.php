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
use App\Http\Controllers\LanguageController; 

Route::get('/', 'AuthController@loginForm'); 
Route::post('/login', 'AuthController@login'); 

Route::group(['middleware' => ['check.login', 'prevent.back', 'setlocale']], function () {
    Route::get('/movies', 'MovieController@index'); 
    Route::get('/movies/{id}', 'MovieController@show'); 
    Route::get('/logout', 'AuthController@logout'); 
    Route::post('/favorites', 'FavoriteController@store'); 
    Route::get('/favorites', 'FavoriteController@index'); 
    Route::delete('/favorites/{id}', 'FavoriteController@destroy'); 
});

Route::get('/change-language/{locale}', function ($locale) {

    if (! in_array($locale, ['en','id'])) {
        abort(400);
    }
    session(['locale' => $locale]);

    return back();
})->name('change.language');


Route::fallback(function () {
    return redirect('/');
});



