<div id="navbar" class="navbar-collapse collapse" data-hover="dropdown" data-animations="zoomIn">
    <ul class="nav navbar-nav navbar-right ">
        <li class="{{ Request::is('/') ? 'active': '' }}">
            <a href="{{ url('/') }}">Home</a>
        </li>
        <li class="{{ Request::is('/icons') ? 'active': '' }}">
            <a href="{{ url('/icons') }}">Icons</a>
        </li>
        <li class="{{ Request::is('examples') ? 'active': '' }}">
            <a href="{{ url('/examples') }}">Examples</a>
        </li>
        <li class="{{ Request::is('contact') ? 'active': '' }}">
            <a href="{{ url('/contact') }}">Contact</a>
        </li>
        <li class="s-icon">
            <a href="#" id="addClass" class="s-icon" data-toggle="modal" data-target="#modal-search"><i class="an an-search"></i></a>
        </li>
    </ul>
</div>