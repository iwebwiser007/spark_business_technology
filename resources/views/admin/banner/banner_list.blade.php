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
              <a href="{{route('add-edit-banner')}}" class="btn sub_btn">ADD</a>

              <!-- <a href=" {{route('add-edit-banner')}}  " ><button class="btn btn-primary rounded-circle d-flex align-items-center justify-content-center shadow-lg" style="width: 45px; height: 45px;">
    <i class="bi bi-plus-lg fs-5 text-white"></i>
</button></a>  -->



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

                        <div class="modal fade" id="editModal-{{$banner->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold text-start" id="exampleModalLabel">Edit Banner-{{$banner->id}}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <form class="upload-form" action="{{ isset($banner) ? route('banner.update', $banner->id) : route('banner.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if(isset($banner))
                        @method('POST')
                        @endif

                        <!-- Title & Button Link (Side by Side) -->
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputTitle" class="form-label fw-semibold text-start d-block">Banner Title</label>
                                <input type="text" id="inputTitle" name="title" class="form-control text-start" 
                                       placeholder="Enter Title..." 
                                       value="{{ old('title') }}" required />
                            </div>

                            <div class="col-md-6">
                                <label for="btnLink" class="form-label fw-semibold text-start d-block">Button Link</label>
                                <input type="text" id="btnLink" name="link" class="form-control text-start" 
                                       placeholder="Enter Button Link..." 
                                       value="{{ old('link') }}" required />
                            </div>
                        </div>
<!-- 
                        <!-- Description (Full Width) 
                        <div class="row g-3 mt-2">
                            <div class="col-md-12">
                                <label for="inputDescription" class="form-label fw-semibold text-start d-block">Description</label>
                                <textarea class="form-control text-start" id="inputDescription" name="description" rows="3" 
                                          placeholder="Write your description here..." required>{{ old('description') }}</textarea>
                            </div>
                        </div>

                        <!-- Image Upload (Side by Side) 
                        <div class="row g-3 mt-2 align-items-center">
                            <div class="col-md-6">
                                <label for="upload-photo" class="form-label fw-semibold text-start d-block">Upload Banner Image</label>
                                <input type="file" name="banner_image" id="upload-photo" class="form-control">
                            </div>
                            <div class="col-md-6 text-start">
                                <label class="form-label fw-semibold d-block">Banner Image Preview</label>
                                <div class="preview-box">
                                    <img id="previewBannerImg" src="#" alt="Banner Image Preview" class="img-fluid rounded shadow-sm" style="display: none;" />
                                </div>
                            </div>
                        </div> -->

 <!-- Description (Full width) -->
 <div class="row form-group mt-3">
                    <div class="col-md-6">
                        <label for="inputBannerDescription" class="form-label fw-semibold  text-start d-block   ">Banner Description</label>
                        <textarea class="form-control" id="inputBannerDescription" name="description" rows="3" placeholder="Write your description here..." data-parsley-required="true"></textarea>
                    </div>

                    
<!-- Image Upload -->
<div class="col-md-6">
        <label for="bannerImage" class="form-label fw-semibold  text-start d-block    ">Upload Banner Image</label>
        <div class="form-group mb-3 upload-input styled-box">
            <label for="bannerImage" class="form-label form-img-uploader d-flex align-items-center justify-content-center w-100 py-4 position-relative" style="cursor: pointer;">
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



                        <!-- Buttons -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" class="btn btn-secondary me-2 px-4 py-2" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary px-4 py-2">Update</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


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