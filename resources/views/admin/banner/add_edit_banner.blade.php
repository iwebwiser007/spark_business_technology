@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
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
            href="banner_list.html"
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
          <!-- <a href="banner_list.html">
                    <button class="btn link-btn rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
    <i class="bi bi-arrow-left-short fs-4 text-white"></i>
</button>
                    </a>  -->
          <h2 class="main-title text-wrap">Add Banner</h2>
        </div>
        <!-- dashboard title end here  -->

        <!-- breadcrumb start here  -->
        <ol class="breadcrumb text-nowrap">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Add Banner
          </li>
        </ol>
        <!-- add breadcrumb end here  -->
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
      
      <!-- dashboard-head end here  -->

      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Add Banner</h2>
            </div>
          </div>
          <!-- card header end here  -->

            <!-- card body start here 
        <div class="card-body">
            <!-- form start here 
            <form class="upload-form" action="{{ url('admin/banner-store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                @csrf

                <!-- Title & Button Link in one row
                <div class="row form-group g-3">
                    <div class="col-md-6">
                        <label for="inputBannerTitle" class="form-label fw-semibold">Banner Title</label>
                        <input type="text" id="inputBannerTitle" name="title" class="form-control" placeholder="Enter Banner Title..." data-parsley-required="true">
                    </div>
                    <div class="col-md-6">
                        <label for="btnLink" class="form-label fw-semibold">Button Link</label>
                        <input type="text" id="btnLink" name="link" class="form-control" placeholder="Enter Button Link..." data-parsley-required="true">
                    </div>
                </div>

                <!-- Description (Full width) 
                <div class="row form-group mt-3">
                    <div class="col-md-12">
                        <label for="inputBannerDescription" class="form-label fw-semibold">Banner Description</label>
                        <textarea class="form-control" id="inputBannerDescription" name="description" rows="3" placeholder="Write your description here..." data-parsley-required="true"></textarea>
                    </div>
                </div>

                <!-- Image Upload & Preview 
                <div class="row form-group mt-3">
                    <div class="col-md-6">
                        <label for="upload-photo" class="form-label fw-semibold">Upload Banner Image</label>
                        <input type="file" id="upload-photo" class="form-control">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label fw-semibold d-block">Image Preview</label>
                        <div class="preview-box">
                            <img id="previewBannerImg" src="../assets/img/banner-placeholder.jpg" alt="Banner Image Preview" class="img-fluid rounded shadow-sm" />
                            <button type="button" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close" onclick="removeImage()"></button>
                        </div>
                    </div>
                </div>

                <!-- Buttons 
                <div class="d-flex justify-content-end mt-4">
                    <a href="{{route('banner-list')}}" class="btn btn-outline-secondary px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary px-4 py-2 ms-2">Save</button>
                </div>
            </form>
            <!-- form end here 
              </div>
        <!-- card body end here -->

<!-- card body start here -->
<div class="card-body">
            <!-- form start here -->
            <form class="upload-form" action="{{ url('admin/banner-store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
                @csrf

                <!-- Title & Button Link in one row -->
                <div class="row form-group g-3">
                    <div class="col-md-6">
                        <label for="inputBannerTitle" class="form-label fw-semibold">Banner Title</label>
                        <input type="text" id="inputBannerTitle" name="title" class="form-control" placeholder="Enter Banner Title..." data-parsley-required="true">
                    </div>
                    <div class="col-md-6">
                        <label for="btnLink" class="form-label fw-semibold">Button Link</label>
                        <input type="text" id="btnLink" name="link" class="form-control" placeholder="Enter Button Link..." data-parsley-required="true">
                    </div>
                </div>

                <!-- Description (Full width) --
                <div class="row form-group mt-3">
                    <div class="col-md-6 d-flex flex-column">
                        <label for="inputBannerDescription" class="form-label fw-semibold">Banner Description</label>
                        <textarea class="form-control flex-grow-1" id="inputBannerDescription" name="description" rows="3" placeholder="Write your description here..." data-parsley-required="true"></textarea>
                    </div>

                    
<!-- Image Upload --
<div class="col-md-6 d-flex flex-column  ">
        <label for="bannerImage" class="form-label fw-semibold">Upload Banner Image</label>
        <div class="form-group mb-3 upload-input  flex-grow-1 d-flex    styled-box">
            <label for="bannerImage" class="form-label form-img-uploader d-flex align-items-center justify-content-center w-100 py-3 position-relative" style="cursor: pointer;">
                <div class="d-flex flex-column align-items-center gap-2">
                    <span>
                        <i class="bi bi-upload" style="font-size: 24px; color: #6c757d;"></i>
                    </span>
                    <p class="mb-0 text-muted">Click to Upload Image</p>
                </div>
                <img id="previewImg" src="#" alt="Image Preview" class="d-none img-fluid rounded mt-2" style="max-width: 100%; max-height: 150px;">
            </label>
            <input type="file" name="banner_image" id="bannerImage" class="d-none" accept="image/*" onchange="previewImage(event)">
        </div>
    </div>





                </div>


                <!-- Description & Image Upload in one row -->
<div class="row form-group mt-3 align-items-stretch">
    <!-- Banner Description -->
    <div class="col-md-6 d-flex flex-column">
        <label for="inputBannerDescription" class="form-label fw-semibold">Banner Description</label>
        <textarea class="form-control flex-grow-1" id="inputBannerDescription" name="description" rows="3" placeholder="Write your description here..." data-parsley-required="true"></textarea>
    </div>

    <!-- Image Upload -->
    <div class="col-md-6 d-flex flex-column">
        <label for="bannerImage" class="form-label fw-semibold">Upload Banner Image</label>
        <div class="form-group  upload-input flex-grow-1 d-flex align-items-center justify-content-center styled-box">
            <label for="bannerImage" class="form-label form-img-uploader d-flex flex-column align-items-center justify-content-center w-100 py-3 position-relative" style="cursor: pointer;">
                <span>
                    <i class="bi bi-upload" style="font-size: 24px; color: #6c757d;"></i>
                </span>
                <p class="mb-0 text-muted">Click to Upload Image</p>
                <img id="previewImg" src="#" alt="Image Preview" class="d-none img-fluid rounded mt-2" style="max-width: 100%; max-height: 150px;">
            </label>
            <input type="file" name="banner_image" id="bannerImage" class="d-none" accept="image/*" onchange="previewImage(event)">
        </div>
    </div>
</div>

               

                <!-- Buttons (Added Padding Below) -->
                <div class="d-flex justify-content-end mt-4 pb-4">
                    <a href="{{route('banner-list')}}" class="btn btn-secondary px-4 py-2">Cancel</a>
                    <button type="submit" class="btn btn-primary px-4 py-2 ms-2">Save</button>
                </div>
            </form>
            <!-- form end here -->
        </div>
        <!-- card body end here -->

        </div>
        <!-- card end here  -->
      </div>
    </div>
  </div>
  <!-- main data end here  -->
</div>

<script>
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

  $('#bannerImg').parsley({
    errorsContainer: function(ParsleyField) {
      return $('#bannerImg-error');
    }
  });
</script>
@endsection