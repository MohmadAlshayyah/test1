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
    $data=[];
    $data['id']=5;
    $data['name']='Mohmad';
    return view('welcome',$data);
});
Route::get('/landing', function () {
   
    return view('landing');
});


Route::get('/test1', function () {
    return 'welcome';

})-> name('a');

Route::get('/test2/{id?}', function () {

    return 'welcome';

})-> name('b');

Route::namespace('Front') ->group(function(){

Route::get('users','UserController@showUserName');



});

Route::get('first','Admin\FirstController@showString');

Route::resource('news','NewsController');



Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');


