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

    $user = \App\User::first();
//
//    $user->roles()->sync([
//        1 => [
//            'name' =>'victor'
//        ]
//    ]);

    dd($user->roles->first()->pivot->name);

});
