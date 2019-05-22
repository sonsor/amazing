@extends('layouts.default')

@section('title', 'Icons')

@section('content')
    <div class="feature-section">
        <div class="container">
            <div class="copyToClip">
                <i style="color: #6f778a; padding-right: 10px;" class="an an-user"></i> |

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
                                    <i class="an an an-arrow-left"> </i>
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
                    <p>{{ $icon->description->shortDescription }}</p>
                </div>
            </div>
        </div>
        <div class="icon-showcase-list-waget">
            <div class="container">

                <div class=col-md-7>
                    <div class="icon-showcase-todo">
                        <ul class="todo-list">
                            <li>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                <p>{{ $icon->description->mediumDescription1 }}</p>
                            </li>
                            <li>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                <p>{{ $icon->description->mediumDescription2 }}</p>
                            </li>
                            <li>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                <p>{{ $icon->description->mediumDescription3 }}</p>
                            </li>
                            <li>
                                <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                                <p>{{ $icon->description->mediumDescription4 }}</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=col-md-5>
                    <div class="icon-waget one">
                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                        <p>{{ $icon->description->smallDescription1 }}</p>
                    </div>

                    <div class="icon-waget two">
                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }}"></i>
                        <p>{{ $icon->description->smallDescription2 }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon-showcase-list-waget-two">
            <div class="container">
                <div class=col-md-6>
                    <div class="icon-waget-half">
                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} bg-orange"></i>
                        <p>{{ $icon->description->description1 }}</p>
                    </div>
                </div>
                <div class=col-md-6>
                    <div class="icon-waget-half">
                        <i class="{{ $icon->variation->classes . ' an-' . $icon->classes  }} bg-black"></i>
                        <p>{{ $icon->description->description2 }}</p>
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