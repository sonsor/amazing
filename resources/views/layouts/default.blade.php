<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Amazing Neo</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/amazing-neo.css" rel="stylesheet" />
    <link href="css/owl.carousel.min.css" rel="stylesheet" />
    <link href="css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Hind+Siliguri:300,400,500,600,700" rel="stylesheet">

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
        <i class="an an-arrow-up"></i>
    </div>
</div> <!-- / scroll to up -->

<!-- footer -->
<footer class="footer_area">
    @include('includes.footer')
</footer> <!-- /footer -->

<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<script src="js/custom.js" type="text/javascript"></script>

</body>
</html>