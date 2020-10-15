@extends('layouts.frontend')

@section('title', 'Service')

@push('css')
<link rel="stylesheet" href="{{ asset('assets/frontend/service/css/icomoon.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/service/fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/service/css/custom.css')}}">
<link rel="stylesheet" href="{{ asset('assets/frontend/service/css/style.css')}}">
@endpush

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="home-1.html">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Services</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<div id="colorlib-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-engineer"></i>
                    </span>
                    <div class="desc">
                        <h3>General Constructing</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-engineering"></i>
                    </span>
                    <div class="desc">
                        <h3>Building Modeling</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-skyline"></i>
                    </span>
                    <div class="desc">
                        <h3>Design Build</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-crane"></i>
                    </span>
                    <div class="desc">
                        <h3>Construction Services</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-sketch"></i>
                    </span>
                    <div class="desc">
                        <h3>Pre-Construction Design</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-conveyor"></i>
                    </span>
                    <div class="desc">
                        <h3>Construction Management</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-crane"></i>
                    </span>
                    <div class="desc">
                        <h3>Construction Services</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-sketch"></i>
                    </span>
                    <div class="desc">
                        <h3>Pre-Construction Design</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 animate-box">
                <div class="services">
                    <span class="icon">
                        <i class="flaticon-conveyor"></i>
                    </span>
                    <div class="desc">
                        <h3>Construction Management</h3>
                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@push('js')
<script src="{{ asset('assets/frontend/service/js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('assets/frontend/service/js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('assets/frontend/service/js/jquery.countTo.js')}}"></script>
<script src="{{ asset('assets/frontend/service/js/main.js')}}"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

@endpush