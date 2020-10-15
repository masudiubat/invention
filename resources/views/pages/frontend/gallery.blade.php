@extends('layouts.frontend')

@section('title', 'Gallery')

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>Gallery</h3>
                    <ul>
                        <li><a href="home-1.html">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Gallery</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<!--Property list area-->
<section class="property-list-area list-one section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 floatright all-property">
                <div class="property-list-all">
                    <div class="row property-list">
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-1.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-2.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-3.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-4.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-5.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-6.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-7.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-8.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 single-property">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/properties/properties-list-4.jpg')}}" alt="" />
                            </figure>
                            <div class="property-list-content text-center">
                                <h3>Villa In Hialeah, Dade County</h3>
                                <p>$7,500 Per Month - Single Family Home</p>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <div class="pagin">
                                <ul>
                                    <li><span><i class="fa fa-angle-double-left"></i></span></li>
                                    <li><span class="active">1</span></li>
                                    <li><span>2</span></li>
                                    <li><span>3</span></li>
                                    <li><span><i class="fa fa-angle-double-right"></i></span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Property list area-->
@endsection