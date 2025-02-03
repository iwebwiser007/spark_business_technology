@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard-head start here... -->
                  <div class="dash-head d-flex justify-content-between">
                    <div class="dash_title">
                      <!-- dashboard banner title start here  -->
                      <h2 class="main-title">Services List</h2>
                      <!-- dashboard banner title end here  -->
                    </div>

                    <!-- add banner breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <!-- <li class="breadcrumb-item">
                        <a href="#">Services</a>
                      </li> -->
                      <li class="breadcrumb-item active" aria-current="page">
                        Services List
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
                          <h2>Services List</h2>
                          <a href="add_services.html" class="btn sub_btn"
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
                          <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Button Link</th>
                                <th scope="col">Sub-Services</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>

                            <tbody>
                              <!-- service-1 start here  -->
                              <tr>
                                <!-- Service-1 image start here -->
                                <td class="list_img">
                                  <div class="icon_img">
                                    <img
                                      src="../assets/img/mobile.png"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- Service-1 image end here  -->

                                <!-- Service-1 title start here  -->
                                <td>
                                  <p class="text-nowrap">
                                    Mobile App Development
                                  </p>
                                </td>
                                <!-- Service-1 title end here  -->

                                <!-- Service-1 Description start here  -->
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
                                <!-- Service-1 Description end here -->

                                <!-- Service button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- Service button link end here  -->

                                <!-- sub-services title start here  -->
                                <td>
                                  <p class="text-truncate">Sub-Service-1</p>
                                </td>
                                <!-- sub-services title end here  -->

                                <!-- Service edit and delete icon start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- edit button start here  -->
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
                                    <!-- edit button end here  -->

                                    <!-- Edit Modal start here  -->
                                    <div
                                      class="modal fade"
                                      id="editModal"
                                      tabindex="-1"
                                      aria-labelledby="exampleModalLabel"
                                      aria-hidden="true"
                                    >
                                      <div
                                        class="modal-dialog modal-dialog-centered"
                                      >
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1
                                              class="modal-title"
                                              id="exampleModalLabel"
                                            >
                                              Edit Mobile App Development
                                            </h1>
                                            <button
                                              type="button"
                                              class="btn-close"
                                              data-bs-dismiss="modal"
                                              aria-label="Close"
                                            ></button>
                                          </div>

                                          <div class="modal-body">
                                            <div class="container">
                                              <form class="upload-form">
                                                <!-- title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Service Title
                                                    </label>
                                                  </div>
                                                  <!-- title label end here  -->

                                                  <!-- title input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Title..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- title input end here  -->
                                                </div>

                                                <!-- description  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- description label start here  -->
                                                  <div
                                                    class="col-3 d-flex justify-content-center"
                                                  >
                                                    <label
                                                      for="inputDescription"
                                                      class="col-form-label form-label text-break"
                                                      >Description</label
                                                    >
                                                  </div>
                                                  <!-- description label end here  -->

                                                  <!-- description textarea box start here  -->
                                                  <div class="col-9">
                                                    <div class="form-floating">
                                                      <textarea
                                                        class="form-control form-control-lg form-textbox"
                                                        id="inputDescription"
                                                        rows="4"
                                                        cols="30"
                                                        placeholder="write your banner description here..."
                                                      ></textarea>
                                                      <label
                                                        for="inputDescription"
                                                        >write your description
                                                        here...</label
                                                      >
                                                    </div>
                                                  </div>

                                                  <!-- description textarea box end here  -->
                                                </div>

                                                <!-- Sub title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Sub-service Title
                                                    </label>
                                                  </div>
                                                  <!-- title label end here  -->

                                                  <!-- title input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Title..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- title input end here  -->
                                                </div>

                                                <!-- Social Link area start here  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- Social Link label start here  -->
                                                  <div
                                                    class="col-3 d-flex justify-content-center align-items-center"
                                                  >
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Button Link
                                                    </label>
                                                  </div>
                                                  <!-- Social Link label end here  -->

                                                  <!-- Social Link input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Link..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- Social Link input end here  -->
                                                </div>
                                                <!-- Sociall Link area end here  -->

                                                <!-- image  -->
                                                <div
                                                  class="row form-group g-3 align-items-center mt-3"
                                                >
                                                  <!-- upload banner input area start here  -->
                                                  <div class="col-12">
                                                    <div
                                                      class="form-group mb-20 upload-input"
                                                    >
                                                      <label
                                                        for="ImgUpload"
                                                        class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                                      >
                                                        <img
                                                          src="../assets/img/mobile.png"
                                                          class="img-fluid rounded-4"
                                                          width="30%"
                                                          alt="upload image"
                                                        />
                                                        <!-- close button start here  -->
                                                        <button
                                                          type="button"
                                                          data-bs-dismiss="modal"
                                                          class="btn-close position-absolute top-0 end-0 p-2"
                                                          aria-label="Close"
                                                        ></button>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <!-- upload banner input area end here  -->
                                                </div>

                                                <!-- cancel and submit button  -->
                                                <div class="my-3">
                                                  <button
                                                    type="button"
                                                    class="btn btn-secondary cancel_modal"
                                                    data-bs-dismiss="modal"
                                                  >
                                                    Close
                                                  </button>
                                                  <button
                                                    type="button"
                                                    class="btn add_modal"
                                                  >
                                                    Add
                                                  </button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Edit modal end here  -->

                                    <!-- delete button start here  -->
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
                                    <!-- delete button end here  -->

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
                                              Delete Service
                                            </h1>
                                            <p class="pb-4">
                                              Are you sure you want to delete
                                              this Service?
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
                                <!-- Service-1 edit and delete icon end here  -->
                              </tr>
                              <!-- service-1 end here  -->

                              <!-- service-2 start here  -->
                              <tr>
                                <!-- Service-2 image start here -->
                                <td class="list_img">
                                  <div class="icon_img">
                                    <img
                                      src="../assets/img/blockchain.png"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- Service-2 image end here  -->

                                <!-- Service-2 title start here  -->
                                <td>
                                  <p class="text-nowrap">
                                    Blockchain Development
                                  </p>
                                </td>
                                <!-- Service-2 title end here  -->

                                <!-- Service-2 Description start here  -->
                                <td class="banner_desc">
                                  <p class="desc text-truncate">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                  </p>
                                </td>
                                <!-- Service-2 Description end here -->

                                <!-- Service button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- Service button link end here  -->

                                <!-- sub-services title start here  -->
                                <td>
                                  <p class="text-truncate">Sub-Service-2</p>
                                </td>
                                <!-- sub-services title end here  -->

                                <!-- Service-2 edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- edit button start here  -->
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
                                    <!-- edit button end here  -->

                                    <!-- Edit Modal start here  -->
                                    <div
                                      class="modal fade"
                                      id="editModal1"
                                      tabindex="-1"
                                      aria-labelledby="exampleModalLabel"
                                      aria-hidden="true"
                                    >
                                      <div
                                        class="modal-dialog modal-dialog-centered"
                                      >
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1
                                              class="modal-title"
                                              id="exampleModalLabel"
                                            >
                                              Edit Blockchain Development
                                            </h1>
                                            <button
                                              type="button"
                                              class="btn-close"
                                              data-bs-dismiss="modal"
                                              aria-label="Close"
                                            ></button>
                                          </div>

                                          <div class="modal-body">
                                            <div class="container">
                                              <form class="upload-form">
                                                <!-- title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Service Title
                                                    </label>
                                                  </div>
                                                  <!-- title label end here  -->

                                                  <!-- title input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Title..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- title input end here  -->
                                                </div>

                                                <!-- description  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- description label start here  -->
                                                  <div
                                                    class="col-3 d-flex justify-content-center"
                                                  >
                                                    <label
                                                      for="inputDescription"
                                                      class="col-form-label form-label text-break"
                                                      >Description</label
                                                    >
                                                  </div>
                                                  <!-- description label end here  -->

                                                  <!-- description textarea box start here  -->
                                                  <div class="col-9">
                                                    <div class="form-floating">
                                                      <textarea
                                                        class="form-control form-control-lg form-textbox"
                                                        id="inputDescription"
                                                        rows="4"
                                                        cols="30"
                                                        placeholder="write your banner description here..."
                                                      ></textarea>
                                                      <label
                                                        for="inputDescription"
                                                        >write your description
                                                        here...</label
                                                      >
                                                    </div>
                                                  </div>

                                                  <!-- description textarea box end here  -->
                                                </div>

                                                <!-- Sub title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Sub-service Title
                                                    </label>
                                                  </div>
                                                  <!-- title label end here  -->

                                                  <!-- title input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Title..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- title input end here  -->
                                                </div>

                                                <!-- Social Link area start here  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- Social Link label start here  -->
                                                  <div
                                                    class="col-3 d-flex justify-content-center align-items-center"
                                                  >
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Button Link
                                                    </label>
                                                  </div>
                                                  <!-- Social Link label end here  -->

                                                  <!-- Social Link input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Link..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- Social Link input end here  -->
                                                </div>
                                                <!-- Sociall Link area end here  -->

                                                <!-- image  -->
                                                <div
                                                  class="row form-group g-3 align-items-center mt-3"
                                                >
                                                  <!-- upload banner input area start here  -->
                                                  <div class="col-12">
                                                    <div
                                                      class="form-group mb-20 upload-input"
                                                    >
                                                      <label
                                                        for="ImgUpload"
                                                        class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                                      >
                                                        <img
                                                          src="../assets/img/blockchain.png"
                                                          class="img-fluid rounded-4"
                                                          width="30%"
                                                          alt="upload image"
                                                        />
                                                        <!-- close button start here  -->
                                                        <button
                                                          type="button"
                                                          data-bs-dismiss="modal"
                                                          class="btn-close position-absolute top-0 end-0 p-2"
                                                          aria-label="Close"
                                                        ></button>
                                                      </label>
                                                    </div>
                                                  </div>
                                                  <!-- upload banner input area end here  -->
                                                </div>

                                                <!-- cancel and submit button  -->
                                                <div class="my-3">
                                                  <button
                                                    type="button"
                                                    class="btn btn-secondary cancel_modal"
                                                    data-bs-dismiss="modal"
                                                  >
                                                    Close
                                                  </button>
                                                  <button
                                                    type="button"
                                                    class="btn add_modal"
                                                  >
                                                    Add
                                                  </button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Edit modal end here  -->

                                    <!-- delete button start here  -->
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
                                    <!-- delete button end here  -->
                                  </div>
                                </td>
                                <!-- Service-2 edit and delete button end here  -->
                              </tr>
                              <!-- service-2 end here  -->

                              <!-- service-3 start here  -->
                              <tr>
                                <!-- Service-3 image start here -->
                                <td class="list_img">
                                  <div class="icon_img">
                                    <img
                                      src="../assets/img/web-development.png"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- Service-3 image end here  -->

                                <!-- Service-3 title start here  -->
                                <td>
                                  <p class="text-nowrap">Web Development</p>
                                </td>
                                <!-- Service-3 title end here  -->

                                <!-- Service-3 Description start here  -->
                                <td class="banner_desc">
                                  <p class="desc text-truncate">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                  </p>
                                </td>
                                <!-- Service-3 Description end here -->

                                <!-- Service button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- Service button link end here  -->

                                <!-- sub-services title start here  -->
                                <td>
                                  <p class="text-truncate">Sub-Service-3</p>
                                </td>
                                <!-- sub-services title end here  -->

                                <!-- Service edit and delete icon start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- edit button start here  -->
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
                                    <!-- edit button end here  -->

                                    <!-- Edit Modal start here  -->
                                    <div
                                      class="modal fade"
                                      id="editModal2"
                                      tabindex="-1"
                                      aria-labelledby="exampleModalLabel"
                                      aria-hidden="true"
                                    >
                                      <div
                                        class="modal-dialog modal-dialog-centered"
                                      >
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h1
                                              class="modal-title"
                                              id="exampleModalLabel"
                                            >
                                              Edit Web Development
                                            </h1>
                                            <button
                                              type="button"
                                              class="btn-close"
                                              data-bs-dismiss="modal"
                                              aria-label="Close"
                                            ></button>
                                          </div>

                                          <div class="modal-body">
                                            <div class="container">
                                              <form class="upload-form">
                                                <!-- title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Service Title
                                                    </label>
                                                  </div>
                                                  <!-- title label end here  -->

                                                  <!-- title input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Title..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- title input end here  -->
                                                </div>

                                                <!-- description  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- description label start here  -->
                                                  <div
                                                    class="col-3 d-flex justify-content-center"
                                                  >
                                                    <label
                                                      for="inputDescription"
                                                      class="col-form-label form-label text-break"
                                                      >Description</label
                                                    >
                                                  </div>
                                                  <!-- description label end here  -->

                                                  <!-- description textarea box start here  -->
                                                  <div class="col-9">
                                                    <div class="form-floating">
                                                      <textarea
                                                        class="form-control form-control-lg form-textbox"
                                                        id="inputDescription"
                                                        rows="4"
                                                        cols="30"
                                                        placeholder="write your banner description here..."
                                                      ></textarea>
                                                      <label
                                                        for="inputDescription"
                                                        >write your description
                                                        here...</label
                                                      >
                                                    </div>
                                                  </div>

                                                  <!-- description textarea box end here  -->
                                                </div>

                                                <!-- Sub title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Sub-service Title
                                                    </label>
                                                  </div>
                                                  <!-- title label end here  -->

                                                  <!-- title input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Title..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- title input end here  -->
                                                </div>

                                                <!-- Social Link area start here  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- Social Link label start here  -->
                                                  <div
                                                    class="col-3 d-flex justify-content-center align-items-center"
                                                  >
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Button Link
                                                    </label>
                                                  </div>
                                                  <!-- Social Link label end here  -->

                                                  <!-- Social Link input start here  -->
                                                  <div class="col-9">
                                                    <div class="mb-3 mt-3">
                                                      <input
                                                        type="text"
                                                        id="inputTitle"
                                                        class="form-control form-control-lg form-input"
                                                        placeholder="Enter Link..."
                                                        required
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- Social Link input end here  -->
                                                </div>
                                                <!-- Sociall Link area end here  -->

                                                <!-- image  -->
                                                <div
                                                  class="row form-group g-3 align-items-center mt-3"
                                                >
                                                  <!-- upload banner input area start here  -->
                                                  <div class="col-12">
                                                    <div
                                                      class="form-group mb-20 upload-input"
                                                    >
                                                      <label
                                                        for="cateImg"
                                                        class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4"
                                                      >
                                                        <div
                                                          class="d-flex flex-column align-items-center gap-3"
                                                        >
                                                          <span>
                                                            <svg
                                                              xmlns="http://www.w3.org/2000/svg"
                                                              version="1.1"
                                                              xmlns:xlink="http://www.w3.org/1999/xlink"
                                                              width="40"
                                                              height="40"
                                                              x="0"
                                                              y="0"
                                                              viewBox="0 0 512.056 512.056"
                                                              style="
                                                                enable-background: new
                                                                  0 0 512 512;
                                                              "
                                                              xml:space="preserve"
                                                              class=""
                                                            >
                                                              <g>
                                                                <path
                                                                  d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z"
                                                                  fill="#818898"
                                                                  opacity="1"
                                                                  data-original="#818898"
                                                                  class=""
                                                                ></path>
                                                                <path
                                                                  d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z"
                                                                  fill="#818898"
                                                                  opacity="1"
                                                                  data-original="#818898"
                                                                  class=""
                                                                ></path>
                                                              </g>
                                                            </svg>
                                                          </span>
                                                          <p class="mb-0">
                                                            Upload Image / Icon
                                                          </p>
                                                        </div>
                                                        <div
                                                          class="upload-img d-none"
                                                        >
                                                          <img
                                                            src="../assets/img/login-left.jpg"
                                                            class="rounded-4"
                                                            alt="upload-img"
                                                          />
                                                        </div>
                                                      </label>
                                                      <input
                                                        type="file"
                                                        class="form-control form-control-lg d-none"
                                                        id="cateImg"
                                                        placeholder="Enter Category"
                                                      />
                                                    </div>
                                                  </div>
                                                  <!-- upload banner input area end here  -->
                                                </div>

                                                <!-- cancel and submit button  -->
                                                <div class="my-3">
                                                  <button
                                                    type="button"
                                                    class="btn btn-secondary cancel_modal"
                                                    data-bs-dismiss="modal"
                                                  >
                                                    Close
                                                  </button>
                                                  <button
                                                    type="button"
                                                    class="btn add_modal"
                                                  >
                                                    Add
                                                  </button>
                                                </div>
                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <!-- Edit modal end here  -->

                                    <!-- delete button start here  -->
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
                                    <!-- delete button end here  -->
                                  </div>
                                </td>
                                <!-- Service edit and delete icon end here  -->
                              </tr>
                              <!-- service-3 end here  -->
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