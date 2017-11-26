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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;

// home page of the website
Route::get('/', function () {
        return view('home.index');
    })->name("home");

Route::get('/home', function () {
        return redirect()->route('home');
    });


/**************** blog section of the website ********************/

// blog home page
Route::resource('blog', 'BlogController');
Route::post('blog/{blog}/comment', 'BlogController@update');

//Route::get('/blogs', [
//    "as" => "blog",
//    "uses" => 'BlogController@index']);
//
//// blog show page
//Route::get("/blog/{blogId}", [
//    "as" => "blogShow",
//    function () {
//        $title = "blog";
//        return view("blog.show", compact( "title"));
//    }]);

/**************** forum section of the website ********************/

// forum home page
Route::get('/forum', [
    "as" => "forum",
    function () {
        $title = "forum";
        return view('forum.index')->with("title", $title);
    }]);

/**************** contest section of the website ********************/

// full contest controller
Route::resource('contests', 'ContestController');

// contest home page
//Route::get('/contests', [
//    "as" => "contests",
//    function () {
//        $title = "contest";
//        return view('contests.index')->withTitle($title);
//    }]);

// single contest details showing page
Route::get("/contests/{id}", [
    "as" => "contestShow",
    function () {
        $title = "contest";
        return view("contests.show", compact("id", "title"));
    }]);

// single contest problems displaying page
// single contest details showing page
Route::get("/contests/{contestId}/{problemId}", [
    "as" => "contestProblemShow",
    function () {
        $title = "contest";
        return view("contests.problems", compact("contestId", "problemId", "title"));
    }]);

/**************** upcoming events section of the website ********************/

// full events controller
Route::resource('upcomingEvents', 'EventController');


// adding users choice and the event
Route::post('upcomingEvents/add/{event}', 'EventController@add')->name('event_add_user');

// events home page
//Route::get('/upcomingEvents', [
//    "as" => "upcomingEvents",
//    function () {
//        $title = "upcomingEvent";
//        return view('upcomingEvents.index', compact("title"));
//    }]);

/**************** rank list section of the website ********************/

// full rank controller
Route::resource('rank', 'RankController');

// rank home page
//Route::get('/rank', [
//    "as" => "rank",
//    function () {
//        $title = "rank";
//        return view('rank.index', compact('title'));
//    }]);

Auth::routes();

/************** user ****************/
// user's profile page
Route::get('user', 'UserController@show')->name('user');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
