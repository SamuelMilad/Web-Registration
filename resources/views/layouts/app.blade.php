<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('styleWep.css') }}">
    <script defer src="{{ asset('API_Ops.js') }}"></script>
</head>
<body>
@include('layouts.Header')

<!-- Links to switch languages -->
<div>
    <a href="{{ url('/lang/en') }}">English</a> |
    <a href="{{ url('/lang/ar') }}">Arabic</a>
</div>

<div class="main-container">
    @yield('content')
</div>

@include('layouts.Footer')
</body>
</html>
