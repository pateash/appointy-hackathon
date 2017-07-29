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

Route::get('/',function (){
    return view("welcome");
});

//user routes
Route::get('/users','UsersController@show');
Route::get('/user/{user}','UsersController@details');
Route::get('/user/{user}/orders','UsersController@orders');


//order routes
Route::get('/orders','OrdersController@show');
Route::get('/order/{order}','OrdersController@details');
Route::get('/order/{order}/agent','OrdersController@agent');

//returns
Route::get('/returns','ReturnController@show');
Route::get('/return/place/{order}','ReturnController@place');
Route::get('/return/complete/{order}','ReturnController@complete');
Route::get('/return/{return}','ReturnController@details');


//agent routes
Route::get('/agents','AgentController@show');
Route::get('/agent/{agent}','AgentController@details');
Route::get('/agent/{agent}/orders','AgentController@orders');
Route::get('/agent/{agent}/returns','AgentController@returns');
Route::get('/agents/free','AgentController@freeAgents');
Route::get('/agents/busy','AgentController@busyAgents');

//returns
