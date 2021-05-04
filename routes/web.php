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
    return view('index');
});


Route::get('test',function(){

    //$變數名稱

    $data = ['a'=>123,'b'=>456];

    dd($data['a']);

    //算術運算子 + - * / ** %
    //比較運算子 > < >= <= == != <>
    //邏輯運算子 && || !
    $num1 = '5';
    $num2 = '2';


    //if(){}
    //elseif(){}
    //else(){}

    dd($num1.$num2);// . 字串相加
    return 'hello World';
});



Route::get('test', function ()
{
    $data = '123';
    $data2 = '456';
    // return view('test',['abc'=>$data]);
    // return view('test')->with('abc',$data);
    return view('test',compact('data','data2'));

});
