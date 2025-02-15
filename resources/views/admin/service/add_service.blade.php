@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
@section('styles')
<style>
    .cke_notification_warning {
        display: none !important;
    }
</style>
@section('content')
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard-head start here... -->
                  <div class="dash-head">
                    <!-- dashboard title start here  -->
                    <div class="dash_title">
                      <a
                        href="{{url()->previous()}}"
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
                      <h2 class="main-title">Add Services</h2>
                    </div>
                    <!-- dashboard title end here  -->

                    <!-- breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Add Services
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
                          <h2>Add Services</h2>
                        </div>
                      </div>
                      <!-- card header end here  -->

                      <!-- card body start here  -->
                      <div class="card-body">
                        <!-- form start here  -->
                        <form class="upload-form" action="{{ url('admin/service-store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="row form-group mt-1 mt-md-2">
                            <!--  title label start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="inputServiceTitle"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Service Name
                              </label>
                            </div>
                            <!-- title label end here  -->

                            <!-- title input start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputServiceTitle"
                                name="name"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Service Name..."
                                data-parsley-required="true"
                              />
                            </div>
                            <!-- title input end here  -->
                            <div class="col-1"></div>
                          </div>
                          <!-- title area start here  -->
                          <div class="row form-group mt-1 mt-md-2">
                            <!--  title label start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="inputServiceTitle"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Service Title
                              </label>
                            </div>
                            <!-- title label end here  -->

                            <!-- title input start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputServiceTitle"
                                name="title"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Service Title..."
                                data-parsley-required="true"
                              />
                            </div>
                            <!-- title input end here  -->
                            <div class="col-1"></div>
                          </div>
                          <!--title area end here  -->

                          <!-- description area start here  -->
                          {{--  <div class="row form-group">
                            <!-- description label start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="serviceDescription"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Service Description</label
                              >
                            </div>
                            <!-- description label end here  -->

                            <!-- description textarea box start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <textarea
                                class="form-control form-control-lg form-textbox"
                                id="serviceDescription"
                                name="description"
                                rows="4"
                                cols="30"
                                placeholder="Write your Service description here..."
                              ></textarea>
                            </div>
                            <!-- description textarea box end here  -->
                            <div class="col-1"></div>
                          </div> --}}
                          <!-- description area end here  -->

                          <!-- Sub Service area start here  -->
                         {{-- <div class="row form-group">
                            <!-- button link label start here  -->
                            <div class="col-12 col-md-3">
                              <label
                                for="subService"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Sub-service Title
                              </label>
                            </div>
                            <!-- button link label end here  -->

                            <!-- button link input start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="subService"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Sub-service Title..."
                                required
                              />
                            </div>
                            <!-- button link input end here  -->
                            <div class="col-1"></div>
                          </div> --}}
                          <!-- Sub Service area end here  -->

                          <!-- button link area start here  -->
                          <div class="row form-group">
                            <!-- button link label start here  -->
                            <div class="col-4 col-sm-3">
                              <label
                                for="serviceLink"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Button Link
                              </label>
                            </div>
                            <!-- button link label end here  -->

                            <!-- button link input start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="serviceLink"
                                name="link"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Button Link..."
                                data-parsley-required="true"

                              />
                            </div>
                            <!-- button link input end here  -->
                            <div class="col-1"></div>
                          </div>
                          <!-- button link area end here  -->

                          <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="metaTags" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Metas</label>
                </div>
                <div class="col-12 col-md-8">
                  <textarea name="meta_tags" id="metaTags" class="form-control form-control-lg form-input" placeholder="Enter JSON formatted metas..."  rows="8" style="height: 150px;"  ></textarea>
                </div>
                <div class="col-1"></div>
              </div>

                          <!-- image upload area start here  -->
                          {{-- <div class="row form-group">
                            <!-- upload area start here -->
                            <div class="col-12 col-md-3">
                              <label
                                for="serviceImg"
                                class="col-form-label form-label d-flex justify-content-left justify-content-md-center"
                                >Upload Image</label
                              >
                            </div>
                            <!-- upload area end here -->

                            <!-- upload input area start here  -->
                            <div class="col-12 col-md-8 mt-0">
                              <div class="form-group mb-20 upload-input">
                                <label
                                  for="serviceImg"
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
                                    <p class="mb-0">Upload Image</p>
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
                                  id="serviceImg"
                                  placeholder="Enter Service Image..."
                                />
                              </div>
                            </div>
                            <!-- upload input area end here  -->
                            <div class="col-1"></div>
                          </div> --}}
                          <!-- image upload area end here  -->

                          <div class="row form-group">
    <div class="col-12 col-md-3">
      <label for="html_content" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Service Content</label>
    </div>
    <div class="col-12 col-md-8 mt-0">
      <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="10" ></textarea>
    </div>
    <div class="col-1"></div>
  </div>


  {{-- <div class="row form-group">
    <div class="col-12 col-md-3">
      <label for="inputBlogFile" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Upload Banner Image</label>
    </div>
    <div class="col-12 col-md-8 mt-0">
      <div class="form-group mb-20 upload-input">
        <label for="blogImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
          <div class="d-flex flex-column align-items-center gap-3">
            <span>
              <!-- SVG Icon or placeholder icon goes here -->
            </span>
            <p class="mb-0">Upload Image</p>
          </div>
        </label>
        <input type="file" name="image" class="form-control form-control-lg d-none" id="blogImg" required onchange="previewImage(event)" />
      </div>

      <!-- Image Preview Area -->
      <div id="imagePreview" class="mt-3">
        <img id="previewImg" src="" alt="Image Preview" style="display: none; width: 100%; max-width: 200px; border-radius: 8px;" />
      </div>
    </div>
  </div> --}}


  



                          <!-- save button start here  -->
                          <div class="row">
                            <div class="col-4 col-md-3"></div>
                            <div class="col-12 col-md-9 form-button">
                              <a
                                href=""
                                role="button"
                                class="btn form-cancel my-0"
                                >cancel</a
                              >
                              <button type="submit" class="btn form-btn my-0">Save</button>
                            </div>
                          </div>
                          <!-- save button end here  -->
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

            <script>
  function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function() {
      var previewImg = document.getElementById('previewImg');
      previewImg.src = reader.result; // Set the image source to the selected file
      previewImg.style.display = 'block'; // Show the image preview
    }
    reader.readAsDataURL(event.target.files[0]); // Read the selected file
  }
</script>





@endsection