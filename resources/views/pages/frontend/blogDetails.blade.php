@extends('layouts.frontend')

@section('title', 'Blog Details')

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>Blog Details</h3>
                    <ul>
                        <li><a href="home-1.html">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Blog Details</span></a></li>
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
            <div class="col-md-9 col-sm-12 col-xs-12 floatright">


                <div class="bg-photo">
                    <img src="{{ asset('assets/frontend/images/properties/properties-details-2.1.jpg')}}" alt="">

                </div>
                <div class="single-descrip">
                    <h4>Blog Title Here</h4>
                    <h4 class="sm-head"> 23 Aug, 2016 / by Admin</h4>
                    <p class="out-mar">Morbi blandit mi ex. Etiam laoreet tortor felis, non consequat sem aliquet ac. Curabitur a gravida risus. Pellentesque nec lorem ultricies, volutpat libero tempor, vehicula justo. Praesent ultrices ut sem sed porttitor. Suspendisse pretium tortor non tellus sodales blandit sed non eros. Mauris consequat eget dolor ut efficitur. Vestibulum tempus mi quis ex imperdiet laoreet. Proin lorem tellus, fermentum nec porttitor nec, posuere eget lacus. Sed tincidunt velit a accumsan consequat. Fusce at ligula eget metus feugiat luctus. </p>
                    <p class="out-mar">Morbi blandit mi ex. Etiam laoreet tortor felis, non consequat sem aliquet ac. Curabitur a gravida risus. Pellentesque nec lorem ultricies, volutpat libero tempor, vehicula justo. Praesent ultrices ut sem sed porttitor. Suspendisse pretium tortor non tellus sodales blandit sed non eros. Mauris consequat eget dolor ut efficitur. Vestibulum tempus mi quis ex imperdiet laoreet. Proin lorem tellus, fermentum nec porttitor nec, posuere eget lacus. Sed tincidunt velit a accumsan consequat. Fusce at ligula eget metus feugiat luctus. </p>
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
            </div>
            <div class="col-md-3 col-sm-12 col-xs-12 floatleft">
                <div class="single-more">
                    <h4>Search</h4>
                    <ul>
                        <li>
                            <select class="selectpicker">
                                <option>Any Status</option>
                                <option>New property</option>
                                <option>Old property</option>
                                <option>Something</option>
                                <option>Something</option>
                            </select>
                        </li>
                        <li>
                            <select class="selectpicker">
                                <option>Any Status</option>
                                <option>New property</option>
                                <option>Old property</option>
                                <option>Something</option>
                                <option>Something</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="single-more latest-post">
                    <h4>Latest Posts</h4>
                    <div class="featured-property latest-single-post">
                        <div class="featured-image floatleft">
                            <img src="{{ asset('assets/frontend/images/properties/featured-sm-1.jpg')}}" alt="" />
                        </div>
                        <div class="featured-details text-left">
                            <a href="#">
                                <p>Blog Title</p>
                            </a>
                            <p><span>23 Aug, 2016 / by Admin </span></p>
                            <a href="{{route('blog.show', 1)}}" class="btn-l"><strong>Read More....</strong></a>
                        </div>
                    </div>
                    <div class="featured-property latest-single-post">
                        <div class="featured-image floatleft">
                            <img src="{{ asset('assets/frontend/images/properties/featured-sm-2.jpg')}}" alt="" />
                        </div>
                        <div class="featured-details text-left">
                            <a href="#">
                                <p>Blog Title</p>
                            </a>
                            <p><span>23 Aug, 2016 / by Admin </span></p>
                            <a href="{{route('blog.show', 1)}}" class="btn-l"><strong>Read More....</strong></a>
                        </div>
                    </div>
                    <div class="featured-property latest-single-post">
                        <div class="featured-image floatleft">
                            <img src="{{ asset('assets/frontend/images/properties/featured-sm-3.jpg')}}" alt="" />
                        </div>
                        <div class="featured-details text-left">
                            <a href="#">
                                <p>Blog Title</p>
                            </a>
                            <p><span>23 Aug, 2016 / by Admin </span></p>
                            <a href="{{route('blog.show', 1)}}" class="btn-l"><strong>Read More....</strong></a>
                        </div>
                    </div>
                    <div class="featured-property latest-single-post">
                        <div class="featured-image floatleft">
                            <img src="{{ asset('assets/frontend/images/properties/featured-sm-4.jpg')}}" alt="" />
                        </div>
                        <div class="featured-details text-left">
                            <a href="#">
                                <p>Blog Title</p>
                            </a>
                            <p><span>23 Aug, 2016 / by Admin </span></p>
                            <a href="{{route('blog.show', 1)}}" class="btn-l"><strong>Read More....</strong></a>
                        </div>
                    </div>
                    <div class="featured-property latest-single-post">
                        <div class="featured-image floatleft">
                            <img src="{{ asset('assets/frontend/images/properties/featured-sm-5.jpg')}}" alt="" />
                        </div>
                        <div class="featured-details text-left">
                            <a href="#">
                                <p>Blog Title</p>
                            </a>
                            <p><span>23 Aug, 2016 / by Admin </span></p>
                            <a href="{{route('blog.show', 1)}}" class="btn-l"><strong>Read More....</strong></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--/Property details area-->
<!--Subscribe-->
@endsection