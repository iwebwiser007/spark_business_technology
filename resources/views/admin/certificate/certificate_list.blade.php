@extends('components.admin.layouts')
@section('content') 
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard banner start here... -->
                  <div class="dash-head d-flex justify-content-between">
                    <div class="dash_title">
                      <!-- dashboard banner title start here  -->
                      <h2 class="main-title">Certificate List</h2>
                      <!-- dashboard banner title end here  -->
                    </div>

                    <!-- add banner breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="#">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Certificate List
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
                          <h2>Certificate List</h2>
                          <a href="add_certificate.html" class="btn sub_btn"
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
                          <table class="table ">
                            <thead>
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- client-1 start here  -->
                              <tr>
                                <!-- client-1 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/certificate-1.webp"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- client-1 image end here  -->

                                <!-- client-1 title start here  -->
                                <td>
                                  <p class="text-nowrap">Certificate-1</p>
                                </td>
                                <!-- client-1 title end here  -->

                                <!-- client edit and delete icon start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- client edit button start here  -->
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
                                    <!-- client edit button end here  -->

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
                                              Edit Certificate-1
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
                                              <form class="compact-modal">
                                                <!-- title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Certificate Title
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

                                                <!-- image  -->
                                                <div
                                                  class="row form-group g-3 align-items-center mt-3"
                                                >
                                                  <!-- upload input area start here  -->
                                                  <div class="col-12">
                                                    <div
                                                      class="form-group mb-20 upload-input"
                                                    >
                                                      <label
                                                        for="ImgUpload"
                                                        class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                                      >
                                                        <img
                                                          src="../assets/img/certificate-1.webp"
                                                          class="img-fluid rounded-4"
                                                          width="50%"
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
                                                  <!-- upload  input area end here  -->
                                                </div>

                                                <!-- cancel and submit button  -->
                                                <div class="my-3 form-button">
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

                                    <!-- client delete button start here  -->
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
                                    <!-- client delete button end here  -->

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
                                              Delete Certificate
                                            </h1>
                                            <p class="pb-4">
                                              Are you sure you want to delete
                                              this Certificate?
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
                                <!-- client edit and delete icon end here  -->
                              </tr>
                              <!-- client-1 end here  -->

                              <!-- client-2 start here  -->
                              <tr>
                                <!-- client-2 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/Certificate-2.webp"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- client-2 image end here  -->

                                <!-- client-2 title start here  -->
                                <td>
                                  <p class="text-nowrap">Certificate-2</p>
                                </td>
                                <!-- client-2 title end here  -->

                                <!-- client-2 edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- client edit button start here  -->
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
                                    <!-- client edit button end here  -->

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
                                              Edit Certificate-2
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
                                              <form class="compact-modal">
                                                <!-- title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Certificate Title
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

                                                <!-- image  -->
                                                <div
                                                  class="row form-group g-3 align-items-center mt-3"
                                                >
                                                  <!-- upload input area start here  -->
                                                  <div class="col-12">
                                                    <div
                                                      class="form-group mb-20 upload-input"
                                                    >
                                                      <label
                                                        for="ImgUpload"
                                                        class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                                      >
                                                        <img
                                                          src="../assets/img/Certificate-2.webp"
                                                          class="img-fluid rounded-4"
                                                          width="50%"
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
                                                  <!-- upload  input area end here  -->
                                                </div>

                                                <!-- cancel and submit button  -->
                                                <div class="my-3 form-button ">
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

                                    <!-- client delete button start here  -->
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
                                    <!-- client delete button end here  -->
                                  </div>
                                </td>
                                <!-- client-2 edit and delete button end here  -->
                              </tr>
                              <!-- client-2 end here  -->

                              <!-- client-3 start here  -->
                              <tr>
                                <!-- banner-3 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/Certificate-3.webp"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- client-3 image end here  -->

                                <!-- client-3 title start here  -->
                                <td>
                                  <p class="text-nowrap">Certificate-3</p>
                                </td>
                                <!-- client-3 title end here  -->

                                <!-- client edit and delete icon start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- client edit button start here  -->
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
                                    <!-- client edit button end here  -->

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
                                              Edit Certificate-3
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
                                              <form class="compact-modal">
                                                <!-- title  -->
                                                <div
                                                  class="row form-group g-3 align-items-center"
                                                >
                                                  <!-- title label start here  -->
                                                  <div class="col-3">
                                                    <label
                                                      for="inputTitle"
                                                      class="col-form-label form-label"
                                                      >Certificate Title
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

                                                <!-- image  -->
                                                <div
                                                  class="row form-group g-3 align-items-center mt-3"
                                                >
                                                  <!-- upload input area start here  -->
                                                  <div class="col-12">
                                                    <div
                                                      class="form-group mb-20 upload-input"
                                                    >
                                                      <label
                                                        for="ImgUpload"
                                                        class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                                      >
                                                        <img
                                                          src="../assets/img/Certificate-3.webp"
                                                          class="img-fluid rounded-4"
                                                          width="50%"
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
                                                  <!-- upload  input area end here  -->
                                                </div>

                                                <!-- cancel and submit button  -->
                                                <div class="my-3 form-button ">
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

                                    <!-- client delete button start here  -->
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
                                    <!-- client delete button end here  -->
                                  </div>
                                </td>
                                <!-- client edit and delete icon end here  -->
                              </tr>
                              <!-- client-3 end here  -->
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