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
    $obj = app()->make('TestServiceContainer');
    $obj->setName('dong anh');
    $obj2 = app()->make('TestServiceContainer');

    $arrayOne = ['xanh', 'do', 'tim'];
    $arraySecond = [1, 2, 3];

    \Debugbar::info('array_combine', array_combine($arrayOne, $arraySecond));
    \Debugbar::info('array_merge',array_merge($arrayOne, $arraySecond));
    \Debugbar::info('array_push', array_push($arrayOne, $arraySecond));
    return view('welcome');
});
