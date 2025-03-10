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
      <div
        class="dash-head d-flex justify-content-between align-items-cente">
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
          <h2 class="main-title text-wrap">Add Feedback</h2>
        </div>
        <!-- dashboard title end here  -->

        <!-- breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
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
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Add Feedback</h2>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form class="upload-form" action="{{ route('admin.feekbackStore') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
              @csrf
              <div class="row">
                <div class="col-12 col-md-6">
                <div class="form-group">
                  <label
                    for="inputFeedbackTitle"
                    class="col-form-label form-label">Feedback Title
                    <span class="text-danger">*</span></label>
                  <input
                    type="text"
                    id="inputFeedbackTitle"
                    name="title"
                    class="form-control form-input"
                    placeholder="Enter Feedback Title..."
                    data-parsley-required="true" />
                </div>
              </div>

              <div class="col-12 col-md-6">
                  <div class="form-group">
                  <label for="btnFeedbackLink" class="col-form-label form-label">
                    Page Select
                    <span class="text-danger">*</span></label>
                  <select name="pageSelect" class="form-control form-input" id="pageSelect" data-parsley-required="true">
                    <option value="" disabled selected>Select Page</option> <!-- Placeholder option -->
                    @foreach ($headers as $header)
                    <option value="{{ $header->title }}">{{ $header->title }}</option>
                    @endforeach
                  </select>
                </div>
              </div>

              <!-- description area start here  -->
              <!-- description label start here  -->
              <div class="col-12 col-md-6">
                  <div class="form-group">
                  <label
                    for="inputFeedbackDescription"
                    class="col-form-label form-label ">Feedback Description <span class="text-danger">*</span></label>
                    <textarea
                    class="form-control form-textbox"
                    id="inputFeedbackDescription"
                    name="description"
                    rows="4"
                    cols="30"
                    placeholder="write your description here..."
                    data-parsley-required="true"></textarea>
                </div>
              </div>

             

              <div class="col-12 col-md-6">
                  <div class="form-group">
                  <label for="inputIcon" class="col-form-label form-label">Upload Feekback <span class="text-danger">*</span></label>
                  <div class="form-group mb-20 upload-input">
                    <label for="iconImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                      <div class="d-flex flex-column align-items-center gap-3">
                        <span id="iconIcon">
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
                              class="">
                              <g>
                                <path
                                  d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z"
                                  fill="#818898"
                                  opacity="1"
                                  data-original="#818898"
                                  class=""></path>
                                <path
                                  d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z"
                                  fill="#818898"
                                  opacity="1"
                                  data-original="#818898"
                                  class=""></path>
                              </g>
                            </svg>
                          </span>
                        </span>
                        <p id="iconText" class="mb-0">Upload Image / Icon </p>
                      </div>
                      <img id="previewIconImg" src="" alt="Icon Image Preview" style="display: none; width: 300px; height:300px; border-radius: 8px;" />
                    </label>
                    <input type="file" name="upload_logo" class="form-control d-none" id="iconImg" required onchange="previewIconImage(event)" data-parsley-required="true" />
                  </div>
                  <div id="iconImg-error"></div>
                </div>
                </div>
               

              <!-- Save button start here  -->
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