<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
{{--    <meta name="description" content="">--}}
{{--    <meta name="author" content="">--}}
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="{{asset('/')}}website-assets/img/finallogo.png">



<!-- Tell the browser to be responsive to screen width -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title')</title>

@include('admin.includes.style')
</head>

<body class="skin-multipixel fixed-layout">

<!-- Preloader - style you can find in spinners.css -->

<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Multipixel Admin</p>
    </div>
</div>

<!-- Main wrapper - style you can find in pages.scss -->

<div id="main-wrapper">
    <!-- Topbar header - style you can find in pages.scss -->
    <header class="topbar">
     @include('admin.includes.header')
    </header>
    <!-- End Topbar header -->

    <!-- Left Sidebar - style you can find in sidebar.scss  -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
      @include('admin.includes.sidebar')
        <!-- End Sidebar scroll-->
    </aside>
    <!-- End Left Sidebar - style you can find in sidebar.scss  -->
       @include('admin.includes.rightsidebar')
    <!-- Page wrapper  -->
    <div class="page-wrapper">

        <!-- Container fluid  -->

        <div class="container-fluid">

            <!-- Bread crumb and right sidebar toggle -->
             @yield('body')

        </div>

        <!-- End Container fluid  -->

    </div>

    <!-- End Page wrapper  -->


    <!-- footer -->
 <div class="" align="center">
    <footer class="footer">
        ©  2023 Design & Developed by
        <a href="">VerseTech</a>
    </footer>
 </div>

    <!-- End footer -->

</div>

<!-- End Wrapper -->

@include('admin.includes.script')
</body>
</html>
