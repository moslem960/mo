<?php /** @noinspection ALL */

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


use Illuminate\Support\Facades\Auth;
//
Route::get('/', function () {
    return view('welcome');
});
//
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//

Route::get('/index','pagescontroller@index');


Route::get('/books/{id}/edit','bookscontroller@edit')->name('books.edit');

Route::put('/books/{id}','bookscontroller@update')->name('books.update');

Route::get('/', function (\Illuminate\Http\Request $request) {
    $request->session()->put('name','hosein');
    return view('welcome');
});
//
//Route::get('/test', function () {
//
//    dump(__('message.welcome'));
//    App::setlocale('en');
//    dump(__('message.welcome'));
//});

//Route::get('/test/{locale}', function($locale){
//
//    App::setlocale('$locale');
//    dd(__('message.welcome'));
//});

//Route::get('/products','productcontroller@index');
//
//Route::get('/products/{id}','productcontroller@show');
//
//////////////////////////////

Route::get('/books','bookscontroller@index');

Route::get('/books/create','bookscontroller@create')->name('books.create');

Route::post('/books','bookscontroller@store')->name('books.store');

Route::get('/books/{id}','bookscontroller@show');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
