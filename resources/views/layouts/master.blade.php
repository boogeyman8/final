<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ URL::to('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::to('css/costom.css') }}">
    <title>👍 fuq spar all my hommies use fake carefour 👍 </title>
</head>
    <body>

        @include('partials.header')
        
        <div style="margin-top:75px;"></div>

        @yield('content')
        
        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>