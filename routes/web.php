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
Route::any('test1','Student@test11');
Route::any('test1',['uses'=>'StudentController@test11']);
Route::any('test1',['uses'=>'StudentController@test11']);
Route::any('response',['uses'=>'StudentController@response']);

// 宣传页面
Route::any('activity0',['uses'=>'StudentController@activity0']);
// 活动页面 需要接受中间件的验证
Route::group(['middleware' => ['activity']],function(){
    Route::any('activity1',['uses'=>'StudentController@activity1']);
    Route::any('activity2',['uses'=>'StudentController@activity2']);
});



Route::group(['middleware' => ['web']],function(){

    Route::any('session1',[
        'as' => 'sess',
        'uses'=>'StudentController@session1']);
    Route::any('session2',['uses'=>'StudentController@session2']);
});
