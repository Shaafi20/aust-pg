<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Abdus Sayef Reyadh; CSE Batch-35, AUST; Email: sayef.reyadh@gmail.com">
    <meta name="author" content="Asif Imtiaz Shaafi; CSE Batch-35, AUST; Email: a15shaafi.209@gmail.com">
    <meta name="author" content="Sifat Ahmed; CSE Batch-35, AUST; Email: sifat.69@live.com">

    {{--<script src="{{asset("js/app.js")}}"></script>--}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <script src="{{asset("js/customjs.js")}}"></script><!-- Latst compiled and minified JavaScript -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">

    {{--css for the page--}}
    <link rel="stylesheet" href="{{asset("css/animated.css")}}">
    {{--<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>--}}

    <link rel="stylesheet" type="text/css" href="{{asset("css/app.css")}}"/>
    @yield('css')

    <title>
        @if(isset($title))
            {{ucfirst($title)}} | AUST Programming Group
        @else
            AUST Programming Group
        @endif
    </title>
</head>

<body>

{{--adding navigation bar--}}
@include("layouts.nav")

{{--The Search Modal--}}
<div id="searchModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="bar" id="search" style="display: flex; align-items: center;">
            <div class="container">
                <!--<div class="row">-->
                <div class="col-sm-10 col-sm-offset-1">
                    <!--<div id="imaginary_container">-->
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <span class="input-group-addon">
                                <button type="submit">
                                    <span class="glyphicon glyphicon-search"></span>
                                </button>
                            </span>
                    </div>
                    <!--</div>-->
                </div>
                <!--</div>-->
            </div>
        </div>
    </div>

</div>


{{--body container goes here--}}
@yield("container")

<!--footer start from here-->

@include('layouts.footer')

</body>
</html>
