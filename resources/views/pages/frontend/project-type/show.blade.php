@extends('layouts.frontend')

@section('title', 'Commercial')

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
                    <h3>{{ $projectType->name_bn }}</h3>
                    <ul>
                        <li><a href="{{route('home.index')}}">হোম</a></li>
                        <li>></li>
                        <li><a href="#">প্রকল্প</a></li>
                        <li>></li>
                        <li><a href="#"><span>{{ $projectType->name_bn }}</span></a></li>
                    </ul>
                    @else
                    <h3>{{ $projectType->name_en }}</h3>
                    <ul>
                        <li><a href="{{route('home.index')}}">Home</a></li>
                        <li>></li>
                        <li><a href="#">Projects</a></li>
                        <li>></li>
                        <li><a href="#"><span>{{ $projectType->name_en }}</span></a></li>
                    </ul>
                    @endif
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
            <div class="col-md-8 col-md-offset-2  col-sm-12">
                <div class="section-heading-v1 text-center">
                    <h3><span>
                            @if(Session::has('locale') && Session::get('locale') == 'bn')
                            {{ $projectType->name_bn }}
                            @else
                            {{ $projectType->name_en }}
                            @endif
                        </span></h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Praesent eget massa purusuis nec libero auctor pharetra enim ultricies felis quisque ornare felis sit amet sodales pellentesque.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-md-9 col-sm-12 floatright all-property">
                <div class="property-list-all">
                    <div class="row property-list-all">
                        @foreach($projects as $project)
                        <div class="col-md-4 col-sm-12 list-property">
                            <a href="{{route('project.show', $project->id)}}">
                                <figure>
                                    <img src="{{ asset('assets/frontend/images/properties/properties-list-1.jpg')}}" alt="" />
                                </figure>
                                <div class="content-list text-center">
                                    <h6>
                                        @if(Session::has('locale') && Session::get('locale') == 'bn')
                                        {{ $porject->name_bn }}
                                        @else
                                        {{ $project->name_en }}
                                        @endif
                                    </h6>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        <div class="col-md-12 text-center">
                            <div class="pagin">
                                {!! $projects->links() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-12 floatright all-property">
                <div class="single-descrip property-name-list">
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
    </div>
</section>
<!--/Property list area-->

@endsection


@push('js')


@endpush