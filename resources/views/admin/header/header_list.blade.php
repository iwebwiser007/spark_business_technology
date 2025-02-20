@extends('components.admin.layouts')
@section('content')

<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash-head d-flex justify-content-between">
        <div class="dash_title">
          <h2 class="main-title">Header List</h2>
        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Header List
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
            <div class="card-title d-flex justify-content-between align-items-center">
              <h2>Header List</h2>
              <a href="{{route('admin.headerAdd')}}" class="btn sub_btn">ADD</a>
            </div>
          </div>

          <div class="card-body">
            <!-- <form class="data-form">
              <div class="form-group gap-2">
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
            </form> -->

            <form method="GET" action="{{ route('admin.headerList') }}" class="data-form">
  <div class="form-group d-flex align-items-center">
    <select name="perPage" id="perPage" onchange="updatePagination()" class="me-2">
      <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>Show 10</option>
      <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>Show 20</option>
      <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>Show 50</option>
      <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>Show 100</option>
    </select>
    
    <input
      type="search"
      name="search"
      id="searchInput"
      class="form-control form-control-sm me-3"
      placeholder="Search by title..."
      value="{{ request()->query('search') }}" />
      
    <button type="submit" class="btn sub_btn mb-2">Search</button>
  </div>
</form>






            <div class="table-content table-responsive">
              <table class="table ">
                <thead>
                  <tr>
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
                                  <form class="upload-form" action="{{ route('admin.headerUpdate', $header->id) }}" method="POST">
                                    @csrf
                                    @if(isset($header))
                                    @method('POST')
                                    @endif

                                    <div class="row form-group mt-1 mt-md-2">
                                      <div class="col-12 col-md-3">
                                        <label for="inputHeaderTitle" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Header Title</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <input type="text" name="title" id="inputHeaderTitle" class="form-control form-control-lg form-input"
                                          placeholder="Enter Header Title..." value="{{ old('title', $header->title ?? '') }}" required />
                                      </div>
                                    </div>

                                    <div class="row form-group">
                                      <div class="col-12 col-md-3">
                                        <label for="inputHeaderLink" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Header Link</label>
                                      </div>
                                      <div class="col-12 col-md-8 mt-0">
                                        <input type="text" name="link" id="inputHeaderLink" class="form-control form-control-lg form-input"
                                          placeholder="Enter Header Link..." value="{{ old('link', $header->link ?? '') }}" required />
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

                        <a href="#" role="button" class="btn text-decoration-none table_del bg-danger-subtle" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $header->id }}" title="Delete">
                          <svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12" fill="#f70808">
                            <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
                          </svg>
                        </a>

                        <div class="modal fade" id="deleteModal-{{ $header->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
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

                                <div>
                                  <form action="{{ route('admin.headerDelete', $header->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
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
                </tbody>
              </table>
            </div>
          </div>

          <div class="card-footer">
            <p>Showing {{ $headers->firstItem() }} to {{ $headers->lastItem() }} of {{ $headers->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  @if ($headers->onFirstPage())
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $headers->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif

                  @foreach ($headers->getUrlRange(1, $headers->lastPage()) as $page => $url)
                  <li class="page-item {{ $headers->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach

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
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  function updatePagination() {
    const perPage = document.getElementById('perPage').value;
    window.location.href = `?perPage=${perPage}`;
  }
</script>

@endsection