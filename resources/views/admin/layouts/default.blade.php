<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

@include('admin.includes.head')

</head>

<!-- nav bar -->
<div class="header">

    @include('admin.includes.header')

</div>

<!-- side bar -->
<div class="sidebar">
    <!-- Sidebar -->
    @include('admin.includes.nav')

</div>

<!-- START MAIN -->
<div class="main">
    <!-- START BIGSUM -->
    <div class="hipsum">
<!--
        <div class="col-md-12 clearfix">
            <h4 class="pull-left">Dashboard</h4>
            <ul class="breadcrumb pull-right">
                <li class="active">Home</li>
            </ul>
        </div>
-->
        <div class="alert js-alert hidden" role="alert"></div>

        @if (Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                {{ Session::get('success') }}
            </div>
        @endif

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{$error}}
                </div>
            @endforeach
        @endif

        <!-- Breadcrumbs-->
        @yield('content')

    </div>
    <!-- END BIGSUM -->

</div>
<!-- END BIGSUM -->

    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

</body>
</html>
