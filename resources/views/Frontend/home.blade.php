@extends('Frontend.frontmaster')
@section('hm','active')
@section('title', 'Peoplesscap | Home ')
@section('frntcontent')
<!--<section class="slider-area text-center carousel slide" id="carouselExampleIndicators" data-ride="carousel">-->
    <section class="slider-area carousel slide" id="carouselExampleIndicators" data-ride="">
        <ol class="carousel-indicators">
            @foreach($data['slider'] as $slider)
             <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="<?php if($loop->index == 0) echo 'active' ?>"></li>
            @endforeach
        </ol>
        <div class="carousel-inner" role="listbox">
            <!-- Slide One - Set the background image for this slide in the line below -->
            @foreach($data['slider'] as $slider)
            <div class="carousel-item <?php if($loop->index == 0) echo 'active' ?>" style="background-image: url({{$slider->image}})">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <!--<div class="carousel-caption d-none d-md-block">-->
                                <div class="carousel-caption d-none d-md-block">
                                    <h2 class="text-uppercase">{{$slider->title}}</h2>
                                    <h1>{{$slider->description}}</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    
    </section>
    
    <section class="introduction-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
              <div class="left-box" style="background: url({{ $data['sliderbtm']->image}})">
              </div>
          </div>
            <div class="col-sm-6">
                <div class="right-box">
                <h2>{{$data['sliderbtm']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
    
                    <p>{{$data['sliderbtm']->description}}
                    </p>
                <a href="{{route('about-us.index')}}" class="common-button">Read More</a>
                </div>
            </div>
        </div>
      </div>
    </section>
   
    <section class="home-service-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h2 class="theme-title">{{$data['servtop']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
                    <p class="theme-para">{{$data['servtop']->description}} </p>
                </div>
                @foreach($data['allservice'] as $service)
                <div class="col-sm-3">
                    <div class="home-service-box">
                        <i class="{{$service->icon}}"></i>
                        <h4>{{$service->title}}</h4>
                       <p>{{ str_limit($service->description, $limit = 57, $end = ' ') }}</p>
                        <!--<a href="{{route('services.index')}}/#{{$service->link}}" class="common-button">Read More</a>-->
                         <a href="{{route('service.detailservice',['id' => $service->id])}}" class="common-button">Read More</a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    
    <section class="location-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h2 class="theme-title">{{ $data['locationtop']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
                    <p class="theme-para">{{ $data['locationtop']->description}} </p>
                </div>
    
                <div class="col-sm-12 padding-zero">
                    <div class="location-box-wrap text-center">
                        @foreach($data['alllocations'] as $locations)
                            <div class="home-location-box">
                                <!--<i class="fas fa-envelope"></i>-->
                                <h3>{{$locations->title}}</h3>
                                <p>{{$locations->description}}</p>
                                <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                            </div>
                       @endforeach
                        {{-- <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Khulshi, Chittagong</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
    
                        <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>East Subid Bazar, Sylhet</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
    
                        <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Champok Nagar, Comilla</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
    
                        <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Ahasan Ahmed Road, Khulna</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
    
                        <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Munsur Quarter, Barisal</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
    
                        <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Sutrapur, Bogra</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
    
                        <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Uposhahor, Rajshahi</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
    
                        <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Ward No-22, Rangpur</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div>
     --}}
                        {{-- <div class="home-location-box">
                            <!--<i class="fas fa-envelope"></i>-->
                            <h3>Shorkerbari Road, Mymenshingh</h3>
                            <p>road #2, House #22, Block-A, Gulshan, Dhaka</p>
                            <a href="https://goo.gl/maps/fPzAVK3uoqn" target="_blank" class="common-button">Get Direction</a>
                        </div> --}}
                    </div>
    
                </div>
    
            </div>
        </div>
    </section>
    
    <section class="call-to-action-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="call-to-content">
                        <h2>{{$data['hcall']->description}}</h2>
                        <a href="#" class="common-button">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="team-member-area">
            <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h2 class="theme-title">{{$data['teamtop']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
                    <p class="theme-para">{{$data['teamtop']->description}} </p>
                    </div>
                    <div class="col-sm-12">
                    <div class="team-wrapper owl-carousel">
                        {{-- @php
                           dd($data['teammembers']);
                          @endphp --}}
                        @foreach($data['teammembers'] as $member)
                       <div class="team-box">
                            <img src="{{url($member->image)}}" alt="Team">
                           <h4>{{$member->name}}</h4>
                            <h5>{{$member->designation}}</h5>
                            <p>{{$member->description}}</p>
                            <div class="social-media">
                                <ul class="nav">
                                    <li><a href="{{$member->fb_link}}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="{{$member->tw_link}}" class="twitter"><i class="fab fa-twitter"></i></a></li>
                                   <li><a href="{{$member->ln_link}}" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="{{$member->gp_link}}" class="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                              </div>
                         </div>
                       @endforeach
    
               </div>
           </div>
        </div>
    </section>
    <script src="{{asset('frontEnd/vendor/jquery/jquery.min.js')}}"></script>

    <section class="home-happy-client-area" style="background: url({{asset('frontEnd/img/slider-img/1.jpg')}}); background-repeat: no-repeat; background-position: center; background-size: cover; background-attachment: fixed;">
        <div class="container">
            <div class="row">
                    <div class="col-sm-12 all-tag-box-wrapper">
                            <div class="client-left-part">
                                <div class="happy-client-box">
                                    <h4><i class="far fa-handshake"></i></h4>
                                    <h3><span class="counter">{{$data['counterpart']->experience}}</span>+</h3>
                                    <p>YEARS OF EXPERIENCE</p>
                                </div>
                                <div class="happy-client-box">
                                    <h4><i class="fas fa-headset"></i></h4>
                                    <h3 class="counter">{{$data['counterpart']->team}}</h3>
                                    <p>CLIENT</p>
                                </div>
                                <div class="happy-client-box">
                                    <h4><i class="fas fa-map-marker-alt"></i></h4>
                                    <h3 class="counter">{{$data['counterpart']->location}}</h3>
                                    <p>Office Location</p>
                                </div>
                                <div class="happy-client-box">
                                    <h4><i class="fas fa-users"></i></h4>
                                    <h3><span class="counter">{{$data['counterpart']->employee}}</span>+</h3>
                                    <p>Employee</p>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </section>
    
    <!--<section class="testimonial-area">-->
    <!--    <div class="container">-->
    <!--        <div class="row">-->
    <!--            <div class="col-sm-12">-->
    <!--            <h2 class="theme-title">{{$data['monialtop']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>-->
    <!--                <p class="theme-para">{{$data['monialtop']->description}} </p>-->
    <!--            </div>-->
    <!--            <div class="col-sm-12">-->
    <!--                <div class="testimonial-wrapper owl-carousel">-->
    <!--                    @foreach ($data['testimonial'] as $item)-->
                            
                       
    <!--                    <div class="testimonial-box">-->
    <!--                        <img src="{{url($item->image)}}" alt="Team">-->
    <!--                        <div class="testimonial-content">-->
    <!--                            <p> <i class="fas fa-quote-left"></i>{{$item->description}}<i class="fas fa-quote-right"></i> </p>-->
    <!--                            <h5>{{$item->name}}</h5></div>-->
    <!--                    </div>-->
    <!--                    @endforeach-->
    <!--                    {{-- <div class="testimonial-box">-->
    <!--                        <img src="img/team-member/1.jpg" alt="Team">-->
    <!--                        <div class="testimonial-content">-->
    <!--                            <p> <i class="fas fa-quote-left"></i>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown<i class="fas fa-quote-right"></i> </p>-->
    <!--                            <h5>Jui Monika,Barishal</h5></div>-->
    <!--                    </div>-->
    <!--                    <div class="testimonial-box">-->
    <!--                        <img src="img/team-member/1.jpg" alt="Team">-->
    <!--                        <div class="testimonial-content">-->
    <!--                            <p> <i class="fas fa-quote-left"></i>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown<i class="fas fa-quote-right"></i> </p>-->
    <!--                            <h5>Shafi Fazil,Rajshahi</h5></div>-->
    <!--                    </div> --}}-->
    <!--                </div>-->
    
                    <!--<div class="testimonial_nav">-->
                    <!--<i class="fa fa-angle-left testi_prev"></i>-->
                    <!--<i class="fa fa-angle-right testi_next"></i>-->
                    <!--</div>-->
    
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</section>-->
    @endsection