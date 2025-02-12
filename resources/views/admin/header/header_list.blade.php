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
          <h2 class="main-title">Heading List</h2>
          <!-- dashboard banner title end here  -->
        </div>

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <!-- <li class="breadcrumb-item">
                        <a href="#">Header</a>
                      </li> -->
          <li class="breadcrumb-item active" aria-current="page">
            Header List
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
              <h2>Header List</h2>
              <a href="{{route('add-edit-header')}}" class="btn sub_btn">ADD</a>
            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form class="data-form">
              <div class="form-group">
                <select name="perPage" id="perPage" onchange="updatePagination()">
                  <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>Show 10</option>
                  <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>Show 20</option>
                  <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>Show 50</option>
                  <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>Show 100</option>
                </select>
                <span>
                  <input
                    type="search"
                    class="form-control"
                    placeholder="search..."
                    class="d-none d-sm-block" />
                </span>
              </div>
            </form>
            <!-- form end here  -->

            <!-- table content start here  -->
            <div class="table-content table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <!-- <th scope="col"></th> -->
                    <th scope="col">Title</th>  
                    <th scope="col">Link</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach ($headers as $header)
                  <tr>
                    <td class="table_title">{{$header->title}}</td>
                    <td class="heading_link">
                      <p class="text-truncate">{{$header->link}}</p>
                    </td>
                    <td class="table_action">
                      <div class="d-inline-flex justify-content-center align-items-center gap-3">

                        <!-- Edit button -->
                        <a href="#" role="button" class="btn text-decoration-none table_edit bg-info-subtle" data-bs-toggle="modal" data-bs-target="#editHeaderModal-{{$header->id}}" title="Edit">
                          <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12" fill="rgb(25 135 84)">
                            <path d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z" />
                          </svg>
                        </a>

                        <div class="modal fade" id="editHeaderModal-{{$header->id}}" tabindex="-1" aria-labelledby="editHeaderModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title" id="editHeaderModalLabel">Edit Header - {{$header->id}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ isset($header) ? route('header.update', $header->id) : route('header.store') }}" method="POST">
                                    @csrf
                                    @if(isset($header))
                                    @method('POST') <!-- for store -->
                                    @endif

                                    <!-- Header Title -->
                                    <div class="row form-group mt-1 mt-md-2">
                                      <div class="col-12 col-md-3">
                                        <label for="inputHeaderTitle" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Header Title</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <input type="text" name="title" id="inputHeaderTitle" class="form-control form-control-lg form-input"
                                          placeholder="Enter Header Title..." value="{{ old('title', $header->title ?? '') }}" required />
                                      </div>
                                    </div>

                                    <!-- Header Link -->
                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputHeaderLink" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Header Link</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <input type="text" name="link" id="inputHeaderLink" class="form-control form-control-lg form-input"
                                          placeholder="Enter Header Link..." value="{{ old('link', $header->link ?? '') }}" required />
                                      </div>
                                    </div>



                                    <!-- Save Button -->
                                    <div class="row">
                                      <div class="col-4 col-md-3"></div>
                                      <div class="col-12 col-md-9 form-button">
                                        <button type="button" class="btn btn-secondary cancel_modal my-3" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn form-btn my-0">Save Changes</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>


                        <!-- Delete button -->
                        <a href="#" role="button" class="btn text-decoration-none table_del bg-danger-subtle" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $header->id }}" title="Delete">
                          <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12" fill="#f70808">
                            <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                          </svg>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal-{{ $header->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <!-- Close button -->
                              <a href="#" role="button" data-bs-dismiss="modal" class="position-absolute end-0 p-2" arial-label="close">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24" fill="#5d6d7e">
                                  <path d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z" />
                                </svg>
                              </a>

                              <div class="modal-body my-3">
                                <span class="m-4">
                                  <svg xmlns="http://www.w3.org/2000/svg" height="30" viewBox="0 -960 960 960" width="30" fill="#dc3545">
                                    <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                                  </svg>
                                </span>
                                <h1 class="modal-title mt-2" id="exampleModalLabel">Delete Header</h1>
                                <p class="pb-4">Are you sure you want to delete this Header?</p>

                                <!-- Delete and cancel buttons -->
                                <div>
                                  <form action="{{ route('header.delete', $header->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE') <!-- DELETE HTTP method -->
                                    <button type="button" class="btn btn-secondary cancel_modal" data-bs-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-danger del_modal">Delete</button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                      </div>
                    </td>
                  </tr>
                  @endforeach


                  <!-- home start here  -->
                  {{-- <tr>
                    <!-- Home title start here  -->
                    <td class="table_title">
                      <a
                        href="#"
                        role="button"
                        class="btn gap-5 tab_title text-nowrap"
                        title="add Subheading"
                        id="add_subheading">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="invisible"
                          height="12"
                          viewBox="0 -960 960 960"
                          width="12"
                          fill="#000000">
                          <path
                            d="M630-444H192v-72h438L429-717l51-51 288 288-288 288-51-51 201-201Z" />
                        </svg>
                        Home
                      </a>
                    </td>
                    <!-- Home title end here  -->

                    <!-- heading-2 link start here -->
                    <td class="heading_link">
                      <p class="text-truncate">
                        https://iWebwiser.com
                      </p>
                    </td>
                    <!-- heading-2 link end here  -->

                    <!-- headig operations start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- banner edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="edit"
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

                        <!-- banner delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="delete"
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
                      </div>
                    </td>
                    <!-- heading operations end here  -->
                  </tr>
                  <!-- home end here  -->

                  <!-- Header-1 start here  -->
                  <tr>
                    <!-- Header-1 title start here  -->
                    <td class="table_title">
                      <a
                        href="#"
                        role="button"
                        class="btn gap-5 tab_title text-nowrap"
                        title="add Subheading"
                        id="add_subheading">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          id="direction-3"
                          height="12"
                          viewBox="0 -960 960 960"
                          width="12"
                          fill="#000000">
                          <path
                            d="M630-444H192v-72h438L429-717l51-51 288 288-288 288-51-51 201-201Z" />
                        </svg>
                        About
                      </a>
                    </td>
                    <!-- Header-1 title end here  -->

                    <!-- header-1 link start here -->
                    <td class="heading_link">
                      <p class="text-truncate">
                        https://iWebwiser.com
                      </p>
                    </td>
                    <!-- header-1 link end here  -->

                    <!-- headig operations start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- banner edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="edit"
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

                        <!-- banner delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="delete"
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
                      </div>
                    </td>
                    <!-- heading operations end here  -->
                  </tr>

                  <!-- subheading table-1 start here  -->
                  <tr id="sub_table_tr">
                    <td colspan="6" class="p-0" id="sub_table_td">
                      <table class="table sub_table p-0 m-0">
                        <tbody>
                          <!-- sub-heading-1 start here  -->
                          <tr>
                            <!-- Sub-header-1 title start here  -->
                            <td class="sub_heading">
                              <a
                                href="#"
                                role="button"
                                class="btn sub_tab_title gap-5"
                                title="add Subheading">
                                Our Company
                              </a>
                            </td>
                            <!-- Sub-header-1 title end here  -->

                            <!-- Sub-header-1 link start here -->
                            <td class="sub_link">
                              <p class="text-truncate">
                                https://iWebwiser.com
                              </p>
                            </td>
                            <!-- Sub-header-1 link end here  -->

                            <!-- Sub-headig operations start here  -->
                            <td class="sub_action">
                              <div
                                class="d-inline-flex justify-content-center align-items-center gap-3">
                                <!-- banner edit button start here  -->
                                <a
                                  role="button"
                                  href="#"
                                  class="btn text-decoration-none table_edit bg-info-subtle"
                                  data-bs-toggle="edit"
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

                                <!-- banner delete button start here  -->
                                <a
                                  href="#"
                                  role="button"
                                  class="btn text-decoration-none table_del bg-danger-subtle"
                                  data-bs-toggle="delete"
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
                              </div>
                            </td>
                            <!-- Sub-heading operations end here  -->
                          </tr>
                          <!-- sub-heading-1 end here  -->

                          <!-- sub-heading-2 start here  -->
                          <tr>
                            <!-- Sub-header-1 title start here  -->
                            <td class="sub_heading">
                              <a
                                href="#"
                                role="button"
                                class="btn sub_tab_title gap-5"
                                title="add Subheading">
                                Partnership
                              </a>
                            </td>
                            <!-- Sub-header-1 title end here  -->

                            <!-- Sub-header-1 link start here -->
                            <td class="sub_link">
                              <p class="text-truncate">
                                https://iWebwiser.com
                              </p>
                            </td>
                            <!-- Sub-header-1 link end here  -->

                            <!-- Sub-headig operations start here  -->
                            <td class="sub_action">
                              <div
                                class="d-inline-flex justify-content-center align-items-center gap-3">
                                <!-- banner edit button start here  -->
                                <a
                                  role="button"
                                  href="#"
                                  class="btn text-decoration-none table_edit bg-info-subtle"
                                  data-bs-toggle="edit"
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

                                <!-- banner delete button start here  -->
                                <a
                                  href="#"
                                  role="button"
                                  class="btn text-decoration-none table_del bg-danger-subtle"
                                  data-bs-toggle="delete"
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
                              </div>
                            </td>
                            <!-- Sub-heading operations end here  -->
                          </tr>
                          <!-- sub-heading-2 end here  -->

                          <!-- sub-heading-3 start here  -->
                          <tr>
                            <!-- Sub-header-1 title start here  -->
                            <td class="sub_heading">
                              <a
                                href="#"
                                role="button"
                                class="btn sub_tab_title gap-5"
                                title="add Subheading">
                                Testimonials
                              </a>
                            </td>
                            <!-- Sub-header-1 title end here  -->

                            <!-- Sub-header-1 link start here -->
                            <td class="sub_link">
                              <p class="text-truncate">
                                https://iWebwiser.com
                              </p>
                            </td>
                            <!-- Sub-header-1 link end here  -->

                            <!-- Sub-headig operations start here  -->
                            <td class="sub_action">
                              <div
                                class="d-inline-flex justify-content-center align-items-center gap-3">
                                <!-- banner edit button start here  -->
                                <a
                                  role="button"
                                  href="#"
                                  class="btn text-decoration-none table_edit bg-info-subtle"
                                  data-bs-toggle="edit"
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

                                <!-- banner delete button start here  -->
                                <a
                                  href="#"
                                  role="button"
                                  class="btn text-decoration-none table_del bg-danger-subtle"
                                  data-bs-toggle="delete"
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
                              </div>
                            </td>
                            <!-- Sub-heading operations end here  -->
                          </tr>
                          <!-- sub-heading-3 end here  -->
                        </tbody>
                      </table>
                    </td>
                  </tr>
                  <!-- Subheading table-1 end here  -->

                  <!-- heading-1 end here  -->

                  <!-- heading-2 start here  -->
                  <tr>
                    <!-- heading-2 title start here  -->
                    <td class="table_title">
                      <a
                        href="#"
                        role="button"
                        class="btn gap-5 tab_title text-nowrap"
                        title="add Subheading"
                        id="add_subheading">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          class="invisible"
                          height="12"
                          viewBox="0 -960 960 960"
                          width="12"
                          fill="#000000">
                          <path
                            d="M630-444H192v-72h438L429-717l51-51 288 288-288 288-51-51 201-201Z" />
                        </svg>
                        Industry
                      </a>
                    </td>
                    <!-- heading-2 title end here  -->

                    <!-- heading-2 link start here -->
                    <td class="heading_link">
                      <p class="text-truncate">
                        https://iWebwiser.com
                      </p>
                    </td>
                    <!-- heading-2 link end here  -->

                    <!-- headig operations start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- banner edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="edit"
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

                        <!-- banner delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="delete"
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
                      </div>
                    </td>
                    <!-- heading operations end here  -->
                  </tr>
                  <!-- header-2 end here  -->

                  <!-- header-3 start here  -->
                  <tr>
                    <!-- header-3 title start here  -->
                    <td class="table_title">
                      <a
                        href="#"
                        role="button"
                        class="btn gap-5 tab_title text-nowrap"
                        title="add Subheading"
                        id="add_subheading1">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          id="direction-4"
                          height="12"
                          viewBox="0 -960 960 960"
                          width="12"
                          fill="#000000">
                          <path
                            d="M630-444H192v-72h438L429-717l51-51 288 288-288 288-51-51 201-201Z" />
                        </svg>
                        Services
                      </a>
                    </td>
                    <!-- header-3 title end here  -->

                    <!-- header-3 Link start here  -->
                    <td class="heading_link">
                      <p class="text-truncate">
                        https://iWebwiser.com
                      </p>
                    </td>
                    <!-- header-3 link end here  -->

                    <!-- headig operations start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- banner edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="edit"
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

                        <!-- banner delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="delete"
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
                      </div>
                    </td>
                    <!-- heading operations end here  -->
                  </tr>
                  <!-- header-3 end here  -->

                  <!-- Subheading table-2 start here  -->
                  <tr id="sub_table_tr1">
                    <td colspan="6" class="p-0" id="sub_table_td1">
                      <table class="table sub_table1 p-0 m-0">
                        <tbody>
                          <tr>
                            <!-- Header-1 title start here  -->
                            <td class="sub_heading">
                              <a
                                href="#"
                                role="button"
                                class="btn sub_tab_title gap-5"
                                title="add Subheading">
                                Mobile App Development
                              </a>
                            </td>
                            <!-- Header-1 title end here  -->

                            <!-- header-1 link start here -->
                            <td class="sub_link">
                              <p class="text-truncate">
                                https://iWebwiser.com
                              </p>
                            </td>
                            <!-- header-1 link end here  -->

                            <!-- headig operations start here  -->
                            <td class="sub_action">
                              <div
                                class="d-inline-flex justify-content-center align-items-center gap-3">
                                <!-- banner edit button start here  -->
                                <a
                                  role="button"
                                  href="#"
                                  class="btn text-decoration-none table_edit bg-info-subtle"
                                  data-bs-toggle="edit"
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

                                <!-- banner delete button start here  -->
                                <a
                                  href="#"
                                  role="button"
                                  class="btn text-decoration-none table_del bg-danger-subtle"
                                  data-bs-toggle="delete"
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
                              </div>
                            </td>
                            <!-- heading operations end here  -->
                          </tr>

                          <tr>
                            <!-- Header-1 title start here  -->
                            <td class="sub_heading">
                              <a
                                href="#"
                                role="button"
                                class="btn sub_tab_title gap-5"
                                title="add Subheading">
                                Web Development
                              </a>
                            </td>
                            <!-- Header-1 title end here  -->

                            <!-- header-1 link start here -->
                            <td class="sub_link">
                              <p class="text-truncate">
                                https://iWebwiser.com
                              </p>
                            </td>
                            <!-- header-1 link end here  -->

                            <!-- headig operations start here  -->
                            <td class="sub_action">
                              <div
                                class="d-inline-flex justify-content-center align-items-center gap-3">
                                <!-- banner edit button start here  -->
                                <a
                                  role="button"
                                  href="#"
                                  class="btn text-decoration-none table_edit bg-info-subtle"
                                  data-bs-toggle="edit"
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

                                <!-- banner delete button start here  -->
                                <a
                                  href="#"
                                  role="button"
                                  class="btn text-decoration-none table_del bg-danger-subtle"
                                  data-bs-toggle="delete"
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
                              </div>
                            </td>
                            <!-- heading operations end here  -->
                          </tr>

                          <tr>
                            <!-- Header-1 title start here  -->
                            <td class="sub_heading">
                              <a
                                href="#"
                                role="button"
                                class="btn sub_tab_title gap-5"
                                title="add Subheading">
                                Digital Marketing
                              </a>
                            </td>
                            <!-- Header-1 title end here  -->

                            <!-- header-1 link start here -->
                            <td class="sub_link">
                              <p class="text-truncate">
                                https://iWebwiser.com
                              </p>
                            </td>
                            <!-- header-1 link end here  -->

                            <!-- headig operations start here  -->
                            <td class="sub_action">
                              <div
                                class="d-inline-flex justify-content-center align-items-center gap-3">
                                <!-- banner edit button start here  -->
                                <a
                                  role="button"
                                  href="#"
                                  class="btn text-decoration-none table_edit bg-info-subtle"
                                  data-bs-toggle="edit"
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

                                <!-- banner delete button start here  -->
                                <a
                                  href="#"
                                  role="button"
                                  class="btn text-decoration-none table_del bg-danger-subtle"
                                  data-bs-toggle="delete"
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
                              </div>
                            </td>
                            <!-- heading operations end here  -->
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr> --}}
                  <!-- Subheading table-2 end here  -->

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
            <p>Showing {{ $headers->firstItem() }} to {{ $headers->lastItem() }} of {{ $headers->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <!-- Check if the pagination has previous and next links -->
                  @if ($headers->onFirstPage())
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $headers->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif

                  <!-- Loop through page numbers -->
                  @foreach ($headers->getUrlRange(1, $headers->lastPage()) as $page => $url)
                  <li class="page-item {{ $headers->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach

                  <!-- Check if the pagination has a next link -->
                  @if ($headers->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $headers->nextPageUrl() }}">Next</a>
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