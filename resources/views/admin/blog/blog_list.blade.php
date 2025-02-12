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
      <!-- dashboard head start here... -->
      <div class="dash-head d-flex justify-content-between">
        <div class="dash_title">
          <!-- dashboard banner title start here  -->
          <h2 class="main-title">Blog List</h2>
          <!-- dashboard banner title end here  -->
        </div>

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <!-- <li class="breadcrumb-item">
                        <a href="#">Blog</a>
                      </li> -->
          <li class="breadcrumb-item active" aria-current="page">
            Blog List
          </li>
        </ol>
        <!-- add banner breadcrumb end here  -->
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
      <!-- dashboard-head end here... -->

      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Blog List</h2>
              <a href="{{url( 'admin/add-edit-blog' )}}" class="btn sub_btn">ADD</a>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form class="data-form">
              <div class="form-group">
                <select name="cars" id="cars">
                  <option value="volvo">Show 10</option>
                  <option value="saab">Show 20</option>
                  <option value="mercedes">shop 50</option>
                </select>
                <span>
                  <input
                    type="search"
                    placeholder="search..."
                    class="d-none d-sm-block" />
                </span>
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
                        <img src="{{ asset('http://localhost/spark_technology/storage/app/public/images/thumbnails/' . $blog->thumbnail_image) }}"
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
                    <td class="banner_desc">
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
                                  <img src="{{ asset('http://localhost/spark_technology/storage/app/public/images/thumbnails/' . $blog->thumbnail_image) }}" alt="image" class="img-fluid" />
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
                        <!-- Edit Modal start here -->
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
                                    action="{{ isset($blog) ? route('blog.update', $blog->id) : route('blog.store') }}"
                                    method="POST"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @if(isset($blog))
                                    @method('POST') <!-- for update -->
                                    @endif

                                    <!-- Blog Title -->
                                    <div class="row form-group mt-1 mt-md-2">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBlogTitle" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Blog Title</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <input type="text" name="title" id="inputBlogTitle" class="form-control form-control-lg form-input"
                                          placeholder="Enter Blog Title..."
                                          value="{{ old('title', $blog->title ?? '') }}" required />
                                      </div>
                                      <div class="col-1"></div>
                                    </div>

                                    <!-- Blog Description -->
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBlogDescription" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Blog Description</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <textarea class="form-control form-control-lg form-textbox" name="description" id="inputBlogDescription"
                                          rows="4" placeholder="Write your blog description here..." required>{{ old('description', $blog->description ?? '') }}</textarea>
                                      </div>
                                      <div class="col-1"></div>
                                    </div>

                                    <!-- Blog Link -->
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBlogLink" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Blog Link</label>
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
                                        <label for="metaTags" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Enter Metas (JSON Format)</label>
                                      </div>
                                      <div class="col-12 col-md-8">
                                        <textarea name="meta_tags" id="metaTags" class="form-control form-control-lg form-input" placeholder="Enter JSON formatted metas..." required rows="8" style="height: 250px;">{{ old('meta_tags', $blog->meta_tags ?? '') }}</textarea>
                                      </div>
                                      <div class="col-1"></div>
                                    </div>




                                    <!-- Blog Content -->
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="html_content" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Blog Content</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="10">{{ old('html_content', $blog->html_content ?? '') }}</textarea>
                                      </div>
                                      <div class="col-1"></div>
                                    </div>




                                    <!-- Thumbnail Image Upload (Edit Form) -->
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputThumbnailImage" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Upload Thumbnail Image</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <div class="form-group mb-20 upload-input">
                                          <label for="thumbnailImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                              <span>
                                                <!-- Optionally, an SVG icon or placeholder icon can go here -->
                                              </span>
                                              <p id="thumbnailText" class="mb-0">Upload Thumbnail</p>
                                            </div>
                                          </label>
                                          <input type="file" name="thumbnail_image" class="form-control form-control-lg " id="thumbnailImg" onchange="previewThumbnailImage(event)" />
                                        </div>

                                        <!-- Thumbnail Image Preview -->
                                        <div id="thumbnailPreview" class="mt-3">
                                          <img id="previewThumbnailImg" src="{{ isset($blog) ? asset('http://localhost/spark_technology/storage/app/public/images/thumbnails/' . $blog->thumbnail_image) : '' }}" alt="Thumbnail Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 200px; border-radius: 8px;" />
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Banner Image Upload (Edit Form) -->
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBannerImage" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Upload Banner Image</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <div class="form-group mb-20 upload-input">
                                          <label for="bannerImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                              <span>
                                                <!-- Optionally, an SVG icon or placeholder icon can go here -->
                                              </span>
                                              <p id="bannerText" class="mb-0">Upload Banner</p>
                                            </div>
                                          </label>
                                          <input type="file" name="banner_image" class="form-control form-control-lg " id="bannerImg" onchange="previewBannerImage(event)" />
                                        </div>

                                        <!-- Banner Image Preview -->
                                        <div id="bannerPreview" class="mt-3">
                                          <img id="previewBannerImg" src="{{ isset($blog) ? asset('http://localhost/spark_technology/storage/app/public/images/banners/' . $blog->banner_image) : '' }}" alt="Banner Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 200px; border-radius: 8px;" />
                                        </div>
                                      </div>
                                    </div>


                                    <!-- Save Button -->
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

                                  <form action="{{ route('blog.delete' , $blog->id) }}" method="POST">
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
          <div class="card-footer">
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
                  <!-- <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li> -->
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
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
  function previewThumbnailImage(event) {
    const preview = document.getElementById('previewThumbnailImg');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('thumbnailText').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  // Preview Banner Image for Edit Form
  function previewBannerImage(event) {
    const preview = document.getElementById('previewBannerImg');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('bannerText').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }
</script>

@endsection