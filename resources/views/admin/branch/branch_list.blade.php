@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
  <!-- main data start here  -->
  <div class="main-data">
    <div class="container-fluid">
      <!-- dashboard-head start here... -->
      <div class="dash-head d-flex justify-content-between">
        <div class="dash_title">
          <!-- dashboard banner title start here  -->
          <h2 class="main-title">Branch List</h2>
          <!-- dashboard banner title end here  -->
        </div>

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <!-- <li class="breadcrumb-item">
                        <a href="#">Branch</a>
                      </li> -->
          <li class="breadcrumb-item active" aria-current="page">
            Branch List
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

      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Branch List</h2>
              <a href="{{route('admin.branchAdd')}}" class="btn sub_btn">ADD</a>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form method="GET" action="{{ route('admin.branchList') }}" class="data-form">
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
                    <th scope="col">Title</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">State/Province</th>
                    <th scope="col">Zip-code</th>
                    <th scope="col">Country</th>
                    <th scope="col">Page Select</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($branches as $branch)
                  <!-- branch-1 start here  -->
                  <tr>
                    <!-- branch-1 title start here  -->
                    <td>
                      <p class="text-nowrap">{{$branch->title}}</p>
                    </td>
                    <!-- branch-1 title end here  -->

                    <!-- Adress area start here  -->
                    <td>
                      <p class="text-truncate">
                        {{$branch->address}}
                      </p>
                    </td>
                    <!-- Adress area end here  -->

                    <!-- City area start here  -->
                    <td>
                      <p>{{$branch->city}}</p>
                    </td>
                    <!-- City area end here  -->

                    <!-- State area start here  -->
                    <td>
                      <p>{{$branch->state}}</p>
                    </td>
                    <!-- State area end here  -->

                    <!-- Zip-code area start here  -->
                    <td>
                      <p>{{$branch->zip_code}}</p>
                    </td>
                    <!-- Zip-code area end here  -->

                    <!-- country area start here  -->
                    <td>
                      <p>{{$branch->country}}</p>
                    </td>
                    <!-- country area end here  -->

                    <!-- Page Select start here  -->
                    <td>
                      <p>{{$branch->page}}</p>
                    </td>
                    <!-- Page Select End here  -->

                    <!-- branch edit and delete icon start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- branch edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$branch->id}}"
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
                        <!-- branch edit button end here  -->

                        <!-- Edit Modal start here  -->
                        <div
                          class="modal fade"
                          id="editModal-{{$branch->id}}"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div
                            class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title"
                                  id="exampleModalLabel">
                                  Edit Branch-{{$branch->id}}
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ route('admin.branchUpdate', $branch->id) }}" method="POST">
                                    @csrf

                                    <!-- Title and Address in one row (col-6 each) -->
                                    <div class="row form-group g-3">
                                      <!-- Title Input -->
                                      <div class="col-6">
                                        <label for="inputTitle" class="col-form-label form-label text-start d-block">Branch Title</label>
                                        <input
                                          type="text"
                                          id="inputTitle"
                                          name="title"
                                          class="form-control form-control-lg form-input"
                                          placeholder="Enter Title..."
                                          value="{{old('title' , $branch->title ?? '')}}"
                                          required />
                                      </div>

                                      <!-- Address Input -->
                                      <div class="col-6">
                                        <label for="inputlocation" class="col-form-label form-label text-start d-block">Address</label>
                                        <input
                                          type="text"
                                          id="inputlocation"
                                          name="address"
                                          class="form-control form-control-lg form-input"
                                          placeholder="Enter Address..."
                                          value="{{old('address' , $branch->address ?? '')}}"
                                          required />
                                      </div>
                                    </div>

                                    <!-- City and State in one row (col-6 each) -->
                                    <div class="row form-group">
                                      <!-- City Input -->
                                      <div class="col-6">
                                        <label for="inputCity" class="col-form-label form-label text-start d-block">City</label>
                                        <input
                                          type="text"
                                          id="inputCity"
                                          name="city"
                                          class="form-control form-control-lg form-input"
                                          placeholder="Enter City..."
                                          value="{{old('city' , $branch->city ?? '')}}"
                                          required />
                                      </div>

                                      <!-- State Input -->
                                      <div class="col-6">
                                        <label for="inputState" class="col-form-label form-label text-start d-block">State</label>
                                        <input
                                          type="text"
                                          id="inputState"
                                          name="state"
                                          class="form-control form-control-lg form-input"
                                          placeholder="Enter State/Province..."
                                          value="{{old('state' , $branch->state ?? '')}}"
                                          required />
                                      </div>
                                    </div>

                                    <!-- Zip-code and Country in one row (col-6 each) -->
                                    <div class="row form-group ">
                                      <!-- Zip-code Input -->
                                      <div class="col-6">
                                        <label for="inputZip" class="col-form-label form-label text-start d-block">Zip-Code</label>
                                        <input
                                          type="text"
                                          id="inputZip"
                                          name="zip_code"
                                          class="form-control form-control-lg form-input"
                                          placeholder="Enter Zip-code..."
                                          value="{{old('zip_code' , $branch->zip_code ?? '')}}"
                                          required />
                                      </div>

                                      <!-- Country Select -->
                                      <div class="col-6">
                                        <label for="country" class="col-form-label form-label text-start d-block">Country</label>
                                        <select id="country" name="country" class="form-control form-control-lg form-input" required>
                                          <option value="">Select Country</option>
                                          @foreach ($countries as $country)
                                          <option value="{{ $country->country_name }}" {{ old('country', $branch->country ?? '') == $country->country_name ? 'selected' : '' }}>
                                            {{ $country->country_name }}
                                          </option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>

                                    <!-- Page Select -->
                                    <div class="row form-group">
                                      <div class="col-6">
                                        <label for="pageSelect" class="col-form-label form-label text-start d-block">Page Select</label>
                                        <select
                                          id="pageSelect"
                                          name="pageSelect"
                                          class="form-control form-control-lg form-input "
                                          required>
                                          <option value="">Select Page</option>
                                          <option value="Global" {{ old('pageSelect', $branch->page ?? '') == 'Global' ? 'selected' : '' }}>Global</option>
                                          <option value="Local" {{ old('pageSelect', $branch->page ?? '') == 'Local' ? 'selected' : '' }}>Local</option>
                                        </select>
                                      </div>
                                    </div>

                                    <!-- Action Buttons -->
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

                        <!-- branch delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{$branch->id}}"
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
                        <!-- branch delete button end here  -->

                        <!-- delete modal start here  -->
                        <div
                          class="modal fade"
                          id="deleteModal-{{$branch->id}}"
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
                                  Delete Branch
                                </h1>
                                <p class="pb-4">
                                  Are you sure you want to remove
                                  this Branch?
                                </p>

                                <!-- delete and cancel button start here  -->
                                <div>
                                  <form action="{{ route('admin.branchDelete' , $branch->id) }}" method="POST">
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
                    <!-- branch edit and delete icon end here  -->
                  </tr>
                  <!-- branch-1 end here  -->

                  <!-- branch-2 start here  -->
                  {{-- <tr>
                    <!-- branch-2 title start here  -->
                    <td>
                      <p class="text-nowrap">iWebWiser Pvt. Ltd.</p>
                    </td>
                    <!-- branch-2 title end here  -->

                    <!-- Adress area start here  -->
                    <td>
                      <p class="text-truncate">
                        1-B-10 First Floor, Pawan Puri South
                      </p>
                    </td>
                    <!-- Adress area end here  -->

                    <!-- City area start here  -->
                    <td>
                      <p>Bikaner</p>
                    </td>
                    <!-- City area end here  -->

                    <!-- State area start here  -->
                    <td>
                      <p>Rajasthan</p>
                    </td>
                    <!-- State area end here  -->

                    <!-- Zip-code area start here  -->
                    <td>
                      <p>334001</p>
                    </td>
                    <!-- Zip-code area end here  -->

                    <!-- country area start here  -->
                    <td>
                      <p>India</p>
                    </td>
                    <!-- country area end here  -->

                    <!-- Page Select start here  -->
                    <td>
                      <p>Local</p>
                    </td>
                    <!-- Page Select End here  -->

                    <!-- branch-2 edit and delete button start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- branch edit button start here  -->
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
                        <!-- branch edit button end here  -->

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
                                  Edit Branch-2
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
                                    <!-- title area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- <div class="col-1"></div> -->
                                      <!-- title label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Branch Title
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
                                    <!-- title area end here  -->

                                    <!-- Address area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- <div class="col-1"></div> -->
                                      <!-- Address label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">Address
                                        </label>
                                      </div>
                                      <!-- Address label end here  -->

                                      <!-- Address input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Address..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- Address input end here  -->
                                    </div>
                                    <!-- Address area end here  -->

                                    <!-- City area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- City label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">City
                                        </label>
                                      </div>
                                      <!-- City label end here  -->

                                      <!-- City input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter City..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- City input end here  -->
                                    </div>
                                    <!-- City area end here  -->

                                    <!-- State area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- location label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">State/Province
                                        </label>
                                      </div>
                                      <!-- Location label end here  -->

                                      <!-- location input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter State/Province..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- location input end here  -->
                                    </div>
                                    <!-- State area end here  -->

                                    <!-- Zip-code area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- Zip-code label start here  -->
                                      <div
                                        class="col-3 d-flex align-items-center justify-content-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">Zip-Code
                                        </label>
                                      </div>
                                      <!-- Zip-code label end here  -->

                                      <!-- Zip-code input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter zip-code..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- Zip-code input end here  -->
                                    </div>
                                    <!-- Zip-code area end here  -->

                                    <!-- Country area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- banner description label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Country</label>
                                      </div>
                                      <!-- banner description label end here  -->

                                      <!-- banner description textarea box start here  -->
                                      <div class="col-9">
                                        <select
                                          id="country"
                                          name="country"
                                          class="form-control form-control-lg form-input">
                                          <option id="place">
                                            Select Country
                                          </option>
                                          <option value="Australia">
                                            Australia
                                          </option>
                                          <option value="Canada">
                                            Canada
                                          </option>
                                          <option value="India">
                                            India
                                          </option>
                                          <option value="Indonesia">
                                            Indonesia
                                          </option>
                                          <option value="USA">
                                            USA
                                          </option>
                                        </select>
                                      </div>

                                      <!-- banner description textarea box end here  -->
                                    </div>
                                    <!-- Country area end here  -->

                                    <!-- Page select start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center mt-2">
                                      <!-- Page Select label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Page Select</label>
                                      </div>
                                      <!-- Page Select label end here  -->

                                      <!-- Page Select input start here  -->
                                      <div class="col-9">
                                        <select
                                          id="country"
                                          name="country"
                                          class="form-control form-control-lg form-input">
                                          <option id="place">
                                            Select Page
                                          </option>
                                          <option value="Global">
                                            Global
                                          </option>
                                          <option value="Local">
                                            Local
                                          </option>
                                        </select>
                                      </div>

                                      <!-- Page Select input end here  -->
                                    </div>
                                    <!-- Page select end here  -->

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

                        <!-- branch delete button start here  -->
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
                        <!-- branch delete button end here  -->
                      </div>
                    </td>
                    <!-- branch-2 edit and delete button end here  -->
                  </tr>
                  <!-- branch-2 end here  -->

                  <!-- branch-3 start here  -->
                  <tr>
                    <!-- branch-3 title start here  -->
                    <td>
                      <p class="text-nowrap">iWebWiser Pvt. Ltd.</p>
                    </td>
                    <!-- branch-3 title end here  -->

                    <!-- Adress area start here  -->
                    <td>
                      <p class="text-truncate">
                        3rd Floor, Plot No. 359, PU4
                      </p>
                    </td>
                    <!-- Adress area end here  -->

                    <!-- City area start here  -->
                    <td>
                      <p>Indore</p>
                    </td>
                    <!-- City area end here  -->

                    <!-- State area start here  -->
                    <td>
                      <p>Madhya Pradesh</p>
                    </td>
                    <!-- State area end here  -->

                    <!-- Zip-code area start here  -->
                    <td>
                      <p>453551</p>
                    </td>
                    <!-- Zip-code area end here  -->

                    <!-- contry area start here  -->
                    <td>
                      <p>India</p>
                    </td>
                    <!-- country area end here  -->

                    <!-- Page Select start here  -->
                    <td>
                      <p>Local</p>
                    </td>
                    <!-- Page Select End here  -->

                    <!-- branch edit and delete icon start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- branch edit button start here  -->
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
                        <!-- branch edit button end here  -->

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
                                  Edit Branch-3
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
                                    <!-- title area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- <div class="col-1"></div> -->
                                      <!-- title label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Branch Title
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
                                    <!-- title area end here  -->

                                    <!-- Address area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- <div class="col-1"></div> -->
                                      <!-- Address label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">Address
                                        </label>
                                      </div>
                                      <!-- Address label end here  -->

                                      <!-- Address input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Address..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- Address input end here  -->
                                    </div>
                                    <!-- Address area end here  -->

                                    <!-- City area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- City label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">City
                                        </label>
                                      </div>
                                      <!-- City label end here  -->

                                      <!-- City input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter City..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- City input end here  -->
                                    </div>
                                    <!-- City area end here  -->

                                    <!-- State area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- location label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">State/Province
                                        </label>
                                      </div>
                                      <!-- Location label end here  -->

                                      <!-- location input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter State/Province..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- location input end here  -->
                                    </div>
                                    <!-- State area end here  -->

                                    <!-- Zip-code area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- Zip-code label start here  -->
                                      <div
                                        class="col-3 d-flex align-items-center justify-content-center">
                                        <label
                                          for="btnLink"
                                          class="col-form-label form-label">Zip-Code
                                        </label>
                                      </div>
                                      <!-- Zip-code label end here  -->

                                      <!-- Zip-code input start here  -->
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputlocation"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter zip-code..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- Zip-code input end here  -->
                                    </div>
                                    <!-- Zip-code area end here  -->

                                    <!-- Country area start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- banner description label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Country</label>
                                      </div>
                                      <!-- banner description label end here  -->

                                      <!-- banner description textarea box start here  -->
                                      <div class="col-9">
                                        <select
                                          id="country"
                                          name="country"
                                          class="form-control form-control-lg form-input">
                                          <option id="place">
                                            Select Country
                                          </option>
                                          <option value="Australia">
                                            Australia
                                          </option>
                                          <option value="Canada">
                                            Canada
                                          </option>
                                          <option value="India">
                                            India
                                          </option>
                                          <option value="Indonesia">
                                            Indonesia
                                          </option>
                                          <option value="USA">
                                            USA
                                          </option>
                                        </select>
                                      </div>

                                      <!-- banner description textarea box end here  -->
                                    </div>
                                    <!-- Country area end here  -->

                                    <!-- Page select start here  -->
                                    <div
                                      class="row form-group g-3 align-items-center mt-2">
                                      <!-- Page Select label start here  -->
                                      <div
                                        class="col-3 d-flex justify-content-center align-items-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Page Select</label>
                                      </div>
                                      <!-- Page Select label end here  -->

                                      <!-- Page Select input start here  -->
                                      <div class="col-9">
                                        <select
                                          id="country"
                                          name="country"
                                          class="form-control form-control-lg form-input">
                                          <option id="place">
                                            Select Page
                                          </option>
                                          <option value="Global">
                                            Global
                                          </option>
                                          <option value="Local">
                                            Local
                                          </option>
                                        </select>
                                      </div>

                                      <!-- Page Select input end here  -->
                                    </div>
                                    <!-- Page select end here  -->

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

                        <!-- branch delete button start here  -->
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
                        <!-- branch delete button end here  -->
                      </div>
                    </td>
                    <!-- branch edit and delete icon end here  -->
                  </tr> --}}
                  <!-- branch-3 end here  -->
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
            <p>Showing {{ $branches->firstItem() }} to {{ $branches->lastItem() }} of {{ $branches->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <!-- Check if the pagination has previous and next links -->
                  @if ($branches->onFirstPage())
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $branches->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif

                  <!-- Loop through page numbers -->
                  @foreach ($branches->getUrlRange(1, $branches->lastPage()) as $page => $url)
                  <li class="page-item {{ $branches->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach

                  <!-- Check if the pagination has a next link -->
                  @if ($branches->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $branches->nextPageUrl() }}">Next</a>
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
  function updatePagination() {
    const perPage = document.getElementById('perPage').value;
    window.location.href = `?perPage=${perPage}`;
  }
</script>
@endsection