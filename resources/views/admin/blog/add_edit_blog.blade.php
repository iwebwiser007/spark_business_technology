@extends('components.admin.layouts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
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
            href="blog_list.html"
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

          <!-- card body start here  -->
          <div class="card-body">
            <form class="upload-form" action="{{ url('admin/blog-store') }}" method="POST" enctype="multipart/form-data" data-parsley-validate>
              @csrf

              <!-- Blog Title -->
              <div class="row form-group mt-1 mt-md-2">
                <div class="col-12 col-md-3">
                  <label for="inputBlogTitle" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Title</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <input type="text" name="title" id="inputBlogTitle" class="form-control form-control-lg form-input" placeholder="Enter Blog Title..." required />
                </div>
                <div class="col-1"></div>
              </div>

              <!-- Blog Description -->
              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputBlogDescription" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Description</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <textarea class="form-control form-control-lg form-textbox" name="description" id="inputBlogDescription" rows="4" placeholder="Write your blog description here..." required></textarea>
                </div>
                <div class="col-1"></div>
              </div>

              <!-- Blog Link -->
              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputBlogLink" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Slug</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <input type="text" name="link" id="inputBlogLink" class="form-control form-control-lg form-input" placeholder="Enter Slug..." required />
                </div>
                <div class="col-1"></div>
              </div>

              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="metaTags" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Metas</label>
                </div>
                <div class="col-12 col-md-8">
                  <textarea name="meta_tags" id="metaTags" class="form-control form-control-lg form-input" placeholder="Enter JSON formatted metas..." required rows="8" style="height: 150px;"></textarea>
                </div>
                <div class="col-1"></div>
              </div>

              <!-- Blog Content -->
              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="html_content" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Content</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="10"></textarea>
                </div>
                <div class="col-1"></div>
              </div>


              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputThumbnailImage" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Thumbnail Image</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <div class="form-group mb-20 upload-input">
                    <label for="thumbnailImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                      <div class="d-flex flex-column align-items-center gap-3">
                        <span id="thumbnailIcon">
                          <!-- You can add an SVG icon here, if needed -->
                        </span>
                        <p id="thumbnailText" class="mb-0">Upload Thumbnail Image</p>
                      </div>
                      <img id="previewThumbnailImg" src="" alt="Thumbnail Image Preview" style="display: none; width: 300px; height:300px; border-radius: 8px;" />
                    </label>
                    <input type="file" name="thumbnail_image" class="form-control form-control-lg d-none" id="thumbnailImg" required onchange="previewThumbnailImage(event)" />
                  </div>
                </div>
              </div>

              <!-- Banner Image Upload -->
              <div class="row form-group">
                <div class="col-12 col-md-3">
                  <label for="inputBannerImage" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Banner Image</label>
                </div>
                <div class="col-12 col-md-8 mt-0">
                  <div class="form-group mb-20 upload-input">
                    <label for="bannerImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                      <div class="d-flex flex-column align-items-center gap-3">
                        <span id="bannerIcon">
                          <!-- You can add an SVG icon here, if needed -->
                        </span>
                        <p id="bannerText" class="mb-0">Upload Banner Image</p>
                      </div>
                      <img id="previewBannerImg" src="" alt="Banner Image Preview" style="display: none; width: 300px; height:300px; border-radius: 8px;" />
                    </label>
                    <input type="file" name="banner_image" class="form-control form-control-lg d-none" id="bannerImg" required onchange="previewBannerImage(event)" />
                  </div>
                </div>
              </div>

              <!-- Save Button -->
              <div class="row">
                <div class="col-4 col-md-3"></div>
                <div class="col-12 col-md-9 form-button">
                  <a href="{{ route('blog.index') }}" role="button" class="btn form-cancel my-0">Cancel</a>
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
</script>
@endsection