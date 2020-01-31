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
Route::get('/customers',function(){

    $faker =Faker\Factory::create();
    $limit = 10;
    echo"<ul>";
    for($i =0; $i < $limit; $i++){

        $customer =$faker->name.'-'.$faker->unique()->email.'-'.$faker->phoneNumber ;
        echo"$customer";
        echo"</br>";
        echo"</br>";
    }
    echo"</ul>";


});
