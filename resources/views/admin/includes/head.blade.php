<meta charset="utf-8">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Amazing Neo - @yield('title')</title>

<link href="{{ asset('admin/css/font-awesome.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/css/bootstrap.min.css') }}" rel="stylesheet" />
<!-- upload files -->
<!-- <link href="{{ asset('admin/assats/upload/css/dropzone.css') }}" rel="stylesheet" /> -->
@if (\Request::routeIs('login'))
<link href="{{ asset('admin/css/extra-style.css') }}" rel="stylesheet" />
@endif

@if (!\Request::routeIs('login'))
    <link href="{{ asset('admin/css/bootstrap-dialog.min.css') }}" rel="stylesheet" />
<link href="{{ asset('admin/css/style.css') }}" rel="stylesheet" />
@endif
