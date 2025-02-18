@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash-head">
        <div class="dash_title">
          <h2 class="main-title">Technology List</h2>
        </div>

        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Technology List
          </li>
        </ol>
      </div>
      @if (Session::has('success_message'))
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
        <div class="card">
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Technology List</h2>
              <a href="{{route('admin.technologyAdd')}}" class="btn sub_btn">ADD</a>
            </div>
          </div>

          <div class="card-body">
            <form method="GET" action="{{ route('admin.technologyList') }}" class="data-form">
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

            <div class="table-content table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($technologies as $technology)
                  <tr>
                    <td class="list_img">
                      <div class="icon_img">
                        <img
                          src="{{ asset('storage/app/public/technology_logos/' . $technology->image) }}"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <td>
                      <p>{{$technology->title}}</p>
                    </td>
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$technology->id}}"
                          title="Edit">
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="rgb(25 135 84)">
                            <path
                              d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z" />
                          </svg>
                        </a>

                        <div
                          class="modal fade"
                          id="editModal-{{$technology->id}}"
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
                                  Edit Technology-{{$technology->id}}
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ route('admin.technologyUpdate', $technology->id) }}"
                                    method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div
                                      class="row form-group align-items-center">
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Title
                                        </label>
                                      </div>

                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            name="title"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Title..."
                                            value="{{ old('title', $technology->title ?? '') }}" required />
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputThumbnailImage" class="col-form-label form-label d-flex justify-content-left justify-content-md-center"> Image</label>
                                      </div>
                                      <div class="col-12 col-md-9">
                                        <div class="form-group upload-input">
                                          <label for="thumbnailImg-{{$technology->id}}" class="form-label form-img-uploader rounded-2 d-flex align-items-center justify-content-center w-100 py-2">
                                            <div class="d-flex flex-column align-items-center">
                                              <span>
                                                <!-- Optionally, an SVG icon or placeholder icon can go here -->
                                              </span>
                                              <p id="thumbnailText-{{$technology->id}}" style="display: none;">Upload Image</p>
                                            </div>
                                            <div id="thumbnailPreview-{{$technology->id}}">
                                              <img id="previewThumbnailImg-{{$technology->id}}" src="{{ isset($technology) ? asset('storage/app/public/technology_logos/' . $technology->image) : '' }}" alt="Thumbnail Image Preview" style="display: {{ isset($technology) ? 'block' : 'none' }}; width: 100%; max-width: 400px; height:278px; border-radius: 8px;" />
                                            </div>
                                          </label>
                                          <input type="file" name="image" class="form-control form-control-lg d-none" id="thumbnailImg-{{$technology->id}}" onchange="previewThumbnailImage(event , {{$technology->id}})" />
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

                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{$technology->id}}"
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

                        <div
                          class="modal fade"
                          id="deleteModal-{{$technology->id}}"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div
                            class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
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
                                  Delete Technology
                                </h1>
                                <p class="pb-4">
                                  Are you sure you want to delete
                                  this technology?
                                </p>

                                <div>
                                  <form action="{{ route('admin.technologyDelete' , $technology->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-secondary cancel_modal" data-bs-dismiss="modal">
                                      Cancel
                                    </button>

                                    <button type="submit" class="btn btn-danger del_modal">
                                      Delete
                                    </button>
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
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer">
            <p>Showing {{ $technologies->firstItem() }} to {{ $technologies->lastItem() }} of {{ $technologies->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  @if ($technologies->onFirstPage())
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $technologies->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif
                  @foreach ($technologies->getUrlRange(1, $technologies->lastPage()) as $page => $url)
                  <li class="page-item {{ $technologies->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach
                  @if ($technologies->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $technologies->nextPageUrl() }}">Next</a>
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
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function previewThumbnailImage(event, technologyId) {
    const preview = document.getElementById('previewThumbnailImg-' + technologyId);
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';

      document.getElementById('thumbnailText-' + technologyId).style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  function updatePagination() {
    const perPage = document.getElementById('perPage').value;
    window.location.href = `?perPage=${perPage}`;
  }
</script>
@endsection