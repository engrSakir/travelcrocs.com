<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.user.partials.head')
</head>
<body class="section-bg">
<!-- start cssload-loader -->
@include('layouts.user.partials.loader')
<!-- end cssload-loader -->

<!-- ================================
       START USER CANVAS MENU
================================= -->
@include('layouts.user.partials.user-canvas')
<!-- ================================
       END USER CANVAS MENU
================================= -->

<!-- ================================
       START DASHBOARD NAV
================================= -->
@include('layouts.user.partials.sidebar')
<!-- ================================
       END DASHBOARD NAV
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
{{--@include('layouts.user.partials.top-bar')--}}
<!-- end dashboard-nav -->
    <div class="dashboard-content-wrap">
    @yield('header')
    <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
            @yield('content')
            <!-- end row -->
            @include('layouts.user.partials.footer')
            <!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div>
    <!-- end dashboard-content-wrap -->
</section>
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Template JS Files -->
@include('layouts.user.partials.foot')
@include('includes.logout')
@include('sweetalert::alert')
</body>
</html>
