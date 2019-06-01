<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

    @include('admin.includes.head')

</head>

<body>

    <!-- LOGIN FORM -->
    <div class="text-center">
        <div class="logo">
            <img class="img-responcive" src="{{ asset('admin/images/amazing-Neo.png') }}" />
        </div>

        @yield('content')

    </div>

    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/js/custom.js') }}"></script>

</body>
</html>
