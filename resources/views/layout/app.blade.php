<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/site.css')}}">
    <title>@yield('kichwa')</title>
</head>
<body>
<div id="container">
    <ul>
        <a href="{{route('home.index')}}">Home</a>
        <a href="{{route('home.contact')}}">contactus</a>
        <a href="{{route('guiters.index')}}">gita</a>
        <a href="{{route('home.contactus')}}">contact</a>
    </ul>
</div>
@yield('content')
@yield('script') 
</body>
</html>