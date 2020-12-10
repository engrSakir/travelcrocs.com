<!DOCTYPE html>
<html lang="{{  App::getLocale() }}">
<head>
    @include('layouts.frontend.partials.head')
</head>
<body>
<!-- start cssload-loader -->
@include('layouts.frontend.partials.loader')
<!-- end cssload-loader -->
<a href="#" class="rtl-btn">Right Button</a>

<!-- ================================
            START HEADER AREA
================================= -->
@include('layouts.frontend.partials.header')
<!-- ================================
         END HEADER AREA
================================= -->

<!-- ================================
            START CONTENT SECTION
================================= -->
@yield('content')
<!-- ================================
         END CONTENT SECTION
================================= -->

<!-- ================================
       START FOOTER AREA
================================= -->
@include('layouts.frontend.partials.footer')
<!-- end footer-area -->
<!-- ================================
       START FOOTER AREA
================================= -->

<!-- start back-to-top -->
<div id="back-to-top">
    <i class="la la-angle-up" title="Go top"></i>
</div>
<!-- end back-to-top -->

<!-- ================================
       START MODAL
================================= -->
@include('layouts.frontend.partials.modal')
<!-- ================================
       END MODAL
================================= -->

<!-- Template JS Files -->
@include('layouts.frontend.partials.foot')
@include('includes.alert')
@include('sweetalert::alert')
</body>
</html>
