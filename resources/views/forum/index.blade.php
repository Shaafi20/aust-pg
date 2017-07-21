{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
@section("container")

    <div id="mainBody" class="container">
        <div class="row">
            <div class="col-md-8">


                <div class="container">
                    <div class="page-header page-heading">
                        <h1><u>Forum Posts</u></h1>
                        <ol class="breadcrumb pull-right where-am-i">
                            <li><a href="#">Add New Topic</a></li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>

                    <hr style="height: 1px; background: black">

                    <table class="table forum table-striped">
                        <thead>
                        <tr>
                            <th class="cell-stat"></th>
                            <th>
                                <h3><u>Recent Posts</u></h3>
                            </th>
                            <th class="cell-stat text-center hidden-xs hidden-sm">Comments</th>
                            <th class="cell-stat text-center hidden-xs hidden-sm">Views</th>
                            <th class="cell-stat-2x hidden-xs hidden-sm">Post By</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"><i class="fa fa-question fa-2x text-primary"></i></td>
                            <td>
                                <h4><a href="#">আমার কোডব্লক্স কাজ করে না</a><br>
                                    <small>Some description</small>
                                </h4>
                            </td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">42</a></td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">89897</a></td>
                            <td class="hidden-xs hidden-sm">by <a href="#">Sifat Ahmed</a><br>
                                <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-exclamation fa-2x text-danger"></i></td>
                            <td>
                                <h4><a href="#">অ্যান্ড্রয়েড স্টুডিও এর জন্য কত জিবি র‍্যাম লাগে? </a><br>
                                    <small>Category description</small>
                                </h4>
                            </td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">30</a></td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">152123</a></td>
                            <td class="hidden-xs hidden-sm">by <a href="#">Asif Imtiaz</a><br>
                                <small><i class="fa fa-clock-o"></i> 1 years ago</small>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="table forum table-striped">
                        <thead>
                        <tr>
                            <th class="cell-stat"></th>
                            <th>
                                <h3><u>Top Viwed Posts</u></h3>
                            </th>
                            <th class="cell-stat text-center hidden-xs hidden-sm">Comments</th>
                            <th class="cell-stat text-center hidden-xs hidden-sm">Views</th>
                            <th class="cell-stat-2x hidden-xs hidden-sm">Post By</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"><i class="fa fa-heart fa-2x text-primary"></i></td>
                            <td>
                                <h4><a href="#">কিভাবে কোড করব?</a><br>
                                    <small>Category description</small>
                                </h4>
                            </td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">INFINITY</a></td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">INFINITY</a></td>
                            <td class="hidden-xs hidden-sm">by <a href="#">Sayef Reyadh</a><br>
                                <small><i class="fa fa-clock-o"></i> 3 months ago</small>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"><i class="fa fa-magic fa-2x text-primary"></i></td>
                            <td>
                                <h4><a href="#">ইউনিটি কি?</a><br>
                                    <small>Category description</small>
                                </h4>
                            </td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">62</a></td>
                            <td class="text-center hidden-xs hidden-sm"><a href="#">1523</a></td>
                            <td class="hidden-xs hidden-sm">by <a href="#">Sifat Ahmed</a><br>
                                <small><i class="fa fa-clock-o"></i> 1 years ago</small>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>

    </div>


@endsection