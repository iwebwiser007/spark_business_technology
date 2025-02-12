@extends('components.admin.layouts')    
@section('content')
<div class="main-right-container" id="main-right-container">
              <!-- main data start here  -->
              <div class="main-data">
                <div class="container-fluid">
                  <!-- dashboard head start here... -->
                  <div class="dash-head">
                    <!-- dashboard Header title start here  -->
                    <div class="dash_title">
                      <a
                        href="{{url()->previous()}}"
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
                      <h2 class="main-title">Add Case</h2>
                      <!-- <h2 class="text-dark ms-2">Add Header</h2> -->
                    </div>
                    <!-- dashboard Header title end here  -->

                    <!-- add Header breadcrumb start here  -->
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a href="{{route('dashboard')}}">Dashboard</a>
                      </li>
                      <!-- <li class="breadcrumb-item">
                        <a href="#">Header</a>
                      </li> -->
                      <li class="breadcrumb-item active" aria-current="page">
                        Add Case
                      </li>
                    </ol>
                    <!-- add Header breadcrumb end here  -->
                  </div>
                  <!-- dashboard head end here... -->

                  <div class="container-fluid">
                    <div class="row">
                      <!-- left column start here  -->
                      <div class="col-12 col-md-6">
                        <!-- Case study card start here  -->
                        <div class="card">
                          <!-- card header start here  -->
                          <div class="card-header">
                            <div
                              class="card-title d-flex justify-content-between align-items-center"
                            >
                              <h2>Add Case Study</h2>
                              <!-- <a href="add_header.html" class="btn sub_btn">ADD</a> -->
                            </div>
                          </div>
                          <!-- card header end here  -->

                          <!-- card body start here  -->
                          <div class="card-body">
                            <!-- form start here  -->
                            <form class="upload-form">
                              <!-- Product Name area start here  -->
                              <div class="row form-group mt-1 mt-md-2">
                                <!-- Product Name label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="caseTitle"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Product Name
                                  </label>
                                </div>
                                <!-- Product Name label end here  -->

                                <!-- Product Name input field start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <input
                                    type="text"
                                    id="caseTitle"
                                    class="form-control form-control-lg form-input"
                                    placeholder="Enter Case Title..."
                                    required
                                  />
                                </div>
                                <!-- Product Name input field end here  -->
                              </div>
                              <!-- Product Name area end here  -->

                              <!-- Product slogan start here  -->
                              <div class="row form-group">
                                <!-- Product Slogan label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="productSlogan"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Product Slogan
                                  </label>
                                </div>
                                <!-- Product Slogan label end here  -->

                                <!-- Product Slogan input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <input
                                    type="text"
                                    id="productSlogan"
                                    class="form-control form-control-lg form-input"
                                    placeholder="Enter Product Slogan..."
                                    required
                                  />
                                </div>
                                <!-- Product Slogan input end here  -->
                              </div>
                              <!-- Product Slogan end here  -->

                              <!-- Select Industry area start here  -->
                              <div class="row form-group">
                                <!-- Select Industry label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="industry"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Industry
                                  </label>
                                </div>
                                <!-- Select Industry label end here  -->

                                <!-- Select Industry input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <select
                                    id="industry"
                                    name="industry"
                                    class="form-control form-control-lg form-input"
                                  >
                                    <option id="place">Select Industry</option>
                                    <option value="Health Care & Lifestyle">
                                      Health Care & Lifestyle
                                    </option>
                                    <option value="E-Learnign & Education">
                                      E-Learnign & Education
                                    </option>
                                    <option value="Real State">
                                      Real State
                                    </option>
                                    <option value="Retail & Ecommerce">
                                      Retail & Ecommerce
                                    </option>
                                    <option value="Tour & Travels">
                                      Tour & Travels
                                    </option>
                                  </select>
                                </div>
                                <!-- Select Industry input end here  -->
                              </div>
                              <!-- Select Industry area end here  -->

                              <!-- description area start here  -->
                              <div class="row form-group">
                                <!-- description label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="Description"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Description</label
                                  >
                                </div>
                                <!-- description label end here  -->

                                <!-- description textarea box start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <textarea
                                    class="form-control form-control-lg form-textbox"
                                    id="Description"
                                    rows="4"
                                    cols="30"
                                    placeholder="write your description here..."
                                  ></textarea>
                                </div>
                                <!-- banner description textarea box end here  -->
                              </div>
                              <!-- description area end here  -->

                              <!-- Select Country area start here  -->
                              <div class="row form-group">
                                <!-- Sub-header Link label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="inputLink"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Country
                                  </label>
                                </div>
                                <!-- Sub-header Link label end here  -->

                                <!-- Sub-header Link input start here  -->
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
                                <!-- Sub-header Link input end here  -->
                              </div>
                              <!-- Select Country area end here  -->

                              <!-- Platform users start here  -->
                              <div class="row form-group">
                                <!-- Platform label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="platformUsers"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Platform Users
                                  </label>
                                </div>
                                <!-- Platform label end here  -->

                                <!-- Platform input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <input
                                    type="text"
                                    id="platformUsers"
                                    class="form-control form-control-lg form-input"
                                    placeholder="Enter Number of Users..."
                                    required
                                  />
                                </div>
                                <!-- Platform input end here  -->
                              </div>
                              <!-- Platform users end here  -->

                              <!-- button Link start here  -->
                              <div class="row form-group">
                                <!-- button Link label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="btnLink"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Button Link
                                  </label>
                                </div>
                                <!-- button Link label end here  -->

                                <!-- button Link input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="d-flex">
                                    <input
                                      type="text"
                                      id="btnLink"
                                      class="form-control form-control-lg form-input"
                                      placeholder="Enter Link..."
                                      required
                                    />
                                    <a
                                      href="#addButtonLink"
                                      class="btn mb-2 float-left"
                                      onclick="addButtonLink()"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20"
                                        viewBox="0 -960 960 960"
                                        width="20"
                                        fill="#5f6368"
                                      >
                                        <path
                                          d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                        />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                                <!-- button Link input end here  -->
                              </div>
                              <!-- button link end here  -->

                              <!-- input container start here  -->
                              <div id="addButtonLink"></div>
                              <!-- input container end here  -->

                              <!-- case study image upload area start here  -->
                              <div class="row form-group">
                                <!-- upload Image label area start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="caseImg"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Upload Logo</label
                                  >
                                </div>
                                <!-- upload Image label area end here  -->

                                <!-- upload Image input area start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="form-group mb-20 upload-input">
                                    <label
                                      for="ImgUpload"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                    >
                                      <img
                                        src="../assets/img/client-1.webp"
                                        class="img-fluid rounded-4"
                                        width="60%"
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

                                    <label
                                      for="cateImg"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none"
                                    >
                                      <div
                                        class="d-flex flex-column align-items-center gap-3 d-none"
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
                                              enable-background: new 0 0 512 512;
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
                                        <p class="mb-0">Upload Image / Icon</p>
                                      </div>
                                      <div class="upload-img d-none">
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
                                <!-- upload Image input area end here  -->
                              </div>
                              <!-- case study image upload area end here  -->
                            </form>
                            <!-- form end here  -->
                          </div>
                          <!-- card body end here  -->
                        </div>
                        <!-- Case study card end here  -->

                        <!-- Certificate card start here  -->
                        <div class="card">
                          <!-- card header start here  -->
                          <div class="card-header">
                            <div
                              class="card-title d-flex justify-content-between align-items-center"
                            >
                              <h2>Add User Certificate</h2>
                            </div>
                          </div>
                          <!-- card header end here  -->

                          <!-- card body start here  -->
                          <div class="card-body">
                            <!-- Product Info form start here  -->
                            <form class="upload-form">
                              <!-- Product image upload area start here  -->
                              <div class="row form-group">
                                <!-- upload area start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="productImg"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Upload certificate</label
                                  >
                                </div>
                                <!-- upload area end here  -->

                                <!-- upload input area start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="form-group mb-20 upload-input">
                                    <label
                                      for="ImgUpload"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                    >
                                      <img
                                        src="../assets/img/certificate-1.webp"
                                        class="img-fluid rounded-4"
                                        width="80%"
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

                                    <label
                                      for="cateImg"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none"
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
                                              enable-background: new 0 0 512 512;
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
                                        <p class="mb-0">Upload Logo / Image</p>
                                      </div>
                                      <div class="upload-img d-none">
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
                                <!-- upload input area end here  -->
                              </div>
                              <!-- Product image upload area end here  -->
                            </form>
                            <!-- Product Info form end here  -->
                          </div>
                          <!-- card body end here  -->
                        </div>
                        <!-- Certificate card end here  -->
                      </div>
                      <!-- left column end here  -->

                      <!-- right column start here  -->
                      <div class="col-12 col-md-6 mt-3 mt-md-0">
                        <!-- Challenges card start here  -->
                        <div class="card">
                          <!-- card header start here  -->
                          <div class="card-header">
                            <div
                              class="card-title d-flex justify-content-between align-items-center"
                            >
                              <h2>Add Challenges</h2>
                            </div>
                          </div>
                          <!-- card header end here  -->

                          <!-- card body start here  -->
                          <div class="card-body">
                            <!-- Product Info form start here  -->
                            <form class="upload-form">
                              <!-- Challenge description area start here  -->
                              <div class="row form-group">
                                <!-- description label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="challenge"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Challenge</label
                                  >
                                </div>
                                <!-- description label end here  -->

                                <!-- description textarea box start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <textarea
                                    class="form-control form-control-lg form-textbox"
                                    id="challenge"
                                    rows="4"
                                    cols="30"
                                    placeholder="write your description here..."
                                  ></textarea>
                                </div>
                                <!-- description textarea box end here  -->
                              </div>
                              <!-- Challenge description area end here  -->

                              <!-- Solution description area start here    -->
                              <div class="row form-group">
                                <!-- description label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="Solution"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Solution</label
                                  >
                                </div>
                                <!-- description label end here  -->

                                <!-- description textarea box start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <textarea
                                    class="form-control form-control-lg form-textbox"
                                    id="Solution"
                                    rows="4"
                                    cols="30"
                                    placeholder="write your description here..."
                                  ></textarea>
                                </div>
                                <!-- description textarea box end here  -->
                              </div>
                              <!-- Solution description area end here  -->

                              <!-- Product image upload area start here  -->
                              <div class="row form-group">
                                <!-- upload area start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="productImg"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Upload Image</label
                                  >
                                </div>
                                <!-- upload area end here  -->

                                <!-- upload input area start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="form-group mb-20 upload-input">
                                    <label
                                      for="ImgUpload"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                    >
                                      <img
                                        src="../assets/img/upload.webp"
                                        class="img-fluid rounded-4"
                                        width="80%"
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

                                    <label
                                      for="cateImg"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none"
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
                                              enable-background: new 0 0 512 512;
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
                                        <p class="mb-0">Upload Logo / Image</p>
                                      </div>
                                      <div class="upload-img d-none">
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
                                <!-- upload input area end here  -->
                              </div>
                              <!-- Product image upload area end here  -->
                            </form>
                            <!-- Product Info form end here  -->
                          </div>
                          <!-- card body end here  -->
                        </div>
                        <!-- Challenges card end here  -->

                        <!-- Impact card start here  -->
                        <div class="card">
                          <!-- card header start here  -->
                          <div class="card-header">
                            <div
                              class="card-title d-flex justify-content-between align-items-center"
                            >
                              <h2>Add Impact</h2>
                            </div>
                          </div>
                          <!-- card header end here  -->

                          <!-- card body start here  -->
                          <div class="card-body">
                            <!-- Product Info form start here  -->
                            <form class="upload-form">
                              <!-- Impact title start here  -->
                              <div class="row form-group mt-1 mt-md-2">
                                <!-- Product Name label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="caseTitle"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Title
                                  </label>
                                </div>
                                <!-- Product Name label end here  -->

                                <!-- Product Name input field start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <input
                                    type="text"
                                    id="impactTitle"
                                    class="form-control form-control-lg form-input"
                                    placeholder="Enter Impact Title..."
                                    required
                                  />
                                </div>
                                <!-- Product Name input field end here  -->
                              </div>
                              <!-- Impact title start here  -->

                              <!-- Bussiness Impact description area start here  -->
                              <div class="row form-group">
                                <!-- description label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="bussinessImpact"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Bussiness Impact</label
                                  >
                                </div>
                                <!-- description label end here  -->

                                <!-- description textarea box start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <textarea
                                    class="form-control form-control-lg form-textbox"
                                    id="bussinessImpact"
                                    rows="4"
                                    cols="30"
                                    placeholder="write your Bussiness Impact here..."
                                  ></textarea>
                                </div>
                                <!-- description textarea box end here  -->
                              </div>
                              <!-- Bussiness Impact description area end here  -->

                              <!-- Bussiness Impact description area start here  -->
                              <div class="row form-group">
                                <!-- description label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="userImpact"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >User Impact</label
                                  >
                                </div>
                                <!-- description label end here  -->

                                <!-- description textarea box start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <textarea
                                    class="form-control form-control-lg form-textbox"
                                    id="userImpact"
                                    rows="4"
                                    cols="30"
                                    placeholder="write your User Impact here..."
                                  ></textarea>
                                </div>
                                <!-- description textarea box end here  -->
                              </div>
                              <!-- Bussiness Impact description area end here  -->

                              <!-- Product image upload area start here  -->
                              <div class="row form-group">
                                <!-- upload area start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="productImg"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Upload Image</label
                                  >
                                </div>
                                <!-- upload area end here  -->

                                <!-- upload input area start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="form-group mb-20 upload-input">
                                    <label
                                      for="ImgUpload"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative"
                                    >
                                      <img
                                        src="../assets/img/upload.webp"
                                        class="img-fluid rounded-4"
                                        width="80%"
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

                                    <label
                                      for="cateImg"
                                      class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none"
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
                                              enable-background: new 0 0 512 512;
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
                                        <p class="mb-0">Upload Logo / Image</p>
                                      </div>
                                      <div class="upload-img d-none">
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
                                <!-- upload input area end here  -->
                              </div>
                              <!-- Product image upload area end here  -->
                            </form>
                            <!-- Product Info form end here  -->
                          </div>
                          <!-- card body end here  -->
                        </div>
                        <!-- Impact card start here  -->

                        <!-- System Phase card start here  -->
                        <div class="card mt-3">
                          <!-- card header start here  -->
                          <div class="card-header">
                            <div
                              class="card-title d-flex justify-content-between align-items-center"
                            >
                              <h2>Add System Phase</h2>
                              <!-- <a href="add_header.html" class="btn sub_btn">ADD</a> -->
                            </div>
                          </div>
                          <!-- card header end here  -->

                          <!-- card body start here  -->
                          <div class="card-body">
                            <!-- form start here  -->
                            <form class="upload-form">
                              <!-- Phase Title area start here  -->
                              <div class="row form-group mt-1 mt-md-2">
                                <!-- Phase Title label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="feature"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Phase Title
                                  </label>
                                </div>
                                <!-- Phase Title label end here  -->

                                <!-- Phase Title input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="d-flex">
                                    <input
                                      type="text"
                                      id="phaseTitle"
                                      class="form-control form-control-lg form-input"
                                      placeholder="Enter Phase Title..."
                                      required
                                    />
                                    <a
                                      href="#phase_title"
                                      class="btn mb-2"
                                      onclick="addInput1()"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20px"
                                        viewBox="0 -960 960 960"
                                        width="20px"
                                        fill="#5f6368"
                                      >
                                        <path
                                          d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                        />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                                <!-- Phase Title input end here  -->
                              </div>
                              <!-- Phase Title area end here  -->
                              <div class="phase_title" id="phase_title"></div>

                              <!-- Phase Feature area start here  -->
                              <div class="row form-group">
                                <!-- Sub-header Link label start here  -->
                                <div class="col-12 col-md-4">
                                  <label
                                    for="inputLink"
                                    class="col-form-label form-label d-flex justify-content-start justify-content-md-center"
                                    >Phase Feature
                                  </label>
                                </div>
                                <!-- Sub-header Link label end here  -->

                                <!-- Sub-header Link input start here  -->
                                <div class="col-12 col-md-8 mt-0">
                                  <div class="sub-input d-flex">
                                    <input
                                      type="text"
                                      id="inputLink"
                                      class="form-control form-control-lg form-input"
                                      placeholder="Enter Phase Feature..."
                                      list="subheader-link"
                                      id="subheader-link"
                                      required
                                    />
                                    <a
                                      href="#phase_feature"
                                      class="btn mb-2 float-left"
                                      onclick="addInput2()"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="20px"
                                        viewBox="0 -960 960 960"
                                        width="20px"
                                        fill="#5f6368"
                                      >
                                        <path
                                          d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z"
                                        />
                                      </svg>
                                    </a>
                                  </div>
                                </div>
                                <!-- Sub-header Link input end here  -->
                              </div>
                              <!-- Phase Feature area end here  -->
                              <div id="phase_feature"></div>
                            </form>
                            <!-- form end here  -->
                          </div>
                          <!-- card body end here  -->
                        </div>
                        <!-- System Phase card end here  -->
                      </div>
                      <!-- right column end here  -->

                      <!-- submit and cancel button start here  -->
                      <div class="col-12 my-3">
                        <div
                          class="d-flex justify-content-center justify-content-md-end gap-3"
                        >
                          <a href="" class="btn cancel_btn"
                            >Cancel</a
                          >
                          <a href="#" class="btn submit-btn">Submit</a>
                        </div>
                      </div>
                      <!-- submit and cancel button end here  -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- main data end here  -->
            </div>
@endsection