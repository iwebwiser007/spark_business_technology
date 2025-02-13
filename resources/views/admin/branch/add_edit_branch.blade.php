@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard head start here... -->
                  <div class="dash-head">
                    <!-- dashboard banner title start here  -->
                    <div class="dash_title">
                      <a
                        href="branch_list.html"
                        role="button"
                        class="btn link-btn"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#FFFFFF"
                        >
                          <path
                            d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z"
                          />
                        </svg>
                      </a>
                      <h2 class="main-title">Add Branch</h2>
                    </div>

                    <!-- dashboard banner title end here  -->

                    <!-- add banner breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <!-- <li class="breadcrumb-item">
                        <a href="#">Branches</a>
                      </li> -->
                      <li class="breadcrumb-item active" aria-current="page">
                        Add Branch
                      </li>
                    </ol>
                    <!-- add banner breadcrumb end here  -->
                  </div>
                  <!-- dashboard-head end here... -->

                  <div class="container-fluid">
                    <!-- card start here  -->
                    <div class="card">
                      <!-- card header start here  -->
                      <div class="card-header">
                        <div
                          class="card-title d-flex justify-content-between align-items-center"
                        >
                          <h2>Add Branch</h2>
                        </div>
                      </div>
                      <!-- card header end here  -->

                      <!-- card body start here  
                      <div class="card-body">
                        <!-- form start here  
                        <form class="upload-form">
                          <!-- title area start here  
                          <div class="row form-group mt-1 mt-md-2">
                            <!-- title label start here  
                            <div class="col-12 col-md-3">
                              <label
                                for="inputBranchTitle"
                                class="col-form-label form-label d-flex justify-content-left "
                                >Branch Title
                              </label>
                            </div>
                            <!-- title label end here  -->

                            <!-- title input start here 
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputBranchTitle"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Title..."
                                required
                              />
                            </div>
                            <!-- title input end here  
                            <div class="col-1"></div>
                          </div>
                          <!-- title area end here  -->

                          <!-- Address area start here  
                          <div class="row form-group">
                            <!-- Address label start here 
                            <div class="col-12 col-md-3">
                              <label
                                for="inputAddress"
                                class="col-form-label form-label d-flex justify-content-left "
                                >Address
                              </label>
                            </div>
                            <!-- Address label end here  -->

                            <!-- Address input start here  
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputAddress"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter Address..."
                                required
                              />
                            </div>
                            <!-- Address input end here  
                            <div class="col-1"></div>
                          </div>
                          <!-- Address area end here  -->

                          <!-- City area start here  
                          <div class="row form-group">
                            <!-- City label start here  
                            <div class="col-12 col-md-3">
                              <label
                                for="inputCity"
                                class="col-form-label form-label d-flex justify-content-left "
                                >City
                              </label>
                            </div>
                            <!-- City label end here  -->

                            <!-- City input start here  
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputCity"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter City..."
                                required
                              />
                            </div>
                            <!-- City input end here  
                            <div class="col-1"></div>
                          </div>
                          <!-- City area end here  -->

                          <!-- State area start here  
                          <div class="row form-group">
                            <!-- State label start here  
                            <div class="col-12 col-md-3">
                              <label
                                for="inputState"
                                class="col-form-label form-label d-flex justify-content-left "
                                >State/Province
                              </label>
                            </div>
                            <!-- State label end here  -->

                            <!-- State input start here  
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputState"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter State/Province..."
                                required
                              />
                            </div>
                            <!-- State input end here  
                            <div class="col-1"></div>
                          </div>
                          <!-- State area end here  -->

                          <!-- Zip-code area start here  
                          <div class="row form-group">
                            <!-- Zip-code label start here  
                            <div class="col-12 col-md-3">
                              <label
                                for="inputZip"
                                class="col-form-label form-label d-flex justify-content-left"
                                >Zip-Code
                              </label>
                            </div>
                            <!-- Zip-code label end here  -->

                            <!-- Zip-code input start here  
                            <div class="col-12 col-md-8 mt-0">
                              <input
                                type="text"
                                id="inputZip"
                                class="form-control form-control-lg form-input"
                                placeholder="Enter zip-code..."
                                required
                              />
                            </div>
                            <!-- Zip-code input end here  
                            <div class="col-1"></div>
                          </div>
                          <!-- Zip-code area end here  -->

                          <!-- Country area start here  
                          <div class="row form-group">
                            <!-- Country description label start here  
                            <div class="col-12 col-md-3">
                              <label
                                for="inputCountryDescription"
                                class="col-form-label form-label d-flex justify-content-left"
                                >Country/region</label
                              >
                            </div>
                            <!-- Country description label end here  -->

                            <!-- Country description textarea box start here  
                            <div class="col-12 col-md-8 mt-0">
                              <select
                                id="country"
                                name="country"
                                class="form-control form-control-lg form-input"
                              >
                                <option id="place">Select Country</option>
                                <option value="Australia">Australia</option>
                                <option value="Canada">Canada</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="USA">USA</option>
                              </select>
                            </div>

                            <!-- Country description textarea box end here  
                            <div class="col-1"></div>
                          </div>
                          <!-- Country area end here  -->

                          <!-- Page Select area start here  
                          <div class="row form-group">
                            <!-- Page Select label start here  
                            <div class="col-12 col-md-3">
                              <label
                                for="pageSelect"
                                class="col-form-label form-label d-flex justify-content-left "
                                >Page Select</label
                              >
                            </div>
                            <!-- Page Select label end here  -->

                            <!-- Page Select select start here  
                            <div class="col-12 col-md-8 mt-0">
                              <select
                                name="pageSelect"
                                class="form-control form-control-lg form-input"
                              >
                                <option id="place">Select Page</option>
                                <option value="Global">Global</option>
                                <option value="Local">Local</option>
                              </select>
                            </div>

                            <!-- Page Select select end here  
                            <div class="col-1"></div>
                          </div>
                          <!-- Page Select area end here  -->

                          <!-- save button start here  
                          <div class="row">
                            <div class="col-4 col-md-3"></div>
                            <div class="col-12 col-md-9 form-button">
                              <a
                                href="branch_list.html"
                                role="button"
                                class="btn form-cancel my-0"
                                >cancel</a
                              >
                              <a
                                href="#"
                                role="button"
                                class="btn form-btn my-0"
                                >save</a
                              >
                            </div>
                          </div>
                          <!-- save button end here  
                        </form>
                        <!-- form end here  
                      </div>
                      <!-- card body end here  -->



<!-- Card Body Start Here -->
<div class="card-body">
  <!-- Form Start Here -->
  <form class="upload-form">
    <div class="row">
      <!-- Branch Title -->
      <div class="col-md-6">
        <label for="inputBranchTitle" class="col-form-label form-label">Branch Title</label>
        <input type="text" id="inputBranchTitle" class="form-control form-control-lg form-input" placeholder="Enter Title..." required />
      </div>

      <!-- Address -->
      <div class="col-md-6">
        <label for="inputAddress" class="col-form-label form-label">Address</label>
        <input type="text" id="inputAddress" class="form-control form-control-lg form-input" placeholder="Enter Address..." required />
      </div>
    </div>

    <div class="row mt-3">
      <!-- City -->
      <div class="col-md-6">
        <label for="inputCity" class="col-form-label form-label">City</label>
        <input type="text" id="inputCity" class="form-control form-control-lg form-input" placeholder="Enter City..." required />
      </div>

      <!-- State/Province -->
      <div class="col-md-6">
        <label for="inputState" class="col-form-label form-label">State/Province</label>
        <input type="text" id="inputState" class="form-control form-control-lg form-input" placeholder="Enter State/Province..." required />
      </div>
    </div>

    <div class="row mt-3">
      <!-- Zip-Code -->
      <div class="col-md-6">
        <label for="inputZip" class="col-form-label form-label">Zip-Code</label>
        <input type="text" id="inputZip" class="form-control form-control-lg form-input" placeholder="Enter zip-code..." required />
      </div>

      <!-- Country/Region -->
      <div class="col-md-6">
        <label for="inputCountry" class="col-form-label form-label">Country/Region</label>
        <select id="inputCountry" class="form-control form-control-lg form-input">
          <option>Select Country</option>
          <option value="Australia">Australia</option>
          <option value="Canada">Canada</option>
          <option value="India">India</option>
          <option value="USA">USA</option>
        </select>
      </div>
    </div>

    <div class="row mt-3">
      <!-- Page Select -->
      <div class="col-md-6">
        <label for="pageSelect" class="col-form-label form-label">Page Select</label>
        <select id="pageSelect" class="form-control form-control-lg form-input">
          <option>Select Page</option>
          <option value="Global">Global</option>
          <option value="Local">Local</option>
        </select>
      </div>

      <div class="col-md-6">
        <!-- Empty column to balance alignment -->
      </div>
    </div>

    <!-- Save button -->
    <div class="row mt-4">
      <div class="col-12 d-flex justify-content-end">
        <a href="branch_list.html" role="button" class="btn form-cancel mx-2">Cancel</a>
        <a href="#" role="button" class="btn form-btn">Save</a>
      </div>
    </div>
  </form>
  <!-- Form End Here -->
</div>
<!-- Card Body End Here -->














                    </div>
                    <!-- card end here  -->
                  </div>
                </div>
              </div>
              <!-- main data end here  -->
            </div>
@endsection