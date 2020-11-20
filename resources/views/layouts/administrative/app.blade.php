
<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<!--begin::Head-->
<head>
    <base href="">
    <meta charset="utf-8" />
    <title>{{ config('app.name') }} | @yield('title', $page_title ?? 'Administrative')</title>
    <meta name="author" content="{{ config('app.name') }}">
    <meta name="description" content="@yield('page_description', $page_description ?? '')"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!--begin::CSRF-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--end::CSRF-->
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="{{ asset('assets/administrative/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{ asset('assets/administrative/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/administrative/plugins/custom/prismjs/prismjs.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/administrative/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{ asset('assets/administrative/css/themes/layout/header/base/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/administrative/css/themes/layout/header/menu/light.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/administrative/css/themes/layout/brand/dark.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/administrative/css/themes/layout/aside/dark.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{ asset('assets/administrative/media/logos/favicon.ico') }}" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<!--begin::Header Mobile-->
@include('layouts.administrative.partials.header')
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        @include('layouts.administrative.partials.left-sidebar')
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
            <!--begin::Header-->
            @include('layouts.administrative.partials.top-bar')
            <!--end::Header-->
            <!--begin::Content-->
            @yield('content')
            <!--end::Content-->
            <!--begin::Footer-->
            @include('layouts.administrative.partials.footer')
            <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Page-->
</div>
<!--end::Main-->
<!-- begin::User Panel-->
@include('layouts.administrative.panels.user-panel')
<!-- end::User Panel-->
<!--begin::Quick Cart-->
@include('layouts.administrative.panels.quick-cart')
<!--end::Quick Cart-->
<!--begin::Quick Panel-->
@include('layouts.administrative.panels.quick-panel')
<!--end::Quick Panel-->
<!--begin::Chat Panel-->
@include('layouts.administrative.panels.chat-panel')
<!--end::Chat Panel-->
<!--begin::Scrolltop-->
@include('layouts.administrative.panels.scroll-top')
<!--end::Scrolltop-->
<!--begin::Sticky Toolbar-->
@include('layouts.administrative.panels.sticky-tool-bar')
<!--end::Sticky Toolbar-->
<!--begin::Demo Panel-->
@include('layouts.administrative.panels.demo-panel')
<!--end::Demo Panel-->
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{ asset('assets/administrative/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/administrative/plugins/custom/prismjs/prismjs.bundle.js') }}"></script>
<script src="{{ asset('assets/administrative/js/scripts.bundle.js') }}"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Vendors(used by this page)-->
<script src="{{ asset('assets/administrative/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
<!--end::Page Vendors-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{ asset('assets/administrative/js/pages/widgets.js') }}"></script>
<!--end::Page Scripts-->
@include('includes.logout')
</body>
<!--end::Body-->
</html>
