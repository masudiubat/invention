@extends('layouts.frontend')

@section('title', 'Blog')

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>OUR LATEST BLOG</h3>
                    <ul>
                        <li><a href="home-1.html">Home</a></li>
                        <li>></li>
                        <li><a href="#"><span>Blog</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->
<!--Blog area-->
<section class="blog-area section">
    <div class="container">
        <div class="row">
            <div class="property-list-area blog-grid">
                <div class="property-list-all">
                    <div class="search-box">
                        <form>
                            <input type="text" name="search" placeholder="Enter search e.g. street, city, states or zip" />
                            <button type="submit" class="btn-b floatright">Search</button>
                        </form>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 blog-grid">
                <div class="single-blog">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/blog/blog-1.jpg')}}" alt="" />
                    </figure>
                    <div class="blog-content">
                        <h4>Blog Title Here</h4>
                        <span>23 Aug, 2016 / by Admin</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, facere dignissimos.</p>
                        <a href="{{route('blog.show', 1)}}" class="btn-l">Read More....</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 blog-grid">
                <div class="single-blog">
                    <figure>
                        <img src="{{ asset('assets/frontend/images/blog/blog-2.jpg')}}" alt="" />
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
                        <img src="{{ asset('assets/frontend/images/blog/blog-3.jpg')}}" alt="" />
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
                        <img src="{{ asset('assets/frontend/images/blog/blog-4.jpg')}}" alt="" />
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
                        <img src="{{ asset('assets/frontend/images/blog/blog-5.jpg')}}" alt="" />
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
                        <img src="{{ asset('assets/frontend/images/blog/blog-6.jpg')}}" alt="" />
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
                        <img src="{{ asset('assets/frontend/images/blog/blog-7.jpg')}}" alt="" />
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
                        <img src="{{ asset('assets/frontend/images/blog/blog-8.jpg')}}" alt="" />
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
                        <img src="{{ asset('assets/frontend/images/blog/blog-9.jpg')}}" alt="" />
                    </figure>
                    <div class="blog-content">
                        <h4>Blog Title Here</h4>
                        <span>23 Aug, 2016 / by Admin</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa, facere dignissimos.</p>
                        <a href="#" class="btn-l">Read More....</a>
                    </div>
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
</section>
<!--/Blog area-->


@endsection