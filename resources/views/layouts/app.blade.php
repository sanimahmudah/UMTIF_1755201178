<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    <script src="{{asset('js.app.js')}}"></script>
</head>

<body>
    @include('layouts.navbar')
    <div class="container-fluid">
        @yield('content')
        <div class="row mt-3">
            <div class="col-md-2">
                @include('layouts.sidebar')
            </div>
            <div class="col-md-10">
                @include('layouts.breadcumb')
                tesssss
            </div>

</body>

</html>