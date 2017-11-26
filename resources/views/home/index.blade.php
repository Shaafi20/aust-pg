{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
<!-- Main Content Body starts from here -->
@section("container")
    <div id="mainBody" class="container-fluid">
        <div class="row">

            <!--MIDDLE SIDEBAR STARTS FROM HERE -->
            <div id="midlleBar" class="col-md-6 col-md-push-3 col-xs-12">
                <div class="imageSlider">
                    <div class="slider">
                        <div id="myCarousel" class="carousel slide">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for Slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <!-- Set the first background image using inline CSS below. -->
                                    <img src="{{asset("images/img1.jpg")}}" alt="" class="fill">
                                    <div class="carousel-caption">
                                        <h3>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h3>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Set the second background image using inline CSS below. -->
                                    <img src="{{asset("images/img2.jpg")}}" alt="" class="fill">
                                    <div class="carousel-caption">
                                        <h2>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h2>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Set the third background image using inline CSS below. -->
                                    <img src="{{asset("images/img3.jpg")}}" alt="" class="fill">
                                    <div class="carousel-caption">
                                        <h4>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Set the third background image using inline CSS below. -->
                                    <img src="{{asset("images/img4.jpg")}}" alt="" class="fill">
                                    <div class="carousel-caption">
                                        <h4>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <!-- Set the third background image using inline CSS below. -->
                                    <img src="images/img5.jpg" alt="" class="fill">
                                    <div class="carousel-caption">
                                        <h4>অনুষ্ঠিত হয়ে গেল Intra AUST Programming Contest Spring 2017</h4>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                <span class="icon-prev"></span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                <span class="icon-next"></span>
                            </a>

                        </div>
                    </div>
                </div>
                <div class="practiceContest">
                    <div class="practiceBar">
                        <h3>Upcoming Practice Contests</h3>
                    </div>
                </div>
            </div>
            <!--LEFT SIDEBAR STARTS FROM HERE -->
            <div id="leftSideBar" class="col-md-3 col-xs-12 col-md-pull-6">
                <div class="eventSideBar">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="{{route('upcomingEvents.index')}}" class="pull-right">See All</a>
                                <h4>Events</h4>
                            </div>
                        </div>
                        <div class="panel-body">

                            @php
                                $eventObj = new \App\Event;
                                $events = $eventObj->topEvents();


                            foreach($events as $event){

                            echo '<div class="well well-sm">';
                                echo "<a href=" .route('upcomingEvents.index') .">" . $event->event_title . "</a></div>";
}

                            @endphp
                            <div class="well well-sm">
                                <a href="#">Practice Class for 1.1</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rankSideBar">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <b>Rank List</b>
                                <a href="#" class="pull-right">See All</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Score</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Asif</td>
                                    <td>2100</td>
                                </tr>
                                <tr>
                                    <td>Sayef</td>
                                    <td>2000</td>
                                </tr>
                                <tr>
                                    <td>Sifat</td>
                                    <td>1950</td>
                                </tr>
                                <tr>
                                    <td>Sifat</td>
                                    <td>1950</td>
                                </tr>
                                <tr>
                                    <td>Sifat</td>
                                    <td>1950</td>
                                </tr>
                                <tr>
                                    <td>Sifat</td>
                                    <td>1950</td>
                                </tr>
                                <tr>
                                    <td>Sifat</td>
                                    <td>1950</td>
                                </tr>
                                <tr>
                                    <td>Sifat</td>
                                    <td>1950</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
            <!--RIGHT SIDEBAR STARTS FROM HERE -->
            <div id="rightSideBar" class="col-md-3 col-xs-12">
                <div class="loginBar">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4>
                                Login
                            </h4>
                        </div>
                        <div class="panel-body">
                            <form role="form" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}
                                <fieldset>
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                        <input id="email" placeholder="E-mail" type="email" class="form-control"
                                               name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                        <input id="password" placeholder="Password" type="password" class="form-control"
                                               name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"
                                                       name="remember" {{ old('remember') ? 'checked' : '' }}> Remember
                                                Me
                                            </label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-success">
                                        Login
                                    </button>

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="topPostSideBar">
                    <div class="panel panel-info">
                        <div class="panel-heading" align="center">
                            <h4>
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
                <div class="topForumSideBar">
                    <div class="panel panel-info">
                        <div class="panel-heading" align="center">
                            <h4>
                                <u>Top Forum Post</u>
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
    </div>
@endsection