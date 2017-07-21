{{--adding the main template--}}
@extends("layouts.main")

{{--adding the main body segment of the page here--}}
@section("container")

    <div id="mainBody" class="container container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="jumbotron well text-center">
                    <h1>Up Coming Events</h1>
                    <p></p>
                </div>

                <div class="container-fluid">

                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <table class="table table-condensed">
                                    <tbody>
                                    <tr>
                                        <td>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="page-header">
                                                                <h1>
                                                                    STL Basic Workshop
                                                                    <small>Organized By AUST CSE Society</small>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h3 class="text-danger text-left">
                                                                10:30 AM 12/7/17
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="lead text-left">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce nunc metus, pulvinar eu euismod et, elementum at
                                                                massa. Vestibulum congue nulla non leo vulputate rutrum.
                                                                Morbi vitae quam sagittis enim dapibus gravida a sit
                                                                amet ligula. Pellentesque consequat semper leo sit amet
                                                                pharetra. Etiam nec condimentum dui. Pellentesque
                                                                condimentum vitae nulla vel sagittis. Maecenas pharetra
                                                                urna sed est molestie, eget lobortis nulla vulputate.
                                                                Cras elit eros, pulvinar quis iaculis ac, fermentum ut
                                                                lectus.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="page-header">
                                                                <h1>
                                                                    JAVA Basic Workshop
                                                                    <small>Organized By AUST CSE Society</small>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h3 class="text-danger text-left">
                                                                10:30 AM 14/7/17
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="lead text-left">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce nunc metus, pulvinar eu euismod et, elementum at
                                                                massa. Vestibulum congue nulla non leo vulputate rutrum.
                                                                Morbi vitae quam sagittis enim dapibus gravida a sit
                                                                amet ligula. Pellentesque consequat semper leo sit amet
                                                                pharetra. Etiam nec condimentum dui. Pellentesque
                                                                condimentum vitae nulla vel sagittis. Maecenas pharetra
                                                                urna sed est molestie, eget lobortis nulla vulputate.
                                                                Cras elit eros, pulvinar quis iaculis ac, fermentum ut
                                                                lectus.
                                                            </p> <a href="#" class="btn active btn-lg btn-link"
                                                                    type="button">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <div class="page-header">
                                                                <h1>
                                                                    C++ Basic Workshop
                                                                    <small>Organized By AUST CSE Society</small>
                                                                </h1>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <h3 class="text-danger text-left">
                                                                10:30 AM 21/7/17
                                                            </h3>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <p class="lead text-left">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                                Fusce nunc metus, pulvinar eu euismod et, elementum at
                                                                massa. Vestibulum congue nulla non leo vulputate rutrum.
                                                                Morbi vitae quam sagittis enim dapibus gravida a sit
                                                                amet ligula. Pellentesque consequat semper leo sit amet
                                                                pharetra. Etiam nec condimentum dui. Pellentesque
                                                                condimentum vitae nulla vel sagittis. Maecenas pharetra
                                                                urna sed est molestie, eget lobortis nulla vulputate.
                                                                Cras elit eros, pulvinar quis iaculis ac, fermentum ut
                                                                lectus.
                                                            </p> <a href="#" class="btn active btn-lg btn-link"
                                                                    type="button">Continue</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <div id="pageNumber" class="container">
        <div class="row">
            <div class="col-md-12">
                <nav>
                    <ul class="pagination">
                        <li><a aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                        <li class="active"><a>1</a></li>
                        <li><a>2</a></li>
                        <li><a>3</a></li>
                        <li><a>4</a></li>
                        <li><a>5</a></li>
                        <li><a aria-label="Next"><span aria-hidden="true">»</span></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

@endsection
{{--ending the main body section--}}