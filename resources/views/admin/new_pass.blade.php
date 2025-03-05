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
    <title>Spark Busniness Technology</title>
    <!-- title end here... -->

    <!-- All css links start here... -->
    <link
      rel="stylesheet"
      href="../public/node_modules/bootstrap/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../public/assets/scss/main.css" />
    <!-- All css links end here... -->

    <!-- favicon icon start here -->
    <!-- <link rel="icon" type="image/x-icon" href="../public/assets/icons/Logo.svg" /> -->
    <link rel="icon" type="image/x-icon" href="{{ asset('public/web/img/favicon.ico')}}" />

    <!-- favicon icon end here -->
  </head>
  <!-- Head tag end here... -->

  <!-- body tag start here... -->
  <body>
    <!-- main container start here  -->
    <div class="main-container">
      <!-- wrapper area start here  -->
      <div class="wrapper">
        <div class="">
          <!-- main content start here  -->
          <div class="main-content">
            <div class="container-fluid login_container">
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
                              src="../public/assets/img/change_pass.jpg"
                              alt="Trendy Pants and Shoes"
                              class="w-100"
                            />
                          </div>
                          <!-- card image end here  -->

                          <!-- change password start here  -->
                          <div class="col-md-8">
                            <div class="card-body px-md-5">
                              <!-- company logo start here  -->
                              <a
                                href="#loginForm"
                                class="btn border-0 login_logo d-block d-md-none"
                                role="button"
                              >
                                <img
                                  src="../public/assets/icons/Logo.svg"
                                  alt="logo"
                                />
                              </a>
                              <!-- company logo end here  -->

                              <h2 class="login_title">Change Password</h2>
                              <!-- form start here  -->
                              <div>
                                <form>
                                  <!-- New Password start here  -->
                                  <div
                                    class="row form-group g-3 align-items-center my-2"
                                  >
                                    <!-- New Password Label start here  -->
                                    <div
                                      class="col-12 d-flex align-items-center justify-content-start"
                                    >
                                      <label
                                        for="newPass"
                                        class="col-form-label form-label"
                                        >New Password
                                      </label>
                                    </div>
                                    <!-- New Password Label end here  -->

                                    <!-- New Password input start here  -->
                                    <div class="col-12 mt-0">
                                      <div class="pass_input">
                                        <input
                                          type="password"
                                          id="newPass"
                                          class="form-control form-input"
                                          placeholder="Enter New Password..."
                                          required
                                        />
                                        <a href="#" class="position-absolute">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            height="20px"
                                            viewBox="0 -960 960 960"
                                            width="20px"
                                            fill="#818889"
                                          >
                                            <path
                                              d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z"
                                            />
                                          </svg>
                                        </a>
                                      </div>
                                    </div>
                                    <!-- New Password input end here  -->
                                  </div>
                                  <!-- New Password end here  -->

                                  <!-- Confirm Password start here  -->
                                  <div
                                    class="row form-group g-3 align-items-center my-2"
                                  >
                                    <!-- Confirm Password Label start here  -->
                                    <div
                                      class="col-12 d-flex align-items-center justify-content-start"
                                    >
                                      <label
                                        for="confirmPass"
                                        class="col-form-label form-label"
                                        >Confirm Password
                                      </label>
                                    </div>
                                    <!-- Confirm Password Label end here  -->

                                    <!-- Confirm Password input start here  -->
                                    <div class="col-12 mt-0">
                                      <div class="pass_input">
                                        <input
                                          type="password"
                                          id="confirmPass"
                                          class="form-control form-input"
                                          placeholder="Confirm Password..."
                                          required
                                        />
                                        <a href="#" class="position-absolute">
                                          <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            height="20px"
                                            viewBox="0 -960 960 960"
                                            width="20px"
                                            fill="#818889"
                                          >
                                            <path
                                              d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z"
                                            />
                                          </svg>
                                        </a>
                                      </div>
                                    </div>
                                    <!-- Confirm Password input end here  -->
                                  </div>
                                  <!-- Confirm Password end here  -->

                                  <!-- Reset Password Button start here  -->
                                  <div class="row my-4">
                                    <div
                                      class="col-12 d-flex justify-content-start"
                                    >
                                      <a
                                        href="{{url('admin/login')}}"
                                        role="button"
                                        class="btn btn-signin btn-block"
                                        >Reset Password</a
                                      >
                                    </div>
                                  </div>
                                  <!-- Reset Passwor Button end here  -->
                                </form>
                              </div>
                              <!-- form end here  -->
                            </div>
                          </div>
                          <!-- change password end here  -->
                        </div>
                      </div>
                      <!-- card body end here  -->
                    </div>
                    <!-- card end here  -->
                  </section>
                  <!-- form section end here -->
                </div>
                <div class="col-2"></div>
              </div>
            </div>
          </div>
          <!-- main content end here  -->
        </div>
      </div>
      <!-- wrapper area end here  -->
    </div>
    <!-- main container end here  -->

    <!-- All js scripts start here... -->
    <script src="../public/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../public/assets/js/main.js"></script>
    <!-- All js scripts end here... -->
  </body>
  <!-- body tag end here... -->
</html>
<!-- html tag end here... -->
