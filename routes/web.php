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
    return view('welcome');
});

use MyFirstPackage\{
	MySecond
};

Route::get("/test",function(){
	$myFirst = MyFirst::testSecond();
	echo $myFirst;

	echo "<br/>";
	$MySecond = new MySecond();
	echo $MySecond->testSecond();
});

Route::get("/test-controller","TestController@hai");