@extends('layouts.default')

@section('title', 'Home')

@section('content')
<!-- slider -->
<div class="slider">
    <div class="container zindex2">
        <div class=" col-md-12 col-sm-12 text-center">
            <div class="download">
                <h1 class="an-4x fw700 white">AMAZING NEO!</h1>
                <h3 an class="an-2x  white">ONE OF THE BEST ICONIC FONTS </h3>
                <h4 class="blue"> First Choice of thousands of professionals!</h4>
                <a class="btn btn-default btn-radius" href="download.html" ><strong>Download free here</strong> </a>
                <p>Version 1.0 ( Beta )</p>
            </div>
        </div>
        <div class="col-md-12 col-sm-12 slide">
            <div class="owl-carousel slider-home">
                <div> <i class="an an-fort"></i> </div>
                <div> <i class="an an-destination"></i> </div>
                <div> <i class="an an-user-add"></i> </div>
                <div> <i class="an an-helicopter"></i> </div>
                <div> <i class="an an-archway"></i> </div>
                <div> <i class="an an-award"></i> </div>
                <div> <i class="an an-beach-chair"></i> </div>
                <div> <i class="an an-building-globe"></i> </div>
                <div> <i class="an an-cart-fill"></i> </div>
                <div> <i class="an an-building-twin"></i> </div>
                <div> <i class="an an-edit-menu"></i> </div>
                <div> <i class="an an-diploma"></i> </div>
                <div> <i class="an an-colosseum"></i> </div>
                <div> <i class="an an-currency-bags"></i> </div>
                <div> <i class="an an-devices"></i> </div>
            </div>
        </div>
    </div>
</div><!-- /slider -->


<!-- features -->
<section class="container section-padding">

    <div class="title">
        <h3 class="h3 black">AMAZING NEO</h3>
        <h2 class="an-3x fw700 black">THE BEST GRAPHIC RESOURCES FOR YOU </h2>
        <p> Find over <a class="blue" href="/icons/"> 1100+ ICONS</a> according to your inspirational desire, available for free <a class="blue" href="/download/">download</a></p>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="features">
            <i class="blue an an-devices"></i>
            <h3> MOBILE & DESKTOP FRIENDLY</h3>
            <p>Compatible with all devices, user friendly and fastest page loading speed </p>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="features">
            <i class="blue an an-expand"></i>
            <h3>PERFECT RETINA DISPLAY</h3>
            <p>Amazing Neo icons are totally vector based and looks attractive on high-resolution display including Retina display.</p>
        </div>
    </div>

    <div class="col-md-4 col-sm-6">
        <div class="features">
            <i class="blue an an-jet"></i>
            <h3>AMAZING SCALABILITY</h3>
            <p>Multiple images or sprites are not required anymore for different devices. Amazing Neo is available at all resolutions with amazing scalability.</p>
        </div>
    </div>

</section> <!-- / features -->


<!-- mobile seaction -->
<section class="section-padding mobile bg-light">
    <div class="container">

        <div class="col-md-6">
            <img class="sm-none" src="images/mobile-banar.png">
        </div>

        <div class="col-md-6">
            <div class="center">
                <h3 class="h3 black">Amazing Neo for Mobile App developers</h3>
                <p>Our fonts sync perfectly with all kinds of mobile apps and platforms Demonstrations are available for your desired platform.</p>


                <div class="btn-wrapper">
                    <a href="#" class="btn btn-dark btn-black-glacy"> <span>Ios</span></a>
                    <a href="#" class="btn btn-dark btn-black-glacy"><span>Android</span></a>
                </div>

            </div>
        </div>

    </div>
</section> <!-- / mobile seaction -->


<!-- able to do -->
<section class="section-separator">
    <div class="container">
        <div class="col-md-12 ">
            <div class="title">
                <h4>What you are able to do<br><span class="blue">with</span></h4>
                <h1 class="an-3x fw700 black">Amazing Neo</h1>
                <p> Amazing Neo allows you to harness the full potential of CSS. We are making it possible for you to create<br> extraordinary designs according to your graphic instinct. With Amazing Neo, you will be able to change icons size, color, drop shadow, animations and much more which is possible with CSS</p>
                <a href="/examples/" class="btn btn-default btn-radius"><span>Show Examples</span></a>
            </div>
        </div>
    </div>
</section> <!-- /able to do -->


<section class="text-center">
    <div class="partner">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">

                    <h2>We work with </h2>
                    <h4>some of the most sought-after companies in the word</h4>
                    <ul class="list-inline">
                        <li>
                            <img alt="Image" src="images/partner/partner-1.png">
                        </li>
                        <li>
                            <img alt="Image" src="images/partner/partner-5.png">
                        </li>
                        <li>
                            <img alt="Image" src="images/partner/partner-7.png">
                        </li>
                        <li>
                            <img alt="Image" src="images/partner/partner-4.png">
                        </li>
                        <li>
                            <img alt="Image" src="images/partner/partner-6.png">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end of container-->
</section>
@stop