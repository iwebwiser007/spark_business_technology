@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
@section('content')
<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash-head">
        <div class="dash_title">
          <a href="{{url()->previous()}}" role="button" class="btn link-btn d-flex align-items-center justify-content-center">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#FFFFFF">
              <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
            </svg>
          </a>
          <h2 class="main-title">Add Header</h2>
        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Add Header
          </li>
        </ol>
      </div>
    </div>
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
            <h2>Add Header</h2>
          </div>
        </div>

        <div class="card-body">
          <form class="upload-form" action="{{ route('admin.headerStore') }}" method="POST" data-parsley-validate>
            @csrf
            <div class="row form-group mt-1 mt-md-2 align-items-start">
              <div class="col-12 col-md-2">
                <label for="inputHeaderTitle" class="col-form-label form-label d-flex justify-content-start justify-content-md-center mb-0 mb-md-3">Header Title / Link</label>
              </div>

              <div class="col-12 col-md-9 mt-0">
                <div class="input-group mb-3 pb-4 position-relative gap-2">
                  <div class="col-5">
                    <input type="text" class="form-control" id="header-link" name="title" placeholder="Enter Header title..." aria-label="title" data-parsley-required="true" />
                  </div>
                  <div class="col-5">
                    <input type="text" class="form-control rounded-end" id="header-link" name="link" placeholder="Enter Header link" aria-label="link" data-parsley-required="true" />
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-4 col-md-3"></div>
              <div class="col-12 col-md-9 form-button">
                <a href="" role="button" class="btn form-cancel my-0">cancel</a>
                <button type="submit" class="btn form-btn my-0">save</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection