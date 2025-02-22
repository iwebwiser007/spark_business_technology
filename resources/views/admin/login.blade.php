<!-- iWebWiser Admin Panel project start from 20 Nov 2024 10:00 AM -->
<!DOCTYPE html>
<!-- html tag start here... -->
<html lang="en">
<!-- Head tag start here... -->

<head>

  <style>
    /* Custom Parsley error message color */
    .parsley-errors-list {
      color: rgb(210, 78, 76) !important;
      /* Change error text color to red */
    }

    .eyebtn {
      position: absolute;
      cursor: pointer;
      top: 50%;
      right: 40px;
      /* Adjust the right distance to your liking */
      transform: translateY(-50%);
      /* Vertically center the icon */
      display: flex;
      align-items: left;
      justify-content: left;
      padding: 0;
      border: 0;
      background: 0;
      margin-left: 200px;
    }

    /* Style for the icon */
    .eyebtn i {
      font-size: 20px;
      /* You can adjust the size */
      line-height: normal;
    }

    /* Optional: Style the error list items as well */
  </style>
  <!-- Meta tags start here... -->
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Meta tags end here... -->

  <!-- title start here... -->
  <title>Spark Busniness Technology</title>
  <!-- title end here... -->

  <!-- All css links start here... -->
  <link
    rel="stylesheet"
    href="{{ asset('public/node_modules/bootstrap/dist/css/bootstrap.min.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.css" />
  <link rel="stylesheet" href="{{ asset('public/assets/scss/main.css') }}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <!-- All css links end here... -->

  <!-- favicon icon start here -->
  <!-- <link rel="icon" type="image/x-icon" href="{{ asset('public/assets/icons/Logo.svg') }}" /> -->

  <link rel="icon" type="image/x-icon" href="{{ asset('public/web/img/favicon.ico')}}" />

  <!-- favicon icon end here -->
</head>
<!-- Head tag end here... -->

<!-- body tag start here... -->

<body>
  <!-- main container start here  -->
  <div class="main-container login_container">
    <!-- wrapper start here  -->
    <div class="wrapper">
      <div class="">
        <!-- main content start here  -->
        <div class="main-content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-2"></div>
              <div class="col-12 col-md-8 login_div">
                <!-- form section start here  -->
                <section class="text-lg-start form_section">
                  <!-- card start here  -->
                  <div class="card mb-3 shadow">
                    <!-- card body start here  -->
                    <div class="card-body">
                      <div class="row g-0 d-flex align-items-center">
                        <!-- card image start here  -->
                        <div class="col-md-4 d-none d-md-flex">
                          <img
                            src="../public/assets/img/login.jpg"
                            alt="Trendy Pants and Shoes"
                            class="w-100 rounded-t-5" />
                        </div>
                        <!-- card image end here  -->

                        <!-- Login form start here  -->
                        <div class="col-md-8">
                          <div class="px-md-5">
                            <!-- company logo start here  -->
                            <a
                              href="#loginForm"
                              class="btn border-0 login_logo d-block d-md-none"
                              role="button">
                              <img src="../public/assets/icons/Logo.svg" alt="logo" />
                            </a>
                            <!-- company logo end here  -->

                            <!-- title start here  -->


                            <h2 class="login_title mt-2 mt-md-3">Sign-in</h2>

                            @if (Session::has('success_message'))
                            <!-- Check vendorRegister() method in Front/VendorController.php -->
                            <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
                              role="alert">
                              <div>
                                <strong>Success:</strong> {{ Session::get('success_message') }}
                              </div>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif

                            <!-- title end here  -->

                            @if (Session::has('error_message'))
                            <!-- Check vendorRegister() method in Front/VendorController.php -->
                            <div class="alert alert-danger alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
                              role="alert">
                              <div>
                                <strong>Error:</strong> {{ Session::get('error_message') }}
                              </div>
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            @endif


                            <!-- form start here  -->
                            <div>
                              <form id="loginForm" action="{{ route('login') }}" method="POST" data-parsley-validate>
                                @csrf
                                <!-- email start here  -->
                                <div
                                  class="row form-group g-3 align-items-center my-2">
                                  <!-- Email label start here   -->
                                  <div
                                    class="col-12 d-flex align-items-center justify-content-start">
                                    <label
                                      for="loginEmail"
                                      class="col-form-label form-label">Email address
                                    </label>
                                  </div>
                                  <!-- Email label end here -->

                                  <!-- Email input start here  -->
                                  <div class="col-12 mt-0">
                                    <input
                                      type="email"
                                      id="loginEmail"
                                      name="email"
                                      class="form-control form-input"
                                      placeholder="Enter Email Address..."
                                      data-parsley-required="true" />
                                  </div>
                                  <!-- Email input end here  -->
                                </div>
                                <!-- email end here  -->

                                <!-- password start here  -->
                                <div
                                  class="row form-group g-3 align-items-center my-2">
                                  <!-- Password Label start here  -->
                                  <div
                                    class="col-12 d-flex align-items-center justify-content-start">
                                    <label
                                      for="loginPass"
                                      class="col-form-label form-label">Password
                                    </label>
                                  </div>
                                  <!-- Password Label end here  -->

                                  <!-- Password input start here  -->
                                  <div class="col-12 mt-0">
                                    <div class="pass_input">
                                      <input
                                        type="password"
                                        id="loginPass"
                                        name="password"
                                        class="form-control form-input"
                                        placeholder="Enter Password..."
                                        data-parsley-required="true" />
                                      <span class="eyebtn" id="eye-toggle-password">
                                        <i class="bi bi-eye" id="password-toggles-password"></i>
                                      </span>
                                    </div>
                                  </div>
                                  <!-- Password input end here  -->
                                </div>
                                <!-- password end here  -->





                                <!-- forgot password start here   -->
                                <div class="row my-4">
                                  <div class="col-12">
                                    <a
                                      href="{{route('forgetPassword')}}"
                                      class="float-end text-decoration-none">Forgot password?</a>
                                  </div>
                                </div>
                                <!-- forgot password end here  -->

                                <!-- Sign-in button start here -->
                                <div class="row my-4">
                                  <div class="col-12 d-flex justify-content-start">
                                    <button type="submit" role="button" class="btn btn-signin btn-block">Sign in</button>
                                  </div>
                                </div>
                            </div>
                            <!-- Sign-in button end here -->
                            </form>
                          </div>
                          <!-- form end here  -->
                        </div>
                      </div>
                      <!-- Login form end here  -->
                    </div>
                  </div>
                  <!-- card body end here  -->
              </div>
              <!-- card end here  -->
              </section>
              <!-- form section end here  -->
            </div>
            <div class="col-2"></div>
          </div>
        </div>
      </div>
      <!-- main content end here  -->
    </div>
  </div>
  <!-- wrapper end here  -->
  </div>
  <!-- main container end here  -->

  <!-- All js scripts start here... -->
  <script src="{{ asset('public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('public/assets/js/main.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
  <script src="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.min.js"></script> <!-- Then Parsley -->

  <!-- All js scripts end here... -->

  <script>
    $(document).ready(function() {
      // Initialize Parsley for form validation
      $('#loginForm').parsley();

      $('#loginForm').submit(function(e) {
        // Check if the form is valid before submitting
        if (!$('#loginForm').parsley().isValid()) {
          e.preventDefault(); // Prevent form submission if validation fails
        }
      });
    });


    document.addEventListener('DOMContentLoaded', function() {
      // For password field
      const passwordField = document.getElementById('loginPass');
      const passwordToggleIcon = document.getElementById('password-toggles-password');

      passwordToggleIcon.addEventListener('click', function() {
        if (passwordField.type === 'password') {
          passwordField.type = 'text'; // Show password
          passwordToggleIcon.classList.remove('bi-eye');
          passwordToggleIcon.classList.add('bi-eye-slash');
        } else {
          passwordField.type = 'password'; // Hide password
          passwordToggleIcon.classList.remove('bi-eye-slash');
          passwordToggleIcon.classList.add('bi-eye');
        }
      });
    });
  </script>

</body>
<!-- body tag end here... -->

</html>
<!-- html tag end here... -->