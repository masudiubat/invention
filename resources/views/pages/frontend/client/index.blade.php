@extends('layouts.frontend')

@section('title', 'Project')

@push('css')

@endpush

@section('content')
<!--Banner area-->
<section class="banner-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="banner-content">
                    <h3>{{trans('header.client')}}</h3>
                    <ul>
                        <li><a href="{{route('home.index')}}">{{trans('header.home')}}</a></li>
                        <li>></li>
                        <li><a href="#"><span>{{trans('header.client')}}</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/Banner area-->

<!-- Client Area -->
<section class="agent-area-page property-list-area section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    @if(Session::has('locale') && Session::get('locale') == 'bn')
                    <h3>আমাদের <span>সন্মানিত ক্লায়েন্ট</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.
                    </p>
                    @else
                    <h3>Our <span>Honorable Clients</span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.
                    </p>
                    @endif

                </div>
            </div>
            <!--
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="property-list-all">
                    <div class="search-box">
                        <form>
                            <input type="text" name="search" placeholder="Search by client name">
                            <button type="submit" class="btn-b floatright">Search</button>
                        </form>
                    </div>
                </div>
            </div>
-->
            @foreach($clients as $client)
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="agent-list text-center">
                    <div class="agent-image">
                        <figure>
                            <img src="{{ asset('storage/cover-photos/clients/'.$client->cover_image) }}" height="220px;" width="220px;" alt="" />
                            <span class="image-cap"><i class="fa fa-plus"></i></span>
                        </figure>
                    </div>
                    <div class="content-agent">
                        @if(Session::has('locale') && Session::get('locale') == 'en')
                        <h3>{{ $client->client_name_en }}</h3>
                        <p>{{ $client->name_en }}</p>
                        <address>
                            {{ $client->address_en }}
                        </address>
                        @else
                        <h3>{{ $client->client_name_bn }}</h3>
                        <p>{{ $client->name_bn }}</p>
                        <address>
                            {{ $client->address_bn }}
                        </address>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 text-center">
                <div class="pagin">
                    {!! $clients->links() !!}
                </div>
            </div>
        </div>
    </div>
</section>
<!--Client Area-->

@endsection

@push('js')

@endpush