@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
  <!-- main data start here  -->
  <div class="main-data">
    <div class="container-fluid">
      <!-- dashboard banner start here... -->
      <div class="dash-head d-flex justify-content-between">
        <div class="dash_title">
          <!-- dashboard banner title start here  -->
          <h2 class="main-title">Feedback List</h2>
          <!-- dashboard banner title end here  -->
        </div>

        <!-- add banner breadcrumb start here  -->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <!-- <li class="breadcrumb-item">
                        <a href="#">Feedback</a>
                      </li> -->
          <li class="breadcrumb-item active" aria-current="page">
            Feedback List
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
              <h2>Feedback List</h2>
              <a href="{{route('admin.feedbackAdd')}}" class="btn sub_btn">ADD</a>

            </div>
          </div>
          <!-- card header end here  -->

          <!-- card body start here  -->
          <div class="card-body">
            <!-- form start here  -->
            <form method="GET" action="{{ route('admin.feedbackList') }}" class="data-form">
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

            <!-- table content start here  -->
            <div class="table-content table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Page Select</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach($feedbacks as $feedback)
                  <tr>
                    <!-- feedback-1 image start here -->
                    <td class="list_img">
                      <div class="table_img">
                        <img
                          src="{{ asset('storage/app/public/feedbacks/' . $feedback->image) }}"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <!-- feedback-1 image end here  -->

                    <!-- feedback-1 title start here  -->
                    <td>
                      <p class="text-nowrap">{{$feedback->title}}</p>
                    </td>
                    <!-- feedback-1 title end here  -->

                    <!-- feedback-1 Description start here  -->
                    <td class="">
                      <p class="desc text-truncate">
                        {{$feedback->description}}
                      </p>
                    </td>
                    <!-- feedback-1 Description end here -->

                    <td>
                      <p>{{$feedback->page}}</p>
                    </td>

                    <!-- feedback edit and delete icon start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- feedback edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$feedback->id}}"
                          title="Edit"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="rgb(25 135 84)">
                            <path
                              d="M96 0v-192h768V0H96Zm168-360h51l279-279-26-27-25-24-279 279v51Zm-72 72v-152.92L594-843q11-11 23.84-16 12.83-5 27-5 14.16 0 27.16 5t24.1 15.94L747-792q11 11 16 24t5 27.4q0 13.49-4.95 26.54-4.95 13.05-15.75 23.85L345-288H192Zm503-455-51-49 51 49ZM594-639l-26-27-25-24 51 51Z" />
                          </svg>
                        </a>
                        <!-- feedback edit button end here  -->

                        <!-- Edit Modal start here  -->
                        <div class="modal fade" id="editModal-{{$feedback->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">Edit Feedback-{{$feedback->id}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">

                                  <form class="upload-form" action="{{route('admin.feedbackUpdate', $feedback->id)}}" method="POST">
                                    @csrf

                                    <!-- Title and Page Select in One Row -->
                                    <div class="row form-group g-4">
                                      <!-- Feedback Title -->
                                      <div class="col-md-6">
                                        <label for="inputTitle" class="form-label text-start d-block">Feedback Title</label>
                                        <input type="text" id="inputTitle" name="title" class="form-control form-input" placeholder="Enter Title..." value="{{old('title', $feedback->title ?? '')}}" required />
                                      </div>

                                      <!-- Page Select -->
                                      <div class="col-md-6">
                                        <label for="btnLink" class="form-label text-start d-block">Page Select</label>
                                        <select name="pageSelect" class="form-control form-input" id="pageSelect" required>
                                          <option value="">Select Page</option>
                                          @foreach ($headers as $header)
                                          <option value="{{ $header->title }}" {{ old('pageSelect', $feedback->page ?? '') == $header->title ? 'selected' : '' }}>
                                            {{ $header->title }}
                                          </option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>

                                    <!-- Description -->
                                    <div class="row form-group g-4 mt-3">
                                      <div class="col-md-6">
                                        <label for="inputDescription" class="form-label text-start d-block">Description</label>
                                        <textarea class="form-control form-textbox" id="inputDescription" name="description" rows="4" placeholder="Write your description here..." required>{{old('description', $feedback->description ?? '')}}</textarea>
                                      </div>

                                    <!-- Image Upload -->
                                      <div class="col-md-6">
                                        <label for="image" class="form-label text-start d-block">Image</label>
                                        <div class="form-group mb-20 upload-input">
                                          <div class=" p-3 rounded-4">
                                            <label for="ImgUpload" class="form-label form-img-uploader d-flex align-items-center justify-content-center w-100 position-relative">
                                              <!-- Image Display -->
                                              <img src="{{ asset('storage/app/public/feedbacks/' . $feedback->image) }}" class="img-fluid rounded-4" id="image" width="100%" alt="upload image" />
                                            </label>
                                          </div>
                                        </div>
                                      </div>
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


                        <!-- Edit modal end here  -->

                        <!-- feedback delete button start here  -->
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{$feedback->id}}"
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
                        <!-- feedback delete button end here  -->

                        <!-- delete modal start here  -->
                        <div
                          class="modal fade"
                          id="deleteModal-{{$feedback->id}}"
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
                                  Delete Feedback
                                </h1>
                                <p class="pb-4">
                                  Are you sure you want to delete
                                  this feedback?
                                </p>

                                <!-- delete and cancel button start here  -->
                                <div>
                                  <form action="{{ route('admin.feedbackDelete' , $feedback->id) }}" method="POST">
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
                    <!-- feedback edit and delete icon end here  -->
                  </tr>
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
            <p>Showing {{ $feedbacks->firstItem() }} to {{ $feedbacks->lastItem() }} of {{ $feedbacks->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  <!-- Check if the pagination has previous and next links -->
                  @if ($feedbacks->onFirstPage())
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $feedbacks->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif

                  <!-- Loop through page numbers -->
                  @foreach ($feedbacks->getUrlRange(1, $feedbacks->lastPage()) as $page => $url)
                  <li class="page-item {{ $feedbacks->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach

                  <!-- Check if the pagination has a next link -->
                  @if ($feedbacks->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $feedbacks->nextPageUrl() }}">Next</a>
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