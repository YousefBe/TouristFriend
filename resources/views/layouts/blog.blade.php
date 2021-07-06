<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>blog</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: Moderna - v4.3.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center " style="background-color: white;box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.2), 0 3px 10px 0 rgba(0, 0, 0, 0.1);">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
       
        <a href="{{ route('home') }}" class="flex items-center ml-3">
            <img src="{{ asset('favicon.ico') }}" alt="" class="w-12">
            <span class="text-base uppercase font-bold " style="color:black;font-size: 1rem;line-height: 1.5rem;font-weight: 700;margin-right: 1.5rem;padding: 0.75rem;">TouristFriend</span>
        </a>
      </div>

      <nav id="navbar" class="navbar" >
        <ul>
        @livewire('search-component')

                <a href="{{ route('home') }}" class=" mr-6  p-3 text-base font-bold uppercase " style="color:black;font-size: 1rem;line-height: 1.5rem;font-weight: 700;margin-right: 1.5rem;padding: 0.75rem;">
                    {{ __('Home') }}
                </a>
                <a href="/blog" class=" mr-6  p-3  text-base font-bold uppercase  " style="color:black;font-size: 1rem;line-height: 1.5rem;font-weight: 700;margin-right: 1.5rem;padding: 0.75rem;">
                    {{ __('Blog') }}
                </a>
                <li class="nav-img" style="color:black;font-weight: bold;"><img style="width: 20px; " class="img-profile rounded-circle" src="{{ asset('storage/Users/' . Auth::user()->userImage()) }}"> {{ Auth::user()->name }}</li>  
          
        <i class="bi bi-list mobile-nav-toggle"></i>
        
        </div>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->


  @yield('content')
  <!-- ======= Footer ======= -->
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/purecounter/purecounter.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>
