<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('output/final.css') }}" type="text/css">
    </head>
    <body>
        @include('partials.nav')
        <div id="container">
            @if (Session::has('flash_message'))
                <div class="alert alert-success">{{ Session::get('flash_message') }}</div>
            @endif

            @yield('content')
        </div>
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/js/select2.min.js"></script>
        @yield('footer')
    </body>
</html>