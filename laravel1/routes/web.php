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
    return view('welcome');
});


Route::get('salut' , function () {
    return 'salut les gens';
});

 $route = Route::get('salut/{slug}-{id}', ['as' => 'salut','middleware' => 'ip', function($slug, $id){
    return "lien : " . route('salut' , ['slug' => 'nimp' , 'id' => $id]);
}])->where('name', '[a-z0-9\-]+')->where('id', '[0-9]+');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/blog', 'BlogController@index')->name('blog');
Route::get('/add', 'BlogController@addArticle')->name('blog.add');




