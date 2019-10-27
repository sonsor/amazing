@extends('layouts.default')

@section('title', 'Icons')

@section('content')
    <div class="feature-section">
        <div class="container">
            <div class="copyToClip">
            <i style="color: #6f778a; padding-right: 10px;" class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-1x"></i> | 
                <div id="copyTarget" class="ico-class">
                    <code data-balloon="Click to Copy HTML" data-balloon-pos="down"><span>&lt;i </span><span class="typ">class</span>=<span class="nam">"{{ $icon->variation->classes . ' an-' . $icon->classes  }}"</span><span>&gt;&lt;/i&gt;</span></code>
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
                    <li>{{ $icon->name }}</li>
                    <li>Updated: Version {{ $icon->Version->version  }}</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid no-padding">
        <div class="icon-warper">
            <div class="container">
                <div class="col-md-5">
                    <div class="icon-grid-right">
                        <h1 class="h1-sm">{{ $icon->name  }}</h1>
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
                                    <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                </div>
                            </div>
                            <div class="icon-text-class  activpro-padding-bottom-1x  activpro-padding-top-1x">
                                <code>&lt;i <span class="typ">class</span>=<span class="nam">"{{ $icon->variation->classes . ' an-' . $icon->classes  }}"</span>&gt;&lt;/i&gt; </code>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="icon-grid-left">
                        <div class="pro-content">
                            <div class="pro-tag">
                                <a class="btn-pro" href="{{ route('icon.seach')  }}">
                                    <i class="an an-arrow-rounded-left"> </i>
                                    <span> all icons</span>
                                </a>
                            </div>
                            <div class="col-md-12 ico-var flex-end justify-between pt-4x">
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-1x"></i>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-2x"></i>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-3x"></i>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-4x"></i>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-5x"></i>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-6x"></i>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-showcase">
            <div class="container bg-white">
                <div class="icon">
                    <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                </div>
                <div class="contant">
                    <p>{{ $icon->name }} {{ $icon->description->shortDescription }}</p>
                </div>
            </div>
        </div>



        <div class="container">
             <div class="example-container">
            <style>
                .exm-menu-out {
                    background: #030121;
                    padding:50px;
                    margin-top: 30px;
                }
                ul.exm-menu {
                background-color: #fff;
                box-shadow: 0 3px 7px 0 rgba(0, 0, 0, 0.05);
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                border-top: 2px solid #0085ff;
                }

                ul.exm-menu li {
                float: left;
                }

                ul.exm-menu li a {
                    display: block;
                color: #6f778a;
                text-align: center;
                padding: 25px 16px;
                text-decoration: none;
                transition: none;
                }
                ul.exm-menu li a span {
                margin-left: .5rem;
                }

                ul.exm-menu li a:hover, ul.exm-menu li a.active {
                    background-color: #0085ff;
                color: #fff;
                }
            </style>
            <div class="exm-menu-out">
                <ul class="exm-menu">
                <li><a href="#home"><i class="an an-home"></i> <span>Home</span></a></li>
                <li><a href="#news"><i class="an an-user-group"></i> <span>Users</span></a></li>
                <li><a href="#news"><i class="an an-newspaper"></i> <span>News</span></a></li>
                <li><a class="active" href="#news"><i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i> <span>{{ $icon->name }}</span> </a></li>
                <li><a href="#contact"><i class="an an-envelope"></i> Contact</a></li>
                <li><a href="#about">more <i class="an an-angle-alt-down"></i></a></li>
                </ul>
            </div>
       
      

            <div class="row">
                <div class="col-md-7">
                    <div class="exm-menu-out">
                        <div class="mob-body">
                            <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} an-6x"></i>
                            <p>{{ $icon->name }}</p>
                        </div>
                        <div class="navigation-tab">
                            <div class="navigation-tab-item active">   
                                <span class="navigation-tab__icon">
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                    </span>
                                <span class="navigation-tab__txt">{{ $icon->name }}</span>
                            </div>
                            <div class="navigation-tab-item">
                                <span class="navigation-tab__icon">
                                    <i class="an an-list"></i>         
                                    </span>
                                <span class="navigation-tab__txt">List</span>
                            </div>
                            <div class="navigation-tab-item">
                                <span class="navigation-tab__icon">
                                    <i class="an an-bag"></i>
                                </span>
                                <span class="navigation-tab__txt">Bag</span>
                            </div>
                            <div class="navigation-tab-item">
                                <span class="navigation-tab__icon">
                                    <i class="an an-bell"></i>
                                </span>
                                <span class="navigation-tab__txt">Notifications</span>
                            </div>
                            <div class="navigation-tab-overlay"></div>
                        </div>            
                    </div>
                </div>
                <!-- todo -->
                <div class=col-md-5>
                    <style>
                        .todo {
                            display: flex;
                            flex-direction: column;
                            align-items: stretch;
                            background-color: #fafafa;
                            padding: 0px;
                            box-shadow: 0 20px 30px 0 rgba(1, 1, 1, 0.07);
                            margin: 2.6rem 0;
                            border-radius: 0.75rem;
                        }
                        .todo ul {
                            padding:0px;
                        }
                        .todo ul li {
                            padding: 1.5rem 2rem;
                            background:#fff;
                            cursor:pointer;
                        }
                        .todo ul li.active {
                            background: #0085ff;
                            color: #fff;
                        }
                        .todo ul li.active i {
                            background: #ffffff;
                        color: #0085ff; 
                        }
                        .todo ul li.title {
                            border-bottom: 1px solid #dedede;
                            text-align: left;
                            color: #222;
                            font-weight: 600;
                            font-size: 18px;
                            padding: 30px 0;
                        }

                        .todo ul li i{
                            background:#0085ff;
                            padding: 20px;
                            color: #fff;

                        }
                        .todo ul li span {
                            padding: 30px;
                        }
                    </style>


                    <div class="exm-menu-out">

                        <div class="todo">
                            <ul>
                            <li class="title">
                                    <span>Todo</span>
                                </li>
                                <li>
                                    <i class="an an-search"></i>
                                    <span>Lorem ipsum dolor</span>
                                </li>
                                <li class="active">
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                    <span>Lorem ipsum dolor</span>
                                </li>
                                <li>
                                    <i class="an an-search"></i>
                                    <span>Lorem ipsum dolor</span>
                                </li>
                                <li>
                                    <i class="an an-search"></i>
                                    <span>Lorem ipsum dolor</span>
                                </li>
                                
                            
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- todo end -->
            </div>

      
     </div>

  </div>




        <!-- medium and small Description 
                <div class="icon-showcase-list-waget">
                    <div class="container">
                        <div class=col-md-7>
                            <div class="icon-showcase-todo">
                                <ul class="todo-list">
                                    <li>
                                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                        <p> {{ $icon->name }} {{ $icon->description->mediumDescription1 }}</p>
                                    </li>
                                    <li>
                                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                        <p>{{ $icon->name }} {{ $icon->description->mediumDescription2 }}</p>
                                    </li>
                                    <li>
                                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                        <p>{{ $icon->name }} {{ $icon->description->mediumDescription3 }}</p>
                                    </li>
                                    <li>
                                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                        <p>{{ $icon->name }} {{ $icon->description->mediumDescription4 }}</p>
                                    </li>
                                </ul>
                            </div>
                        </div>   

                        <div class=col-md-5>
                            <div class="icon-waget one">
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                <p>{{ $icon->name }} {{ $icon->description->smallDescription1 }}</p>
                            </div>

                            <div class="icon-waget two">
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                <p>{{ $icon->name }} {{ $icon->description->smallDescription2 }}</p>
                            </div>
                        </div> 
                        
                    </div>
                </div>
        / end medium and small Description -->


        <div class="icon-showcase-list-waget-two">
            <div class="container">
                <div class=col-md-6>
                    <div class="icon-waget-half">
                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} bg-orange"></i>
                        <p> {{ $icon->name }} {{ $icon->description->description1 }}</p>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class="icon-waget-half">
                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} bg-black"></i>
                        <p>{{ $icon->name }} {{ $icon->description->description2 }}</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="relative-icon-saction">
            <div class="container">
                <h3>Relative Icon </h3>
                @foreach ($related as $r)
                <div class="relative-icon">
                    <a href="{{ route('icon.detail', [$r->slug, $r->variation->slug])  }}">
                        <i class="{{ $r->variation->classes . ' an-' . $r->classes  }}"></i>
                        <span>{{ $r->name  }}</span>
                    </a>
                </div>
                @endforeach

            </div>
        </div>
    </div>
@stop