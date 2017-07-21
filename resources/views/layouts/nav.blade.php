
<nav class="navbar-inverse navbar-fixed-top" role="navigation">
    <div id="topNavBar" class="container">
        <div class="navbar-header" style="display:inline-block">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route("home")}}" >AUST Programming Group</a>
        </div>

        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

                @php($active = "class=active")

                <li @if(isset($title) && $title == "blog") {{$active}} @endif>
                    <a href="{{route("blog")}}" >Blog</a>
                </li>
                <li @if(isset($title) && $title == "forum") {{$active}} @endif>
                    <a href="{{route("forum")}}">Forum</a>
                </li>
                <li @if(isset($title) && $title == "contest") {{$active}} @endif>
                    <a href="{{route("contests")}}">Contests</a>
                </li>
                <li @if(isset($title) && $title == "upcomingEvent") {{$active}} @endif>
                    <a href="{{route("upcomingEvents")}}">Upcoming Events</a>
                </li>
                <li @if(isset($title) && $title == "rank") {{$active}} @endif>
                    <a href="{{route("rank")}}">Rank List</a>
                </li>
            </ul>


            <div class="login navbar-right">
                <ul class="navbar-nav">
                    <li @if(isset($title) && $title == "login") {{$active}} @endif>
                        {{--todo change the login link--}}
                        <a href="{{route('home')}}">
                            <span class="glyphicon glyphicon-lock"></span>
                            Login

                        </a>
                    </li>
                    <li @if(isset($title) && $title == "registration") {{$active}} @endif>
                        {{--todo change the registration link--}}
                        <a href="{{route('home')}}">
                            <span class="glyphicon glyphicon-user"></span>
                            Register</a>
                    </li>
                    <li>
                        <a id="nav_search" data-herf="search">
                            <span class="glyphicon glyphicon-search"></span>
                            Search
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--search bar div-->
    <!--<div class="bar" id="search" style="display: flex; align-items: center;">-->
    <!--<div class="container">-->
    <!--&lt;!&ndash;<div class="row">&ndash;&gt;-->
    <!--<div class="col-sm-6 col-sm-offset-3">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--&lt;!&ndash;<div id="imaginary_container">&ndash;&gt;-->
    <!--<div class="input-group stylish-input-group">-->
    <!--<input type="text" class="form-control" placeholder="Search">-->
    <!--<span class="input-group-addon">-->
    <!--<button type="submit">-->
    <!--<span class="glyphicon glyphicon-search"></span>-->
    <!--</button>  -->
    <!--</span>-->
    <!--</div>-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--</div>-->
    <!--&lt;!&ndash;</div>&ndash;&gt;-->
    <!--</div>-->
    <!--</div>-->

</nav>