<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="description" content="@yield('description')" />
    <!-- Other common meta tags go here -->
    <!-- Common CSS Links -->
    <!-- <link rel="stylesheet" href="{{ asset('public/common.css') }}"> -->
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('public/web/favicon.ico') }}">
    <!-- Google Fonts CDN Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- AOS CSS Link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Slick Slider CSS Links -->
     <!-- Favicon start here... -->
     <link rel="icon" type="image/x-icon" href="{{ asset('public/web/img/favicon.ico')}}" />
    <!-- Favicon end here... -->
    <link rel="stylesheet" href="{{ asset('public/web/slick-1.8.1/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/slick-1.8.1/slick/slick-theme.css') }}">
    <!-- Custom CSS Links -->
    <link rel="stylesheet" href="{{ asset('public/web/css/Bootstrap5.3_css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/loader.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/Spark.css') }}">
    <link rel="stylesheet" href="{{ asset('public/web/css/Responsive.css') }}">
    <!-- Page-specific CSS Links -->
 
</head>

<body>
    <!-- main container start here... -->
    <main class="main-container">
      <!-- ============================= -->
      <!-- Loadere content start here... -->
      <!-- ============================= -->
      <div class="demo" id="loading-tab">
        <div class="rings">
          <div class="rings">
            <div class="logo"></div>
          </div>
        </div>
      </div> 
      <!-- ============================= -->
      <!-- Loadere content end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- Header content start here... -->
      <!-- ============================= -->
    
      <!-- ============================= -->
      <!-- Header content end here... -->
      <!-- ============================= -->

      <!-- ============================= -->
      <!-- Main Hero Banner start here... -->
      <!-- ============================= -->
      @include('layout.header')
      @yield('content')
  <!-- Head Tag end here... -->
@include('layout.footer')
  <!-- Body Tag start here... -->
  </main>
  
  <!--splitType.js-->
     <script src="
https://cdn.jsdelivr.net/npm/split-type@0.3.4/umd/index.min.js
"></script>

<!--slpt.js-->
<script src="https://www.unpkg.com/spltjs@1.1.0"></script>

<!--gsap.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/gsap.min.js" integrity="sha512-EZI2cBcGPnmR89wTgVnN3602Yyi7muWo8y1B3a8WmIv1J9tYG+udH4LvmYjLiGp37yHB7FfaPBo8ly178m9g4Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--ScrollTrigger gsap.js-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.4/ScrollTrigger.min.js" integrity="sha512-OzC82YiH3UmMMs6Ydd9f2i7mS+UFL5f977iIoJ6oy07AJT+ePds9QOEtqXztSH29Nzua59fYS36knmMcv79GOg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <script src="{{ asset('public/web/js/Bootstrap5.3_js/bootstrap.bundle.js')}}" ></script>
    <!-- SLick Slider Js script start here... -->
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-1.11.0.min.js"
    ></script>
    <script
      type="text/javascript"
      src="//code.jquery.com/jquery-migrate-1.2.1.min.js"
    ></script>
    <script src="{{ asset('public/web/slick-1.8.1/slick/slick.js')}}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js')}}"></script>
    <!-- Project main js script -->
    <script src="{{ asset('public/web/js/Spark.js')}}"></script>
    <script>
        // hide-logo.js
        document.addEventListener('DOMContentLoaded', function() {
           
            // Code to run after the DOM has fully loaded
            var logo = document.getElementById('loading-tab'); // Or use another method to select your logo element
            
            // Hide the logo
            if (logo) {
                logo.style.display = 'none';
                logo.classList.add('d-none');
            }
        });
    </script>
    <!-- All Js script end here... -->
  </body>
  <!-- Body Tag end here... -->
</html>