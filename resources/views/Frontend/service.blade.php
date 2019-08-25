@extends('Frontend.frontmaster')
@section('srv','active')
@section('title', 'Peoplesscap | Services ')
@section('frntcontent')
<section class="page-banner-area" style="background: url({{$data['servicehead']->image}}); background-repeat: no-repeat; background-position: center; background-size: cover; background-attachment: fixed;">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="page-banner-title">{{$data['servicehead']->title}}</h2>
            </div>
        </div>
    </div>
</section>

<!-- Services Details Area START -->
<section class="services-details-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="theme-title">{{ $data['servicetop']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
                <p class="theme-para">{{ $data['servicetop']->description}} </p>
            </div>
            
            <div class="col-sm-12 all-s-details">
                @foreach($data['allservices'] as $service)
                    <div id="head" class="common-single-s-details">
                            <div class="single-s-details">
                                <div class="single-s-slider-wrapper">
                                    <div class="single-s-slider">
                                        <!-- Wrapper for slides -->
                                        <figure class="item">
                                            <img alt="Services" src="{{url($service->image)}}">
                                        </figure>
                                    </div>
                                </div>
                                <div class="single-s-content">
                                    <h4>{{$service->title}}</h4>
                                    <p>{{$service->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                @endforeach
                {{-- <div id="head" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">
                                <!-- Wrapper for slides -->
                                <figure class="item">
                                    <img alt="Services" src="{{url($data['hunting']->image)}}">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                            <h4>{{$data['hunting']->title}}</h4>
                            <p>{{$data['hunting']->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div id="manpower" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">
                               
                                <figure class="item">
                                    <img alt="Services" src="{{url($data['manpower']->image)}}">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                            <h4>{{$data['manpower']->title}}</h4>
                            <p>{{$data['manpower']->description}}
                            </p>
                        </div>
                    </div>
                </div>
                <div id="payroll" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">
                               
                                <figure class="item">
                                    <img alt="Services" src="{{url($data['payroll']->image)}}">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                                <h4>{{ $data['payroll']->title}}</h4>
                                <p>{{ $data['payroll']->description}}
                                </p>
                        </div>
                    </div>
                </div>
                <div id="medical" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">
                         
                                <figure class="item">
                                    <img alt="Services" src="{{url($data['medical']->image)}}">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                                <h4>{{$data['medical']->title}}</h4>
                                <p>{{$data['medical']->description}}
                                </p>
                        </div>
                    </div>
                </div>
                <div id="assessment" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">
                             
                                <figure class="item">
                                    <img alt="Services" src="{{url($data['asses']->image)}}">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                                <h4>{{$data['asses']->title}}</h4>
                                <p>{{$data['asses']->description}}
                                </p>
                        </div>
                    </div>
                </div>
                <div id="recruitment" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">

                                <figure class="item">
                                    <img alt="Services" src="{{url($data['recruit']->image)}}">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                                <h4>{{$data['recruit']->title}}</h4>
                                <p>{{$data['recruit']->description}}
                                </p>
                        </div>
                    </div>
                </div>
                <div id="training" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">
                            
                                <figure class="item">
                                    <img alt="Services" src="{{url($data['training']->image)}}">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                                <h4>{{$data['training']->title}}</h4>
                                <p>{{$data['training']->description}}
                                </p>
                        </div>
                    </div>
                </div> --}}
                <!-- <div id="service8" class="common-single-s-details">
                    <div class="single-s-details">
                        <div class="single-s-slider-wrapper">
                            <div class="single-s-slider">
                               
                                <figure class="item">
                                    <img alt="Services" src="img/services-img/services1.jpg">
                                </figure>
                            </div>
                        </div>
                        <div class="single-s-content">
                            <h4>Health Screening</h4>
                            <p>With true Events expertise on board, we work with meticulous and unyielding focus on landing the kind of event folks will remember for days to come. From conception to execution, we are here to ensure your event runs smoothly without any fumbles.<br><br> We are big on spectacle but never lose track of the details.<br> <br> We are big on spectacle but never lose track of the details. We are big on spectacle but never lose track of the details.
                            </p>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>
<!-- Services Details Area END -->


@endsection