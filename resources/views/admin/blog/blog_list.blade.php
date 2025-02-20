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
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash-head d-flex justify-content-between">
        <div class="dash_title">
          <h2 class="main-title">Blog List</h2>
        </div>

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>

          <li class="breadcrumb-item active" aria-current="page">
            Blog List
          </li>
        </ol>
      </div>
      @if (Session::has('success_message'))
      <!-- Check vendorRegister() method in Front/VendorController.php -->
      <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
        role="alert">
        <div>
          <strong>Success:</strong> {{ Session::get('success_message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

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
      <!-- dashboard-head end here... -->

      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Blog List</h2>
              <a href="{{url( 'admin/add-blog' )}}" class="btn sub_btn">ADD</a>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form method="GET" action="{{ route('admin.blogList') }}" class="data-form">
              <div class="form-group d-flex align-items-center">
                <select name="perPage" id="perPage" onchange="updatePagination()">
                  <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>Show 10</option>
                  <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>Show 20</option>
                  <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>Show 50</option>
                  <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>Show 100</option>
                </select>
                <span>
                  <input
                    type="search"
                    name="search"
                    id="searchInput"
                    class="form-control form-control-sm me-3"
                    placeholder="Search by title..."
                    value="{{ request()->query('search') }}" />
                </span>
                <button type="submit" class="btn sub_btn mb-2">Search</button>
              </div>
            </form>
            <!-- form end here  -->

            <!-- table content start here  -->
            <div class="table-content table-responsive">
              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                  <!-- blog-1 start here  -->
                  <tr>
                    <!-- blog-1 image start here -->
                    <td class="list_img">
                      <div class="table_img">
                        <img src="{{ asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) }}"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <!-- blog-1 image end here  -->

                    <!-- blog-1 title start here  -->
                    <td>
                      <p class="text-truncate">{{$blog->title}}</p>
                    </td>
                    <!-- blog-1 title end here  -->

                    <!-- blog-1 Description start here  -->
                    <td class="">
                      <p class="desc text-truncate">
                        {{$blog->description}}
                      </p>
                    </td>
                    <!-- blog-1 Description end here -->

                    <!-- Link start here  -->
                    <td>
                      <p class="text-truncate">{{$blog->slug}}</p>
                    </td>
                    <!-- link end here  -->

                    <!-- blog view, edit and delete button start here  -->
                    <td class="table_action">
                      <div class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- blog View button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-primary-subtle"
                          title="View"
                          data-bs-toggle="modal"
                          data-bs-target="#viewModal-{{$blog->id}}"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="#0029ff">
                            <path
                              d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z" />
                          </svg>
                        </a>
                        <!-- blog View button end here  -->

                        <!-- view Modal start here  -->
                        <!-- view Modal start here -->
                        <div class="modal fade" id="viewModal-{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">View Blog</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <!-- modal body start here -->
                              <div class="modal-body">
                                <span>
                                  <img src="{{ asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) }}" alt="image" class="img-fluid" />
                                  <h1 class="fs-5 p-2 mt-4">{{ $blog->title }}</h1>
                                  <p class="desc px-4">{{ $blog->description }}</p>
                                </span>
                                <button type="button" class="btn btn-secondary cancel_modal my-3" data-bs-dismiss="modal">Close</button>
                              </div>
                              <!-- modal body end here -->
                            </div>
                          </div>
                        </div>
                        <!-- view modal end here -->

                        <!-- view modal end here  -->

                        <!-- blog edit button start here  -->
                        <!-- blog edit button start here -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$blog->id}}"
                          title="Edit"><svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12" fill="rgb(25 135 84)">
                            <path d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z" />
                          </svg>
                        </a>
                        <!-- blog edit button end here -->

                        <!-- blog edit button end here  -->

                        <!-- Edit Modal start here  -->
                        <!-- Edit Modal start here --
                        <div class="modal fade" id="editModal-{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">Edit Blog-{{$blog->id}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form"
                                    action="{{  route('admin.blogUpdate', $blog->id)  }}"
                                    method="POST"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @if(isset($blog))
                                    @method('POST') <!-- for update -->
                        @endif

                        <!-- Blog Title --
                                    <div class="row form-group mt-1 mt-md-2">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBlogTitle" class="col-form-label form-label d-flex justify-content-left ">Blog Title</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <input type="text" name="title" id="inputBlogTitle" class="form-control form-control-lg form-input"
                                          placeholder="Enter Blog Title..."
                                          value="{{ old('title', $blog->title ?? '') }}" required />
                                      </div>
                                      <div class="col-1"></div>
                                    </div>

                                    <!-- Blog Description --
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBlogDescription" class="col-form-label form-label d-flex justify-content-left ">Blog Description</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <textarea class="form-control form-control-lg form-textbox" name="description" id="inputBlogDescription"
                                          rows="4" placeholder="Write your blog description here..." required>{{ old('description', $blog->description ?? '') }}</textarea>
                                      </div>
                                      <div class="col-1"></div>
                                    </div>

                                    <!-- Blog Link --
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBlogLink" class="col-form-label form-label d-flex justify-content-left ">Blog Link</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <input type="text" name="slug" id="inputBlogLink" class="form-control form-control-lg form-input"
                                          placeholder="Enter Blog Link..."
                                          value="{{ old('slug', $blog->slug ?? '') }}" required />
                                      </div>
                                      <div class="col-1"></div>
                                    </div>


                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="metaTags" class="col-form-label form-label d-flex justify-content-left ">Enter Metas (JSON Format)</label>
                                      </div>
                                      <div class="col-12 col-md-8">
                                        <textarea name="meta_tags" id="metaTags" class="form-control form-control-lg form-input" placeholder="Enter JSON formatted metas..." required rows="8" style="height: 250px;">{{ old('meta_tags', $blog->meta_tags ?? '') }}</textarea>
                                      </div>
                                      <div class="col-1"></div>
                                    </div>




                                    <!-- Blog Content -
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="html_content" class="col-form-label form-label d-flex justify-content-left ">Blog Content</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <textarea class="form-control ckeditor" id="html_content_{{ $blog->id }}" name="html_content" rows="10">{{ old('html_content', $blog->html_content ?? '') }}</textarea>
                                      </div>
                                      <div class="col-1"></div>
                                    </div>

                                    <script>
                                      CKEDITOR.replace('html_content_{{ $blog->id }}', {
                                        allowedContent: true,
                                      });
                                    </script>




                                    <!-- Thumbnail Image Upload (Edit Form) 
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputThumbnailImage" class="col-form-label form-label d-flex justify-content-left ">Upload Thumbnail Image</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <!-- <div class="form-group mb-20 upload-input">
                                          <label for="thumbnailImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                              <span>
                                                <!-- Optionally, an SVG icon or placeholder icon can go here 
                                              </span>
                                              <p id="thumbnailText" class="mb-0">Upload Thumbnail</p>
                                            </div>
                                          </label>
                                          <input type="file" name="thumbnail_image" class="form-control form-control-lg " id="thumbnailImg" onchange="previewThumbnailImage(event)" />
                                        </div> 
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

                                        <!-- Thumbnail Image Preview 
                                        <div id="thumbnailPreview" class="mt-3">
                                          <img id="previewThumbnailImg" src="{{ isset($blog) ? asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) : '' }}" alt="Thumbnail Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 200px; border-radius: 8px;" />
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Banner Image Upload (Edit Form) 
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBannerImage" class="col-form-label form-label d-flex justify-content-left ">Upload Banner Image</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <!-- <div class="form-group mb-20 upload-input">
                                          <label for="bannerImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                              <span>
                                                <!-- Optionally, an SVG icon or placeholder icon can go here 
                                              </span>
                                              <p id="bannerText" class="mb-0">Upload Banner</p>
                                            </div>
                                          </label>
                                          <input type="file" name="banner_image" class="form-control form-control-lg " id="bannerImg" onchange="previewBannerImage(event)" />
                                        </div> 
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

                                        <!-- Banner Image Preview 
                                        <div id="bannerPreview" class="mt-3">
                                          <img id="previewBannerImg" src="{{ isset($blog) ? asset('storage/app/public/images/banners/' . $blog->banner_image) : '' }}" alt="Banner Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 200px; border-radius: 8px;" />
                                        </div>
                                      </div>
                                    </div>


                                    <!-- Save Button 
                                    <div class="row">
                                      <div class="col-4 col-md-3"></div>
                                      <div class="col-12 col-md-9 form-button">
                                        <button type="button" class="btn btn-secondary cancel_modal my-3" data-bs-dismiss="modal">Cancel</button>

                                        <button type="submit" class="btn form-btn my-0">Update</button>
                                      </div>
                                    </div>
                                  </form>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Edit Modal end here -->




                        <!-- Edit Modal start here -->
                        <div class="modal fade" id="editModal-{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content p-3">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Blog-{{$blog->id}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ isset($blog) ? route('admin.blogUpdate', $blog->id) : route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(isset($blog))
                                    @method('POST') <!-- for update -->
                                    @endif

                                    <!-- Blog Title & Blog Link (Side by Side) -->
                                    <div class="row form-group g-4">
                                      <div class="col-md-6">
                                        <label for="inputBlogTitle" class="form-label text-start d-block">Blog Title</label>
                                        <input type="text" name="title" id="inputBlogTitle" class="form-control form-input" placeholder="Enter Blog Title..." value="{{ old('title', $blog->title ?? '') }}" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputBlogLink" class="form-label text-start d-block  ">Blog Link</label>
                                        <input type="text" name="slug" id="inputBlogLink" class="form-control form-input" placeholder="Enter Blog Link..." value="{{ old('slug', $blog->slug ?? '') }}" required>
                                      </div>
                                    </div>

                                    <!-- Blog Description & Metas (Side by Side) -->
                                    <div class="row form-group g-4 mt-3">
                                      <div class="col-md-6">
                                        <label for="inputBlogDescription" class="form-label text-start d-block ">Blog Description</label>
                                        <textarea class="form-control form-textbox" name="description" id="inputBlogDescription" rows="3" placeholder="Write your blog description here..." required>{{ old('description', $blog->description ?? '') }}</textarea>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="metaTags" class="form-label  text-start d-block   ">Enter Metas (JSON Format)</label>
                                        <textarea name="meta_tags" id="metaTags" class="form-control form-textbox" placeholder="Enter JSON formatted metas..." required rows="3">{{ old('meta_tags', $blog->meta_tags ?? '') }}</textarea>
                                      </div>
                                    </div>

                                    <!-- Blog Content -->
                                    <div class="row form-group  mt-3">
                                      <div class="col-12">
                                        <label for="html_content" class="form-label  text-start d-block    ">Blog Content</label>
                                        <textarea class="form-control ckeditor form-textbox" id="html_content_{{$blog->id}}" name="html_content" rows="6">{{ old('html_content', $blog->html_content ?? '') }}</textarea>
                                      </div>
                                    </div>

                                    <script>
                                      CKEDITOR.replace('html_content_{{ $blog->id }}', {
                                        allowedContent: true,
                                      });
                                    </script>

                                    <!-- image upload area start here  -->
                                    <div class="row form-group">

                                      <div class="col-12 col-md-6 ">
                                        <label for="inputBlogTitle" class="form-label text-start d-block">Upload Thumbnail Image</label>

                                        <div class="form-group upload-input">
                                          <label
                                            for="thumbnailImg-{{$blog->id}}"
                                            class=" form-img-uploader rounded-2 d-flex align-items-center justify-content-center w-100 py-2">
                                            <div
                                              class="d-flex flex-column align-items-center gap-3">

                                              <p id="thumbnailText-{{$blog->id}}" style="display: none;">Upload Image</p>
                                            </div>
                                            <div id="thumbnailPreview-{{$blog->id}}" class="">
                                              <img id="previewThumbnailImg-{{$blog->id}}" src="{{ isset($blog) ? asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) : '' }}" alt="Thumbnail Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 400px; height: 279px; border-radius: 8px;" />
                                            </div>
                                          </label>
                                          <input type="file" name="thumbnail_image" class="form-control form-control-lg d-none" id="thumbnailImg-{{$blog->id}}" onchange="previewThumbnailImage(event, {{$blog->id}})" />

                                        </div>
                                      </div>





                                      <!-- upload input area start here  -->
                                      <div class="col-12 col-md-6 mt-0">
                                        <label for="inputBlogTitle" class="form-label text-start d-block">Upload Banner Image</label>

                                        <div class="form-group mb-20 upload-input">
                                          <label
                                            for="bannerImg-{{$blog->id}}"
                                            class=" form-img-uploader rounded-2 d-flex align-items-center justify-content-center w-100 py-2">
                                            <div
                                              class="d-flex flex-column align-items-center gap-3">

                                              <p id="bannerText-{{$blog->id}}" style="display: none;">Upload Image</p>
                                            </div>
                                            <div id="bannerPreview-{{$blog->id}}" class="">
                                              <img id="previewBannerImg-{{$blog->id}}" src="{{ isset($blog) ? asset('storage/app/public/images/banners/' . $blog->banner_image) : '' }}" alt="Banner Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 400px; height:279px;
                                               border-radius: 8px;" />
                                            </div>
                                          </label>
                                          <input type="file" name="banner_image" class="form-control  d-none" id="bannerImg-{{$blog->id}}" onchange="previewBannerImage(event, {{$blog->id}})" />
                                        </div>
                                      </div>
                                      <!-- upload input area end here  -->



                                      <div class="col-1 d-none d-sm-block"></div>
                                    </div>
                                   
                                    <div class="row">
                                      <div class="col-4 col-md-3"></div>
                                      <div class="col-12 col-md-9 form-button">
                                        <button type="button" class="btn btn-secondary cancel_modal my-3" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn form-btn my-0">Update</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Edit Modal end here -->



























                        <!-- Edit modal end here  -->

                        <!-- blog delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{ $blog->id }}"
                          title="delete">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="#f70808">
                            <path
                              d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                          </svg>
                        </a>
                        <!-- blog delete button end here  -->

                        <!-- delete modal start here  -->
                        <div
                          class="modal fade"
                          id="deleteModal-{{ $blog->id }}"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div
                            class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <!-- close button start here  -->
                              <a
                                href="#"
                                role="button"
                                data-bs-dismiss="modal"
                                class="position-absolute end-0 p-2"
                                arial-label="close">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  height="24"
                                  viewBox="0 -960 960 960"
                                  width="24"
                                  fill="#5d6d7e">
                                  <path
                                    d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z" />
                                </svg>
                              </a>
                              <!-- close button end here  -->

                              <div class="modal-body my-3">
                                <span class="m-4">
                                  <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="30"
                                    viewBox="0 -960 960 960"
                                    width="30"
                                    fill="#dc3545">
                                    <path
                                      d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                                  </svg>
                                </span>
                                <h1
                                  class="modal-title mt-2"
                                  id="exampleModalLabel">
                                  Delete Blog
                                </h1>
                                <p class="pb-4">
                                  Are you sure you want to delete
                                  this Blog?
                                </p>

                                <!-- delete and cancel button start here  -->
                                <div>

                                  <form action="{{ route('admin.blogDelete' , $blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE') <!-- This is important to use the DELETE HTTP method -->
                                    <button type="button" class="btn btn-secondary cancel_modal" data-bs-dismiss="modal">
                                      Cancel
                                    </button>

                                    <button type="submit" class="btn btn-danger del_modal">
                                      Delete
                                    </button>
                                  </form>
                                </div>
                                <!-- delete and cancel button end here  -->
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- delete modal end here  -->
                      </div>
                    </td>
                  </tr>


                  @endforeach

                  <!-- blog-3 end here  -->
                </tbody>
              </table>
            </div>
            <!-- table content end here  -->
          </div>

          <!-- card body end here  -->

          <!-- card footer start here  -->
          <!-- <div class="card-footer">
            <p>Showing 1 to 10 of xyz entries</p>

            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item">
                    <a
                      class="page-link"
                      href="#"
                      aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                    </a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">1</a>
                  </li>
                   <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li> -->
          <!-- <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
          </ul>
          </nav>
        </div>
      </div>  -->

          <div class="card-footer">
            <!-- Pagination -->
            <p>Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <!-- Check if the pagination has previous and next links -->
                  @if ($blogs->onFirstPage())
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif

                  <!-- Loop through page numbers -->
                  @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                  <li class="page-item {{ $blogs->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach

                  <!-- Check if the pagination has a next link -->
                  @if ($blogs->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}">Next</a>
                  </li>
                  @else
                  <li class="page-item disabled">
                    <span class="page-link">Next</span>
                  </li>
                  @endif
                </ul>
              </nav>
            </div>
          </div>
          <!-- card footer end here  -->
        </div>
        <!-- card end here  -->
      </div>
    </div>
  </div>
  <!-- main data end here  -->
</div>


<script>
  // Preview Thumbnail Image for Edit Form
  function previewThumbnailImage(event, blogId) {
    const preview = document.getElementById('previewThumbnailImg-' + blogId);
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('thumbnailText-' + blogId).style.display = 'none';
    };
    reader.readAsDataURL(file);
  }


  // Preview Banner Image for Edit Form
  function previewBannerImage(event, blogId) {
    const preview = document.getElementById('previewBannerImg-' + blogId);
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('bannerText-' + blogId).style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  function updatePagination() {
    const perPage = document.getElementById('perPage').value;
    window.location.href = `?perPage=${perPage}`;
  }
</script>
@endsection