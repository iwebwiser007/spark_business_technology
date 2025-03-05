@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            <div class="dash-head">
                <div class="dash_title">
                    <h2 class="main-title">Portfolio List</h2>
                </div>

                <ol class="breadcrumb text-nowrap">
                    <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Portfolio List
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

            @if (Session::has('error_message'))
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
                            <h2>Portfolio List</h2>
                            <a href="{{ route('admin.portfolioAdd') }}" class="btn sub_btn">ADD</a>
                        </div>
                    </div>

                    <div class="card-body">
                        <form method="GET" action="{{ route('admin.portfolioList') }}" class="data-form">
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
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Slug</th>
                                        <th scope="col">Country</th>
                                        <th scope="col">Industry</th>
                                        <th scope="col">Solution</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($portfolios as $portfolio)
                                    <tr>
                                        <td class="list_img">
                                            <div class="table_img">
                                                <img
                                                    src="{{ asset('storage/app/public/portfolio/' . $portfolio->image) }}"
                                                    alt="banner-1"
                                                    class="img-fluid" />
                                            </div>
                                        </td>
                                        <td>
                                            <p class="text-truncate">{{ $portfolio->title }}</p>
                                        </td>
                                        <td>
                                            <p class="desc text-truncate px-1">
                                                {{ $portfolio->description }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-truncate">
                                                {{ $portfolio->slug }}
                                            </p>
                                        </td>
                                        <td>
                                            <p class="text-truncate">{{ $portfolio->country }}</p>
                                        </td>
                                        <td>
                                            <p class="text-truncate">{{ $portfolio->industry }}</p>
                                        </td>
                                        <td>
                                            <p class="text-truncate">{{ $portfolio->solution }}</p>
                                        </td>
                                        <td class="table_status">
                                            @if($portfolio->status == 1)
                                            <span class="badge table_badge bg-success-subtle text-success rounded-pill" data-banner-id="{{ $portfolio->id }}" data-status="1">
                                                Active
                                            </span>
                                            @elseif($portfolio->status == 0)
                                            <span class="badge table_badge bg-danger-subtle text-danger rounded-pill" data-banner-id="{{ $portfolio->id }}" data-status="0">
                                                Inactive
                                            </span>
                                            @endif
                                        </td>
                                        <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="statusModalLabel">Change Status</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to change the status of this portfolio?
                                                    </div>
                                                    <div class="modal-footer">
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
                                        <td class="table_action">
                                            <div
                                                class="d-inline-flex justify-content-center align-items-center gap-3">
                                                <a
                                                    role="button"
                                                    href="#"
                                                    class="btn text-decoration-none table_edit bg-primary-subtle"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#viewModal-{{$portfolio->id}}"
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
                                                <div
                                                    class="modal fade"
                                                    id="viewModal-{{$portfolio->id}}"
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
                                                                    View Portfolio-{{$portfolio->id}}
                                                                </h1>
                                                                <button
                                                                    type="button"
                                                                    class="btn-close"
                                                                    data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <span>
                                                                    <img
                                                                        src="{{ asset('storage/app/public/portfolio/' . $portfolio->image) }}"
                                                                        alt="image"
                                                                        class="img-fluid" />

                                                                    <h1 class="fs-5 p-2 mt-4">
                                                                        {{$portfolio->title}}
                                                                    </h1>
                                                                    <p class="desc px-4">
                                                                        {{$portfolio->description}}
                                                                    </p>
                                                                </span>
                                                                <button
                                                                    type="button"
                                                                    class="btn btn-secondary cancel_modal my-3"
                                                                    data-bs-dismiss="modal">
                                                                    Close
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a
                                                    role="button"
                                                    href="#"
                                                    class="btn text-decoration-none table_edit bg-info-subtle"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#editModal-{{$portfolio->id}}"
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
                                                <div class="modal fade" id="editModal-{{$portfolio->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5 fw-bold text-start" id="exampleModalLabel">Edit Portfolio-{{$portfolio->id}}</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                <div class="container">
                                                                    <form class="upload-form" action="{{ route('admin.portfolioUpdate' , $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row form-group g-4">
                                                                            <div class="col-md-6">
                                                                                <label for="inputTitle" class=" form-label text-start d-block">Title</label>
                                                                                <input type="text" id="inputTitle" name="title" class="form-control form-input" placeholder="Enter Title..." value="{{ old('title', $portfolio->title ?? '') }}" required />
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label for="btnLink" class="form-label text-start d-block">Slug</label>
                                                                                <input type="text" id="btnLink" name="link" class="form-control form-input" placeholder="Enter Slug..." value="{{ old('slug', $portfolio->slug ?? '') }}" required />
                                                                            </div>
                                                                        </div>

                                                                        <div class="row form-group g-4">
                                                                            <div class="col-6">
                                                                                <label for="country" class="col-form-label form-label text-start d-block">Country</label>
                                                                                <select id="country" name="country" class="form-control form-control-lg form-input" required>
                                                                                    <option value="">Select Country</option>
                                                                                    @foreach ($countries as $country)
                                                                                    <option value="{{ $country->country_name }}" {{ old('country', $portfolio->country ?? '') == $country->country_name ? 'selected' : '' }}>
                                                                                        {{ $country->country_name }}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label for="industry" class="form-label text-start d-block">industry</label>
                                                                                <input type="text" id="industry" name="industry_name" class="form-control form-input" placeholder="Enter Industry..." value="{{ old('industry', $portfolio->industry ?? '') }}" required />
                                                                            </div>
                                                                        </div>

                                                                        <div class="row form-group g-4 mt-3">
                                                                            <div class="col-md-6">
                                                                                <label for="inputDescription" class="form-label text-start d-block">Short Description</label>
                                                                                <textarea class="form-control form-textbox" id="inputDescription" name="description" rows="4" placeholder="Write your description here..." required>{{ old('description', $portfolio->description ?? '') }}</textarea>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label for="solution" class="form-label text-start d-block">Solution</label>
                                                                                <input type="text" id="solution" name="solution" class="form-control form-input" placeholder="Enter solution..." value="{{ old('solution', $portfolio->solution ?? '') }}" required />
                                                                            </div>
                                                                            </div>

                                                                            <div class="row form-group g-4 mt-3">
                                                                            <div class=" col-md-6">
                                                                                <label for="bannerImg-{{$portfolio->id}}" class="form-label text-start d-block">Image</label>
                                                                                <div class="">
                                                                                    <label for="bannerImg-{{$portfolio->id}}" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 border">
                                                                                        <div class="d-flex flex-column align-items-center gap-3">
                                                                                            <span></span>
                                                                                            <p id="bannerText-{{$portfolio->id}}" class="mb-0" style="display: none;">Upload Image</p>
                                                                                        </div>
                                                                                        <div id="bannerPreview-{{$portfolio->id}}" class="">
                                                                                            <img id="previewBannerImg-{{$portfolio->id}}" src="{{ isset($portfolio) ? asset('storage/app/public/portfolio/' . $portfolio->image) : '' }}" alt="Banner Image Preview" style="max-width: 370px; height: 250px; border-radius: 8px;" />
                                                                                        </div>
                                                                                    </label>
                                                                                    <input type="file" name="image" class="form-control form-control-lg d-none" id="bannerImg-{{$portfolio->id}}" onchange="previewBannerImage(event , {{$portfolio->id}})" />
                                                                                </div>
                                                                            </div>
                                                                        
                                                                        <div class="col-md-6">
                                                                            <label for="html_content" class="col-form-label form-label text-start d-block">Description</label>
                                                                            <textarea class="form-control ckeditor" id="html_content_{{$portfolio->id}}" name="html_content" rows="6">{{ old('html_content', $portfolio->html_content ?? '') }}</textarea>
                                                                        </div>
                                                                        </div>


                                                                        <script>
                                                                            CKEDITOR.replace('html_content_{{ $portfolio->id }}', {
                                                                                allowedContent: true,
                                                                            });
                                                                        </script>

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
                                                    data-bs-target="#deleteModal-{{ $portfolio->id }}"
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
                                                    id="deleteModal-{{$portfolio->id}}"
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
                                                                    Delete Portfolio
                                                                </h1>
                                                                <p class="pb-4">
                                                                    Are you sure you want to delete
                                                                    this Portfolio?
                                                                </p>
                                                                <div>
                                                                    <form action="{{ route('admin.portfolioDelete' , $portfolio->id) }}" method="POST">
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
                        <p>Showing {{ $portfolios->firstItem() }} to {{ $portfolios->lastItem() }} of {{ $portfolios->total() }} entries</p>
                        <div class="pagination-div">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    @if ($portfolios->onFirstPage())
                                    <li class="page-item disabled">
                                        <span class="page-link">Previous</span>
                                    </li>
                                    @else
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $portfolios->previousPageUrl() }}">Previous</a>
                                    </li>
                                    @endif
                                    @foreach ($portfolios->getUrlRange(1, $portfolios->lastPage()) as $page => $url)
                                    <li class="page-item {{ $portfolios->currentPage() == $page ? 'active' : '' }}">
                                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                    </li>
                                    @endforeach
                                    @if ($portfolios->hasMorePages())
                                    <li class="page-item">
                                        <a class="page-link" href="{{ $portfolios->nextPageUrl() }}">Next</a>
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
    function previewBannerImage(event, bannerId) {
        const preview = document.getElementById('previewBannerImg-' + bannerId);
        const file = event.target.files[0];
        const reader = new FileReader();
        reader.onload = function() {
            preview.src = reader.result;
            preview.style.display = 'block';
            document.getElementById('bannerText-' + bannerId).style.display = 'none';
        };
        reader.readAsDataURL(file);
    }
    $(document).ready(function() {
        $('.badge').on('click', function() {
            var bannerId = $(this).data('banner-id');
            var currentStatus = $(this).data('status');
            $('#statusModal').data('banner-id', bannerId);
            $('#statusModal').data('current-status', currentStatus);
            var url = "update-portfolio-status/" + bannerId;
            $('#statusChangeForm').attr('action', url);
            var statusModal = new bootstrap.Modal(document.getElementById('statusModal'));
            statusModal.show();
        });
    });

    function updatePagination() {
        const perPage = document.getElementById('perPage').value;
        window.location.href = `?perPage=${perPage}`;
    }
</script>
@endsection