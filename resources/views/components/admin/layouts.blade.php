<!-- iWebWiser Admin Panel project start from 20 Nov 2024 10:00 AM -->
<!DOCTYPE html>
<!-- html tag start here... -->
<html lang="en">
<!-- Head tag start here... -->

<head>
  <!-- Meta tags start here... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta tags end here... -->

  <!-- title start here... -->
  <title>Spark Business Technology</title>
  <!-- title end here... -->

  <!-- All css links start here... -->
  <!-- <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.min.css" /> -->
  <link rel="stylesheet" href="{{ asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}" />
  <!-- <link rel="stylesheet" href="../assets/scss/main.css" /> -->
  <link rel="stylesheet" href="{{ asset('public/assets/scss/main.css') }}" />
  <!-- All css links end here... -->

  <!-- favicon icon start here -->
  <link rel="icon" type="image/x-icon" href="{{ asset('public/web/img/favicon.ico')}}" />


  
  <!-- favicon icon end here -->
</head>


<body>

  <div class="main-container">
    
    <!-- wrapper start here  -->
    <div class="wrapper">
      <div class="">
        <!-- wrapper-content start here... -->
        <div class="wrapper-content">
          @include('components.admin.nav')
          @include('components.admin.header')
          @yield('content')
          @include('components.admin.footer')
          <div class="sa-app__toasts toast-container bottom-0 end-0"></div>
        </div>
      </div>
    </div>
  </div>


  

  <!-- <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script> -->
  <script src="{{ asset('public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <!-- <script src="../assets/js/main.js"></script> -->
  <script src="{{ asset('public/assets/js/main.js') }}"></script>
</body>

</html>