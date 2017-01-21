<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('name/{name}', function($name){
	echo 'you are ' . $name;
});

Route::get('id/{id?}',function($id = NULL){
	echo 'id is '.$id;
})
->where ('id','[0-9]+');
Route::get('name/{name}/id/{id}',function($name,$id){
	echo 'you are '.$name;
	echo "<br />";
	echo 'your id is '.$id;
})
->where ('name','[a-zA-z]+','id','[0-9]+');
Route::post('test',function(){
	echo 'posted';
});

Route::get('home', function(){
	return view('home');
});

Route::get('about', function(){
	return view('about');
});

Route::get('veg',function(){
	return view('fruits');
});

Route::get('namedRoutes',[
	'as'=>'index page',
	'uses'=>'PagesController@getIndex'
	]);

Route::group(['as'=>'admin::','prefix'=>'admin'],function(){
	Route::get('dash',[
	'as'=>'dash',
	'uses'=>'PagesController@getdash'
	]);

	Route::get('report',[
	'as'=>'report',
	'uses'=>'PagesController@getreport'
	]);
});

Route::resource('product','ProductController');

Route::get('contact',function(){
	return view('contact');
});

Route::get('test', function(){
	echo '<form action="test" method="post"> ';
	echo '<input type="submit" value="submit"> ';
	echo '<input type="hidden" name="_token" value="'.csrf_token().'">';
	echo '<input type="hidden" name="_method" value="delete"> ';

});

Route::put('test', function(){
	echo 'put';
});

Route::delete('test', function(){
	echo 'Delete';
});

Route::group(['middlewareGroups'=>['web']],function(){
	Route::get('/login',['as' =>'login','uses'=>'AuthController@login']);
	Route::post('/handleLogin',['as'=>'handleLogin','uses'=>'AuthController@handleLogin']);
	Route::get('/home',['middleware'=>'auth' ,'as'=>'home','uses'=>'UsersController@home']);
	Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);
	Route::get('/fruits',['as'=>'fruits','uses'=>'AuthController@fruits']);
	Route::resource('users','UsersController',['only'=>['create','store']]);
});

