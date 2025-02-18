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
                      <h2 class="main-title">Case List</h2>
                      <!-- dashboard banner title end here  -->
                    </div>

                    <!-- add banner breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                      </li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Case List
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
                          <h2>Case List</h2>
                          <a href="{{route('add-edit-case-study')}}" class="btn sub_btn">ADD</a>
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
                        <div class="table-content table-responsive ">
                          <table class="table   table-bordered align-middle ">
                            <thead class="table-light">
                              <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Title</th>
                                <th scope="col">Description</th>
                                <th scope="col">Button Link</th>
                                <th scope="col">Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                              <!-- case-1 start here  -->
                              <tr>
                                <!-- case-1 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../public/assets/img/health_care.jpg"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- case-1 image end here  -->

                                <!-- case-1 title start here  -->
                                <td>
                                  <p class="text-nowrap">Case-1</p>
                                </td>
                                <!-- case-1 title end here  -->

                                <!-- case-1 Description start here  -->
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
                                <!-- case-1 Description end here -->

                                <!-- case-1 button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- case-1 button link end here  -->

                                <!--  view, edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- case-1 View button start here  -->
                                    <a
                                      role="button"
                                      href="{{route('admin.case-study.show')}}"
                                      class="btn text-decoration-none table_edit bg-primary-subtle"
                                      title="View"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="#0029ff"
                                      >
                                        <path
                                          d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- case-1 View button end here  -->

                                    <!-- case-1 edit button start here  -->
                                    <a
                                      role="button"
                                      href="{{ route('add-edit-case-study') }}"
                                      class="btn text-decoration-none table_edit bg-info-subtle"
                                      data-bs-toggle="edit"
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
                                    <!-- case-1 edit button end here  -->

                                    <!-- case-1 delete button start here  -->
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
                                    <!-- case-1 delete button end here  -->

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
                                              Delete Case Study
                                            </h1>
                                            <p class="pb-4">
                                              Are you sure you want to delete
                                              this case study?
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
                                <!--  view, edit and delete button end here  -->
                              </tr>
                              <!-- case-1 end here  -->

                              <!-- case-2 start here  -->
                              {{--  <tr>
                                <!-- case-2 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/real_state.jpg"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- case-2 image end here  -->

                                <!-- case-2 title start here  -->
                                <td>
                                  <p class="text-nowrap">Case-2</p>
                                </td>
                                <!-- case-2 title end here  -->

                                <!-- case-2 Description start here  -->
                                <td class="banner_desc">
                                  <p class="desc text-truncate">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                  </p>
                                </td>
                                <!-- case-2 Description end here -->

                                <!-- case-2 button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- case-2 button link end here  -->

                                <!-- case-2 view, edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- case-2 View button start here  -->
                                    <a
                                      role="button"
                                      href="case_study_preview.html"
                                      class="btn text-decoration-none table_edit bg-primary-subtle"
                                      title="View"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="#0029ff"
                                      >
                                        <path
                                          d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- case-2 View button end here  -->

                                    <!-- case-2 edit button start here  -->
                                    <a
                                      role="button"
                                      href="add_case.html"
                                      class="btn text-decoration-none table_edit bg-info-subtle"
                                      data-bs-toggle="edit"
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
                                    <!-- case-2 edit button end here  -->

                                    <!-- case-2 delete button start here  -->
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
                                    <!-- case-2 delete button end here  -->
                                  </div>
                                </td>
                                <!-- case-2 view, edit and delete button end here  -->
                              </tr>
                              <!-- case-2 end here  -->

                              <!-- case-3 start here  -->
                              <tr>
                                <!-- case-3 image start here -->
                                <td class="list_img">
                                  <div class="table_img">
                                    <img
                                      src="../assets/img/Education.jpg"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td>
                                <!-- case-3 image end here  -->

                                <!-- case-3 title start here  -->
                                <td>
                                  <p class="text-nowrap">Case-3</p>
                                </td>
                                <!-- case-3 title end here  -->

                                <!-- case-3 Description start here  -->
                                <td class="banner_desc">
                                  <p class="desc text-truncate">
                                    Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit.
                                  </p>
                                </td>
                                <!-- case-3 Description end here -->

                                <!-- case-3 button link start here -->
                                <td>
                                  <p class="text-truncate">
                                    https://iwebwiser.com
                                  </p>
                                </td>
                                <!-- case-3 button link end here  -->

                                <!-- view, edit and delete button start here  -->
                                <td class="table_action">
                                  <div
                                    class="d-inline-flex justify-content-center align-items-center gap-3"
                                  >
                                    <!-- View button start here  -->
                                    <a
                                      role="button"
                                      href="case_study_preview.html"
                                      class="btn text-decoration-none table_edit bg-primary-subtle"
                                      title="View"
                                      ><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="12"
                                        viewBox="0 -960 960 960"
                                        width="12"
                                        fill="#0029ff"
                                      >
                                        <path
                                          d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z"
                                        />
                                      </svg>
                                    </a>
                                    <!-- View button end here  -->
                                    <!-- edit button start here  -->
                                    <a
                                      role="button"
                                      href="add_case.html"
                                      class="btn text-decoration-none table_edit bg-info-subtle"
                                      data-bs-toggle="edit"
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
                                <!-- view, edit and delete button end here  -->
                              </tr> --}}
                              <!-- case-3 end here  -->
                            </tbody>
                          </table>
                        </div>
                        <!-- table content end here  -->
                      </div>
                      <!-- card body end here  -->

                      <!-- card footer start here  -->
                      <div class="card-footer">
                        <p>Showing 1 - 5 of 5 entries</p>

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