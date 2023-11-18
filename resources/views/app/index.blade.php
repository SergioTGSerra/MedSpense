<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
        <head>
            <base href="/app/"/>
            <title>MedSpence - @yield('title')</title>
            <meta charset="utf-8"/>
            <meta name="description" content="Description"/>
            <meta name="keywords" content="keywords"/>
            <meta name="viewport" content="width=device-width, initial-scale=1"/>
            <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>
            <!--begin::Fonts(mandatory for all pages)-->
                <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
            <!--end::Fonts-->
            <!--begin::Vendor Stylesheets(used for this page only)-->
                @yield('styles')
            <!--end::Vendor Stylesheets-->
            <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
            <!--end::Global Stylesheets Bundle-->
            <script>
                // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
                if (window.top != window.self) window.top.location.replace(window.self.location.href);
            </script>
        </head>
    <!--end::Head-->
    <!--begin::Body-->
        <body  id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"  class="app-default" >
            @include('app.partials.theme-mode._init')
            @include('app.layout._default')
            <!--begin::Scrolltop-->
                <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                    <i class="ki-outline ki-arrow-up"></i>
                </div>
            <!--end::Scrolltop-->
            <!--begin::Javascript-->
                <script>
                    var hostUrl = "assets/";
                </script>
                <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                    <script src="assets/plugins/global/plugins.bundle.js"></script>
                    <script src="assets/js/scripts.bundle.js"></script>
                <!--end::Global Javascript Bundle-->
                <!--begin::Vendors Javascript(used for this page only)-->
                    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
                    <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
                    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
                <!--end::Vendors Javascript-->
                <!--begin::Custom Javascript(used for this page only)-->
                    <script src="assets/js/widgets.bundle.js"></script>
                    <script src="assets/js/custom/widgets.js"></script>
                    <script src="assets/js/custom/apps/chat/chat.js"></script>
                <!--end::Custom Javascript-->
            <!--end::Javascript-->
        </body>
    <!--end::Body-->
</html>