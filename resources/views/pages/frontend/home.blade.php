@extends('layouts.frontend')

@section('title', 'Home')

@section('content')
<!--Slider Area -->
<section class="slider-area">
    <div class="slider-home1">
        <div class="slider-item">
            <img src="{{ asset('assets/frontend/images/slider/slider1-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">
                                <h1>We are offering the</h1>
                                <h1 class="larg">Best Real Estate Deals</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin tellus elit ultricies at semper consectetur felis. Fusce eget ligula ut libero placerat tempor vulputate </p>
                                <a href="#" class="btn btn-a">More Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
        <div class="slider-item">
            <img src="{{ asset('assets/frontend/images/slider/slider2-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">
                                <h1>We Can Seve You</h1>
                                <h1 class="larg">To Get Your Home</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin tellus elit ultricies at semper consectetur felis. Fusce eget ligula ut libero placerat tempor vulputate </p>
                                <a href="#" class="btn btn-a">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
        <div class="slider-item">
            <img src="{{ asset('assets/frontend/images/slider/slider3-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">
                                <h1>We are offering the</h1>
                                <h1 class="larg">Best Real Estate Deals</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin tellus elit ultricies at semper consectetur felis. Fusce eget ligula ut libero placerat tempor vulputate </p>
                                <a href="#" class="btn btn-a">Learn More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
        <div class="slider-item">
            <img src="{{ asset('assets/frontend/images/slider/slider4-v1.jpg')}}" alt="" />
            <div class="content-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12 text-center">
                            <div class="slider-content">
                                <h1>We are offering the</h1>
                                <h1 class="larg">Best Real Estate Deals</h1>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Proin tellus elit ultricies at semper consectetur felis. Fusce eget ligula ut libero placerat tempor vulputate </p>
                                <a href="#" class="btn btn-a">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/single Slider-->
    </div>
</section>
<!--/Slider Area -->

<!-- Services Area -->
<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h3>{!! trans('home.service_title') !!}</h3>
                    <p>{!! trans('home.service_declaration') !!}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($services as $service)
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-home"></i></span>
                    @if(Session::has('locale') && Session::get('locale') == 'bn')
                    <h4>{{ $service->name_bn }}</h4>
                    <p>{{ $service->description_bn }}</p>
                    @else
                    <h4>{{ $service->name_en }}</h4>
                    <p>{{ $service->description_en }}</p>
                    @endif

                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>
<!-- /Services Area -->

<!--Best us area-->
<section class="best-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-image">
                    <img src="{{ asset('assets/frontend/images/about.jpg')}}" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    <div class="section-heading-v1">
                        <h3>{!! trans('home.the_best_title') !!}</h3>
                    </div>
                    {!! trans('home.the_best_declaration') !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Best us area-->

<!--Recent projects Area -->
<section class="recent-properties-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h3><span>Recent</span> Projects</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.
                    </p>
                </div>
            </div>
        </div>
        <!--properties slider-->
        <?php $i = 1; ?>
        <div class="properties-slider">

            @foreach($recentProjects as $project)
            <div class="row">
                @if($i % 2 == 0)

                <div class="properties-slider-item">
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single">
                        <div class="row">
                            <div class="slider-content-area">
                                <div class="content-properties">
                                    @if(Session::has('locale') && Session::get('locale') == 'en')
                                    <div class="col-md-12 col-sm-12 col-xs-12 item-single">
                                        <h4>{{ $project->name_en}}</h4>
                                        <p><b>Address: </b>{{ $project->address_en}}</p>
                                        <p><b>Area: </b>{{ $project->area_en}} square feet</p>
                                        <p><b>Cost: </b> {{$project->cost_en }} BDT (approximately)</p>
                                        <p><a href="#" class="btn-b submit-btn">More Details...</a></p>
                                    </div>
                                    @else
                                    <div class="col-md-12 col-sm-12 col-xs-12 item-single">
                                        <h4>{{ $project->name_bn }}</h4>
                                        <p><b>ঠিকানা: </b> {{ $project->address_bn}}</p>
                                        <p><b>আয়তন: </b>{{ $project->area_bn}} স্কয়ারফিট</p>
                                        <p><b>খরচ: </b>{{ $project->cost_bn }} টাকা (গড়পড়তা)</p>
                                        <p><a href="#" class="btn-b submit-btn">More Details...</a></p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single">
                        <img src="{{ asset('assets/frontend/images/recent-properties/properties-1.jpg')}}" alt="" />
                    </div>
                </div>
                @else
                <div class="properties-slider-item">
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single">
                        <img src="{{ asset('assets/frontend/images/recent-properties/properties-1.jpg')}}" alt="" />
                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12 item-single">
                        <div class="row">
                            <div class="slider-content-area">
                                <div class="content-properties">
                                    @if(Session::has('locale') && Session::get('locale') == 'en')
                                    <div class="col-md-12 col-sm-12 col-xs-12 item-single">
                                        <h4>{{ $project->name_en}}</h4>
                                        <p><b>Address: </b>{{ $project->address_en}}</p>
                                        <p><b>Area: </b>{{ $project->area_en}} square feet</p>
                                        <p><b>Cost: </b> {{$project->cost_en }} BDT (approximately)</p>
                                        <p><a href="#" class="btn-b submit-btn">More Details...</a></p>
                                    </div>
                                    @else
                                    <div class="col-md-12 col-sm-12 col-xs-12 item-single">
                                        <h4>{{ $project->name_bn }}</h4>
                                        <p><b>ঠিকানা: </b> {{ $project->address_bn}}</p>
                                        <p><b>আয়তন: </b>{{ $project->area_bn}} স্কয়ারফিট</p>
                                        <p><b>খরচ: </b>{{ $project->cost_bn }} টাকা (গড়পড়তা)</p>
                                        <p><a href="#" class="btn-b submit-btn">More Details...</a></p>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @endif
            </div>
            <?php $i++; ?>
            @endforeach

        </div>
        <!--/properties slider-->
    </div>
</section>
<!--/Recent projects Area -->

<!--Feature Area -->
<section class="feature-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="feature-content">
                    <h3><span>Amazing</span> Features</h3>
                    <ul>
                        <li>
                            <h4><i class="fa fa-image"></i> Living Inside a Nature</h4>
                            <p>Real Homes theme provides various templates fulfill the needs of real estate agents agencies.
                            </p>
                        </li>
                        <li>
                            <h4><i class="fa fa-image"></i> Royal Touch Paint</h4>
                            <p>Real Homes theme provides various templates fulfill the needs of real estate agents agencies.
                            </p>
                        </li>
                        <li>
                            <h4><i class="fa fa-image"></i> Luxurious Fittings</h4>
                            <p>Real Homes theme provides various templates to fulfill the needs of real estate agents.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="feature-image text-center">
                    <img src="{{ asset('assets/frontend/images/feature/feature-v1.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Feature Area -->

<!--Feature Properties Area -->
<section class="property-list-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h3>Our <span>Best Projects</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.
                    </p>
                </div>
            </div>
        </div>
        <div class="property-list-all">
            <div class="row property-list">
                <div class="col-md-6 col-sm-12 single-property">
                    <figure>
                        <img src="{{asset('assets/frontend/images/properties/properties-list-1.jpg')}}" alt="" />
                    </figure>
                    <div class="property-list-content text-center">
                        <h3>Villa In Hialeah, Dade County</h3>
                        <p>$7,500 Per Month - Single Family Home</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 single-property">
                    <figure>
                        <img src="{{asset('assets/frontend/images/properties/properties-list-2.jpg')}}" alt="" />
                    </figure>
                    <div class="property-list-content text-center">
                        <h3>Villa In Hialeah, Dade County</h3>
                        <p>$7,500 Per Month - Single Family Home</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 single-property">
                    <figure>
                        <img src="{{asset('assets/frontend/images/properties/properties-list-3.jpg')}}" alt="" />
                    </figure>
                    <div class="property-list-content text-center">
                        <h3>Villa In Hialeah, Dade County</h3>
                        <p>$7,500 Per Month - Single Family Home</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 single-property">
                    <figure>
                        <img src="{{asset('assets/frontend/images/properties/properties-list-4.jpg')}}" alt="" />
                    </figure>
                    <div class="property-list-content text-center">
                        <h3>Villa In Hialeah, Dade County</h3>
                        <p>$7,500 Per Month - Single Family Home</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--Feature Properties Area -->

<!-- Agent Area -->
<section class="agent-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 agent-header text-center">
                    <h3>Our <span>Team</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="agent-slider-v1">
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/agent/agent-1-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Jasica Doron</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/agent/agent-2-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Jame Bond</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/agent/agent-3-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/agent/agent-4-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/agent/agent-3-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="agent-list text-center">
                        <div class="agent-image">
                            <figure>
                                <img src="{{ asset('assets/frontend/images/agent/agent-1-v1.jpg')}}" alt="" />
                                <span class="image-cap"><i class="fa fa-plus"></i></span>
                            </figure>
                        </div>
                        <div class="content-agent">
                            <h4><a href="#">Hemai Smith</a></h4>
                            <p>Founder Real Estae</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Agent Area -->
<!--Testimonial-->
<section class="testimonial-area testimonial-v1  section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 text-center">
                    <h3><span>WHAT</span> CLIENT SAY</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="client-content">
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                    </blockquote>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                    </blockquote>
                    <blockquote>
                        <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Duis ac volutpat dolor. Phasellus et risus ut tortor molestie maximus. Nulla lacinia mi sit amet consectetur scelerisque. Nulla vitae tortor vel mauris porttitor sodales. </p>
                    </blockquote>
                </div>
            </div>
            <div class="col-md-12">
                <div class="client-img text-center">
                    <a data-slide-index="0" href="#">
                        <div class="over-img"><img src="{{ asset('assets/frontend/images/client/client-1.jpg')}}" alt="" /></div>
                        <h4>Jasica Doron</h4>
                        <p>Happy seller</p>
                    </a>
                    <a data-slide-index="1" href="#">
                        <div class="over-img"><img src="{{ asset('assets/frontend/images/client/client-2.jpg')}}" alt="" /></div>
                        <h4>Jame Bond</h4>
                        <p>Happy seller</p>
                    </a>
                    <a data-slide-index="2" href="#">
                        <div class="over-img"><img src="{{ asset('assets/frontend/images/client/client-3.jpg')}}" alt="" /></div>
                        <h4>Hemai Smith</h4>
                        <p>Happy seller</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Testimonial-->
<!--Blog area-->
<section class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h3>Latest <span>Posts</span> </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 blog-grid">
                <div class="single-blog">
                    <figure>
                        <img src="{{asset('assets/frontend/images/blog/blog-1.jpg')}}" alt="" />
                    </figure>
                    <div class="blog-content">
                        <h4>Blog Title Here</h4>
                        <span>23 Aug, 2016 / by Admin</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, facere dignissimos.</p>
                        <a href="#" class="btn-l">Read More....</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 blog-grid">
                <div class="single-blog">
                    <figure>
                        <img src="{{asset('assets/frontend/images/blog/blog-2.jpg')}}" alt="" />
                    </figure>
                    <div class="blog-content">
                        <h4>Blog Title Here</h4>
                        <span>23 Aug, 2016 / by Admin</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, facere dignissimos.</p>
                        <a href="#" class="btn-l">Read More....</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 blog-grid">
                <div class="single-blog">
                    <figure>
                        <img src="{{asset('assets/frontend/images/blog/blog-3.jpg')}}" alt="" />
                    </figure>
                    <div class="blog-content">
                        <h4>Blog Title Here</h4>
                        <span>23 Aug, 2016 / by Admin</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, facere dignissimos.</p>
                        <a href="#" class="btn-l">Read More....</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!--/Blog area-->
<!--Footer-->
@endsection