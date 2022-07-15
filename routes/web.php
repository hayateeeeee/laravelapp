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

Route::get('jissyu10', 'Jissyu5_1Controller@index');
Route::get('jissyu10/show', 'Jissyu5_1Controller@show');

Route::get('jissyu11', 'Jissyu5_2Controller@index');
Route::get('jissyu11/show', 'Jissyu5_2Controller@show');
Route::get('jissyu11/add', 'Jissyu5_2Controller@add');
Route::post('jissyu11/create', 'Jissyu5_2Controller@create');
Route::get('jissyu11/edit', 'Jissyu5_2Controller@edit');
Route::post('jissyu11/update', 'Jissyu5_2Controller@update');
Route::get('jissyu11/del', 'Jissyu5_2Controller@del');
Route::post('jissyu11/remove', 'Jissyu5_2Controller@remove');

Route::get('jissyu13', 'Jissyu6_1Controller@index');
Route::post('jissyu13/find', 'Jissyu6_1Controller@find');

Route::get('jissyu14', 'Jissyu6_3Controller@index');
Route::post('jissyu14/find', 'Jissyu6_3Controller@find');
Route::get('jissyu14/show', 'Jissyu6_3Controller@show');
Route::get('jissyu14/add', 'Jissyu6_3Controller@add');
Route::post('jissyu14/create', 'Jissyu6_3Controller@create');
Route::get('jissyu14/edit', 'Jissyu6_3Controller@edit');
Route::post('jissyu14/update', 'Jissyu6_3Controller@update');
Route::get('jissyu14/del', 'Jissyu6_3Controller@del');
Route::post('jissyu14/remove', 'Jissyu6_3Controller@remove');

Route::get('jissyu16', 'Jissyu6_5Controller@index');
Route::get('jissyu16/show', 'Jissyu6_5Controller@show');


Route::get('kouka2_2', 'Kouka2_2Controller@index');
Route::post('kouka2_2/find', 'Kouka2_2Controller@find');
Route::get('kouka2_2/show', 'Kouka2_2Controller@show');
Route::get('kouka2_2/add', 'Kouka2_2Controller@add');
Route::post('kouka2_2/create', 'Kouka2_2Controller@create');
Route::get('kouka2_2/edit', 'Kouka2_2Controller@edit');
Route::post('kouka2_2/update', 'Kouka2_2Controller@update');
Route::get('kouka2_2/del', 'Kouka2_2Controller@del');
Route::post('kouka2_2/remove', 'Kouka2_2Controller@remove');
Route::get('kouka2_1', 'kouka2_1Controller@index');
Route::post('kouka2_1', 'kouka2_1Controller@find');
