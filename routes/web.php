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

Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);

//Route::get('/page', function () {
//    echo "hello";
//    return;
//});

//Route::get('/env', function ()
//{
//   echo '<pre>';
//   print_r($_ENV);
//   echo '</pre>';
//
//   echo config('app.locale');
//   Config::set('app.locale', 'ru');
//   echo Config::get('app.locale');

//   echo env('APP_ENV');
//});

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








Route::get('article/{id}', ['as'=>'article',function ($id) {
    return $id;
}]);




Route::get('page/{id}/{my}', function ($id, $cat) {

    echo $id.' | '.$cat;
});

Route::get('page2/{id?}', function ($id=50) {

    echo $id;
});


Route::get('page3/{id}', function ($id) {

    echo $id;
});


Route::get('page4/{cat}/{id}', function ($var1, $id) {

    echo $var1.' | '.$id;
})->where(['id'=>'[0-9]+', 'cat'=>'[A-Za-z]+']);



Route::group(['prefix'=>'admin/{id}'],function() {

    Route::get('page/create', function() {
       echo 'page/create';
    });

    Route::get('page/edit', function() {
        echo 'page/edit';
    });

});

Route::get('link', function() {
   echo route('home');
});

Route::get('redirect', function() {
    return redirect()->route('home');
});

Route::get('link2', function() {
    return redirect()->route('article', array('id'=>25));
});