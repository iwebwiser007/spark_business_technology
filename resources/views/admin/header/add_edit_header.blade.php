@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
@section('content')
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard head start here... -->
                  <div class="dash-head">
                    <!-- dashboard Header title start here  -->
                    <div class="dash_title">
                     <a
                        href="header_list.html"
                        role="button"
                        class="btn link-btn d-flex align-items-center justify-content-center"
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
                    <!-- <a href="header_list.html">
                    <button class="btn link-btn rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
    <i class="bi bi-arrow-left-short fs-4 text-white"></i>
</button>
                    </a>   -->




                      <h2 class="main-title">Add Header</h2>
                    </div>
                    <!-- dashboard Header title end here  -->

                    <!-- add Header breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Add Header
                      </li>
                    </ol>
                    <!-- add Header breadcrumb end here  -->
                  </div>
                  <!-- dashboard head end here... -->

                  <div class="container-fluid">
                    <!-- card start here  -->
                    <div class="card">
                      <!-- card header start here  -->
                      <div class="card-header">
                        <div
                          class="card-title d-flex justify-content-between align-items-center"
                        >
                          <h2>Add Header</h2>
                        </div>
                      </div>
                      <!-- card header end here  -->

                      <!-- card body start here  -->
                      <div class="card-body">
                        <!-- form start here  -->
                        <form class="upload-form" action="{{ route('admin.header.store') }}" method="POST" data-parsley-validate>
                            @csrf
                          <!-- header title/Link start here  -->
                          <div
                            class="row form-group mt-1 mt-md-2 align-items-start"
                          >
                            <!-- Header title label start here  -->
                            <div class="col-12 col-md-2">
                              <label
                                for="inputHeaderTitle"
                                class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
                                >Header Title / Link
                              </label>
                            </div>
                            <!-- Header title label end here  -->

                            <!-- Header title input start here  -->
                            <div class="col-12 col-md-9 mt-0">
                              <div class="input-group mb-3 pb-4 position-relative gap-2">
                                <div class="col-5">
                                <input type="text"
                                  class="form-control"
                                  id="header-link"
                                  name="title"
                                  placeholder="Enter Header title..."
                                  aria-label="title"
                                  data-parsley-required="true"
                                /></div>
                                <div class="col-5">
                                <input
                                  type="text"
                                  class="form-control rounded-end"
                                  id="header-link"
                                  name="link"
                                  placeholder="Enter Header link"
                                  aria-label="link"
                                  data-parsley-required="true"


                                />
                                </div>
                                <!-- <span
                                  class="text-danger position-absolute bottom-0 ms-1 d-none d-sm-block"
                                  >New Heading Title/Link added.</span
                                > -->
                              </div>
                              </div>
                              </div>
                              

                              <!-- Add Subheader button start here   -->
                           {{--   <a
                                href="#subHeaderTitle"
                                role="button"
                                class="btn btn-outline-secondary bg-white text-secondary btn-sm mb-2 px-2"
                                onclick="subHeader()"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  height="20"
                                  viewBox="0 -960 960 960"
                                  width="20"
                                  fill="#5f6368"
                                >
                                  <path
                                    d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                  />
                                </svg>
                                Sub Heading
                              </a>
                              <!-- Add Subheader button end here  -->
                            </div>
                            <!-- Header title input end here  -->

                            <!-- header title plus button start here  -->
                            <div class="col-1 col-md-1 d-none d-sm-block"></div>
                            <!-- header title plus button end here  -->
                          </div>
                          <!-- header title/Link end here  -->

                          <!-- Sub-header title/Link start here  -->
                          <div
                            class="row form-group mt-1 mt-md-2 align-items-start d-none"
                          >
                            <!-- Header title label start here  -->
                            <div class="col-12 col-md-2">
                              <label
                                for="inputHeaderTitle"
                                class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
                                >Sub Header Title / Link
                              </label>
                            </div>
                            <!-- Header title label end here  -->

                            <!-- Header title input start here  -->
                            <div class="col-12 col-md-9 mt-0">
                              <div
                                class="input-group mb-3 pb-4 position-relative"
                              >
                                <input
                                  type="text"
                                  class="form-control"
                                  id="header-link"
                                  name="sub_title"
                                  placeholder="Enter Sub Header title..."
                                  aria-label="title"
                                />
                                <input
                                  type="text"
                                  class="form-control"
                                  id="header-link"
                                  name="sub_link"
                                  placeholder="Enter Sub Header link"
                                  aria-label="link"
                                />
                                <span
                                  class="text-danger position-absolute bottom-0 ms-1 d-none d-sm-block"
                                  >New Sub Heading Title/Link added.</span
                                >
                                <div class="valid-feedback">Looks good!</div>
                              </div>

                              <!-- add Sub header start here  -->
                              <a
                                href="#subHeaderTitle"
                                role="button"
                                class="btn btn-outline-secondary bg-white text-secondary btn-sm mb-2 px-2"
                                onclick="subHeaderTitle()"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  height="20"
                                  viewBox="0 -960 960 960"
                                  width="20"
                                  fill="#5f6368"
                                >
                                  <path
                                    d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                  />
                                </svg>
                                Sub Heading
                              </a>
                              <!-- add Sub header end here  -->
                            </div>
                            <!-- Header title input end here  -->

                            <!-- header title plus button start here  -->
                            <div class="col-1 col-md-1 d-none d-sm-block">
                              <!-- add button start here  -->
                              <a
                                href="#headerTitle"
                                role="button"
                                class="btn"
                                onclick="header()"
                              >
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  height="20"
                                  viewBox="0 -960 960 960"
                                  width="20"
                                  fill="#5f6368"
                                >
                                  <path
                                    d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                  />
                                </svg>
                              </a>
                              <!-- add button end here  -->
                            </div>
                            <!-- header title plus button end here  -->
                          </div>
                          <!-- Sub-header title/Link end here  -->

                          <!-- add sub-sub-heading start here  -->
                          <div id="subHeader"></div> --}}
                          <!-- add sub-sub-heading end here  -->

                          <!-- new header title input area start here  -->
                          <!-- <div id="headerTitle"></div> -->
                          <!-- new header title input area end here  -->

                          <!-- subheading box start here -->
                          <!-- <div id="subHeader1"></div> -->
                          <!-- subheading box end here  -->

                          <!-- save button start here  -->
                          <div class="row">
                            <div class="col-4 col-md-3"></div>
                            <div class="col-12 col-md-9 form-button">
                              <a href="{{route('header-list')}}" role="button" class="btn form-cancel my-0">cancel</a>
                              <button
                                type="submit"
                                
                                class="btn form-btn my-0"
                                >save</button
                              >
                            </div>
                          </div>
                          <!-- save upload button end here  -->
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

