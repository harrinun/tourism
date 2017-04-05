<!DOCTYPE html>
<html lang="en">
@include('layouts.site.head')

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


<!-- PAGE WRAP -->
<div id="page-wrap">
    <!-- PRELOADER -->
    <div class="preloader"></div>
    <!-- END / PRELOADER -->

    <!-- HEADER PAGE -->
    @include('layouts.site.header')
    <!-- END / HEADER PAGE -->

    <!-- HERO SECTION -->
    @yield('hero')
    <!-- END / HERO SECTION -->

    @yield('content')

    <!-- FOOTER PAGE -->
    @include('layouts.site.footer')
    <!-- END / FOOTER PAGE -->

</div>
<!-- END / PAGE WRAP -->


<!-- LOAD JQUERY -->
@include('layouts.site.scripts')

</body>
</html>