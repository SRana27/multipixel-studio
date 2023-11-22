<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}website-assets/img/finallogo.png">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
@include('website.includes.style')
</head>
<body>
@include('website.includes.header')
@yield('body')

<a href="#" class="btn btn-secondary btn-square rounded-circle back-to-top"><i class="fa fa-arrow-up text-white"></i></a>
@include('website.includes.footer')
@include('website.includes.script')
</body>

</html>
