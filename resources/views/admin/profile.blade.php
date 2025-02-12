@extends('components.admin.layouts')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery first -->
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.css">
<script src="https://cdn.jsdelivr.net/npm/parsleyjs@2.9.2/dist/parsley.min.js"></script>
@section('content')
<div class="main-right-container" id="main-right-container">
    <div class="container-fluid">
        <!-- dashboard-head start here... -->
        <div class="dash-head d-flex justify-content-between">
            <!-- dashboard banner title start here  -->
            <div class="dash_title">
                <a href="{{url()->previous()}}" role="button" class="btn link-btn">
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
                <h2 class="main-title ms-2">Profile</h2>
            </div>
            <!-- dashboard banner title end here  -->

            <!-- add banner breadcrumb start here  -->
            <ol class="breadcrumb my-3">
                <li class="breadcrumb-item">
                    <a href="{{route('dashboard')}}">Dashboard</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    Profile
                </li>
            </ol>
            <!-- add banner breadcrumb end here  -->
        </div>

        @if (Session::has('success_messaage'))
                    <!-- Check vendorRegister() method in Front/VendorController.php -->
                    <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
                        role="alert">
                        <div>
                            <strong>Success:</strong> {{ Session::get('success_messaage') }}
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
        <!-- dashboard-head end here... -->

        <div class="container-fluid">
            <!-- card start here  -->
            <div class="card">
                <!-- card body start here  -->
                <div class="card-body">
                    <!-- admin information start here  -->
                    <div class="d-flex align-items-start w-100 admin_info">
                        <!-- admin image start here  -->
                        <span class="admin_logo">
                            <img
                                src="../assets/img/default.jpg"
                                alt="admin"
                                class="img-fluid" />
                        </span>
                        <!-- admin image end here  -->

                        <!-- admin information start here  -->
                        <div class="profile-info py-2 ms-3">
                            <!-- name  -->
                            <h2>{{$admin->name}}</h2>

                            <!-- email  -->
                            <p>
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="20"
                                    viewBox="0 -960 960 960"
                                    width="20"
                                    fill="#5f6368">
                                    <path
                                        d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z" />
                                </svg>
                                {{$admin->email}}
                            </p>
                        </div>
                        <!-- admin information end here  -->

                        <!-- edit and change password button start here  -->
                        <div class="d-flex action_btn ms-auto">
                            <!-- edit icon start here  -->
                            <a href="#editBox" role="button" class="p-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="16"
                                    viewBox="0 -960 960 960"
                                    width="16"
                                    fill="#0029ff">
                                    <path
                                        d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z" />
                                </svg>
                            </a>
                            <!-- edit icon end here  -->

                            <!-- change password icon start here  -->
                            <a href="#passBox" role="button" class="p-2">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    height="16"
                                    viewBox="0 -960 960 960"
                                    width="16"
                                    fill="#0029ff">
                                    <path
                                        d="M480-80q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480h80q0 66 25 124.5t68.5 102q43.5 43.5 102 69T480-159q134 0 227-93t93-227q0-134-93-227t-227-93q-89 0-161.5 43.5T204-640h116v80H80v-240h80v80q55-73 138-116.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm-80-240q-17 0-28.5-11.5T360-360v-120q0-17 11.5-28.5T400-520v-40q0-33 23.5-56.5T480-640q33 0 56.5 23.5T560-560v40q17 0 28.5 11.5T600-480v120q0 17-11.5 28.5T560-320H400Zm40-200h80v-40q0-17-11.5-28.5T480-600q-17 0-28.5 11.5T440-560v40Z" />
                                </svg>
                            </a>
                            <!-- change password icon end here  -->
                        </div>
                        <!-- edit and change password button end here  -->
                    </div>
                    <!-- admin information end here  -->
                </div>
                <!-- card body end here  -->
            </div>
            <!-- card end here  -->

            <!-- edit box start here  -->
            <div class="row mx-1 my-4" id="editBox">
                <div class="card">
                    <!-- card header start here  -->
                    <div class="card-header">
                        <div
                            class="card-title d-flex justify-content-between align-items-center">
                            <h2>Edit Profile</h2>
                        </div>
                    </div>
                    <!-- card header end here  -->
                    

                    <!-- card body start here  -->
                    <div class="card-body">


                        <!-- form start here  -->

                        <form class="upload-form mt-0" action="{{ route('admin.editProfile') }}" method="POST" data-parsley-validate>
                            @csrf
                            <!-- Edit area start here  -->
                            <div class="row form-group align-items-center">
                                <!-- Edit Name start here  -->
                                <div class="col-12 col-md-3">
                                    <!-- label  -->
                                    <label
                                        for="inputName"
                                        class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Name
                                    </label>
                                </div>
                                <!-- Edit Name end here  -->

                                <!-- Edit Name form start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                    <div>
                                        <input
                                            type="text"
                                            id="inputName"
                                            name="name"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter New Name..."
                                            data-parsley-required="true" />
                                    </div>
                                </div>
                                <!-- Edit Name form end here  -->
                                <div class="col-1 d-none d-md-block"></div>
                            </div>
                            <!-- Edit area end here  -->

                            <!-- Edit email area start here  -->
                            <div class="row form-group align-items-center">
                                <!-- Edit Email label start here  -->
                                <div class="col-12 col-md-3">
                                    <label
                                        for="inputEmail"
                                        class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Email
                                    </label>
                                </div>
                                <!-- Edit Email label end here  -->

                                <!-- Edit Email input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                    <input
                                        type="text"
                                        id="inputEmail"
                                        name="email"
                                        class="form-control form-control-lg form-input"
                                        placeholder="Enter New Email..."
                                        data-parsley-required="true" />
                                </div>
                                <!-- Edit Email input end here  -->

                                <div class="col-1 d-none d-md-block"></div>
                            </div>
                            <!-- Edit email area end here  -->

                            <!-- Save button start here  -->
                            <div class="row align-items-center">
                                <div class="col-4 col-md-3"></div>
                                <div class="col-8 col-md-9">
                                    <button type="submit" class="btn form-btn">Edit</button>
                                </div>
                            </div>
                            <!-- Edit button end here  -->
                        </form>
                        <!-- form end here  -->
                    </div>
                    <!-- card body end here  -->
                </div>
            </div>
            <!-- edit box end here  -->

            <!-- change pass start here  -->
            <div class="row mx-1 my-4">
                <div class="card" id="passBox">
                    <!-- card header start here  -->
                    <div class="card-header">
                        <div
                            class="card-title d-flex justify-content-between align-items-center">
                            <h2>Change Password</h2>
                        </div>
                    </div>
                    <!-- card header end here  -->

                    <!-- card body start here  -->
                    <div class="card-body">
                  
                        <!-- form start here  -->
                        <form class="upload-form" action="{{ route('admin.updatePassword') }}" method="POST" data-parsley-validate>
                            @csrf
                            <!-- New Password area start here  -->
                            <div class="row form-group">
                                <!-- New Password start here  -->
                                <div
                                    class="col-12 col-md-3 d-flex align-items-center justify-content-md-center justify-content-start">
                                    <label
                                        for="newPassword"
                                        class="col-form-label form-label">New Password
                                    </label>
                                </div>
                                <!-- New Password end here  -->

                                <!-- New Password form start here  -->
                                <div class="col-12 col-md-8">
                                    <div>
                                        <input
                                            type="text"
                                            id="newPassword"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter New Password..."
                                            name="password"
                                            data-parsley-required="true"
                                            data-parsley-minlength="6"
                                            data-parsley-minlength-message="Password must be at least 6 characters long." />
                                    </div>
                                </div>
                                <!-- New Password form end here  -->
                                <div class="col-1 d-none d-md-block"></div>
                            </div>
                            <!-- New Password area end here  -->

                            <!-- Confirm Password area start here  -->
                            <div class="row form-group">
                                <!-- Confirm Password label start here  -->
                                <div
                                    class="col-12 col-md-3 d-flex justify-content-md-center justify-content-start align-items-center">
                                    <label
                                        for="confirmPass"
                                        class="col-form-label form-label">Confirm Password
                                    </label>
                                </div>
                                <!-- Confirm Password label end here  -->

                                <!-- Confirm Password input start here  -->
                                <div class="col-12 col-md-8">
                                    <div>
                                        <input
                                            type="text"
                                            id="confirmPass"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Confirm New Password..."
                                            data-parsley-required="true"
                                             data-parsley-minlength="6"
                        data-parsley-minlength-message="Confirm Password must be at least 6 characters long."
                                            data-parsley-equalto="#newPassword"
                        data-parsley-equalto-message="Passwords do not match!" />
                                    </div>
                                </div>
                                <!-- Confirm Password input end here  -->

                                <div class="col-1 d-none d-md-block"></div>
                            </div>
                            <!-- Confirm Password area end here  -->

                            <!-- Save button start here  -->
                            <div class="row align-items-center">
                                <div class="col-4 col-md-3"></div>
                                <div class="col-8 col-md-9">
                                    <button type="submit" class="btn form-btn">CHANGE</button>
                                    <!-- <input
                                        type="button"
                                        role="button"
                                        class="btn form-btn"
                                        value="CHANGE" /> -->
                                </div>
                            </div>
                            <!-- Save button end here  -->
                        </form>
                        <!-- form end here  -->
                    </div>
                    <!-- card body end here  -->
                </div>
            </div>
            <!-- change pass end here  -->
        </div>
    </div>
</div>
@endsection



