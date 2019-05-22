@extends('layouts.default')

@section('title', 'Icons')

@section('content')
    <div class="feature-section">
        <div class="container">
            <div class="copyToClip">
                <i style="color: #6f778a; padding-right: 10px;" class="an an-user"></i> |

                <div id="copyTarget" class="ico-class">
                    <code data-balloon="Click to Copy HTML" data-balloon-pos="down"><span>&lt;i </span><span class="typ">class</span>=<span class="nam">"an an-beach-chair-alt"</span><span>&gt;&lt;/i&gt;</span></code>
                </div>
                <div id="copyButton">
                    <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="17.137px" height="20.831px" viewBox="0 491.169 17.137 20.831" enable-background="new 0 491.169 17.137 20.831" xml:space="preserve" fill="#6f778a">
                        <g>
                            <rect x="2.618" y="495.111" width="3.784" height="1.306" />
                            <rect x="2.618" y="497.559" width="3.784" height="1.306" />
                            <rect x="2.618" y="500.005" width="9.302" height="1.307" />
                            <rect x="2.618" y="502.452" width="9.302" height="1.306" />
                            <rect x="2.618" y="504.899" width="9.302" height="1.306" />
                            <path d="M11.578,492.941l-1.832-1.822H0v18.189h1.794V512h15.375l0.008-19.059H11.578z M1.305,508.011l0.024-15.591l7.121-0.004
                                    v4.742h4.739v10.857L1.305,508.011z M15.864,510.695H3.095v-1.379l11.403,0.009l-0.021-13.476l-1.644-1.603h3.039L15.864,510.695z" />
                        </g>
                    </svg>
                </div>
                <span id="msg"></span>
            </div>

            <div class="tag-version">
                <ul class="category-version">
                    <li>weather</li>
                    <li>Updated: Version 1.0</li>
                </ul>
            </div>

        </div>
    </div>

    <div class="container-fluid no-padding">
        <div class="icon-warper">
            <div class="container">
                <div class="col-md-5">
                    <div class="icon-grid-right">
                        <h1 class="h1-sm">BEACH CHAIR</h1>

                        <div class="clearfix"></div>

                        <div class="icon-main ">
                            <div class="icon-color-picker">
                                <div class="bg-green" id="green" data-value="green"> </div>
                                <div class="bg-sky" id="sky" data-value="sky"> </div>
                                <div class="bg-gray" id="red" data-value="red"> </div>
                                <div class="bg-gray" id="gray" data-value="gray"> </div>
                                <div class="bg-black" id="black" data-value="black"> </div>
                            </div>
                            <div class="collection">
                                <div class="example-icon icon-box center">
                                    <i class="an an-beach-chair-alt"></i>
                                </div>
                            </div>
                            <div class="icon-text-class  activpro-padding-bottom-1x  activpro-padding-top-1x">
                                <code>&lt;i <span class="typ">class</span>=<span class="nam">"an an-<?php echo $icon->class; ?>"</span>&gt;&lt;/i&gt; </code>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="icon-grid-left">
                        <div class="pro-content">
                            <div class="pro-tag">
                                <a class="btn-pro" href="icons.html"> <i class="an an an-arrow-left"> </i> <span> all icons</span> </a>	                               
                            </div>
                            <div class="col-md-12 ico-var flex-end justify-between pt-4x">
                                <i class="an an-beach-chair-alt an-1x"></i>
                                <i class="an an-beach-chair-alt an-2x"></i>
                                <i class="an an-beach-chair-alt an-3x"></i>
                                <i class="an an-beach-chair-alt an-4x"></i>
                                <i class="an an-beach-chair-alt an-5x"></i>
                                <i class="an an-beach-chair-alt an-6x"></i>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-showcase">
            <div class="container bg-white">
                <div class="icon">
                    <i class="an an-beach-chair-alt"></i>
                </div>
                <div class="contant">
                    <p>“Pictures, abstract symbols, materials, and colors are among the ingredients with which a designer or engineer works. To design is to discover relationships and to make arrangements and rearrangements among these ingredients.”</p>
                </div>
            </div>
        </div>
        <div class="icon-showcase-list-waget">
            <div class="container">

                <div class=col-md-7>
                    <div class="icon-showcase-todo">
                        <ul class="todo-list">
                            <li>
                                <i class="an an-beach-chair-alt"></i>
                                <p>and colors are among the ingredients with which a designer</p>
                            </li>
                            <li>
                                <i class="an an-beach-chair-alt"></i>
                                <p>and colors are among the ingredients with which a designer</p>
                            </li>
                            <li>
                                <i class="an an-beach-chair-alt"></i>
                                <p>and colors are among the ingredients with which a designer</p>
                            </li>
                            <li>
                                <i class="an an-beach-chair-alt"></i>
                                <p>and colors are among the ingredients with which a designer</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=col-md-5>
                    <div class="icon-waget one">
                        <i class="an an-beach-chair-alt"></i>
                        <p>and colors are among the.</p>
                    </div>

                    <div class="icon-waget two">
                        <i class="an an-beach-chair-alt"></i>
                        <p>and colors are among the.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-showcase-list-waget-two">
            <div class="container">
                <div class=col-md-6>
                    <div class="icon-waget-half">
                        <i class="an an-beach-chair-alt bg-orange"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class="icon-waget-half">
                        <i class="an an-beach-chair-alt bg-black"></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut abore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquipex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative-icon-saction">
            <div class="container">
                <h3>Relative Icon </h3>
                <div class="relative-icon">
                    <svg>
                        <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#de0029" d="M0,0v16l7-3.8l7,3.8V0H0z M9.3,9L7,8L4.7,9L5,6.6L3.2,4.8l2.5-0.5L7,2.1l1.2,2.2l2.5,0.5L9,6.6L9.3,9z"></path>
                        </g>
                    </svg>
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <svg>
                        <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#de0029" d="M0,0v16l7-3.8l7,3.8V0H0z M9.3,9L7,8L4.7,9L5,6.6L3.2,4.8l2.5-0.5L7,2.1l1.2,2.2l2.5,0.5L9,6.6L9.3,9z"></path>
                        </g>
                    </svg>
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <svg>
                        <g>
                            <path fill-rule="evenodd" clip-rule="evenodd" fill="#de0029" d="M0,0v16l7-3.8l7,3.8V0H0z M9.3,9L7,8L4.7,9L5,6.6L3.2,4.8l2.5-0.5L7,2.1l1.2,2.2l2.5,0.5L9,6.6L9.3,9z"></path>
                        </g>
                    </svg>
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

                <div class="relative-icon">
                    <a href="#"> <i class="an an-beach-chair-alt"></i><span>beach chair alt</span></a>
                </div>

            </div>
        </div>
    </div>
@stop