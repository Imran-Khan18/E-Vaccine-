<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php //echo $title; ?> E-Vaccine </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png_" rel="icon">
  <link href="assets/img/apple-touch-icon.png_" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/custom.css?var=1.20" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v2.1.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +1 5589 55488 55
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="{{route('home')}}" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class= @if($view === "home") "active" @endif><a href="{{route('home')}}">Home</a></li>
          
          <li class= @if($view === "daily-info") "active" @endif><a href="{{route('daily-info')}}">Daily info</a></li>
          <li class= @if($view === "doctors-near") "active" @endif><a href="{{route('doctors-near')}}">Doctor's near you</a></li>
          <li class="drop-down"><a href="">Services</a>
          <ul>
            <li class= @if($view === "ambulence-service") "active" @endif><a href="{{route('ambulence-service')}}">Ambulence Service</a></li>
            <li class= @if($view === "hospitalize-service") "active" @endif><a href="{{route('hospitalize-service')}}">Hospitalized Service</a></li>
            <li class= @if($view === "gravary-service") "active" @endif><a href="{{route('gravary-service')}}">Gravary Details</a></li>
          </ul>
        </li>
		<li class= @if($view === "about") "active" @endif><a href="{{route('about')}}">About</a></li>
          <li class= @if($view === "contact-us") "active" @endif><a href="{{route('contact-us')}}">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      @if($view === "home")
        <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      @else
        <a href="{{ URL::to('/#appointment') }}" class="appointment-btn"><span class="d-none d-md-inline">Make an</span> Appointment</a>
      @endif
      

    </div>
  </header><!-- End Header -->

