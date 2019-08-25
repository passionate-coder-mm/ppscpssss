<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{asset('backEnd/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset('backEnd/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backEnd/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('backEnd/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('backEnd/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backEnd/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="{{asset('backEnd/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
        <link rel="stylesheet" href="{{asset('backEnd/mycustom.css')}}">

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">
    @php
   use App\Cvform;

    if(Auth::check()){
       $user = Auth::user();
       $user_name = $user->name;
       $user_status = $user->status;
       $user_image = $user->image;
       $usercv_id = Cvform::where('userid','=',$user->id)->first();
       if($usercv_id){
        $cv_id = $usercv_id->id; 

       }
     }
     else{
      return redirect()->route('login');
     }
   @endphp
    <!-- Logo -->
   <a href="{{url('/home')}}" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>P</b>eo</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Peoplescap</b> Admin</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              @if($user_image)
              <img src="{{url('/'.$user_image)}}" height="18" class="img-circle" >
              @else
              <img src="{{asset('psimage/admin.png')}}" class="user-image" alt="">
              @endif              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs">{{ $user_name}}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                @if($user_image)
                <img src="{{url('/'.$user_image)}}" class="img-circle" >
                @else
                <img src="{{asset('psimage/admin.png')}}" class="user-image" alt="">
                @endif
  
                <p>
                  {{$user_name}} - <i> Admin </i>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="row">
                </div>
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  {{-- <a href="#" class="btn btn-default btn-flat">Profile</a> --}}
                </div>
                <div class="pull-right">
                  <form method="POST" action="{{route('logout')}}">
                    @csrf
                    <button class="btn btn-default btn-flat"> Sign Out </button>
                  </form>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          @if($user_image)
          <img src="{{url('/'.$user_image)}}"  class="img-circle" >
          @else
          <img src="{{asset('psimage/admin.png')}}" class="user-image" alt="">
          @endif        </div>
        <div class="pull-left info">
          <p>{{$user_name}}</p>
          <!-- Status -->
        </div>
      </div>
      @if($user_status == "admin")
      <ul class="sidebar-menu tree" data-widget="tree">
      <li class="@yield('home-active')"><a href="{{route('slider.index')}}"><i class="fa fa fa-share"></i> <span>Home</span></a></li>
      <li class="@yield('about-active')"><a href="{{route('aboutusop.index')}}"><i class="fa fa fa-share"></i> <span>Aboutus</span></a></li>
      <li class="@yield('service-active')"><a href="{{route('serviceop.index')}}"><i class="fa fa fa-share"></i> <span>Service</span></a></li>
      <li class="@yield('client-active')"><a href="{{route('clientop.index')}}"><i class="fa fa fa-share"></i> <span>Client</span></a></li>
      <li class="@yield('recog-active')"><a href="{{route('recog.index')}}"><i class="fa fa fa-share"></i> <span>Recognition</span></a></li>
      <li class="@yield('career-active')"><a href="{{route('careerop.index')}}"><i class="fa fa fa-share"></i> <span>Career</span></a></li>
      <li class="@yield('contact-active')"><a href="{{route('contactop.index')}}"><i class="fa fa fa-share"></i> <span>Contact</span></a></li>
      <li class="@yield('galery-active')"><a href="{{route('galeryop.index')}}"><i class="fa fa fa-share"></i> <span>Galery</span></a></li>
      <li class="@yield('application-active')"><a href="{{route('application.index')}}"><i class="fa fa fa-share"></i> <span>Application Lists</span></a></li>
    </ul>
    @endif
    @if($user_status =="user" && !empty($usercv_id))
    <ul class="sidebar-menu tree" data-widget="tree">
        <li class="@yield('applicationprofile-active')"><a href="{{route('applicant.profile',['id'=>$user->id])}}"><i class="fa fa fa-share"></i> <span>My Profile</span></a></li>
        <li class="@yield('application-active')"><a href="{{route('application.show',['id'=>$cv_id])}}"><i class="fa fa fa-share"></i> <span>Your Information</span></a></li>
      <li class="@yield('application-active')"><a href="{{route('application.appliedhistory',['id'=> $user->id])}}"><i class="fa fa fa-share"></i> <span>Applied History</span></a></li>
    </ul>
    @elseif($user_status =="user" && empty($usercv_id))
    <li class="@yield('galery-active')"><a href="{{route('CV.createcvuser')}}"><i class="fa fa fa-share"></i> <span>Create CV</span></a></li>
    @endif
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      @yield('content')
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
    </div>
    <!-- Default to the left -->
    <strong>Designed and Developed by <a href="#">Weaver Innovations</a></strong>
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
  {{-- <script src="{{asset('backEnd/bower_components/jquery/dist/jquery.min.js')}}"></script> --}}
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('backEnd/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('backEnd/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backEnd/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

  <!-- FastClick -->
  <script src="{{asset('backEnd/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('backEnd/dist/js/adminlte.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{asset('backEnd/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap  -->
  <script src="{{asset('backEnd/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('backEnd/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset('backEnd/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <script src="{{asset('backEnd/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>

  <!-- ChartJS -->
  <script src="https://cdn.ckeditor.com/4.11.4/full/ckeditor.js"></script>
  {{-- <script src="{{asset('backEnd/bower_components/ckeditor/ckeditor.js')}}"></script> --}}
  <script src="{{asset('backEnd/bower_components/chart.js/Chart.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {{-- <script src="{{asset('backEnd/dist/js/pages/dashboard2.js')}}"></script> --}}
  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('backEnd/dist/js/demo.js')}}"></script>
  <script>

    $('#example1').DataTable()
  
  </script>
</body>
</html>