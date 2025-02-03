@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard head start here... -->
                  <div class="dash-head">
                    <!-- dashboard title start here  -->
                    <div class="dash_title">
                      <a
                        href="client_list.html"
                        role="button"
                        class="btn link-btn"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#FFFFFF"
                        >
                          <path
                            d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"
                          />
                        </svg>
                      </a>
                      <h2 class="main-title text-wrap">Add Clients</h2>
                    </div>
                    <!-- dashboard title end here  -->

                    <!-- add banner breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <!-- <li class="breadcrumb-item">
                        <a href="#">Our Clients</a>
                      </li> -->
                      <li class="breadcrumb-item active" aria-current="page">
                        Add Clients
                      </li>
                    </ol>
                    <!-- add banner breadcrumb end here  -->
                  </div>
                  <!-- dashboard head end here  -->

                  <div class="container-fluid">
                    <!-- card start here  -->
                    <div class="card">
                      <!-- card header start here  -->
                      <div class="card-header">
                        <div
                          class="card-title d-flex justify-content-between align-items-center"
                        >
                          <h2>Add Clients</h2>
                        </div>
                      </div>
                      <!-- card header end here  -->

                      <!-- card body start here  -->
                      <div class="card-body">
                        <!-- form start here  -->
                        <form class="upload-form">
                          <!-- title area start here  -->
                          <div class="row form-group mt-1 mt-md-2">
                            <!-- title label start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="inputClientTitle"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Client Title
                              </label>
                            </div>
                            <!-- title label end here  -->

                            <!-- title input start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputClientTitle"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Client Title..."
                                required
                              />
                            </div>
                            <!-- title input end here  -->
                            <div class="col-1"></div>
                          </div>
                          <!--title area end here  -->

                          <!-- image upload area start here  -->
                          <div class="row form-group">
                            <!-- upload area start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="inputClientFile"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Upload Logo</label
                              >
                            </div>
                            <!-- upload area end here  -->

                            <!-- upload input area start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <div class="form-group mb-20 upload-input">
                                <label
                                  for="clientImg"
                                  class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4"
                                >
                                  <div
                                    class="d-flex flex-column align-items-center gap-3"
                                  >
                                    <span>
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="40"
                                        height="40"
                                        x="0"
                                        y="0"
                                        viewBox="0 0 512.056 512.056"
                                        style="
                                          enable-background: new 0 0 512 512;
                                        "
                                        xml:space="preserve"
                                        class=""
                                      >
                                        <g>
                                          <path
                                            d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z"
                                            fill="#818898"
                                            opacity="1"
                                            data-original="#818898"
                                            class=""
                                          ></path>
                                          <path
                                            d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z"
                                            fill="#818898"
                                            opacity="1"
                                            data-original="#818898"
                                            class=""
                                          ></path>
                                        </g>
                                      </svg>
                                    </span>
                                    <p class="mb-0">Upload Logo / Image</p>
                                  </div>
                                  <div class="upload-img d-none">
                                    <img
                                      src="../assets/img/login-left.jpg"
                                      class="rounded-4"
                                      alt="upload-img"
                                    />
                                  </div>
                                </label>
                                <input
                                  type="file"
                                  class="form-control form-control-lg d-none"
                                  id="clientImg"
                                  placeholder="Enter Client Image.."
                                />
                              </div>
                            </div>
                            <!-- upload input area end here  -->
                            <div class="col-1"></div>
                          </div>
                          <!-- image upload area end here  -->

                          <!-- Save button start here  -->
                          <div class="row">
                            <div class="col-4 col-md-3"></div>
                            <div class="col-12 col-md-9 form-button">
                              <a
                                href="client_list.html"
                                role="button"
                                class="btn form-cancel my-0"
                                >cancel</a
                              >
                              <a
                                href="#"
                                role="button"
                                class="btn form-btn my-0"
                                >save</a
                              >
                            </div>
                          </div>
                          <!-- Save button end here  -->
                        </form>
                        <!-- form end here  -->
                      </div>
                      <!-- card body end here  -->
                    </div>
                    <!-- card end here  -->
                  </div>
                </div>
              </div>
              <!-- main data end here  -->
            </div>
@endsection