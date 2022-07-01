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

//use Illuminate\Routing\Route;

Route::get('/', function () {
    return view('welcome');
});
 //Route::get('hello',function () {
  //  return '<html><body><h1>hello</h1><p>This is sample page.</p></body></html>';
 //});

//--テキスト--


use App\Http\Middleware\HelloMiddleware;

Route::get('hello', 'HelloController@index');
Route::post('hello', 'HelloController@post');


 //--実習用--
 Route::get('jissyu2', 'JissyuController@indax');

Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3_1', 'Jissyu3_1Controller@post');
Route::get('chapter3_2', 'Chapter3_2Controller@index');
Route::get('jissyu3_3', 'Jissyu3_3Controller@index');

Route::get('jissyu4_1', 'Jissyu4_1Controller@index');
Route::post('jissyu4_1', 'Jissyu4_1Controller@post');

Route::get('jissyu4_2', 'Jissyu4_2Controller@index');
Route::post('jissyu4_2', 'Jissyu4_2Controller@post');

Route::get('jissyu4_3', 'Jissyu4_3Controller@index');
Route::post('jissyu4_3', 'Jissyu4_3Controller@post');

//--効果測定--
Route::get('kouka1_1', 'Kouka1_1Controller@index');

Route::get('kouka1_2', 'Kouka1_2Controller@index');
Route::post('kouka1_2', 'Kouka1_2Controller@post');




