@extends('layouts.default')

@section('title', 'Icons')

@section('content')
    <div class="feature-section">
        <div class="container">
            <h1 class="h1-sm ">All <span data-bind="text: count || 0"></span> Icons</h1>
        </div>
    </div>
    <div class="container">
        <div class="list-icon-warper">
            <!-- icon Tags -->
            <div class="tags-main">

                <ul data-bind="foreach: variations">
                    <!-- check boxes -->
                    <li class="checkbox">
                        <label data-bind="attr: {'for': slug}">
                            <input type="checkbox" name="categories" data-bind="attr: {id: slug }, value: value, checked: $parent.filters.variations">
                            <i></i>
                            <span data-bind="text: name"></span>
                        </label>
                    </li>

                    <!-- / check boxes -->
                </ul>

                <ul data-bind="foreach: categories">
                    <!-- check boxes -->
                    <li class="checkbox">
                        <label data-bind="attr: {'for': slug}">
                            <input type="checkbox" name="categories" data-bind="attr: {id: slug }, value: value, checked: $parent.filters.categories">
                            <i></i>
                            <span data-bind="text: name"></span>
                        </label>
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
                <div id="icons-list" data-bind="foreach: icons">
                    <div class="icon-box">
                        <a data-bind="attr: {href: url}">
                            <i class="an an-circle-check-fancy" data-bind="attr: {classs: class}"></i>
                            <span data-bind="text: name"></span>
                        </a>
                    </div>
                </div> <!-- / icons -->

                <div class="clearfix"></div>

                <!-- load mre BTN -->
                <div class="center load-more">
                    <div class="lodemore-button">
                        <button class="btn btn-default btn-radius" data-bind="click: more">Load More</button>
                    </div>
                </div>  <!-- / load more BTN -->
            </div>
        </div>
    </div>
@stop