<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    @include('includes.head')

</head>
<body>
<header id="header">
    @include('includes.header')
</header>

<!-- contant -->
<div class="main">
    @yield('content')
</div>

<!-- scroll to up -->
<div class="scroll-to-up">
    <div class="scrollup" style="display: block;">
        <i class="an an-long-arrow-up"></i>
    </div>
</div> <!-- / scroll to up -->

<!-- footer -->
<footer class="footer_area">
    @include('includes.footer')
</footer> <!-- /footer -->

<script src="{!! asset('js/jquery.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/bootstrap.min.js') !!}" type="text/javascript"></script>
<script src="{!! asset('js/owl.carousel.js') !!}"></script>
<script src="{!! asset('js/custom.js') !!}" type="text/javascript"></script>

<script>
$(function() {
  $(".navigation-tab-item").click(function() {
    $(".navigation-tab-item").removeClass("active");
    $(this).addClass("active");
    $(".navigation-tab-overlay").css({
      left: $(this).prevAll().length * 24.7 + "%"
    });
  });
});
    </script>
    
@if (\Request::routeIs('icon.seach'))
    <script src="{!! asset('js/knockout.min.js') !!}" type="text/javascript"></script>
    <script src="{!! asset('js/icons.js') !!}" type="text/javascript"></script>
@endif

@yield('footer')

</body>
</html>