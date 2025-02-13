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
      <div class="dash-head d-flex justify-content-between">
        <!-- dashboard title start here  -->
        <div class="dash_title">
           <a
            href="{{url()->previous()}}"
            role="button"
            class="btn link-btn">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="20"
              viewBox="0 -960 960 960"
              width="20"
              fill="#FFFFFF">
              <path
                d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
            </svg>
          </a> 
          
          <h2 class="main-title">Add Blog</h2>
        </div>
        <!-- dashboard title end here  -->

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Add Blog
          </li>
        </ol>
        <!-- add banner breadcrumb end here  -->
      </div>


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
      
      <!-- dashboard-head end here... -->
      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Add Blog</h2>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  --
          <div class="card-body">
            <form class="upload-form" action="{{ url('admin/blog-store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
              @csrf

              <!-- Blog Title --
              <div class="row form-group mt-1 mt-md-2">
                <div class="col-12 col-md-3">
                  <label for="inputBlogTitle" class="col-form-label form-label d-flex justify-content-left ">Title</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <input type="text" name="title" id="inputBlogTitle" class="form-control form-control-lg form-input" placeholder="Enter Blog Title..." data-parsley-required="true" data-parsley-maxlength="255"
                  />
                </div>
                <div class="col-1"></div>
              </div>

              <!-- Blog Description --
              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputBlogDescription" class="col-form-label form-label d-flex justify-content-left ">Description</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <textarea class="form-control form-control-lg form-textbox" name="description" id="inputBlogDescription" rows="4" placeholder="Write your blog description here..." data-parsley-required="true"></textarea>
                </div>
                <div class="col-1"></div>
              </div>

              <!-- Blog Link --
              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputBlogLink" class="col-form-label form-label d-flex justify-content-left ">Slug</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <input type="text" name="link" id="inputBlogLink" class="form-control form-control-lg form-input" placeholder="Enter Slug..." data-parsley-required="true" data-parsley-maxlength="255" />
                </div>
                <div class="col-1"></div>
              </div>

              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="metaTags" class="col-form-label form-label d-flex justify-content-left ">Metas</label>
                </div>
                <div class="col-12 col-md-8">
                  <textarea name="meta_tags" id="metaTags" class="form-control form-control-lg form-input" placeholder="Enter JSON formatted metas..."  rows="8" style="height: 150px;" data-parsley-required="true" ></textarea>
                </div>
                <div class="col-1"></div>
              </div>

              <!-- Blog Content --
              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="html_content" class="col-form-label form-label d-flex justify-content-left ">Content</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="10"></textarea>
                </div>
                <div class="col-1"></div>
              </div>




<!-- image upload area start here  --
<div class="row form-group">
                            <!-- upload area start here  --
                            <div class="col-12 col-md-3">
                  <label for="inputBannerImage" class="col-form-label form-label d-flex justify-content-left ">Thumbnail Image</label>
                </div>
                            <!-- upload area end here  -->

                            <!-- upload input area start here  --
                            <div class="col-12 col-md-8 mt-0">
                              <div class="form-group mb-20 upload-input">
                                <label
                                  for="certificateImg"
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
                                  id="certificateImg"
                                  placeholder="Enter Certificate Image..."
                                />
                              </div>
                            </div>
                            <!-- upload input area end here  --
                            <div class="col-1 d-none d-sm-block"></div>
                          </div>
                          <!-- image upload area end here  -->










              <!-- <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputThumbnailImage" class="col-form-label form-label d-flex justify-content-left ">Thumbnail Image</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <div class="form-group mb-20 upload-input">
                    <label for="thumbnailImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                      <!-- <div class="d-flex flex-column align-items-center gap-3">
                        <span id="thumbnailIcon">
                          <!-- You can add an SVG icon here, if needed 
                        </span>
                        <p id="thumbnailText" class="mb-0">Upload Thumbnail Image</p>
                      </div>
                      <img id="previewThumbnailImg" src="" alt="Thumbnail Image Preview" style="display: none; width: 300px; height:300px; border-radius: 8px;" /> 
                   
                      <div class="banner-image">
                                    <label for="upload-photo">
                                        <img src="" id="banner-image" class="img-fluid " alt="thumbnail image">
                                    </label>
                                    <input type="file" id="upload-photo" class="d-none">
                                </div>
                   
                    </label>
                    <!-- <input type="file" name="thumbnail_image" class="form-control form-control-lg " id="thumbnailImg"  onchange="previewThumbnailImage(event)" data-parsley-required="true"  /> 
                  </div>
                  <div id="thumbnailImg-error" ></div>
                </div>
              </div> -->

              <!-- Banner Image Upload -->
              <!-- <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputBannerImage" class="col-form-label form-label d-flex justify-content-left ">Banner Image</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <div class="form-group mb-20 upload-input">
                    <label for="bannerImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                      <!-- <div class="d-flex flex-column align-items-center gap-3">
                        <span id="bannerIcon">
                          <!-- You can add an SVG icon here, if needed 
                        </span>
                        <p id="bannerText" class="mb-0">Upload Banner Image</p>
                      </div> -->
                      <!-- <img id="previewBannerImg" src="" alt="Banner Image Preview" style="display: none; width: 300px; height:300px; border-radius: 8px;" /> 
                   
                   
                      <div class="banner-image">
                                    <label for="upload-photo">
                                        <img src="" id="banner-image" class="img-fluid " alt="Banner  Image">
                                    </label>
                                    <input type="file" id="upload-photo" class="d-none">
                                </div>
                   
                    </label>
                    <!-- <input type="file" name="banner_image" class="form-control form-control-lg " id="bannerImg" required onchange="previewBannerImage(event)" data-parsley-required="true"  /> 
                  </div>
                  <div id="bannerImg-error" ></div>

                </div>
              </div> -->



<!-- image upload area start here  -
<div class="row form-group">
                            <!-- upload area start here  -
                            <div class="col-12 col-md-3">
                  <label for="inputBannerImage" class="col-form-label form-label d-flex justify-content-left ">Banner Image</label>
                </div>
                            <!-- upload area end here  -->

                            <!-- upload input area start here  -
                            <div class="col-12 col-md-8 mt-0">
                              <div class="form-group mb-20 upload-input">
                                <label
                                  for="certificateImg"
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
                                  id="certificateImg"
                                  placeholder="Enter Certificate Image..."
                                />
                              </div>
                            </div>
                            <!-- upload input area end here  
                            <div class="col-1 d-none d-sm-block"></div>
                          </div>
                          <!-- image upload area end here  -->







              

              <!-- Save Button 
              <div class="row">
                <div class="col-4 col-md-3"></div>
                <div class="col-12 col-md-9 form-button">
                <a href="{{route('blog-list')}}" role="button" class="btn form-cancel my-0">cancel</a>
                <button type="submit" class="btn form-btn my-0">Save</button>
                </div>
              </div>
            </form>



            <!-- form end here  -
          </div>
          <!-- card body end here  -->





          <div class="card-body">
  <form class="upload-form" action="{{ url('admin/blog-store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
    @csrf

    <!-- Title & Slug in One Row -->
    <div class="row form-group g-3">
      <div class="col-md-6">
        <label for="inputBlogTitle" class="form-label fw-semibold">Title</label>
        <input type="text" name="title" id="inputBlogTitle" class="form-control" placeholder="Enter Blog Title..." data-parsley-required="true">
      </div>
      <div class="col-md-6">
        <label for="inputBlogLink" class="form-label fw-semibold">Slug</label>
        <input type="text" name="link" id="inputBlogLink" class="form-control" placeholder="Enter Slug..." data-parsley-required="true">
      </div>
    </div>

    <!-- Description & Metas in One Row -->
    <div class="row form-group g-3 mt-3">
      <div class="col-md-6">
        <label for="inputBlogDescription" class="form-label fw-semibold">Description</label>
        <textarea class="form-control" name="description" id="inputBlogDescription" rows="3" placeholder="Write your blog description here..." data-parsley-required="true"></textarea>
      </div>
      <div class="col-md-6">
        <label for="metaTags" class="form-label fw-semibold">Metas</label>
        <textarea name="meta_tags" id="metaTags" class="form-control" placeholder="Enter JSON formatted metas..." rows="3" data-parsley-required="true"></textarea>
      </div>
    </div>

    <!-- Content -->
    <div class="row form-group g-3 mt-3">
      <div class="col-12">
        <label for="html_content" class="form-label fw-semibold">Content</label>
        <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="6"></textarea>
      </div>
    </div>

    <!-- Thumbnail & Banner Image in One Row -->
    <div class="row form-group g-3 mt-3">
      <div class="col-md-6">
        <label for="thumbnailImg" class="form-label fw-semibold">Thumbnail Image</label>
        <div class="form-group upload-input text-center border p-4 rounded">
          <label for="thumbnailImg" class="w-100 cursor-pointer">
            <div class="d-flex flex-column align-items-center">
              <i class="bi bi-upload"></i>
              <p>Click to Upload Thumbnail</p>
            </div>
          </label>
          <input type="file" name="thumbnail_image" class="d-none" id="thumbnailImg">
        </div>
      </div>
      <div class="col-md-6">
        <label for="bannerImg" class="form-label fw-semibold">Banner Image</label>
        <div class="form-group upload-input text-center border p-4 rounded">
          <label for="bannerImg" class="w-100 cursor-pointer">
            <div class="d-flex flex-column align-items-center">
              <i class="bi bi-upload"></i>
              <p>Click to Upload Banner</p>
            </div>
          </label>
          <input type="file" name="banner_image" class="d-none" id="bannerImg">
        </div>
      </div>
    </div>

    <!-- Save Button -->
    <div class="row mt-4 mb-4">
      <div class="col-12 d-flex justify-content-end">
        <a href="{{route('blog-list')}}" class="btn btn-secondary me-2">Cancel</a>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </form>
</div>












        </div>
        <!-- card end here  -->
      </div>
    </div>
  </div>
  <!-- main data end here  -->
</div>

<script>
  function previewThumbnailImage(event) {
    const preview = document.getElementById('previewThumbnailImg');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('thumbnailText').style.display = 'none';
      document.getElementById('thumbnailIcon').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  function previewBannerImage(event) {
    const preview = document.getElementById('previewBannerImg');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('bannerText').style.display = 'none';
      document.getElementById('bannerIcon').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  
  $('#thumbnailImg').parsley({
  errorsContainer: function(ParsleyField) {
    return $('#thumbnailImg-error');
  }
});

$('#bannerImg').parsley({
  errorsContainer: function(ParsleyField) {
    return $('#bannerImg-error');
  }
});
</script>
@endsection