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
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('logout') }}">logout</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</div> <!-- / nav bar end -->
