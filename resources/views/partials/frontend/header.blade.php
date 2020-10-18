<div class="header-v1">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 text-left">
                    <ul class="top-contacts">
                        <li><i class="fa fa-map-marker"></i> 456 Lake Road, Virginia, USA</li>
                        <li><i class="fa fa-envelope"></i> info@gmail.com</li>
                        <li><i class="fa fa-phone"></i> (00) 123-456-789</li>
                    </ul>
                </div>
                <div class="col-md-6  col-sm-12 col-xs-12 social-list">
                    <ul class="top-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navbar">
        <div class="container">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="header-logo">
                        <a href="{{route('home.index')}}">
                            <img src="{{ asset('assets/frontend/images/logo/logo-v1.png')}}" alt="" />
                        </a>
                    </div>
                </div>
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="submit-property">
                        <select name="local" class="btn-b submit-btn localization" id="localization">
                            @if(Session::has('locale') && Session::get('locale') == 'bn')
                            <option id="english" value="en">English</option>
                            <option id="bangla" value="bn" selected>বাংলা</option>
                            @else
                            <option id="english" value="en" selected>English</option>
                            <option id="bangla" value="bn">বাংলা</option>
                            @endif

                        </select>
                        <!--
                            <a class="btn-b submit-btn">Submit property</a>
                        <div class="submit-form text-left">
                            <ul>
                                <li>
                                    <ul>
                                        <li class="floatleft">
                                            <p>Login </p>
                                        </li>
                                        <li class="floatright"><i class="fa fa-times close-form"></i></li>
                                    </ul>
                                </li>
                                <li>
                                    <form>
                                        <input type="text" placeholder="Username" />
                                        <input type="password" placeholder="Password" />
                                    </form>
                                </li>
                                <li><a href="#" class="sbform-btn login text-center">Login</a></li>
                                <li>
                                    <p>Need an account? Register here! Forgot Password?</p>
                                </li>
                                <li><a href="#" class="sbform-btn btn-facebook">Login with facebook</a></li>
                                <li><a href="#" class="sbform-btn btn-google">Login with google</a></li>
                                <li><a href="#" class="sbform-btn btn-yahoo">Login with yahoo</a></li>
                            </ul>
                        </div>-->

                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="phone-menu"><i class="fa fa-bars show-menu"></i></div>
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li class="{{ request()->routeIs('home*') ? 'active' : '' }}"><a href="{{route('home.index')}}">{{trans('header.home')}}</a></li>
                                <li class="{{ request()->routeIs('about*') ? 'active' : '' }}"><a href="{{route('about.index')}}">{{trans('header.about')}}</a></li>
                                <li class="{{ request()->routeIs('service*') ? 'active' : '' }}"><a href="#">{{trans('header.services')}} <i class="fa fa-angle-double-down"></i></a>
                                    <ul class="service_items" id="service_item">

                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('project*') ? 'active' : '' }}"><a href="#">{{trans('header.projects')}} <i class="fa fa-angle-double-down"></i></a>
                                    <ul class="project_items">

                                    </ul>
                                </li>
                                <li class="{{ request()->routeIs('gallery*') ? 'active' : '' }}"><a href="{{route('gallery.index')}}">{{trans('header.gallery')}}</a></li>
                                <li class="{{ request()->routeIs('blog*') ? 'active' : '' }}"><a href="{{route('blog.index')}}">{{trans('header.blog')}}</a></li>
                                <li class="{{ request()->routeIs('career*') ? 'active' : '' }}"><a href="{{route('career.index')}}">{{trans('header.career')}}</a></li>
                                <li class="{{ request()->routeIs('contact*') ? 'active' : '' }}"><a href="{{route('contact.index')}}">{{trans('header.contact')}}</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="{{ request()->routeIs('home*') ? 'active' : '' }}"><a href="{{route('home.index')}}">{{trans('header.home')}}</a></li>
                            <li class="{{ request()->routeIs('about*') ? 'active' : '' }}"><a href="{{route('about.index')}}">{{trans('header.about')}}</a></li>
                            <li class="{{ request()->routeIs('service*') ? 'active' : '' }}"><a href="#">{{trans('header.services')}} <i class="fa fa-angle-double-down"></i></a>
                                <ul class="service_items">

                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('project*') ? 'active' : '' }}"><a href="#">{{trans('header.projects')}} <i class="fa fa-angle-double-down"></i></a>
                                <ul class="project_items">

                                </ul>
                            </li>
                            <li class="{{ request()->routeIs('gallery*') ? 'active' : '' }}"><a href="{{route('gallery.index')}}">{{trans('header.gallery')}}</a></li>
                            <li class="{{ request()->routeIs('blog*') ? 'active' : '' }}"><a href="{{route('blog.index')}}">{{trans('header.blog')}}</a></li>
                            <li class="{{ request()->routeIs('career*') ? 'active' : '' }}"><a href="{{route('career.index')}}">{{trans('header.career')}}</a></li>
                            <li class="{{ request()->routeIs('contact*') ? 'active' : '' }}"><a href="{{route('contact.index')}}">{{trans('header.contact')}}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->