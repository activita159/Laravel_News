<?php

use Illuminate\Support\Facades\Route;

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
    // return view('index');
    return view('welcome');
});


// Route::get('test',function(){

//     //$變數名稱

//     $data = ['a'=>123,'b'=>456];

//     dd($data['a']);

//     //算術運算子 + - * / ** %
//     //比較運算子 > < >= <= == != <>
//     //邏輯運算子 && || !
//     $num1 = '5';
//     $num2 = '2';


//     //if(){}
//     //elseif(){}
//     //else(){}

//     dd($num1.$num2);// . 字串相加
//     return 'hello World';
// });



// Route::get('test', function ()
// {
//     $data = '123';
//     $data2 = '456';
//     // return view('test',['abc'=>$data]);
//     // return view('test')->with('abc',$data);
//     return view('test',compact('data','data2'));

// });






Route::get('news','NewsController@index');
Route::get('news/details/{id}','NewsController@details');

//新增資料
Route::get('news/create','NewsController@create');

//儲存資料
Route::post('news/store','NewsController@store');

//編輯資料
Route::get('news/edit/{id}','NewsController@edit');

//更新頁面資料



Route::post('news/update','NewsController@update');
Route::get('news/delete/{id}','NewsController@delete');

// Route::get('news/details',function()
// {
//     return view('news.taiwan-page1');
// });
















Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
