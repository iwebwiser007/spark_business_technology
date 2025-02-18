@extends('components.admin.layouts')
<style>
    #adminLogoPreview,
    #frontLogoPreview {
        object-fit: cover;
        width: 100%;
        max-width: 300px;
        max-height: 300px;
        border-radius: 8px;
    }
</style>

@section('content')
<div class="main-right-container" id="main-right-container">
    <div class="main-data">
        <div class="container-fluid">
            <!-- Dashboard head -->
            <div class="dash-head">
                <div class="dash_title">
                    <a href="{{url()->previous()}}" role="button" class="btn link-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#FFFFFF">
                            <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
                        </svg>
                    </a>
                    <h2 class="main-title">Update Logos</h2>
                </div>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Update Logos</li>
                </ol>
            </div>

            @if (Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center" role="alert">
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
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-title d-flex justify-content-between align-items-center">
                            <h2>Update Logos</h2>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.updateLogo') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="row form-group mt-1 mt-md-2">
                                <div class="col-12 col-md-3">
                                    <label for="adminLogo" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Admin Logo</label>
                                </div>
                                <div class="col-12 col-md-8 mt-0">
                                    <div class="form-group mb-20 upload-input">
                                        <label for="adminLogoInput" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                                <span id="adminIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 512.056 512.056" class="mb-0">
                                                    </svg>
                                                </span>
                                                <p id="adminText" class="mb-0">Upload Logo</p>
                                            </div>
                                            <img id="adminLogoPreview" src="{{ asset('storage/app/public/logos/' . $logo->admin_logo) }}" alt="Admin Logo Preview" />
                                        </label>
                                        <input type="hidden" name="existing_admin_logo" value="{{ $logo->admin_logo }}">

                                        <input type="file" name="admin_logo" class="form-control form-control-lg d-none" id="adminLogoInput" onchange="previewAdminLogo(event)" />
                                    </div>
                                    <div id="adminLogo-error"></div>
                                </div>
                            </div>

                            <!-- Front Logo Upload -->
                            <div class="row form-group mt-1 mt-md-2">
                                <div class="col-12 col-md-3">
                                    <label for="frontLogo" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Front Logo</label>
                                </div>
                                <div class="col-12 col-md-8 mt-0">
                                    <div class="form-group mb-20 upload-input">
                                        <label for="frontLogoInput" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
                                            <div class="d-flex flex-column align-items-center gap-3">
                                                <span id="frontIcon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 512.056 512.056" class="mb-0">
                                                    </svg>
                                                </span>
                                                <p id="frontText" class="mb-0">Upload Logo</p>
                                            </div>
                                            <img id="frontLogoPreview" src="{{ asset('storage/app/public/logos/' . $logo->front_logo) }}" alt="Front Logo Preview" />
                                        </label>
                                        <input type="hidden" name="existing_front_logo" value="{{ $logo->front_logo }}">

                                        <input type="file" name="front_logo" class="form-control form-control-lg d-none" id="frontLogoInput" onchange="previewFrontLogo(event)" />
                                    </div>
                                    <div id="frontLogo-error"></div>
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
</div>

<script>
    function previewAdminLogo(event) {
        const preview = document.getElementById('adminLogoPreview');
        const file = event.target.files[0];
        const reader = new FileReader();

        if (file) {
            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
                document.getElementById('adminText').style.display = 'none';
                document.getElementById('adminIcon').style.display = 'none';
            };
            reader.readAsDataURL(file);
        }
    }

    function previewFrontLogo(event) {
        const preview = document.getElementById('frontLogoPreview');
        const file = event.target.files[0];
        const reader = new FileReader();

        if (file) {
            reader.onload = function() {
                preview.src = reader.result;
                preview.style.display = 'block';
                document.getElementById('frontText').style.display = 'none'; // Hide text
                document.getElementById('frontIcon').style.display = 'none'; // Hide SVG icon
            };
            reader.readAsDataURL(file);
        }
    }

    window.onload = function() {
        const adminLogoPreview = document.getElementById('adminLogoPreview');
        const frontLogoPreview = document.getElementById('frontLogoPreview');

        // Check if there's already an image previewed and hide the upload text/icon
        if (adminLogoPreview.src && adminLogoPreview.src !== "" && adminLogoPreview.src !== undefined) {
            document.getElementById('adminText').style.display = 'none';
            document.getElementById('adminIcon').style.display = 'none';
        }

        if (frontLogoPreview.src && frontLogoPreview.src !== "" && frontLogoPreview.src !== undefined) {
            document.getElementById('frontText').style.display = 'none';
            document.getElementById('frontIcon').style.display = 'none';
        }
    }
</script>
@endsection