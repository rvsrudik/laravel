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

Route::get('/page', function () {
    echo "hello";
    return;
});

Route::get('/env', function ()
{
   echo '<pre>';
   print_r($_ENV);
   echo '</pre>';

//   echo config('app.locale');
//   Config::set('app.locale', 'ru');
//   echo Config::get('app.locale');

   echo env('APP_ENV');
});

//Route::post('/comments', function () {
//    print_r($_POST);
//});
//
//Route::match(['get', 'post'], '/comments', function () {
//  print_r($_POST);
//
//});

//Route::any('/comments', function () {
//    print_r($_POST);
//
//});