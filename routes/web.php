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

    $user = factory(\App\User::class)->create();

    $user->posts()->create([
        'title' => 'Title Here',
        'body' => 'body Here',
    ]);

    $user->posts->first()->title = 'New Title';
    $user->posts->first()->body = 'New Better Body';

    $user->push();

    return $user->posts;

});
