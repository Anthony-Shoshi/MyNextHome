<!DOCTYPE html>
<html lang="en">
  <head>
    <title>My Next Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="{{ asset('user/assets/fonts/icomoon/style.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/mediaelementplayer.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('user/assets/css/fl-bigmug-line.css') }}">
    <link href="{{ asset('admin/assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('user/assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('user/assets/css/style.css') }}">
    
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('user/assets/css/myStyle.css') }}">
    @yield('pageCss')

  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    @include('user.includes.mobileSiteMenu')

    @include('user.includes.navbar')
   

    </div>


    @yield('content')
    

  @include('user.includes.footer')

  <script src="{{ asset('user/assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/jquery-ui.js') }}"></script>
  <script src="{{ asset('user/assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/mediaelement-and-player.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/jquery.countdown.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('user/assets/js/aos.js') }}"></script>

  <script src="{{ asset('user/assets/js/main.js') }}"></script>
  
  <!-- custom js -->
  <script src="{{ asset('user/assets/js/style.js') }}"></script>
  @yield('pageJs')

  </body>
</html>