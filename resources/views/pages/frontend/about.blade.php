@extends('layouts.frontend')

@section('title', 'About us')

@push('css')

@endpush

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>ABOUT US</h3>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li>></li>
                        <li><a href="{{route('about.index')}}"><span>About Us</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<!--About us area-->
<section class="about-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    <h2>WHO <span>WE ARE ?</span></h2>
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus turpis. Donec maximus odio nec odio</h4>

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lectus turpis. Donec maximus odio nec odio commodo euismod. Quisque augue purus, porta vel facilisis ac, accumsan eu elit. Nulla ultricies odio sit amet arcu sodales, id ornare tortor tempor. Cras pellentesque lorem eget tincidunt eleifend. Phasellus a finibus metus. Aliquam eu nisl pellentesque
                        pellentesque libero quis, tempor nisi. Donec vitae mattis libero. Mauris est ipsum, vestibulum nec nibh quis, lacinia fringilla magna. Proin nec lacus ut odio euismod tincidunt necet lectus. </p>

                    <a href="#" class="btn-a">MORE US</a>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-image">
                    <img src="{{ asset('assets/frontend/images/about.jpg')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>
<!--/About us area-->
<!-- Services Area -->
<section class="services-area">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h2>Our <span>services</span> </h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-home"></i></span>
                    <h4>Saling services</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-home"></i></span>
                    <h4>Renting Services</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-home"></i></span>
                    <h4>Property Listing</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                <div class="services-list">
                    <span><i class="fa fa-home"></i></span>
                    <h4>Property Managment</h4>
                    <p>Curabitur non nulla sit amet nisl tempus convallis quis ac lectus Sed porttitor lectus nibh.</p>
                    <a href="#" class="btn-l">Read More...</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Services Area -->
<!--Skill area-->
<section class="skill-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <div class="skill-list">
                    <div class="skill-count">
                        <span class="count">960</span>
                    </div>
                    <div class="skill-name">
                        <h4>Complete Project</h4>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="skill-count">
                        <span class="count">760</span>
                    </div>
                    <div class="skill-name">
                        <h4>Property Sold</h4>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="skill-count">
                        <span class="count">450</span>
                    </div>
                    <div class="skill-name">
                        <h4>Happy Client</h4>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="skill-count">
                        <span class="count">830</span>
                    </div>
                    <div class="skill-name">
                        <h4>Awards Win</h4>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="skill-count">
                        <span class="count">560</span>
                    </div>
                    <div class="skill-name">
                        <h4>Rent Property</h4>
                    </div>
                </div>
                <div class="skill-list">
                    <div class="skill-count">
                        <span class="count">1500</span>
                    </div>
                    <div class="skill-name">
                        <h4>Total Property</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Skill area-->
<!-- Agent Area -->
<section class="agent-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12 col-xs-12">
                <div class="section-heading-v1 agent-header text-center">
                    <h2>Real estate <span>Agent</span></h2>
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
                                <img src="{{ asset('assets/frontend/images/agent/agent-2-v1.jpg')}}" alt="" />
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
                        <h4>Hemai Smith</h4>
                        <p>Happy seller</p>
                    </a>
                    <a data-slide-index="1" href="#">
                        <div class="over-img"><img src="{{ asset('assets/frontend/images/client/client-2.jpg')}}" alt="" /></div>
                        <h4>Hemai Smith</h4>
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
<!--Footer-->
@endsection

@push('js')

@endpush