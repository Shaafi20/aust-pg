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

use Illuminate\Support\Facades\Route;

// home page of the website
Route::get('/', [
    "as" => "home",
    "uses" => function () {
    return view('home.index');
}]);


/**************** blog section of the website ********************/

// blog home page
Route::get('/blog', [
    "as" => "blog",
    "uses" => function () {
    $title = "blog";
    return view('blog.index')->withTitle($title);
}]);

/**************** forum section of the website ********************/

// forum home page
Route::get('/forum', [
    "as" => "forum",
    function () {
    $title = "forum";
    return view('blog.index')->withTitle($title);
}]);
