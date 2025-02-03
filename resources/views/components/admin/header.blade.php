<header class="header" id="header">
              <nav class="navbar navbar-expand-lg mt-2">
                <div class="container-fluid">
                  <!-- logo start here  -->
                  <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                      <a
                        href="dashboard.html"
                        class="btn border-0 p-0 header_logo"
                        role="button"
                      >
                        <img src="../assets/icons/Logo.svg" alt="logo" />
                      </a>
                    </li>
                  </ul>
                  <!-- logo end here  -->

                  <!-- hamburger button start here  -->
                  <ul class="navbar-nav d-none d-lg-block">
                    <li class="nav-item">
                      <a
                        href="javascript:void(0);"
                        class="btn border-0 p-0 float-start"
                        role="button"
                        id="hamburger-btn"
                      >
                        <svg
                          id="bar-btn"
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#5d6d7e"
                        >
                          <path
                            id="icon_path"
                            d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <!-- hamburger button end here  -->

                  <!-- search box start here  -->
                  <ul class="navbar-nav search_form d-none d-lg-block me-auto">
                    <!-- search bar  -->
                    <li class="nav-item">
                      <div class="container-fluid">
                        <div class="d-flex form-inputs">
                          <input
                            class="form-control text-muted"
                            type="text"
                            id="search"
                            placeholder="Search for results..."
                          />
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="20px"
                            viewBox="0 -960 960 960"
                            width="20px"
                            fill="#5f6368"
                          >
                            <path
                              d="M765-144 526-383q-30 22-65.79 34.5-35.79 12.5-76.18 12.5Q284-336 214-406t-70-170q0-100 70-170t170-70q100 0 170 70t70 170.03q0 40.39-12.5 76.18Q599-464 577-434l239 239-51 51ZM384-408q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Z"
                            />
                          </svg>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <!-- search box end here  -->

                  <!-- notification and profile start here  -->
                  <ul class="list-unstyled right-head gap-2">
                    <!-- notification start here  -->
                    <li>
                      <div class="dropdown notification">
                        <button
                          class="btn btn-drop dropdown-toggle position-relative"
                          type="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="20"
                            viewBox="0 -960 960 960"
                            width="20"
                            fill="#5f6368"
                          >
                            <path
                              d="M160-200v-80h80v-280q0-83 50-147.5T420-792v-28q0-25 17.5-42.5T480-880q25 0 42.5 17.5T540-820v28q80 20 130 84.5T720-560v280h80v80H160Zm320-300Zm0 420q-33 0-56.5-23.5T400-160h160q0 33-23.5 56.5T480-80ZM320-280h320v-280q0-66-47-113t-113-47q-66 0-113 47t-47 113v280Z"
                            />
                          </svg>
                          <span class="badge text-bg-danger"> 6 </span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <!-- notification head start here  -->
                          <div class="dropdown_head">
                            <h3>Notification</h3>

                            <span class="text-danger bg-danger-subtle"
                              >6 unread</span
                            >
                          </div>
                          <!-- notification head end here  -->

                          <!-- notification data start here  -->
                          <div class="dropdown_content">
                            <div class="dropdown_scroll">
                              <!-- new files available start here  -->
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-primary rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20"
                                        viewBox="0 -960 960 960"
                                        width="20"
                                        fill="#FFFFFF"
                                      >
                                        <path
                                          d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h240l80 80h320q33 0 56.5 23.5T880-640H447l-80-80H160v480l96-320h684L837-217q-8 26-29.5 41.5T760-160H160Zm84-80h516l72-240H316l-72 240Zm0 0 72-240-72 240Zm-84-400v-80 80Z"
                                        />
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">
                                        New Files Available
                                      </p>
                                      <span class="text-muted">7 hrs ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- New Files available end here  -->

                              <!-- shopping cart area start here  -->
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-warning rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20"
                                        viewBox="0 -960 960 960"
                                        width="20"
                                        fill="#FFFFFF"
                                      >
                                        <path
                                          d="M263.79-96Q234-96 213-117.21t-21-51Q192-198 213.21-219t51-21Q294-240 315-218.79t21 51Q336-138 314.79-117t-51 21Zm432 0Q666-96 645-117.21t-21-51Q624-198 645.21-219t51-21Q726-240 747-218.79t21 51Q768-138 746.79-117t-51 21ZM253-696l83 192h301l82-192H253Zm-31-72h570q14 0 20.5 11t1.5 23L702.63-476.14Q694-456 676.5-444T637-432H317l-42 72h493v72H276q-43 0-63.5-36.15-20.5-36.16.5-71.85l52-90-131-306H48v-72h133l41 96Zm114 264h301-301Z"
                                        />
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">
                                        New Orders Arrived
                                      </p>
                                      <span class="text-muted">8 hrs ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- shopping cart area end here  -->

                              <!-- new review Recieved area start here  -->
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-danger rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20"
                                        viewBox="0 -960 960 960"
                                        width="20"
                                        fill="#FFFFFF"
                                      >
                                        <path
                                          d="m480-920 362 216q18 11 28 30t10 40v434q0 33-23.5 56.5T800-120H160q-33 0-56.5-23.5T80-200v-434q0-21 10-40t28-30l362-216Zm0 466 312-186-312-186-312 186 312 186Zm0 94L160-552v352h640v-352L480-360Zm0 160h320-640 320Z"
                                        />
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">
                                        New Review Recieved
                                      </p>
                                      <span class="text-muted">10 hrs ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- new review recieved area end here -->

                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-success rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20"
                                        viewBox="0 -960 960 960"
                                        width="20"
                                        fill="#FFFFFF"
                                      >
                                        <path
                                          d="M263.79-192Q234-192 213-213.21t-21-51Q192-294 213.21-315t51-21Q294-336 315-314.79t21 51Q336-234 314.79-213t-51 21Zm0-216Q234-408 213-429.21t-21-51Q192-510 213.21-531t51-21Q294-552 315-530.79t21 51Q336-450 314.79-429t-51 21Zm0-216Q234-624 213-645.21t-21-51Q192-726 213.21-747t51-21Q294-768 315-746.79t21 51Q336-666 314.79-645t-51 21Zm216 0Q450-624 429-645.21t-21-51Q408-726 429.21-747t51-21Q510-768 531-746.79t21 51Q552-666 530.79-645t-51 21Zm216 0Q666-624 645-645.21t-21-51Q624-726 645.21-747t51-21Q726-768 747-746.79t21 51Q768-666 746.79-645t-51 21Zm-216 216Q450-408 429-429.21t-21-51Q408-510 429.21-531t51-21Q510-552 531-530.79t21 51Q552-450 530.79-429t-51 21ZM528-192v-113l210-209q7.26-7.41 16.13-10.71Q763-528 771.76-528q9.55 0 18.31 3.5Q798.83-521 806-514l44 45q6.59 7.26 10.29 16.13Q864-444 864-435.24t-3.29 17.92q-3.3 9.15-10.71 16.32L641-192H528Zm288-243-45-45 45 45ZM576-240h45l115-115-22-23-22-22-116 115v45Zm138-138-22-22 44 45-22-23Z"
                                        />
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">
                                        22 Verified Registration
                                      </p>
                                      <span class="text-muted">20 hrs ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>

                              <!-- Project Approved area start here  -->
                              <li>
                                <a class="dropdown-item" href="#">
                                  <div
                                    class="alert d-flex align-items-center"
                                    role="alert"
                                  >
                                    <div
                                      class="bg-info rounded-3 me-2 not_icon"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20"
                                        viewBox="0 -960 960 960"
                                        width="20"
                                        fill="#FFFFFF"
                                      >
                                        <path
                                          d="m429-336 238-237-51-51-187 186-85-84-51 51 136 135ZM216-144q-29.7 0-50.85-21.15Q144-186.3 144-216v-528q0-29.7 21.15-50.85Q186.3-816 216-816h528q29.7 0 50.85 21.15Q816-773.7 816-744v528q0 29.7-21.15 50.85Q773.7-144 744-144H216Zm0-72h528v-528H216v528Zm0-528v528-528Z"
                                        />
                                      </svg>
                                    </div>
                                    <div class="ps-1">
                                      <p class="mb-0 lh-1">Project Approved</p>
                                      <span class="text-muted">1 day ago</span>
                                    </div>

                                    <div class="ms-auto">
                                      <button
                                        type="button"
                                        class="btn-close ms-2"
                                        data-bs-dismiss="alert"
                                        aria-label="Close"
                                      ></button>
                                    </div>
                                  </div>
                                </a>
                              </li>
                              <!-- Project Approved area end here  -->
                            </div>
                          </div>
                          <!-- notification data end here  -->

                          <!-- notification button start here  -->
                          <div class="dropdown_footer">
                            <div class="d-grid">
                              <button class="btn" type="button">
                                View All
                              </button>
                            </div>
                          </div>
                          <!-- notification button end here  -->
                        </ul>
                      </div>
                    </li>
                    <!-- notification end here  -->

                    <!-- profile start here  -->
                    <li>
                      <div class="admin_profile dropdown px-2">
                        <a
                          role="button"
                          tabindex="0"
                          href="#!"
                          id="mainHeaderProfile"
                          data-bs-auto-close="outside"
                          data-bs-toggle="dropdown"
                          aria-expanded="false"
                          class="header-link dropdown-toggle btn"
                        >
                          <div class="d-flex align-items-center">
                            <div class="me-sm-2 me-0 admin_img">
                              <img
                                src="../assets/img/image.jpg"
                                alt="img"
                                width="30"
                                height="30"
                                class="rounded-circle"
                              />
                            </div>

                            <div class="d-xl-block d-none admin_details">
                              <p class="mb-0 lh-1">Chitra Chauhan</p>
                              <span class="d-block">Admin</span>
                            </div>
                          </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li>
                            <a class="dropdown-item" href="profile.html">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368"
                                id="profile"
                              >
                                <path
                                  d="M237-285q54-38 115.5-56.5T480-360q66 0 127.5 18.5T723-285q35-41 52-91t17-104q0-129.67-91.23-220.84-91.23-91.16-221-91.16Q350-792 259-700.84 168-609.67 168-480q0 54 17 104t52 91Zm243-123q-60 0-102-42t-42-102q0-60 42-102t102-42q60 0 102 42t42 102q0 60-42 102t-102 42Zm.28 312Q401-96 331-126t-122.5-82.5Q156-261 126-330.96t-30-149.5Q96-560 126-629.5q30-69.5 82.5-122T330.96-834q69.96-30 149.5-30t149.04 30q69.5 30 122 82.5T834-629.28q30 69.73 30 149Q864-401 834-331t-82.5 122.5Q699-156 629.28-126q-69.73 30-149 30Zm-.28-72q52 0 100-16.5t90-48.5q-43-27-91-41t-99-14q-51 0-99.5 13.5T290-233q42 32 90 48.5T480-168Zm0-312q30 0 51-21t21-51q0-30-21-51t-51-21q-30 0-51 21t-21 51q0 30 21 51t51 21Zm0-72Zm0 319Z"
                                />
                              </svg>
                              Profile</a
                            >
                          </li>
                          <li>
                            <a class="dropdown-item" href="index.html">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="20"
                                viewBox="0 -960 960 960"
                                width="20"
                                fill="#5f6368"
                                id="signout"
                              >
                                <path
                                  d="m480-336 51-51-57-57h150v-72H474l57-57-51-51-144 144 144 144Zm0 240q-79 0-149-30t-122.5-82.5Q156-261 126-331T96-480q0-80 30-149.5t82.5-122Q261-804 331-834t149-30q80 0 149.5 30t122 82.5Q804-699 834-629.5T864-480q0 79-30 149t-82.5 122.5Q699-156 629.5-126T480-96Zm0-72q130 0 221-91t91-221q0-130-91-221t-221-91q-130 0-221 91t-91 221q0 130 91 221t221 91Zm0-312Z"
                                />
                              </svg>
                              Logout
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <!-- profile end here  -->

                    <!-- hamburger for mobile screen start here  -->
                    <li class="d-block d-lg-none">
                      <a
                        href="javascript:void(0);"
                        class="btn border-0 p-0 float-start"
                        role="button"
                        id="hamburger-btn1"
                      >
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          height="20"
                          viewBox="0 -960 960 960"
                          width="20"
                          fill="#5d6d7e"
                        >
                          <path
                            d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"
                          />
                        </svg>
                      </a>
                    </li>
                    <!-- hamburger for mobile screen end here  -->
                  </ul>
                  <!-- notification and profile end here  -->
                </div>
              </nav>
            </header>