<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from www.theasianweb.com/realestate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Oct 2020 14:07:44 GMT -->

<head>
    @include('partials.frontend.head')
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Header Area -->
    <header>
        @include('partials.frontend.header')
    </header><!-- /Header Area -->

    @yield('content')
    <!--Footer-->
    <footer>
        @include('partials.frontend.footer')
    </footer>
    <!--/Footer-->
    <!-- All JS here -->
    @include('partials.frontend.default-js')
</body>

<!-- Mirrored from www.theasianweb.com/realestate/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Oct 2020 14:10:45 GMT -->

</html>