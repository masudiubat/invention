@extends('layouts.frontend')

@section('title', 'Property Details')

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>PROJECT DETAILS</h3>
                    <ul>
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Project details</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<!--Property details area-->
<section class="property-details-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h3><span>
                            @if(Session::has('locale') && Session::get('locale') == 'bn')
                            {{ $project->name_bn }}
                            @else
                            {{ $project->name_en }}
                            @endif
                        </span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-9 col-sm-12 col-xs-12 floatright">
                <div class="single-descrip">
                    <div class="bg-photo">
                        <img src="{{ asset('assets/frontend/images/properties/properties-details-2.1.jpg')}}" alt="">
                        <img src="{{ asset('assets/frontend/images/properties/properties-details-2.2.jpg')}}" alt="">
                        <img src="{{ asset('assets/frontend/images/properties/properties-details-2.3.jpg')}}" alt="">
                        <img src="{{ asset('assets/frontend/images/properties/properties-details-2.4.jpg')}}" alt="">
                    </div>
                    <div class="sm-photo">
                        <a href="#" data-slide-index="0"><img src="{{ asset('assets/frontend/images/properties/properties-details-2.1.jpg')}}" alt=""></a>
                        <a href="#" data-slide-index="1"><img src="{{ asset('assets/frontend/images/properties/properties-details-2.2.jpg')}}" alt=""></a>
                        <a href="#" data-slide-index="2"><img src="{{ asset('assets/frontend/images/properties/properties-details-2.3.jpg')}}" alt=""></a>
                        <a href="#" data-slide-index="3"><img src="{{ asset('assets/frontend/images/properties/properties-details-2.4.jpg')}}" alt=""></a>
                    </div>
                </div>
                <div class="single-descrip">
                    <h4>
                        @if(Session::has('locale') && Session::get('locale') == 'bn')
                        Project Description
                        @else
                        প্রকল্প বর্ণনা
                        @endif
                    </h4>
                    <p class="out-mar">
                        @if(Session::has('locale') && Session::get('locale') == 'bn')
                        {{ $project->description_bn }}
                        @else
                        {{ $project->description_en }}
                        @endif
                    </p>
                </div>
                <div class="single-descrip">
                    <h4>Essential Information:</h4>
                    <ul>
                        <li><i class="fa fa-chevron-circle-right"></i> Property ID: HZ01</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Price: $5,000</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Property Size: 1200 Sq</li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-chevron-circle-right"></i> Bathrooms: 2</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Garage: 1</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Garage: 1</li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-chevron-circle-right"></i> Garage Size: 200</li>
                        <li><i class="fa fa-chevron-circle-right"></i> SqFt</li>
                        <li><i class="fa fa-chevron-circle-right"></i> Year Built: </li>
                    </ul>
                </div>
                <div class="single-descrip">
                    <h4>Essential Information:</h4>
                    <ul>
                        <li><i class="fa fa-chevron-circle-down"></i> Air Conditioning</li>
                        <li><i class="fa fa-chevron-circle-down"></i> Coffee Pot</li>
                        <li><i class="fa fa-chevron-circle-down"></i> Dishwasher</li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-chevron-circle-down"></i> Oven</li>
                        <li><i class="fa fa-chevron-circle-down"></i> Lift</li>
                        <li><i class="fa fa-chevron-circle-down"></i> Computer</li>
                    </ul>
                    <ul>
                        <li><i class="fa fa-chevron-circle-down"></i> Parking</li>
                        <li><i class="fa fa-chevron-circle-down"></i> Computer</li>
                    </ul>
                    <!--
                    <div class="booknow-btn">
                        <a href="#" class="btn-a">Book Now</a>
                    </div>
-->
                </div>
            </div>

            <div class="col-md-3 col-sm-12 floatright all-property left-list">
                <h4 style="text-align:center; color:#ff8c00;">
                    @if(Session::has('locale') && Session::get('locale') == 'bn')
                    {{ $projectType->name_bn }}
                    @else
                    {{ $projectType->name_en }}
                    @endif
                </h4>
                <ul>
                    @foreach($projectNames as $project)
                    <li><a href="{{ route('project.show', $project->id)}}"><i class="fa fa-chevron-circle-right"></i>
                            @if(Session::has('locale') && Session::get('locale') == 'bn')
                            {{ $project->name_bn }}
                            @else
                            {{ $project->name_en }}
                            @endif
                        </a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>
<!--/Property details area-->
@endsection