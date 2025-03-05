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
@endsection
@section('content')
<div class="main-right-container" id="main-right-container">
  <!-- main data start here  -->
  <div class="main-data">
    <div class="container-fluid">
      <!-- dashboard-head start here... -->
      <div class="dash-head">
        <!-- dashboard title start here  -->
        <div class="dash_title">
          <a href="{{url()->previous()}}" role="button" class="btn link-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#FFFFFF">
              <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
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
      
      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-column">
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
            <div class="card-title d-flex justify-content-between align-items-center">
              <h2>Add Services</h2>
            </div>
          </div>

          <!-- Card Body Start Here -->
          <div class="card-body">
            <!-- Form Start Here -->
            <form class="upload-form" action="{{ url('admin/service-store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
              @csrf
              <div class="row">
                <!-- Service Name -->
                <div class="col-md-6">
                <div class="form-group">
                  <label for="inputServiceName" class="col-form-label form-label">Service Name <span class="text-danger">*</span></label>
                  <input type="text" id="inputServiceName" name="name" class="form-control form-input" placeholder="Enter Service Name..." required />
                </div>
                </div>
                

                <!-- Service Title -->
                <div class="col-md-6">
                <div class="form-group">
                  <label for="inputServiceTitle" class="col-form-label form-label">Service Title <span class="text-danger">*</span></label>
                  <input type="text" id="inputServiceTitle" name="title" class="form-control form-input" placeholder="Enter Service Title..." required />
                </div>
                </div>

                <!-- Button Link -->
                <div class="col-md-6">
                <div class="form-group">
                  <label for="serviceLink" class="col-form-label form-label">Button Link <span class="text-danger">*</span></label>
                  <input type="text" id="serviceLink" name="link" class="form-control form-input" placeholder="Enter Button Link..." required />
                </div>
                </div>

                <!-- Metas -->
                <div class="col-md-6">
                <div class="form-group">
                  <label for="metaTags" class="col-form-label form-label">Metas <span class="text-danger">*</span></label>
                  <textarea name="meta_tags" id="metaTags" class="form-control  form-textbox" placeholder="Enter JSON formatted metas..." rows="4" required></textarea>
                </div>
                </div>

                <!-- Service Content -->
                <div class="col-12">
                <div class="form-group">
                  <label for="html_content" class="col-form-label form-label">Service Content</label>
                  <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="6"></textarea>
                </div>
                </div>
              </div>

              <!-- Buttons -->
              <div class="row">
                <div class="col-4 col-md-3"></div>
                <div class="col-12 col-md-9 form-button">
                  <a href="" role="button" class="btn form-cancel my-0">cancel</a>
                  <button type="submit" class="btn form-btn my-0">save</button>
                </div>
              </div>
            </form>
            <!-- Form End Here -->
          </div>
          <!-- Card Body End Here -->
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
