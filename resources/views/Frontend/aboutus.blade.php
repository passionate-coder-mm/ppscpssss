@extends('Frontend.frontmaster')
@section('abt','active')
@section('title', 'Peoplesscap | About-us ')
@section('frntcontent')
<section class="page-banner-area" style="background: url({{$data['abouthead']->image}}); background-repeat: no-repeat; background-position: center; background-size: cover; background-attachment: fixed;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h2 class="page-banner-title">{{$data['abouthead']->title}}</h2>
        </div>
      </div>
    </div>
  </section>
  <section class="mission-vision-area">
      <div class="container-fluid">
          <div class="row">
              
              <div class="col-sm-6 padding-zero">
                  <div class="mission-vision-box only-vision">
                      <h2>{{ $data['vision']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
  
                      <p>{{ $data['vision']->description}}
                      </p>
                  </div>
              </div>
              <div class="col-sm-6 padding-zero">
                  <div class="mission-vision-box only-mission">
                      <h2>{{$data['mission']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
  
                      <p> {{$data['mission']->description}}
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <section class="introduction-area">
      <div class="container">
          <div class="row">
              <div class="col-sm-6">
                  <div class="left-box" style="background: url({{$data['choose']->image}})">
                  </div>
              </div>
              <div class="col-sm-6">
                  <div class="right-box">
                      <h2>{{$data['choose']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
  
                      <p>
                          {{$data['choose']->description}}
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </section>
  
  <!--<section class="call-to-action-area">-->
  <!--    <div class="container">-->
  <!--        <div class="row">-->
  <!--            <div class="col-sm-12">-->
  <!--                <div class="call-to-content">-->
  <!--                    <h2>{{ $data['call1']->description}}</h2>-->
  <!--                    <a href="#" class="common-button">Learn More</a>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->
  
 <section class="advantage-area success-story-area">
      <div class="container-fluid">
          <div class="row">
              <div class="col-sm-6 padding-zero">
                  <div class="advantage-img-box" style="background: url({{$data['success']->image}});background-repeat: no-repeat; background-size: cover;">
                  </div>
              </div>
              <div class="col-sm-6 padding-zero">
                  <div class="advantage-content-box">
                      <h2>{{$data['success']->title}} <span class="title-img-style"><img src="{{asset('frontEnd/img/title-style.png')}}" alt=""></span></h2>
                      @php
                      $description = json_decode($data['success']->description);
                      
                      @endphp
                      @foreach($description as $success)
                      <div class="single-advantage-list success-story-point">
                          <div class="icon-part">
                              <i class="far fa-dot-circle"></i>
                          </div>
                          <div class="point-content">
                              <h5>{{$success->ptitle}}</h5>
                              <p>{{$success->description}}
                              </p>
                          </div>
                      </div>
                      @endforeach
  
                 </div>
              </div>
          </div>
      </div>
  </section>
  
  <!--<section class="call-to-action-area">-->
  <!--    <div class="container">-->
  <!--        <div class="row">-->
  <!--            <div class="col-sm-12">-->
  <!--                <div class="call-to-content">-->
  {{-- <!--                    <h2>{{ $data['call2']->description}}</h2>--> --}}
  <!--                    <a href="#" class="common-button">Learn More</a>-->
  <!--                </div>-->
  <!--            </div>-->
  <!--        </div>-->
  <!--    </div>-->
  <!--</section>-->
@endsection