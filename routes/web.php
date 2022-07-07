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

Route::get('hello/add', 'HelloController@add');
Route::post('hello/add', 'HelloController@create');

//---------データの更新---------
Route::get('hello/edit', 'HelloController@edit');
Route::post('hello/edit', 'HelloController@update');

//---------------データの削除--------------------
Route::get('hello/del', 'HelloController@del');
Route::post('hello/del', 'HelloController@remove');

//----------------指定したIDのレコードを得るp207------------------------
Route::get('hello/show', 'HelloController@show');

//----------------p241---------------------
Route::get('person', 'PersonController@index');

//---------------p245------------------
Route::get('person/find', 'PersonController@find');
Route::post('person/find', 'PersonController@search');

//----------p259--------------
Route::get('person/add', 'PersonController@add');
Route::post('person/add', 'PersonController@create');

//--------------p263--------------------
Route::get('person/edit', 'PersonController@edit');
Route::post('person/edit', 'PersonController@update');

//--------------p265--------------------
Route::get('person/del', 'PersonController@delete');
Route::post('person/del', 'PersonController@remove');

//-------------p276-------------------
Route::get('board', 'BoardController@index');

Route::get('board/add', 'BoardController@add');
Route::post('board/add', 'BoardController@create');

 //--実習用--
 Route::get('jissyu2', 'JissyuController@indax');

Route::get('jissyu3', 'Jissyu3_1Controller@index');
Route::post('jissyu3_1', 'Jissyu3_1Controller@post');
Route::get('chapter3_2', 'Chapter3_2Controller@index');
Route::get('jissyu3_3', 'Jissyu3_3Controller@index');