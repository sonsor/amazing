<!DOCTYPE html>
<html lang="en">

<head>

@include('admin.includes.head')

</head>

<body id="page-top">

    @include('admin.includes.header')

<div id="wrapper">

    <!-- Sidebar -->
    @include('admin.includes.nav')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            @yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        @include('admin.includes.footer')

    </div>
    <!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('admin/js/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('admin/js/sb-admin.js') }}"></script>

</body>

</html>
