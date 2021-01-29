<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Fonts --}}
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

        {{-- Css Style --}}
        <link rel="stylesheet" href="{{asset('css/style.css')}}">

        <title>Boolean Careers</title>
    </head>
    <body>
         @include('common.header')
         @section('main')  
         @show
    </body>
</html>