@extends('Backend.backendmaster')
@section('title', 'Pescapople | dashboard')
@section('content')
<style>
  .progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
}
 @keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
  
    100%{
        -webkit-transform: rotate(100deg);
        transform: rotate(100deg);
    }
}

/* @keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
} */
/*
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
} */
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}

  </style>
<section class="content">
        <div class="box box-default">
             <div class="box-header with-border">
               <h3 class="box-title">Dashboard</h3>
                  <div class="box-tools pull-right">
                 <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                 <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
               </div>
             </div>
            
             <div class="box-body">
               <div class="row"> 
                   <div class="welcome-card">
                     
                      <h4 style="padding-left:10px;">Welcome {{Auth::user()->name}}</h4>
                      @if(Auth::user()->status=="user")
                      <div class="container">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="progress blue">
                                      <span class="progress-left">
                                          <span class="progress-bar"></span>
                                      </span>
                                      <span class="progress-right">
                                          <span class="progress-bar"></span>
                                      </span>
                                      <div class="progress-value">{{Auth::user()->cv_completion}}%</div>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="progress yellow">
                                      <span class="progress-left">
                                          <span class="progress-bar"></span>
                                      </span>
                                      <span class="progress-right">
                                          <span class="progress-bar"></span>
                                      </span>
                                      <div class="progress-value">75%</div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      @endif
                   </div>
               </div>
             </div>
            
           </div>
           <script>
              @if(Session::has('message'))
                    toastr.options = {
                                    "debug": false,
                                    "positionClass": "toast-bottom-right",
                                    "onclick": null,
                                    "fadeIn": 300,
                                    "fadeOut": 1000,
                                    "timeOut": 5000,
                                    "extendedTimeOut": 1000
                                };
                    toastr.success("{{ Session::get('message') }}");
                @endif
             </script>
         </section>
@endsection