@extends('layouts.default')

@section('title', 'Thank You')

@section('content')
    <div class="feature-section">
        <div class="container">
            <h1 class="h1-sm ">Thank You</h1>
        </div>
    </div>
    <div class="section-padding">
        <div class="container">
            <h3>Thank You for using Amazing Neo</h3>
        </div>
    </div>
@endsection

@section('footer')
    <script>console.log(2)</script>
    @if (Session::get('download.file.token'))
    <script>
        window.open('{{ route('download.file', Session::get('download.file.token'))  }}', '_blank')
    </script>
    @endif
@stop