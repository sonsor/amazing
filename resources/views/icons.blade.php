@extends('layouts.default')

@section('title', 'Icons')

@section('content')
    <div class="feature-section">
        <div class="container">
            <h1 class="h1-sm ">All 1166 Icons</h1>
        </div>
    </div>
    <div class="container">
        <div class="list-icon-warper">
            <!-- icon Tags -->
            <div class="tags-main">
                <ul>
                    <!-- radio buttans -->
                    <li class="radio">
                        <input type="radio" name="type" id="all-icons" value="x" checked="checked">
                        <label for="all-icons"><mark></mark> All Icons</label>
                    </li>
                    <li class="radio">
                        <input type="radio" name="type" id="pro-icons" value="z">
                        <label for="pro-icons"><mark></mark> Pro Icons</label>
                    </li>
                    <li class="radio">
                        <input type="radio" name="type" id="free-icons" value="y">
                        <label for="free-icons"><mark></mark> Free Icons</label>
                    </li><!-- / radio buttans -->

                    <li class="divider"></li>

                    <!-- check boxes -->
                    <li class="checkbox">
                        <input type="checkbox" name="computers" id="1" value="computers" checked="checked">
                        <label for="1"><mark></mark> Computers</label>
                    </li>

                    <li class="checkbox">
                        <input type="checkbox" name="design" id="2" value="design">
                        <label for="2"><mark></mark> Design</label>
                    </li>

                    <li class="checkbox">
                        <input type="checkbox" name="editors" id="3" value="editors">
                        <label for="3"><mark></mark> Editors</label>
                    </li>

                    <li class="checkbox">
                        <input type="checkbox" name="audio-video" id="4" value="audio-video">
                        <label for="4"><mark></mark> Audio Video</label>
                    </li>

                    <li class="checkbox">
                        <input type="checkbox" name="buildings" id="5" value="buildings">
                        <label for="5"><mark></mark> Buildings</label>
                    </li>

                    <li class="checkbox">
                        <input type="checkbox" name="badge-and-awards" id="6" value="badge-and-awards">
                        <label for="6"><mark></mark> badge and awards</label>
                    </li>

                    <li class="checkbox">
                        <input type="checkbox" name="code" id="7" value="code">
                        <label for="7"><mark></mark> Code</label>
                    </li>

                    <li class="checkbox">
                        <input type="checkbox" name="computers" id="8" value="computers">
                        <label for="8"><mark></mark> Computers</label>
                    </li>
                    <!-- / check boxes -->
                </ul>
            </div> <!-- / icon tags -->

            <div class="icons-widget">
                <!-- search -->
                <div class="search-box">
                    <input type="text" name="search-icon" placeholder="SEARCH ICON" id="search">
                </div> <!-- / search -->

                <!-- icons -->
                <div id="icons-list">
                    <div class="icon-box">
                        <a href="icon-detail.html">
                            <i class="an an-circle-check-fancy"></i>
                            <span>circle-check-fancy</span>
                        </a>
                    </div>
                    <div class="icon-box">
                        <a href="icon-detail.html">
                            <i class="an an-circle-check-fancy"></i>
                            <span>an an-check-double</span>
                        </a>
                    </div>
                    <div class="icon-box">
                        <a href="icon-detail.html">
                            <i class="an an-circle-check-fancy"></i>
                            <span>an an-check</span>
                        </a>
                    </div>
                    <div class="icon-box">
                        <a href="icon-detail.html">
                            <i class="an an-circle-check-fancy"></i>
                            <span>circle-check-fancy</span>
                        </a>
                    </div>
                    <div class="icon-box">
                        <a href="icon-detail.html">
                            <i class="an an-circle-check-fancy"></i>
                            <span>circle-check-fancy</span>
                        </a>
                    </div>
                    <div class="icon-box">
                        <a href="icon-detail.html">
                            <i class="an an-circle-check-fancy"></i>
                            <span>circle-check-fancy</span>
                        </a>
                    </div>
                </div> <!-- / icons -->

                <div class="clearfix"></div>

                <!-- load mre BTN -->
                <div class="center load-more">
                    <div class="lodemore-button">
                        <a class="btn btn-default btn-radius" href="#" id="loadIcons">Load More</a>
                    </div>
                </div>  <!-- / load more BTN -->
            </div>
        </div>
    </div>
@stop