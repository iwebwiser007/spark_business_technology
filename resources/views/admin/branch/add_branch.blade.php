@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
@section('content')
<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash-head">
        <div class="dash_title">
          <a
            href="{{url()->previous()}}"
            role="button"
            class="btn link-btn">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="20"
              viewBox="0 -960 960 960"
              width="20"
              fill="#FFFFFF">
              <path
                d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
            </svg>
          </a>
          <h2 class="main-title">Add Branch</h2>
        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Add Branch
          </li>
        </ol>
      </div>
      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Add Branch</h2>
            </div>
          </div>
          <div class="card-body">
            <form class="upload-form" action="{{route('admin.branchStore')}}" method="POST" enctype="multipart/form-data" data-parsley-validate>
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      for="inputBranchTitle"
                      class="col-form-label form-label">Branch Title
                      <span class="text-danger">*</span> </label>
                    <input
                      type="text"
                      id="inputBranchTitle"
                      name="title"
                      class="form-control form-input"
                      placeholder="Enter Title..."
                      data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      for="inputAddress"
                      class="col-form-label form-label">Address
                      <span class="text-danger">*</span></label>
                    <input
                      type="text"
                      id="inputAddress"
                      name="address"
                      class="form-control form-input"
                      placeholder="Enter Address..."
                      data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      for="inputCity"
                      class="col-form-label form-label">City
                      <span class="text-danger">*</span> </label>
                    <input
                      type="text"
                      id="inputCity"
                      name="city"
                      class="form-control form-input"
                      placeholder="Enter City..."
                      data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      for="inputState"
                      class="col-form-label form-label">State
                      <span class="text-danger">*</span> </label>
                    <input
                      type="text"
                      id="inputState"
                      name="state"
                      class="form-control form-input"
                      placeholder="Enter State/Province..."
                      data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      for="inputZip"
                      class="col-form-label form-label">Zip-Code
                      <span class="text-danger">*</span> </label>
                    <input
                      type="number"
                      id="inputZip"
                      name="zip_code"
                      class="form-control form-input"
                      placeholder="Enter zip-code..."
                      data-parsley-required="true" />
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      for="inputCountryDescription"
                      class="col-form-label form-label">Country/region <span class="text-danger">*</span></label>
                    <select
                      id="country"
                      name="country"
                      class="form-control form-input" data-parsley-required="true">
                      <option value="" disabled selected>Select Country</option>
                      @foreach ($countries as $country)
                      <option value="{{ $country->country_name }}">{{ $country->country_name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label
                      for="pageSelect"
                      class="col-form-label form-label">Page Select <span class="text-danger">*</span></label>
                    <select
                      id="pageSelect"
                      name="pageSelect"
                      class="form-control form-input" data-parsley-required="true">
                      <option value="" disabled selected>Select Page</option>
                      <option value="Global">Global</option>
                      <option value="Local">Local</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-4 col-md-3"></div>
                <div class="col-12 col-md-9 form-button">
                  <a href="" role="button" class="btn form-cancel my-0">Cancel</a>
                  <button type="submit" class="btn form-btn my-0">Save</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection