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
Route::get('/blogs', [
    "as" => "blog",
    "uses" => function () {
        $title = "blog";
        return view('blog.index', compact("title"));
    }]);

// blog show page
Route::get("/blog/{blogId}", [
    "as" => "blogShow",
    function () {
        $title = "blog";
        return view("blog.show", compact("blogId", "title"));
    }]);

/**************** forum section of the website ********************/

// forum home page
Route::get('/forum', [
    "as" => "forum",
    function () {
        $title = "forum";
        return view('forum.index')->with("title", $title);
    }]);

/**************** contest section of the website ********************/

// contest home page
Route::get('/contests', [
    "as" => "contests",
    function () {
        $title = "contest";
        return view('contests.index')->withTitle($title);
    }]);

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

// events home page
Route::get('/upcomingEvents', [
    "as" => "upcomingEvents",
    function () {
        $title = "upcomingEvent";
        return view('upcomingEvents.index', compact("title"));
    }]);

/**************** rank list section of the website ********************/

// rank home page
Route::get('/rank', [
    "as" => "rank",
    function () {
        $title = "rank";
        return view('rank.index', compact('title'));
    }]);
