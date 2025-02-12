@extends('components.admin.layouts')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@section('content')
<div class="main-right-container" id="main-right-container">
  <!-- main data start here  -->
  <div class="main-data">
    <div class="container-fluid">
      <!-- dashboard head start here... -->
      <div class="dash-head">
        <div class="dash_title">
          <!-- dashboard banner title start here  -->
          <h2 class="main-title">Banners List</h2>
          <!-- dashboard banner title end here  -->
        </div>

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb text-nowrap">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Banner List
          </li>
        </ol>
        <!-- add banner breadcrumb end here  -->
      </div>
      <!-- dashboard-head end here... -->

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

      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Banner List</h2>
              <!-- <a href="{{route('add-edit-banner')}}" class="btn sub_btn">ADD</a> -->

              <a href=" {{route('add-edit-banner')}}  " ><button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center shadow-lg" style="width: 45px; height: 45px;">
    <i class="bi bi-plus-lg fs-5 text-white"></i>
</button></a> 



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
                    <th scope="col">Button Link</th>
                    <th scope="col">Status</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($banners as $banner)
                  <tr>
                    <!-- banner-1 image start here -->
                    <td class="list_img">
                      <div class="table_img">
                        <img
                          src="{{ asset('http://localhost/spark_technology/storage/app/public/images/banner_images/' . $banner->banner_image) }}"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <!-- banner-1 image end here  -->

                    <!-- banner-1 title start here  -->
                    <td>
                      <p class="text-truncate">{{ $banner->title }}</p>
                    </td>
                    <!-- banner-1 title end here  -->

                    <!-- banner-1 Description start here  -->
                    <td>
                      <p class="desc text-truncate px-1">
                        {{ $banner->description }}
                      </p>
                    </td>
                    <!-- banner-1 Description end here -->

                    <!-- banner button link start here -->
                    <td>
                      <p class="text-truncate">
                        {{ $banner->link }}
                      </p>
                    </td>
                    <!-- banner button link end here  -->

                    <td class="table_status">
                      @if($banner->status == 1)
                      <span class="badge table_badge bg-success-subtle text-success rounded-pill" data-banner-id="{{ $banner->id }}" data-status="1">
                        Active
                      </span>
                      @elseif($banner->status == 0)
                      <span class="badge table_badge bg-danger-subtle text-danger rounded-pill" data-banner-id="{{ $banner->id }}" data-status="0">
                        Inactive
                      </span>
                      @endif
                    </td>

                    <!-- Modal for status confirmation -->
                    <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="statusModalLabel">Change Status</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                            Are you sure you want to change the status of this banner?
                          </div>
                          <div class="modal-footer">
                            <!-- Form dynamically updates action URL -->
                            <form id="statusChangeForm" method="POST">
                              @csrf
                              @method('POST')
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                              <button type="submit" class="btn btn-primary">Yes</button>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>




                    <!-- banner status end here  -->

                    <!-- banner-3 view, edit and delete button start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- banner View button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-primary-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#viewModal-{{$banner->id}}"
                          title="View"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="#0029ff">
                            <path
                              d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z" />
                          </svg>
                        </a>
                        <!-- banner View button end here  -->

                        <!-- banner view start here  -->
                        <div
                          class="modal fade"
                          id="viewModal-{{$banner->id}}"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div
                            class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title"
                                  id="exampleModalLabel">
                                  View Banner-{{$banner->id}}
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>

                              <!-- modal body start here  -->
                              <div class="modal-body">
                                <span>
                                  <img
                                    src="{{ asset('http://localhost/spark_technology/storage/app/public/images/banner_images/' . $banner->banner_image) }}"
                                    alt="image"
                                    class="img-fluid" />

                                  <h1 class="fs-5 p-2 mt-4">
                                    {{$banner->title}}
                                  </h1>
                                  <p class="desc px-4">
                                    {{$banner->description}}
                                  </p>
                                </span>
                                <button
                                  type="button"
                                  class="btn btn-secondary cancel_modal my-3"
                                  data-bs-dismiss="modal">
                                  Close
                                </button>
                              </div>
                              <!-- modal body end here  -->
                            </div>
                          </div>
                        </div>
                        <!-- banner view end here  -->

                        <!-- banner edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$banner->id}}"
                          title="Edit"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="rgb(25 135 84)">
                            <path
                              d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z" />
                          </svg>
                        </a>
                        <!-- banner edit button end here  -->

                        <!-- Edit Modal start here  -->
                        <div
                          class="modal fade"
                          id="editModal-{{$banner->id}}"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div
                            class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title"
                                  id="exampleModalLabel">
                                  Edit Banner-{{$banner->id}}
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ isset($banner) ? route('banner.update', $banner->id) : route('banner.store') }}"
                                    method="POST"
                                    enctype="multipart/form-data">

                                    @csrf
                                    @if(isset($blog))
                                    @method('POST') <!-- for update -->
                                    @endif
                                    <!-- title  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  -->
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Banner Title
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            name="title"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Title..."
                                            value="{{ old('title', $banner->title ?? '') }}" required />
                                        </div>
                                      </div>
                                      <!-- title input end here  -->
                                    </div>

                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- banner description label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Description</label>
                                      </div>
                                      <!-- banner description label end here  -->

                                      <!-- banner description textarea box start here  -->
                                      <div class="col-9">
                                        <textarea
                                          class="form-control form-control-lg form-textbox"
                                          id="inputDescription"
                                          name="description"
                                          rows="4"
                                          cols="30"
                                          placeholder="write your description here..."
                                          required>{{ old('description', $banner->description ?? '') }}</textarea>
                                      </div>

                                      <!-- banner description textarea box end here  -->
                                    </div>

                                    <div
                                      class="row form-group g-3 align-items-center mt-3">
                                      <!-- button link label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">Button Link
                                        </label>
                                      </div>
                                      <!-- button link label end here  -->

                                      <!-- button link input start here  -->
                                      <div class="col-9">
                                        <input
                                          type="text"
                                          id="inputTitle"
                                          name="link"
                                          class="form-control form-control-lg form-input"
                                          placeholder="Enter Button Link..."
                                          value="{{ old('link', $banner->link ?? '') }}"
                                          required />
                                      </div>
                                      <!-- button link input end here  -->
                                    </div>

                                    <!-- image  -->
                                    {{-- <div
                                      class="row form-group g-3 align-items-center mt-3">
                                      <!-- upload banner input area start here  -->
                                      <div class="col-12">
                                        <div
                                          class="form-group mb-20 upload-input">
                                          <label
                                            for="cateImg"
                                            class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div
                                              class="d-flex flex-column align-items-center gap-3">
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
                                                                enable-background: new
                                                                  0 0 512 512;
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
                                              <p class="mb-0">
                                                Upload Image / Icon
                                              </p>
                                            </div>
                                            <div
                                              class="upload-img d-none">
                                              <img
                                                src="../assets/img/login-left.jpg"
                                                class="rounded-4"
                                                alt="upload-img" />
                                            </div>
                                          </label>
                                          <input
                                            type="file"
                                            class="form-control form-control-lg d-none"
                                            id="cateImg"
                                            placeholder="Enter Category" />
                                        </div>
                                      </div>
                                      <!-- upload banner input area end here  -->
                                    </div> --}}

                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputBannerImage" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Upload Banner Image</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <div class="form-group mb-20 upload-input">
                                          <label for="bannerImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <!-- <div class="d-flex flex-column align-items-center gap-3">
                                              <span>
                                                <!-- Optionally, an SVG icon or placeholder icon can go here 
                                              </span>
                                              <p id="bannerText" class="mb-0">Upload Banner</p>
                                            </div> -->

 <div class="banner-image">
                                    <label for="upload-photo">
                                        <img src="" id="banner-image" class="img-fluid " alt="Profile">
                                    </label>
                                    <input type="file" id="upload-photo" class="d-none">
                                </div>



                                          </label>
                                          <!-- <input type="file" name="banner_image" class="form-control form-control-lg " id="bannerImg" onchange="previewBannerImage(event)" /> -->
                                        </div>

                                        <!-- Banner Image Preview -->
                                        <div id="bannerPreview" class="mt-3">
                                          <img id="previewBannerImg" src="{{  asset('http://localhost/spark_technology/storage/app/public/images/banner_images/' . $banner->banner_image) }}" alt="Banner Image Preview" style="display: {{ isset($banner) ? 'block' : 'none' }}; width: 100%; max-width: 200px; border-radius: 8px;" />
                                        </div>
                                      </div>
                                    </div>



                                    <div class="my-3 form-button">
                                      <button
                                        type="button"
                                        class="btn btn-secondary cancel_modal"
                                        data-bs-dismiss="modal">
                                        Close
                                      </button>
                                      <button type="submit" class="btn form-btn my-0">Update</button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Edit modal end here  -->

                        <!-- banner delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{ $banner->id }}"
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
                        <!-- banner delete button end here  -->

                        <!-- delete modal start here  -->
                        <div
                          class="modal fade"
                          id="deleteModal-{{$banner->id}}"
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
                                  Delete Banner
                                </h1>
                                <p class="pb-4">
                                  Are you sure you want to delete
                                  this Banner?
                                </p>

                                <!-- delete and cancel button start here  -->
                                <div>
                                  <form action="{{ route('banner.delete' , $banner->id) }}" method="POST">
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
                    <!-- banner-3 view, edit and delete button end here  -->
                  </tr>
                  @endforeach
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
  function previewBannerImage(event) {
    const preview = document.getElementById('previewBannerImg');
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      document.getElementById('bannerText').style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  $(document).ready(function() {
    $('.badge').on('click', function() {
      var bannerId = $(this).data('banner-id');
      var currentStatus = $(this).data('status');
      $('#statusModal').data('banner-id', bannerId);
      $('#statusModal').data('current-status', currentStatus);
      var formAction = "/spark_technology/public/admin/update-banner-status/" + bannerId;
      $('#statusChangeForm').attr('action', formAction);
      var statusModal = new bootstrap.Modal(document.getElementById('statusModal'));
      statusModal.show();
    });
  });
</script>
@endsection