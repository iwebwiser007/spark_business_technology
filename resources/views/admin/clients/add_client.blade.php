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
          <!-- <a href="client_list.html">
                    <button class="btn link-btn rounded-circle d-flex align-items-center justify-content-center" style="width: 40px; height: 40px;">
    <i class="bi bi-arrow-left-short fs-4 text-white"></i>
</button>
                    </a>  -->
          <h2 class="main-title text-wrap">Add Clients</h2>
        </div>
        <!-- dashboard title end here  -->




        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
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

      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-column">
            <!-- <strong class="me-2">Error:</strong> -->
            <ul class="mb-0 ps-3">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      @endif

      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Add Clients</h2>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form class="upload-form" action="{{ route('admin.clientStore') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
              @csrf
              <!-- title and logo section in one row -->
              <div class="row  g-3">

                <!-- title label and input on the same row -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="inputClientTitle" class="col-form-label form-label">Client Title <span class="text-danger">*</span></label>
                    <input type="text" id="inputClientTitle" name="title" class="form-control form-input" placeholder="Enter Client Title..." data-parsley-required="true" />
                  </div>
                </div>

                <!-- upload logo label and input on the same row -->
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="inputIcon" class="col-form-label form-label d-flex justify-content-left">Upload Logo <span class="text-danger">*</span></label>
                    <div class="form-group mb-20 upload-input">
                      <label for="iconImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                        <div class="d-flex flex-column align-items-center gap-3">
                          <span id="iconIcon">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 512.056 512.056">
                                <g>
                                  <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#818898"></path>
                                  <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#818898"></path>
                                </g>
                              </svg>
                            </span>
                          </span>
                          <p id="iconText" class="mb-0">Upload Logo / Image </p>
                        </div>
                        <img id="previewIconImg" src="" alt="Icon Image Preview" style="display: none; width: 300px; height:300px; border-radius: 8px;" />
                      </label>
                      <input type="file" name="upload_logo" class="form-control form-control-lg d-none" id="iconImg" required onchange="previewIconImage(event)" data-parsley-required="true" />
                    </div>
                  </div>
                  <div id="iconImg-error"></div>
                </div>

              </div>

              <div class="row">
                <div class="col-4 col-md-3"></div>
                <div class="col-12 col-md-9 form-button">
                  <a href="" role="button" class="btn form-cancel my-0">Cancel</a>
                  <button type="submit" class="btn form-btn my-0">Save</button>
                </div>
              </div>
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
  function previewIconImage(event) {
    const preview = document.getElementById('previewIconImg');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('iconText').style.display = 'none';
      document.getElementById('iconIcon').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  $('#iconImg').parsley({
    errorsContainer: function(ParsleyField) {
      return $('#iconImg-error');
    }
  });
</script>
@endsection