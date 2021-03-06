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
                <ul class="tags" data-bind="foreach: variations">
                    <!-- check boxes -->
                    <li>
                        <label class="check-box"  data-bind="attr: {'for': slug}">
                            <input type="checkbox" name="categories" data-bind="attr: {id: slug }, value: value, checked: $parent.filters.variations">
                            <span><!-- icon here --></span>
                            <i data-bind="text: name"></i>
                        </label>
                    </li>
                    <!-- / check boxes -->
                </ul>

                <ul class="tags" data-bind="foreach: categories">
                    <!-- check boxes -->
                    <li>
                    <label class="check-box"  data-bind="attr: {'for': slug}">
                        <input type="checkbox" name="categories" data-bind="attr: {id: slug }, value: value, checked: $parent.filters.categories">
                        <span><!-- icon here --></span>
                        <i data-bind="text: name"></i>
                    </label>
                    </li>
                    <!-- / check boxes -->
                </ul>
            </div> <!-- / icon tags -->

            <div class="icons-widget">
                <!-- search -->
                <div class="search-box">
                    <input data-bind="textInput: filters.search, attr: {type: 'text', placeholder: 'SEARCH ICON', id: 'search'}" />
                </div> <!-- / search -->

                <!-- icons -->
                <div id="icons-list" data-bind="foreach: icons">
                    <div class="icon-box">
                        <a data-bind="attr: {href: $data.url}">
                            <i class="an an-circle-check-fancy" data-bind="attr: {class: $data.classes}"></i>
                            <span data-bind="text: $data.name"></span>
                        </a>
                    </div>
                </div> <!-- / icons -->

                <div class="clearfix"></div>

                <!-- load mre BTN -->
                <div class="center load-more">
                    <div class="lodemore-button">
                        <button class="btn btn-default btn-radius" data-bind="visible: hasMore(), click: more">Load More</button>
                    </div>
                </div>  <!-- / load more BTN -->
            </div>
        </div>
    </div>
@stop