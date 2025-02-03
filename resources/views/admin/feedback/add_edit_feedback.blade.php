@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard-head start here... -->
                  <div
                    class="dash-head d-flex justify-content-between align-items-cente"
                  >
                    <!-- dashboard title start here  -->
                    <div class="dash_title">
                      <a
                        href="feedback_list.html"
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
                      <h2 class="main-title text-wrap">Add Feedback</h2>
                    </div>
                    <!-- dashboard title end here  -->

                    <!-- breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Add Feedback
                      </li>
                    </ol>
                    <!-- add breadcrumb end here  -->
                  </div>
                  <!-- dashboard-head end here  -->

                  <div class="container-fluid">
                    <!-- card start here  -->
                    <div class="card">
                      <!-- card header start here  -->
                      <div class="card-header">
                        <div
                          class="card-title d-flex justify-content-between align-items-center"
                        >
                          <h2>Add Feedback</h2>
                        </div>
                      </div>
                      <!-- card header end here  -->

                      <!-- card body start here  -->
                      <div class="card-body">
                        <!-- form start here  -->
                        <form class="upload-form">
                          <!-- title area start here  -->
                          <div class="row form-group mt-1 mt-md-2">
                            <!-- banner title start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="inputFeedbackTitle"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center align-items-center"
                                >Feedback Title
                              </label>
                            </div>
                            <!-- banner title end here  -->

                            <!-- banner search form start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputFeedbackTitle"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Feedback Title..."
                                required
                              />
                            </div>
                            <!-- banner search form end here  -->
                            <div class="col-1 d-none d-md-block"></div>
                          </div>
                          <!-- title area end here  -->

                          <!-- description area start here  -->
                          <div class="row form-group">
                            <!-- description label start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="inputFeedbackDescription"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center text-nowrap"
                                >Feedback Description</label
                              >
                            </div>
                            <!-- banner description label end here  -->

                            <!-- banner description textarea box start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <textarea
                                class="form-control form-control-lg form-textbox"
                                id="inputFeedbackDescription"
                                rows="4"
                                cols="30"
                                placeholder="write your description here..."
                              ></textarea>
                            </div>
                            <!-- banner description textarea box end here  -->
                            <div class="col-1 d-none d-md-block"></div>
                          </div>
                          <!-- description area end here  -->

                          <!-- Page Select area start here  -->
                          <div class="row form-group">
                            <!-- Page Select label start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="btnFeedbackLink"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Page Select
                              </label>
                            </div>
                            <!-- Page Select label end here  -->

                            <!-- Page Select input start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <select
                                name="pageSelect"
                                class="form-control form-control-lg form-input"
                              >
                                <option id="place">Select Page</option>
                                <option value="Australia">Home</option>
                                <option value="Canada">About</option>
                                <option value="India">Testimonial</option>
                              </select>
                            </div>
                            <!-- Page Select input end here  -->

                            <div class="col-1 d-none d-md-block"></div>
                          </div>
                          <!-- Page Select area end here  -->

                          <!-- Feedback image upload area start here  -->
                          <div class="row form-group">
                            <!-- upload banner label area start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="inputFeedbackImg"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Upload Feedback</label
                              >
                            </div>
                            <!-- upload banner label area end here  -->

                            <!-- upload feedback input area start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <div class="form-group mb-20 upload-input">
                                <label
                                  for="feedImg"
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
                                    <p class="mb-0">Upload Image / Icon</p>
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
                                  id="feedImg"
                                  placeholder="Enter Feedback"
                                />
                              </div>
                            </div>
                            <!-- upload feedback input area end here  -->
                            <div class="col-1 d-none d-md-block"></div>
                          </div>
                          <!-- Feedback image upload area end here  -->

                          <!-- Save button start here  -->
                          <div class="row">
                            <div class="col-4 col-md-3"></div>
                            <div class="col-12 col-md-9 form-button">
                              <a
                                href="feedback_list.html"
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
