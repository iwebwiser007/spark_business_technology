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
  <title>iWebWiser</title>
  <!-- title end here... -->

  <!-- All css links start here... -->
  <link
    rel="stylesheet"
    href="../node_modules/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs/dist/parsley.css" />
  <link rel="stylesheet" href="../assets/scss/main.css" />
  <!-- All css links end here... -->

  <!-- favicon icon start here -->
  <link rel="icon" type="image/x-icon" href="../assets/icons/Logo.svg" />
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
                            src="../assets/img/login.jpg"
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
                              <img src="../assets/icons/Logo.svg" alt="logo" />
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
                                      <a
                                        href="#"
                                        class="position-absolute">
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          height="20px"
                                          viewBox="0 -960 960 960"
                                          width="20px"
                                          fill="#818889">
                                          <path
                                            d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z" />
                                        </svg>
                                      </a>
                                    </div>
                                  </div>
                                  <!-- Password input end here  -->
                                </div>
                                <!-- password end here  -->

                                <!-- forgot password start here   -->
                                <div class="row my-4">
                                  <div class="col-12">
                                    <a
                                      href="forgot_pass.html"
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
  <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/main.js"></script>
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
  </script>

</body>
<!-- body tag end here... -->

</html>
<!-- html tag end here... -->