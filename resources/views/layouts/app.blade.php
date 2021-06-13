<!DOCTYPE html>
<html>
<head>
    <title>Mon super cite</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> --}}
</head>
<body>
    @include('partial.navbar')
    <div class="container mx-auto content-center">
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js')}}"></script>
    {{-- <script src="{{ asset('js/bootstrap.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script> --}}
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> --}}
    @include('partial.footer')
</body>

</html>
