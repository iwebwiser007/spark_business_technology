@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
  <!-- main data start here  -->
  <div class="main-data">
    <div class="container-fluid">
      <!-- dashboard head start here... -->
      <div class="dash-head d-flex justify-content-between">
        <div class="dash_title">
          <!-- dashboard banner title start here  -->
          <h2 class="main-title">Industry List</h2>
          <!-- dashboard banner title end here  -->
        </div>

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Industry List
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
              <h2>Industry List</h2>
              <a href="{{route('admin.industryAdd')}}" class="btn sub_btn">ADD</a>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form method="GET" action="{{ route('admin.industryList') }}" class="data-form">
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
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Button Link</th>
                    <th scope="col">Services</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($industries as $industry)
                  <!-- Industry-1 start here  -->
                  <tr>
                    <!-- Industry-1 image start here -->
                    <td class="list_img">
                      <div class="table_img">
                        <img
                          src="{{ asset('storage/app/public/industry/' . $industry->image) }}"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <!-- Industry-1 image end here  -->

                    <!-- Industry-1 title start here  -->
                    <td>
                      <p class="text-nowrap">{{$industry->title}}</p>
                    </td>
                    <!-- Industry-1 title end here  -->

                    <!-- Industry-1-1 Description start here  -->
                    <td class="banner_desc">
                      <p class="desc text-truncate">
                        {{$industry->description}}
                      </p>
                      <!-- Lorem ipsum dolor sit amet consectetur  adipisicing elit. Voluptatum, fugit! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quasi eligendi laboriosam, odio fuga repellendus quod cupiditate magnam ipsa nesciunt ad. -->
                    </td>
                    <!-- Industry-1-1 Description end here -->

                    <!-- Industry-1 button link start here -->
                    <td>
                      <p class="text-truncate">
                        {{$industry->slug}}
                      </p>
                    </td>
                    <!-- Industry-1 button link end here  -->

                    <!-- services area start here  -->
                    <td>
                      <p class="text-truncate">
                        {{$industry->service}}
                      </p>
                    </td>
                    <!-- services area end here  -->

                    <!-- Industry view, edit and delete button start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- Industry edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$industry->id}}"
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
                        <!-- Industry edit button end here  -->

                        <!-- Edit Modal start here  -->
                        <div class="modal fade" id="editModal-{{$industry->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered modal-lg"> <!-- Increased modal size here -->
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">
                                  Edit {{$industry->title}}
                                </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ route('admin.industryUpdate', $industry->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Industry Title, Service Title, Button Link in one row -->
                                    <div class="row form-group g-3">
                                      <div class="col-6">
                                        <label for="inputTitle" class="col-form-label form-label text-start d-block">Industry Title</label>
                                        <input type="text" id="inputTitle" name="title" class="form-control form-control-lg form-input" placeholder="Enter Title..." value="{{old('title' , $industry->title ?? '')}}" required />
                                      </div>

                                      <div class="col-6">
                                        <label for="inputService" class="col-form-label form-label text-start d-block">Service Title</label>
                                        <input type="text" id="inputService" name="service" class="form-control form-control-lg form-input" placeholder="Enter Service Title..." value="{{old('service' , $industry->service ?? '')}}" required />
                                      </div>
                                      </div>

                                      <div class="row form-group g-3">
                                      <div class="col-6">
                                        <label for="inputDescription" class="col-form-label form-label text-break text-start d-block">Description</label>
                                        <textarea class="form-control form-control-lg form-textbox" id="inputDescription" name="description" rows="4" placeholder="Write your banner description here..." required>{{old('description' , $industry->description ?? '')}}</textarea>
                                      </div>

                                      <div class="col-6">
                                        <label for="inputSlug" class="col-form-label form-label text-start d-block">Button Link</label>
                                        <input type="text" id="inputSlug" name="slug" class="form-control form-control-lg form-input" placeholder="Enter Link..." value="{{old('slug' , $industry->slug ?? '')}}" required />
                                      </div>
                                      </div>

                                      <div class="row form-group g-3">
                                      <div class="col-6">
                                        <label for="inputThumbnailImage" class="col-form-label form-label d-flex ">Image</label>
                                        <div class="form-group upload-input">
                                          <label for="thumbnailImg-{{$industry->id}}" class="form-label form-img-uploader rounded-2 d-flex align-items-center justify-content-center w-100 py-2">
                                            <div class="d-flex flex-column align-items-center">
                                              <span>
                                                <!-- Optionally, an SVG icon or placeholder icon can go here -->
                                              </span>
                                              <p id="thumbnailText-{{$industry->id}}" class="mb-0" style="display: none;">Upload Image</p>
                                            </div>
                                            <div id="thumbnailPreview-{{$industry->id}}" class="mt-1">
                                              <img id="previewThumbnailImg-{{$industry->id}}" src="{{ isset($industry) ? asset('storage/app/public/industry/' . $industry->image) : '' }}" alt="Thumbnail Image Preview" style="display: {{ isset($industry) ? 'block' : 'none' }}; width: 100%; max-width: 400px; height:279px; border-radius: 8px;" />
                                            </div>
                                          </label>
                                          <input type="file" name="image" class="form-control form-control-lg d-none" id="thumbnailImg-{{$industry->id}}" onchange="previewThumbnailImage(event , {{$industry->id}})" />
                                        </div>
                                      </div>
                                    </div>

                                    <!-- Cancel and Submit buttons -->
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

                        <!-- Edit modal end here  -->

                        <!-- Industry delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{$industry->id}}"
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
                        <!-- Industry delete button end here  -->

                        <!-- delete modal start here  -->
                        <div
                          class="modal fade"
                          id="deleteModal-{{$industry->id}}"
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
                                  Delete Industry
                                </h1>
                                <p class="pb-4">
                                  Are you sure you want to remove
                                  this Industry?
                                </p>

                                <!-- delete and cancel button start here  -->
                                <div>
                                  <form action="{{ route('admin.industryDelete' , $industry->id) }}" method="POST">
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
                    <!-- Industry view, edit and delete button end here  -->
                  </tr>
                  <!-- Industry-1 end here  -->

                  <!-- Industry-2 start here  -->
                  {{-- <tr>
                    <!-- Indusrty-2 image start here -->
                    <td class="list_img">
                      <div class="table_img">
                        <img
                          src="../assets/img/real_state.jpg"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <!-- Indusrty-2 image end here  -->

                    <!-- Indusrty-2 title start here  -->
                    <td>
                      <p class="text-nowrap">Real State</p>
                    </td>
                    <!-- Indusrty-2 title end here  -->

                    <!-- Industry-2 Description start here  -->
                    <td class="banner_desc">
                      <p class="desc text-truncate">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                      </p>
                    </td>
                    <!-- Industry-2 Description end here -->

                    <!-- Industry button link start here -->
                    <td>
                      <p class="text-truncate">
                        https://iwebwiser.com
                      </p>
                    </td>
                    <!-- Industry button link end here  -->

                    <!-- services area start here  -->
                    <td>
                      <p class="text-truncate">Web Development</p>
                    </td>
                    <!-- services area end here  -->

                    <!-- Industry-2 view, edit and delete button start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- Indusrty edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal1"
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
                        <!-- Indusrty edit button end here  -->

                        <!-- Edit Modal start here  -->
                        <div
                          class="modal fade"
                          id="editModal1"
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
                                  Edit Real State
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form">
                                    <!-- title  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  -->
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Industry Title
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Title..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- title input end here  -->
                                    </div>

                                    <!-- description  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- description label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Description</label>
                                      </div>
                                      <!-- description label end here  -->

                                      <!-- description textarea box start here  -->
                                      <div class="col-9">
                                        <div class="form-floating">
                                          <textarea
                                            class="form-control form-control-lg form-textbox"
                                            id="inputDescription"
                                            rows="4"
                                            cols="30"
                                            placeholder="write your banner description here..."></textarea>
                                          <label
                                            for="inputDescription">write your description
                                            here...</label>
                                        </div>
                                      </div>

                                      <!-- description textarea box end here  -->
                                    </div>

                                    <!-- Service  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  -->
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Service Title
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Service Title..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- title input end here  -->
                                    </div>

                                    <!-- Button Link area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- Button Link label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Button Link
                                        </label>
                                      </div>
                                      <!-- Button Link label end here  -->

                                      <!-- Button Link input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Link..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- Button Link input end here  -->
                                    </div>
                                    <!-- Button Link area end here  -->

                                    <!-- image  -->
                                    <div
                                      class="row form-group g-3 align-items-center mt-3">
                                      <!-- upload banner input area start here  -->
                                      <div class="col-12">
                                        <div
                                          class="form-group mb-20 upload-input">
                                          <label
                                            for="ImgUpload"
                                            class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative">
                                            <img
                                              src="../assets/img/real_state.jpg"
                                              class="img-fluid rounded-4"
                                              width="80%"
                                              alt="upload image" />
                                            <!-- close button start here  -->
                                            <button
                                              type="button"
                                              data-bs-dismiss="modal"
                                              class="btn-close position-absolute top-0 end-0 p-2"
                                              aria-label="Close"></button>
                                          </label>
                                        </div>
                                      </div>
                                      <!-- upload banner input area end here  -->
                                    </div>

                                    <!-- cancel and submit button  -->
                                    <div class="my-3">
                                      <button
                                        type="button"
                                        class="btn btn-secondary cancel_modal"
                                        data-bs-dismiss="modal">
                                        Close
                                      </button>
                                      <button
                                        type="button"
                                        class="btn add_modal">
                                        Add
                                      </button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Edit modal end here  -->

                        <!-- Indusrty delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal"
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
                        <!-- Indusrty delete button end here  -->
                      </div>
                    </td>
                    <!-- Industry-2 view, edit and delete button end here  -->
                  </tr>
                  <!-- Industry-2 end here  -->

                  <!-- Industry-3 start here  -->
                  <tr>
                    <!-- Indusrty-3 image start here -->
                    <td class="list_img">
                      <div class="table_img">
                        <img
                          src="../assets/img/Education.jpg"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <!-- Indusrty-3 image end here  -->

                    <!-- Indusrty-3 title start here  -->
                    <td>
                      <p class="text-nowrap">Education</p>
                    </td>
                    <!-- Indusrty-3 title end here  -->

                    <!-- Indusrty-3 Description start here  -->
                    <td class="banner_desc">
                      <p class="desc text-truncate">
                        Lorem ipsum dolor sit amet consectetur
                        adipisicing elit.
                      </p>
                    </td>
                    <!-- Indusrty-3 Description end here -->

                    <!-- Industru button link start here -->
                    <td>
                      <p class="text-truncate">
                        https://iwebwiser.com
                      </p>
                    </td>
                    <!-- Industru button link end here  -->

                    <!-- services area start here  -->
                    <td>
                      <p class="text-truncate">Digital Marketing</p>
                    </td>
                    <!-- services area end here  -->

                    <!-- Industru-3 view, edit and delete button start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- Industry edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal2"
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
                        <!-- Industry edit button end here  -->

                        <!-- Edit Modal start here  -->
                        <div
                          class="modal fade"
                          id="editModal2"
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
                                  Edit Education
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form">
                                    <!-- title  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  -->
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Industry Title
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Title..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- title input end here  -->
                                    </div>

                                    <!-- description  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- description label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Description</label>
                                      </div>
                                      <!-- description label end here  -->

                                      <!-- description textarea box start here  -->
                                      <div class="col-9">
                                        <div class="form-floating">
                                          <textarea
                                            class="form-control form-control-lg form-textbox"
                                            id="inputDescription"
                                            rows="4"
                                            cols="30"
                                            placeholder="write your banner description here..."></textarea>
                                          <label
                                            for="inputDescription">write your description
                                            here...</label>
                                        </div>
                                      </div>

                                      <!-- description textarea box end here  -->
                                    </div>

                                    <!-- Service  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  -->
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Service Title
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Service Title..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- title input end here  -->
                                    </div>

                                    <!-- Button Link area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- Button Link label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Button Link
                                        </label>
                                      </div>
                                      <!-- Button Link label end here  -->

                                      <!-- Button Link input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Link..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- Button Link input end here  -->
                                    </div>
                                    <!-- Button Link area end here  -->

                                    <!-- image  -->
                                    <div
                                      class="row form-group g-3 align-items-center mt-3">
                                      <!-- upload banner input area start here  -->
                                      <div class="col-12">
                                        <div
                                          class="form-group mb-20 upload-input">
                                          <label
                                            for="ImgUpload"
                                            class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative">
                                            <img
                                              src="../assets/img/Education.jpg"
                                              class="img-fluid rounded-4"
                                              width="80%"
                                              alt="upload image" />
                                            <!-- close button start here  -->
                                            <button
                                              type="button"
                                              data-bs-dismiss="modal"
                                              class="btn-close position-absolute top-0 end-0 p-2"
                                              aria-label="Close"></button>
                                          </label>
                                        </div>
                                      </div>
                                      <!-- upload banner input area end here  -->
                                    </div>

                                    <!-- cancel and submit button  -->
                                    <div class="my-3">
                                      <button
                                        type="button"
                                        class="btn btn-secondary cancel_modal"
                                        data-bs-dismiss="modal">
                                        Close
                                      </button>
                                      <button
                                        type="button"
                                        class="btn add_modal">
                                        Add
                                      </button>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- Edit modal end here  -->

                        <!-- Industry delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal"
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
                        <!-- Industry delete button end here  -->
                      </div>
                    </td>
                    <!-- Industru-3 view, edit and delete button end here  -->
                  </tr> --}}
                  <!-- Industry-3 end here  -->
                  @endforeach
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
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> -->


          <div class="card-footer">
            <!-- Pagination -->
            <p>Showing {{ $industries->firstItem() }} to {{ $industries->lastItem() }} of {{ $industries->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <!-- Check if the pagination has previous and next links -->
                  @if ($industries->onFirstPage())
                  <li class="page-item ">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $industries->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif

                  <!-- Loop through page numbers -->
                  @foreach ($industries->getUrlRange(1, $industries->lastPage()) as $page => $url)
                  <li class="page-item {{ $industries->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach

                  <!-- Check if the pagination has a next link -->
                  @if ($industries->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $industries->nextPageUrl() }}">Next</a>
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
  function previewThumbnailImage(event, industryId) {
    const preview = document.getElementById('previewThumbnailImg-' + industryId);
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      // Hide the placeholder text and icon, and display the image
      document.getElementById('thumbnailText-' + industryId).style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  function updatePagination() {
    const perPage = document.getElementById('perPage').value;
    window.location.href = `?perPage=${perPage}`;
  }
</script>
@endsection