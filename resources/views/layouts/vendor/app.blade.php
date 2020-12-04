<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.vendor.partials.head')
    @stack('css')
</head>
<body class="section-bg">
<!-- start cssload-loader -->
@include('layouts.vendor.partials.loader')
<!-- end cssload-loader -->

<!-- ================================
       START USER CANVAS MENU
================================= -->
@include('layouts.vendor.partials.user-canvas')
<!-- end user-canvas-container -->
<!-- ================================
       END USER CANVAS MENU
================================= -->

<!-- ================================
       START SIDEBAR NAV
================================= -->
@include('layouts.vendor.partials.sidebar')
<!-- end sidebar-nav -->
<!-- ================================
       END SIDEBAR NAV
================================= -->

<!-- ================================
    START DASHBOARD AREA
================================= -->
<section class="dashboard-area">
{{--@include('layouts.vendor.partials.top-bar')--}}
    <!-- end dashboard-nav -->
    <div class="dashboard-content-wrap">
        @yield('header')
        <!-- end dashboard-bread -->
        <div class="dashboard-main-content">
            <div class="container-fluid">
                @yield('content')
                <!-- end row -->
               @include('layouts.vendor.partials.footer')
                <!-- end row -->
            </div><!-- end container-fluid -->
        </div><!-- end dashboard-main-content -->
    </div>
    <!-- end dashboard-content-wrap -->
</section>
<!-- end dashboard-area -->
<!-- ================================
    END DASHBOARD AREA
================================= -->

<!-- start scroll top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end scroll top -->

<!-- Template JS Files -->
@include('layouts.vendor.partials.foot')
@stack('js')
@include('includes.logout')
@include('sweetalert::alert')
</body>
</html>
