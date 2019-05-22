<div class="container">
    <div class="row m0 foter_row">
        <div class="col-sm-2 footer_logo p0">
            <img src="{{ url('images/logo-w.png') }}" alt="">
        </div>
        <div class="col-md-8 col-sm-10 footer_menu">
            <ul class="nav navbar_menu">
                <li class="{{ Request::is('/') ? 'active': '' }}">
                    <a href="{{ url('/') }}">Home</a>
                </li>
                <li class="{{ Request::is('/icons') ? 'active': '' }}">
                    <a href="{{ url('/icons') }}">Icons</a>
                </li>
                <li class="{{ Request::is('/examples') ? 'active': '' }}">
                    <a href="{{ url('/examples') }}">Examples</a>
                </li>
                <li class="{{ Request::is('/faq') ? 'active': '' }}">
                    <a href="{{ url('/faq') }}">FAQ</a>
                </li>
                <li class="{{ Request::is('/contact') ? 'active': '' }}">
                    <a href="{{ url('/contact') }}">Contact Us</a>
                </li>
                <li class="{{ Request::is('/licensefaq') ? 'active': '' }}">
                    <a href="{{ url('/license') }}">License</a>
                </li>
            </ul>
        </div>
        <div class="col-md-2 col-sm-12 footer_menu">
            <ul class="nav navbar_menu socail_nav">
                <li><a href="#"><i class="an an-facebook"></i></a></li>
                <li><a href="#"><i class="an an-twitter"></i></a></li>
                <li><a href="#"><i class="an an-google-plus"></i></a></li>
                <li><a href="#"><i class="an an-dribbble"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="copy_right_area row m0">
        <ul class="privacy">
            <li class="{{ Request::is('/privacy-policy') ? 'active': '' }}">
                <a href="{{ url('/privacy-policy') }}">Privacy Policy</a>
            </li>
            <li class="{{ Request::is('/terms-and-conditions') ? 'active': '' }}">
                <a href="{{ url('terms-and-conditions') }}">Terms and Conditions</a>
            </li>
        </ul>
        <p>All Right Reserved © 2019 <a class="blue" href="{{ url('/')  }}">Amazing Neo &trade;</a></p>
    </div>
</div>