@extends("layouts.main")

{{--main body starts form here--}}

<div id="mainBody" class="container">
    <div class="row">

        <div class="col-md-8">

            <h1 style="display:inline-block;"><u>Latest Posts</u></h1>

            <ol class="breadcrumb pull-right where-am-i">
                <li><a href="#">Add New Topic</a></li>
            </ol>
            <div class="clearfix"></div>

            <article>
                <h2><a href="postpage.html">"হ্যালো ওয়ার্ল্ড - প্রথম প্রোগ্রাম"</a></h2>

                <div class="row">
                    <div class="group1 col-sm-6 col-md-6">
                        <span class="glyphicon glyphicon-folder-open"></span> <a href="#">সিফাত আহমেদ</a>
                        <span class="glyphicon glyphicon-bookmark"></span> <a href="#">সি</a>,
                        <a href="#">সি++</a>, <a href="#">প্রোগ্রামিং</a>
                    </div>
                    <div class="group2 col-sm-6 col-md-6">
                        <span class="glyphicon glyphicon-pencil"></span> <a href="singlepost.html#comments">20
                            Comments</a>
                        <span class="glyphicon glyphicon-time"></span> March 28, 2017 11:00 PM
                    </div>
                </div>

                <hr>
                <br/>

                <p class="lead">"হ্যালো, ওয়ার্ল্ড!" প্রোগ্রামটি সাধারণত শিক্ষানবিশদেরকে কোন নতুন প্রোগ্রামিং ভাষা
                    পরিচয় করিয়ে দেয়ার জন্য ব্যাবহার করা হয়। কোন শিক্ষকের সহায়তায় এই প্রোগ্রামটি অনেক সহজেই বুঝা
                    যায়।

                    এছাড়াও কম্পিউটারের কম্পাইলার এবং একটি প্রোগ্রামিং ভাষা নিয়ে কাজ করার জন্য কম্পিউটারটির সবকিছু
                    ঠিকঠাকমত কাজ করছে কিনা সেটা জানার জন্যেও "হ্যালো, ওয়ার্ল্ড!" প্রোগ্রামটি ব্যাবহার করা হয়। কোন একটি
                    কম্পিউটারে নতুন একটি প্রোগ্রামিং ভাষার জটিল জটিল প্রোগ্রামগুলো ঠিকমত কাজ করতে পারবে কিনা সেটা জানার
                    জন্যেও এটি ব্যাবহৃত হয়। এই কারণেই কোন নতুন টুল চেইন পরীক্ষা করার জন্য এই সহজ প্রোগ্রামটি ব্যাবহার
                    করা হয়।</p>

                <p class="text-right">
                    <a href="postpage.html" class="text-right">
                        continue reading...
                    </a>
                </p>

                <hr>
            </article>

        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 align="center">
                        <u>Top Post</u>
                    </h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">প্রোগ্রামিং শুরুর আগে</a></li>
                    <li class="list-group-item"><a href="#">হ্যালো ওয়ার্ল্ড প্রিন্ট</a></li>
                    <li class="list-group-item"><a href="#">কন্টেস্ট করার নিয়মাবলি</a></li>
                    <li class="list-group-item"><a href="#">ইনপুট আউটপুট</a></li>
                </ul>
            </div>
        </div>


        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>
                        <center><u>Top Forum Post</u></center>
                    </h4>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="#">Big Integer কি?</a></li>
                    <li class="list-group-item"><a href="#">রান টাইম ইরোর কেন হয়?</a></li>
                    <li class="list-group-item"><a href="#">CodeBlocks কাজ করে না</a></li>
                </ul>
            </div>
        </div>


    </div>
</div>
