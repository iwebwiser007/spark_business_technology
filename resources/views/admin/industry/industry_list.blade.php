@extends('components.admin.layouts')
@section('content') 
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard head start here... -->
                  <div class="dash-head d-flex justify-content-between">
                    <div class="dash_title">
                      <!-- dashboard banner title start here  -->
                      <h2 class="main-title">Industry List</h2>
                      <!-- dashboard banner title end here  -->
                    </div>

                    <!-- add banner breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Industry List
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
                          <h2>Industry List</h2>
                          <a href="add_industry.html" class="btn sub_btn"
                            >ADD</a
                          >
                        </div>
                      </div>
                      <!-- card header end here  -->

                      <!-- card body start here  -->
                      <div class="card-body">
                        <!-- form start here  -->
                        <form class="data-form">
                          <div class="form-group">
                            <select name="cars" id="cars">
                              <option value="volvo">Show 10</option>
                              <option value="saab">Show 20</option>
                              <option value="mercedes">shop 50</option>
                            </select>
                            <span>
                              <input
                                type="search"
                                placeholder="search..."
                                class="d-none d-sm-block"
                              />
                            </span>
                          </div>
                        </form>
                        <!-- form end here  -->

                        <!-- table content start here  -->
                        <div class="table-content table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Button Link</th>
                                <th scope="col">Services</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- Industry-1 start here  -->
                              <tr>
                                <!-- Industry-1 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/health_care.jpg"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- Industry-1 image end here  -->

                                <!-- Industry-1 title start here  -->
                                <td>
                                  <p class="text-nowrap">Health Care</p>
                                </td>
                                <!-- Industry-1 title end here  -->

                                <!-- Industry-1-1 Description start here  -->
                                <td class="banner_desc">
                                  <p class="desc text-truncate">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Voluptatum, fugit! Lorem
                                    ipsum, dolor sit amet consectetur
                                    adipisicing elit. Quasi eligendi laboriosam,
                                    odio fuga repellendus quod cupiditate magnam
                                    ipsa nesciunt ad.
                                  </p>
                                </td>
                                <!-- Industry-1-1 Description end here -->

                                <!-- Industry-1 button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- Industry-1 button link end here  -->

                                <!-- services area start here  -->
                                <td>
                                  <p class="text-truncate">
                                    Mobile App Development
                                  </p>
                                </td>
                                <!-- services area end here  -->

                                <!-- Industry view, edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- Industry edit button start here  -->
                                    <a
                                      role="button"
                                      href="#"
                                      class="btn text-decoration-none table_edit bg-info-subtle"
                                      data-bs-toggle="modal"
                                      data-bs-target="#editModal"
                                      title="Edit"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="rgb(25 135 84)"
                                      >
                                        <path
                                          d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- Industry edit button end here  -->


                                    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered"> <!-- Increased width -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold text-start" id="exampleModalLabel">Edit Health Care</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <form class="upload-form">
                        <!-- Industry Title & Service Title (Side by Side) -->
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="inputTitle" class="form-label fw-semibold text-start d-block">Industry Title</label>
                                <input type="text" id="inputTitle" class="form-control text-start" placeholder="Enter Title..." required />
                            </div>

                            <div class="col-md-4">
                                <label for="serviceTitle" class="form-label fw-semibold text-start d-block">Service Title</label>
                                <input type="text" id="serviceTitle" class="form-control text-start" placeholder="Enter Service Title..." required />
                            </div>

                            <div class="col-md-4">
                                <label for="btnLink" class="form-label fw-semibold text-start d-block">Button Link</label>
                                <input type="text" id="btnLink" class="form-control text-start" placeholder="Enter Link..." required />
                            </div>


                        </div>

                        <!-- Description & Button Link (Side by Side) 
                        <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label for="inputDescription" class="form-label fw-semibold text-start d-block">Description</label>
                                <textarea class="form-control text-start" id="inputDescription" rows="3" placeholder="Write your description here..." required></textarea>
                            </div>
                            <!-- <div class="col-md-6">
                                <label for="btnLink" class="form-label fw-semibold text-start d-block">Button Link</label>
                                <input type="text" id="btnLink" class="form-control text-start" placeholder="Enter Link..." required />
                            </div> 
                        </div>

                        <!-- Image Upload & Preview (Side by Side) -
                        <div class="row g-3 mt-2 align-items-center">
                            <div class="col-md-6">
                                <label for="upload-photo" class="form-label fw-semibold text-start d-block">Upload Banner Image</label>
                                <input type="file" id="upload-photo" class="form-control">
                            </div>
                            <div class="col-md-6 text-start">
                                <label class="form-label fw-semibold d-block text-start">Image Preview</label>
                                <div class="preview-box">
                                    <img id="previewBannerImg" src="../assets/img/health_care.jpg" alt="Banner Image Preview" class="img-fluid rounded shadow-sm" />
                                    <button type="button" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close" onclick="removeImage()"></button>
                                </div>
                            </div>
                        </div>-->

  <div class="row form-group mt-3">
      <!-- Industry Description -->
      <div class="col-md-6">
        <label for="industryDescription" class="col-form-label form-label text-start d-block">Industry Description</label>
        <textarea class="form-control form-control-lg form-textbox  " id="industryDescription" rows="4" placeholder="Write your Industry description here..." required></textarea>
      </div>
      
      <!-- Upload Image -->
      <div class="col-md-6">
        <label for="industryImg" class="col-form-label form-label">Upload Image</label>
        <div class="form-group mb-20 upload-input">
          <label for="industryImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
            <div class="d-flex flex-column align-items-center gap-3">
              <span>
                <!-- <i class="bi bi-upload" style="font-size: 24px;"></i> -->
              </span>
              <p class="mb-0">Click to Upload Image</p>
            </div>
          </label>
          <input type="file" class="form-control form-control-lg d-none" id="industryImg" placeholder="Upload Industry Image..." />
        </div>
      </div>
    </div>
    





                        <!-- Buttons -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" class="btn btn-outline-secondary me-2 px-4 py-2" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary px-4 py-2">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>





                                    
                                    <!-- Industry delete button start here  -->
                                    <a
                                      href="#"
                                      role="button"
                                      class="btn text-decoration-none table_del bg-danger-subtle"
                                      data-bs-toggle="modal"
                                      data-bs-target="#deleteModal"
                                      title="delete"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="#f70808"
                                      >
                                        <path
                                          d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- Industry delete button end here  -->

                                    <!-- delete modal start here  -->
                                    <div
                                      class="modal fade"
                                      id="deleteModal"
                                      tabindex="-1"
                                      aria-labelledby="exampleModalLabel"
                                      aria-hidden="true"
                                    >
                                      <div
                                        class="modal-dialog modal-dialog-centered"
                                      >
                                        <div class="modal-content">
                                          <!-- close button start here  -->
                                          <a
                                            href="#"
                                            role="button"
                                            data-bs-dismiss="modal"
                                            class="position-absolute end-0 p-2"
                                            arial-label="close"
                                          >
                                            <svg
                                              xmlns="http://www.w3.org/2000/svg"
                                              height="24"
                                              viewBox="0 -960 960 960"
                                              width="24"
                                              fill="#5d6d7e"
                                            >
                                              <path
                                                d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z"
                                              />
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
                                                fill="#dc3545"
                                              >
                                                <path
                                                  d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"
                                                />
                                              </svg>
                                            </span>
                                            <h1
                                              class="modal-title mt-2"
                                              id="exampleModalLabel"
                                            >
                                              Delete Industry
                                            </h1>
                                            <p class="pb-4">
                                              Are you sure you want to remove
                                              this Industry?
                                            </p>

                                            <!-- delete and cancel button start here  -->
                                            <div>
                                              <button
                                                type="button"
                                                class="btn btn-secondary cancel_modal"
                                                data-bs-dismiss="modal"
                                              >
                                                Cancel
                                              </button>

                                              <button
                                                type="button"
                                                class="btn btn-danger del_modal"
                                              >
                                                Delete
                                              </button>
                                            </div>
                                            <!-- delete and cancel button end here  -->
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- delete modal end here  -->
                                  </div>
                                </td>
                                <!-- Industry view, edit and delete button end here  -->
                              </tr>
                              <!-- Industry-1 end here  -->

                              <!-- Industry-2 start here  -->
                              <tr>
                                <!-- Indusrty-2 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/real_state.jpg"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- Indusrty-2 image end here  -->

                                <!-- Indusrty-2 title start here  -->
                                <td>
                                  <p class="text-nowrap">Real State</p>
                                </td>
                                <!-- Indusrty-2 title end here  -->

                                <!-- Industry-2 Description start here  -->
                                <td class="banner_desc">
                                  <p class="desc text-truncate">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                  </p>
                                </td>
                                <!-- Industry-2 Description end here -->

                                <!-- Industry button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- Industry button link end here  -->

                                <!-- services area start here  -->
                                <td>
                                  <p class="text-truncate">Web Development</p>
                                </td>
                                <!-- services area end here  -->

                                <!-- Industry-2 view, edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- Indusrty edit button start here  -->
                                    <a
                                      role="button"
                                      href="#"
                                      class="btn text-decoration-none table_edit bg-info-subtle"
                                      data-bs-toggle="modal"
                                      data-bs-target="#editModal1"
                                      title="Edit"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="rgb(25 135 84)"
                                      >
                                        <path
                                          d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- Indusrty edit button end here  -->

                                    <div class="modal fade" id="editModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered"> <!-- Increased width -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold text-start" id="exampleModalLabel">Edit Real Estate</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <form class="upload-form">
                        <!-- Industry Title & Service Title (Side by Side) -->
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="inputTitle" class="form-label fw-semibold text-start d-block">Industry Title</label>
                                <input type="text" id="inputTitle" class="form-control text-start" placeholder="Enter Title..." required />
                            </div>

                            <div class="col-md-4">
                                <label for="serviceTitle" class="form-label fw-semibold text-start d-block">Service Title</label>
                                <input type="text" id="serviceTitle" class="form-control text-start" placeholder="Enter Service Title..." required />
                            </div>


                            <div class="col-md-4">
                                <label for="btnLink" class="form-label fw-semibold text-start d-block">Button Link</label>
                                <input type="text" id="btnLink" class="form-control text-start" placeholder="Enter Link..." required />
                            </div>



                        </div>

                        <!-- Description & Button Link (Side by Side) -->
                        <!-- <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label for="inputDescription" class="form-label fw-semibold text-start d-block">Description</label>
                                <textarea class="form-control text-start" id="inputDescription" rows="3" placeholder="Write your description here..." required></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="btnLink" class="form-label fw-semibold text-start d-block">Button Link</label>
                                <input type="text" id="btnLink" class="form-control text-start" placeholder="Enter Link..." required />
                            </div>
                        </div> -->

                        <!-- Image Upload & Preview (Side by Side) -->
                        <!-- <div class="row g-3 mt-2 align-items-center">
                            <div class="col-md-6">
                                <label for="upload-photo" class="form-label fw-semibold text-start d-block">Upload Banner Image</label>
                                <input type="file" id="upload-photo" class="form-control">
                            </div>
                            <div class="col-md-6 text-start">
                                <label class="form-label fw-semibold d-block">Image Preview</label>
                                <div class="preview-box">
                                    <img id="previewBannerImg" src="../assets/img/real_state.jpg" alt="Banner Image Preview" class="img-fluid rounded shadow-sm" />
                                    <button type="button" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close" onclick="removeImage()"></button>
                                </div>
                            </div>
                        </div> -->

                        
                        
                <!-- Description (Full width) 
                <div class="row form-group mt-3">
                    <div class="col-md-6">
                        <label for="inputBannerDescription" class="form-label fw-semibold text-start d-block">Banner Description</label>
                        <textarea class="form-control" id="inputBannerDescription" name="description" rows="3" placeholder="Write your description here..." data-parsley-required="true"></textarea>
                    </div>

                    
<!-- Image Upload -->
<!-- <div class="col-md-6">
        <label for="bannerImage" class="form-label fw-semibold text-start d-block">Upload Banner Image</label>
        <div class="form-group mb-3 upload-input styled-box">
            <label for="bannerImage" class="form-label form-img-uploader d-flex align-items-center justify-content-center w-100 py-3 position-relative" style="cursor: pointer;">
                <div class="d-flex flex-column align-items-center gap-2">
                    <span>
                        <i class="bi bi-upload" style="font-size: 24px; color: #6c757d;"></i>
                    </span>
                    <p class="mb-0 text-muted">Click to Upload Image</p>
                </div>
                <img id="previewImg" src="#" alt="Image Preview" class="d-none img-fluid rounded mt-2" style="max-width: 100%; max-height: 150px;">
            </label>
            <input type="file" name="banner_image" id="bannerImage" class="d-none" accept="image/*" onchange="previewImage(event)">
        </div>
    </div> 
</div>-->

    <div class="row form-group mt-3">
      <!-- Industry Description -->
      <div class="col-md-6">
        <label for="industryDescription" class="col-form-label form-label">Industry Description</label>
        <textarea class="form-control form-control-lg form-textbox  " id="industryDescription" rows="4" placeholder="Write your Industry description here..." required></textarea>
      </div>
      
      <!-- Upload Image -->
      <div class="col-md-6">
        <label for="industryImg" class="col-form-label form-label">Upload Image</label>
        <div class="form-group mb-20 upload-input">
          <label for="industryImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
            <div class="d-flex flex-column align-items-center gap-3">
              <span>
                <!-- <i class="bi bi-upload" style="font-size: 24px;"></i> -->
              </span>
              <p class="mb-0">Click to Upload Image</p>
            </div>
          </label>
          <input type="file" class="form-control form-control-lg d-none" id="industryImg" placeholder="Upload Industry Image..." />
        </div>
      </div>
    </div>
    



                        <!-- Buttons -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" class="btn btn-secondary me-2 px-4 py-2" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary px-4 py-2">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                                    <!-- Indusrty delete button start here  -->
                                    <a
                                      href="#"
                                      role="button"
                                      class="btn text-decoration-none table_del bg-danger-subtle"
                                      data-bs-toggle="modal"
                                      data-bs-target="#deleteModal"
                                      title="delete"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="#f70808"
                                      >
                                        <path
                                          d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- Indusrty delete button end here  -->
                                  </div>
                                </td>
                                <!-- Industry-2 view, edit and delete button end here  -->
                              </tr>
                              <!-- Industry-2 end here  -->

                              <!-- Industry-3 start here  -->
                              <tr>
                                <!-- Indusrty-3 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/Education.jpg"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- Indusrty-3 image end here  -->

                                <!-- Indusrty-3 title start here  -->
                                <td>
                                  <p class="text-nowrap">Education</p>
                                </td>
                                <!-- Indusrty-3 title end here  -->

                                <!-- Indusrty-3 Description start here  -->
                                <td class="banner_desc">
                                  <p class="desc text-truncate">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                  </p>
                                </td>
                                <!-- Indusrty-3 Description end here -->

                                <!-- Industru button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- Industru button link end here  -->

                                <!-- services area start here  -->
                                <td>
                                  <p class="text-truncate">Digital Marketing</p>
                                </td>
                                <!-- services area end here  -->

                                <!-- Industru-3 view, edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- Industry edit button start here  -->
                                    <a
                                      role="button"
                                      href="#"
                                      class="btn text-decoration-none table_edit bg-info-subtle"
                                      data-bs-toggle="modal"
                                      data-bs-target="#editModal2"
                                      title="Edit"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="rgb(25 135 84)"
                                      >
                                        <path
                                          d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- Industry edit button end here  -->

                                    <div class="modal fade" id="editModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered"> <!-- Increased width -->
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5 fw-bold text-start" id="exampleModalLabel">Edit Education</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <div class="container">
                    <form class="upload-form">
                        <!-- Industry Title & Service Title (Side by Side) -->
                        <div class="row g-3">
                            <div class="col-md-4">
                                <label for="inputTitle" class="form-label fw-semibold text-start d-block">Industry Title</label>
                                <input type="text" id="inputTitle" class="form-control text-start" placeholder="Enter Title..." required />
                            </div>

                            <div class="col-md-4">
                                <label for="serviceTitle" class="form-label fw-semibold text-start d-block">Service Title</label>
                                <input type="text" id="serviceTitle" class="form-control text-start" placeholder="Enter Service Title..." required />
                            </div>

                            <div class="col-md-4">
                                <label for="btnLink" class="form-label fw-semibold text-start d-block">Button Link</label>
                                <input type="text" id="btnLink" class="form-control text-start" placeholder="Enter Link..." required />
                            </div>

                        </div>

                        <!-- Description & Button Link (Side by Side) -->
                        <!-- <div class="row g-3 mt-2">
                            <div class="col-md-6">
                                <label for="inputDescription" class="form-label fw-semibold text-start d-block">Description</label>
                                <textarea class="form-control text-start" id="inputDescription" rows="3" placeholder="Write your description here..." required></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="btnLink" class="form-label fw-semibold text-start d-block">Button Link</label>
                                <input type="text" id="btnLink" class="form-control text-start" placeholder="Enter Link..." required />
                            </div>
                        </div> -->

                        <!-- Image Upload & Preview (Side by Side) -->
                        <!-- <div class="row g-3 mt-2 align-items-center">
                            <div class="col-md-6">
                                <label for="upload-photo" class="form-label fw-semibold text-start d-block">Upload Banner Image</label>
                                <input type="file" id="upload-photo" class="form-control">
                            </div>
                            <div class="col-md-6 text-start">
                                <label class="form-label fw-semibold d-block">Image Preview</label>
                                <div class="preview-box">
                                    <img id="previewBannerImg" src="../assets/img/Education.jpg" alt="Banner Image Preview" class="img-fluid rounded shadow-sm" />
                                    <button type="button" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close" onclick="removeImage()"></button>
                                </div>
                            </div>
                        </div> -->








                        
                <!-- Description (Full width) 
                <div class="row form-group mt-3">
                    <div class="col-md-6">
                        <label for="inputBannerDescription" class="form-label fw-semibold text-start d-block">Banner Description</label>
                        <textarea class="form-control" id="inputBannerDescription" name="description" rows="3" placeholder="Write your description here..." data-parsley-required="true"></textarea>
                    </div>

                    
<!-- Image Upload -
<div class="col-md-6">
        <label for="bannerImage" class="form-label fw-semibold text-start d-block">Upload Banner Image</label>
        <div class="form-group mb-3 upload-input styled-box">
            <label for="bannerImage" class="form-label form-img-uploader d-flex align-items-center justify-content-center w-100 py-3 position-relative" style="cursor: pointer;">
                <div class="d-flex flex-column align-items-center gap-2">
                    <span>
                        <i class="bi bi-upload" style="font-size: 24px; color: #6c757d;"></i>
                    </span>
                    <p class="mb-0 text-muted">Click to Upload Image</p>
                </div>
                <img id="previewImg" src="#" alt="Image Preview" class="d-none img-fluid rounded mt-2" style="max-width: 100%; max-height: 150px;">
            </label>
            <input type="file" name="banner_image" id="bannerImage" class="d-none" accept="image/*" onchange="previewImage(event)">
        </div>
    </div>





                </div>-->




                <div class="row form-group mt-3">
      <!-- Industry Description -->
      <div class="col-md-6">
        <label for="industryDescription" class="col-form-label form-label">Industry Description</label>
        <textarea class="form-control form-control-lg form-textbox  " id="industryDescription" rows="4" placeholder="Write your Industry description here..." required></textarea>
      </div>
      
      <!-- Upload Image -->
      <div class="col-md-6">
        <label for="industryImg" class="col-form-label form-label">Upload Image</label>
        <div class="form-group mb-20 upload-input">
          <label for="industryImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
            <div class="d-flex flex-column align-items-center gap-3">
              <span>
                <!-- <i class="bi bi-upload" style="font-size: 24px;"></i> -->
              </span>
              <p class="mb-0">Click to Upload Image</p>
            </div>
          </label>
          <input type="file" class="form-control form-control-lg d-none" id="industryImg" placeholder="Upload Industry Image..." />
        </div>
      </div>
    </div>
    

                        <!-- Buttons -->
                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" class="btn btn-secondary me-2 px-4 py-2" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary px-4 py-2">Add</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                                    <!-- Industry delete button start here  -->
                                    <a
                                      href="#"
                                      role="button"
                                      class="btn text-decoration-none table_del bg-danger-subtle"
                                      data-bs-toggle="modal"
                                      data-bs-target="#deleteModal"
                                      title="delete"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="#f70808"
                                      >
                                        <path
                                          d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- Industry delete button end here  -->
                                  </div>
                                </td>
                                <!-- Industru-3 view, edit and delete button end here  -->
                              </tr>
                              <!-- Industry-3 end here  -->
                            </tbody>
                          </table>
                        </div>
                        <!-- table content end here  -->
                      </div>
                      <!-- card body end here  -->

                      <!-- card footer start here  -->
                      <div class="card-footer">
                        <p>Showing 1 to 10 of xyz entries</p>

                        <div class="pagination-div">
                          <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item">
                                <a
                                  class="page-link"
                                  href="#"
                                  aria-label="Previous"
                                >
                                  <span aria-hidden="true">&laquo;</span>
                                </a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">1</a>
                              </li>
                              <!-- <li class="page-item">
                                <a class="page-link" href="#">2</a>
                              </li>
                              <li class="page-item">
                                <a class="page-link" href="#">3</a>
                              </li> -->
                              <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                  <span aria-hidden="true">&raquo;</span>
                                </a>
                              </li>
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
@endsection