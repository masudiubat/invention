@extends('layouts.frontend')

@section('title', 'Architectural Design')

@push('css')

@endpush

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    @if(Session::has('locale') && Session::get('locale') == 'bn')
                    <h3>{{ $service->name_bn }}</h3>
                    <ul>
                        <li><a href="{{route('home.index')}}">হোম</a></li>
                        <li>></li>
                        <li><a href="#">সেবা সমূহ</a></li>
                        <li>></li>
                        <li><a href="#"><span>{{ $service->name_bn }}</span></a></li>
                    </ul>
                    @else
                    <h3>{{ $service->name_en }}</h3>
                    <ul>
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li>></li>
                        <li><a href="#">Services</a></li>
                        <li>></li>
                        <li><a href="#"><span>{{ $service->name_en }}</span></a></li>
                    </ul>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->

<!--Architectural design area-->
<section class="about-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="about-content">
                    @if(Session::has('locale') && Session::get('locale') == 'bn')
                    <h2><span>{{ $service->name_bn }}</span></h2>
                    <p>{{ $service->description_bn }}</p>
                    @else
                    <h2><span>{{ $service->name_en }}</span></h2>
                    <p>{{ $service->description_en }}</p>
                    @endif
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

@endsection


@push('js')


@endpush