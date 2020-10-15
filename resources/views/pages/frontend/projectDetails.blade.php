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
                        <li><a href="home-1.html">Home</a></li>
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
            <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12 floatright">
                <div class="single-descrip">
                    <h4>Villa On Washington Ave</h4>
                    <p>Add to favorites 3 Rooms 5 Bedrooms Villas Sales</p>
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
                    <h4>The Urban life style</h4>
                    <h4 class="sm-head"><i class="fa fa-map-marker"></i> 58 Street, Newyork</h4>
                    <p class="out-mar">Morbi blandit mi ex. Etiam laoreet tortor felis, non consequat sem aliquet ac. Curabitur a gravida risus. Pellentesque nec lorem ultricies, volutpat libero tempor, vehicula justo. Praesent ultrices ut sem sed porttitor. Suspendisse pretium tortor non tellus sodales blandit sed non eros. Mauris consequat eget dolor ut efficitur. Vestibulum tempus mi quis ex imperdiet laoreet. Proin lorem tellus, fermentum nec porttitor nec, posuere eget lacus. Sed tincidunt velit a accumsan consequat. Fusce at ligula eget metus feugiat luctus. </p>
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
                    <div class="booknow-btn">
                        <a href="#" class="btn-a">Book Now</a>
                    </div>
                </div>
                <div class="single-descrip">
                    <div class="property-map">
                        <h4>Property Map:</h4>
                        <img src="{{ asset('assets/frontend/images/map.jpg')}}" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Property details area-->
@endsection