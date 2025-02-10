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
                        href="social_link_list.html"
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
                    <h2 class="main-title">Add Social Link</h2>
                </div>
                <!-- dashboard Header title end here  -->

                <!-- breadcrumb start here  -->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Add Social Link
                    </li>
                </ol>
                <!-- breadcrumb end here  -->
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
                            <h2>Add Social Link</h2>
                        </div>
                    </div>
                    <!-- card header end here  -->

                    <!-- card body start here  -->
                    <div class="card-body">
                        <!-- form start here  -->
                        <form class="upload-form" action="{{ route('admin.social.store') }}" method="POST" data-parsley-validate>
                            @csrf
                            <!-- social icon/slug/title start here  -->
                            <div class="row form-group mt-1 mt-md-2 align-items-start">
                                <!-- social icon label start here  -->
                                <div class="col-12 col-md-2">
                                    <label
                                        for="inputIcon"
                                        class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
                                    >Social Icon</label>
                                </div>
                                <!-- social icon label end here  -->

                                <!-- social icon input start here  -->
                                <div class="col-12 col-md-9 mt-0">
                                    <div class="form-group mb-20 upload-input">
                                        <label for="socialImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                                <span id="iconUploadPlaceholder">
                                                    <!-- Placeholder for icon SVG if needed -->
                                                </span>
                                                <p id="iconText" class="mb-0">Upload Social Icon Image</p>
                                            </div>
                                            <img id="previewSocialIcon" src="" alt="Social Icon Preview" style="display: none; width: 100px; height: 100px; border-radius: 8px;" />
                                        </label>
                                        <input type="file" name="social_icon" class="form-control form-control-lg" id="socialImg" required onchange="previewSocialIcon(event)" data-parsley-required="true" />
                                    </div>
                                    <div id="socialImg-error"></div>
                                </div>
                            </div>
                            <!-- social icon input end here  -->

                            <!-- social title/slug start here  -->
                            <div class="row form-group mt-1 mt-md-2 align-items-start">
                                <!-- social title label start here  -->
                                <div class="col-12 col-md-2">
                                    <label
                                        for="inputTitle"
                                        class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
                                    >Title</label>
                                </div>
                                <!-- social title label end here  -->

                                <!-- social title input start here  -->
                                <div class="col-12 col-md-9 mt-0">
                                    <div class="input-group mb-3 pb-4 position-relative gap-2">
                                        <div class="col-5">
                                            <input type="text"
                                                class="form-control"
                                                id="social-title"
                                                name="title"
                                                placeholder="Enter Social Link Title"
                                                aria-label="title"
                                                data-parsley-required="true"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- social title input end here  -->

                            <!-- social slug input start here  -->
                            <div class="row form-group mt-1 mt-md-2 align-items-start">
                                <!-- social slug label start here  -->
                                <div class="col-12 col-md-2">
                                    <label
                                        for="inputSlug"
                                        class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3"
                                    >Slug</label>
                                </div>
                                <!-- social slug label end here  -->

                                <!-- social slug input start here  -->
                                <div class="col-12 col-md-9 mt-0">
                                    <div class="input-group mb-3 pb-4 position-relative gap-2">
                                        <div class="col-5">
                                            <input type="text"
                                                class="form-control"
                                                id="social-slug"
                                                name="slug"
                                                placeholder="Enter Slug"
                                                aria-label="slug"
                                                data-parsley-required="true"
                                            />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- social slug input end here  -->

                            <!-- save button start here  -->
                            <div class="row">
                                <div class="col-4 col-md-3"></div>
                                <div class="col-12 col-md-9 form-button">
                                    <a href="{{route('social-link-list')}}" role="button" class="btn form-cancel my-0">Cancel</a>
                                    <button type="submit" class="btn form-btn my-0">Save</button>
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

<script>
  function previewSocialIcon(event) {
    const preview = document.getElementById('previewSocialIcon');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('iconText').style.display = 'none';
      document.getElementById('iconUploadPlaceholder').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  $('#socialImg').parsley({
    errorsContainer: function(ParsleyField) {
      return $('#socialImg-error');
    }
  });
</script>

@endsection
