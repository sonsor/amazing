<!-- nav bar -->
<div class="header">
    <a href="#" id="menu-action"> <i class="fa fa-bars"></i> <span>Close</span> </a>
    <div class="logo">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('admin/images/logo.svg') }}" height="20" />
        </a>
    </div>
    <nav class="navbar navbar-default pull-right">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse" data-hover="dropdown" data-animations="zoomIn">
            <ul class="nav navbar-nav navbar-right ">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">dropdown</a></li>
                        <li class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>

                <li><a href="#">What's New</a></li>
                <li><a href="examples.html">Examples</a></li>
                <li><a href="contact-us.html">Contact</a></li>
                <li class="s-icon"><a href="#" id="addClass" class="s-icon" data-toggle="modal" data-target="#modal-search"><i class="fa fa-search"></i></a></li>
            </ul>
        </div>
    </nav>
</div> <!-- / nav bar end -->
