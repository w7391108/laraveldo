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

Route::get('welcome', function () {
    return view('welcome1');
});

Route::resource('articles','ArticlesController');

Route::resource('users','UsersController');


Route::get('young/{age}','UserController@young')->middleware("checkage");


Route::get('signup','UsersController@create')->name('signup');

Route::get('login','SessionsController@create')->name('login');
Route::post('login','SessionsController@store')->name('login');

Route::delete('logout','SessionsController@destory')->name('logout');

// Route::get('/',function() {
// 	return view('greet',['name'=>'James']);
// });

// Route::get('home',function() {
// 	return response('Hello World',200)
// 				->header('Content-Type','text/plain')
// 				->header('X-Header-One','Header Value')
// 				->header('X-Header-Two','Header Value');
// });

// Route::any('foo',function(){
// 	return "Hello World!";
// });

// Route::get('user/{id?}',function($id = null) {
// 	return 'User '.$id;
// })->where('id','[A-Za-z]');

// Route::get('posts/{post}/comments/{comment}',function($postId,$commentId){
// 	return 'PostId '.$postId.'<br>Comment '.$commentId;
// });

// Route::group(['prefix'=>'admin'],function() {
// 	Route::get('users',function() {
// 		return 'this is admin users';
// 	});
// });

// Route::get('/',function() {
// 	return view('welcome');
// });

// Route::get('/','HomeController@home')->name('home');

// Route::get('user/name','UserController@name');

// Route::get('young/{age}','UserController@young')->middleware("young");

Route::get('/','StaticPagesController@home')->name('home');

Route::get('about','StaticPagesController@about')->name('about');
Route::get('help','StaticPagesController@help')->name('help');

// Route::get('/help',function() {
// 	return url('foo');
// 	// return "Help Page";
// });

// Route::get('/foo',function() {

// })->name('foo');

// // Route::get('name/{name}',function($name) {
// // 	return 'I`m '.$name;
// // });
// Route::get('hello/{name?}/age/{age}',function($name,$age) {
// 	return 'I`m '.$name.' ,and I`m '.$age;
// })->where(['name'=>'[A-Za-z]+','age'=>'[0-9]+']);

// Route::group(['prefix'=>'user/{$id}'],function() {
// 	Route::get('name',function($id) {

// 	});
// });


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
// 
// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
