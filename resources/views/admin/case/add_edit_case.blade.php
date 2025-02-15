@extends('components.admin.layouts')
@section('content')
<div class="main-right-container" id="main-right-container">
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash-head">
        <div class="dash_title">
          <a href="{{url()->previous()}}" role="button" class="btn link-btn">
            <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#FFFFFF">
              <path d="m313-440 224 224-57 56-320-320 320-320 57 56-224 224h487v80H313Z" />
            </svg></a>
          <h2 class="main-title">Add Case</h2>
        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Add Case
          </li>
        </ol>
      </div>

      <div class="container-fluid">
        <div class="row">
          <div class="col-12 col-md-6">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-flex justify-content-between align-items-center">
                  <h2>Add Case Study</h2>
                </div>
              </div>
              <div class="card-body">
              <form class="upload-form" action="" method="POST" enctype="multipart/form-data" data-parsley-validate>
              @csrf
                  <div class="row form-group mt-1 mt-md-2">
                    <div class="col-12 col-md-4">
                      <label for="caseTitle" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Product Name</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <input type="text" name="product_name" id="caseTitle" class="form-control form-control-lg form-input" placeholder="Enter Case Title..." data-parsley-required="true" />
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="productSlogan" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Product Slogan</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <input type="text" name="product_slogan" id="productSlogan" class="form-control form-control-lg form-input" placeholder="Enter Product Slogan..." data-parsley-required="true" />
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="industry" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Industry</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <select id="industry" name="industry" class="form-control form-control-lg form-input">
                        <option id="place">Select Industry</option>
                        <option value="Health Care & Lifestyle">Health Care & Lifestyle</option>
                        <option value="E-Learnign & Education">E-Learnign & Education</option>
                        <option value="Real State">Real State</option>
                        <option value="Retail & Ecommerce">Retail & Ecommerce</option>
                        <option value="Tour & Travels">Tour & Travels</option>
                      </select>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="Description" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Description</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <textarea class="form-control form-control-lg form-textbox" id="Description" name="description" rows="4" cols="30" placeholder="write your description here..." data-parsley-required="true"></textarea>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="inputLink" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Country</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <select id="country" name="country" class="form-control form-control-lg form-input">
                        <option id="place">Select Country</option>
                        <option value="Australia">Australia</option>
                        <option value="Canada">Canada</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="USA">USA</option>
                      </select>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="platformUsers" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Platform Users</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <input type="number" name="platform_user" id="platformUsers" class="form-control form-control-lg form-input" placeholder="Enter Number of Users..." data-parsley-required="true" />
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="btnLink" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Button Link</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <div class="d-flex">
                        <input type="text" name="slug" id="btnLink" class="form-control form-control-lg form-input" placeholder="Enter Link..." data-parsley-required="true" />
                        <a href="#addButtonLink" class="btn mb-2 float-left" onclick="addButtonLink()">
                          <svg xmlns="http://www.w3.org/2000/svg" height="20" viewBox="0 -960 960 960" width="20" fill="#5f6368">
                            <path d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>

                  <div id="addButtonLink"></div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="caseImg" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Upload Logo</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <div class="form-group mb-20 upload-input">
                        <label for="ImgUpload" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative">
                          <img src="../public/assets/img/client-1.webp" class="img-fluid rounded-4" width="60%" alt="upload image" />
                          <button type="button" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close"></button>
                        </label>
                        <label for="cateImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none">
                          <div class="d-flex flex-column align-items-center gap-3 d-none">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                <g>
                                  <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                  <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                </g>
                              </svg>
                            </span>
                            <p class="mb-0">Upload Image / Icon</p>
                          </div>
                          <div class="upload-img d-none">
                            <img src="../pubic/assets/img/login-left.jpg" class="rounded-4" alt="upload-img" />
                          </div>
                        </label>
                        <input type="file" class="form-control form-control-lg d-none" id="cateImg" placeholder="Enter Category" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <div class="card-title d-flex justify-content-between align-items-center">
                  <h2>Add User Certificate</h2>
                </div>
              </div>
              <div class="card-body">
                <form class="upload-form">
                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="productImg" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Upload certificate</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <div class="form-group mb-20 upload-input">
                        <label for="ImgUpload" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative">
                          <img src="../public/assets/img/certificate-1.webp" class="img-fluid rounded-4" width="80%" alt="upload image" />
                          <button type="button" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close"></button>
                        </label>
                        <label for="cateImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none">
                          <div class="d-flex flex-column align-items-center gap-3">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                <g>
                                  <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                  <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                </g>
                              </svg>
                            </span>
                            <p class="mb-0">Upload Logo / Image</p>
                          </div>
                          <div class="upload-img d-none">
                            <img src="../public/assets/img/login-left.jpg" class="rounded-4" alt="upload-img" />
                          </div>
                        </label>
                        <input type="file" class="form-control form-control-lg d-none" id="cateImg" placeholder="Enter Category" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-12 col-md-6 mt-3 mt-md-0">
            <div class="card">
              <div class="card-header">
                <div class="card-title d-flex justify-content-between align-items-center">
                  <h2>Add Challenges</h2>
                </div>
              </div>
              <div class="card-body">
                <form class="upload-form">
                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="challenge" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Challenge</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <textarea class="form-control form-control-lg form-textbox" id="challenge" rows="4" cols="30" placeholder="write your description here..."></textarea>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="Solution" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Solution</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <textarea class="form-control form-control-lg form-textbox" id="Solution" rows="4" cols="30" placeholder="write your description here..."></textarea>
                    </div>
                  </div>


                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="productImg" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Upload Image</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <div class="form-group mb-20 upload-input">
                        <label for="ImgUpload" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative">
                          <img src="../public/assets/img/upload.webp" class="img-fluid rounded-4" width="80%" alt="upload image" />
                          <button type="button" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close"></button>
                        </label>

                        <label for="cateImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none">
                          <div class="d-flex flex-column align-items-center gap-3">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                <g>
                                  <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                  <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                </g>
                              </svg>
                            </span>
                            <p class="mb-0">Upload Logo / Image</p>
                          </div>
                          <div class="upload-img d-none">
                            <img src="../public/assets/img/login-left.jpg" class="rounded-4" alt="upload-img" />
                          </div>
                        </label>
                        <input type="file" class="form-control form-control-lg d-none" id="cateImg" placeholder="Enter Category" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card">
              <div class="card-header">
                <div class="card-title d-flex justify-content-between align-items-center">
                  <h2>Add Impact</h2>
                </div>
              </div>
              <div class="card-body">
                <form class="upload-form">
                  <div class="row form-group mt-1 mt-md-2">
                    <div class="col-12 col-md-4">
                      <label for="caseTitle" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Title</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <input type="text" id="impactTitle" class="form-control form-control-lg form-input" placeholder="Enter Impact Title..." required />
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="bussinessImpact" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Bussiness Impact</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <textarea class="form-control form-control-lg form-textbox" id="bussinessImpact" rows="4" cols="30" placeholder="write your Bussiness Impact here..."></textarea>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="userImpact" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">User Impact</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <textarea class="form-control form-control-lg form-textbox" id="userImpact" rows="4" cols="30" placeholder="write your User Impact here..."></textarea>
                    </div>
                  </div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="productImg" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Upload Image</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <div class="form-group mb-20 upload-input">
                        <label for="ImgUpload" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative">
                          <img src="../public/assets/img/upload.webp" class="img-fluid rounded-4" width="80%" alt="upload image" />
                          <button type="button" data-bs-dismiss="modal" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close"></button>
                        </label>

                        <label for="cateImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 d-none">
                          <div class="d-flex flex-column align-items-center gap-3">
                            <span>
                              <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" x="0" y="0" viewBox="0 0 512.056 512.056" style="enable-background: new 0 0 512 512;" xml:space="preserve">
                                <g>
                                  <path d="M426.635 188.224C402.969 93.946 307.358 36.704 213.08 60.37 139.404 78.865 85.907 142.542 80.395 218.303 28.082 226.93-7.333 276.331 1.294 328.644c7.669 46.507 47.967 80.566 95.101 80.379h80v-32h-80c-35.346 0-64-28.654-64-64 0-35.346 28.654-64 64-64 8.837 0 16-7.163 16-16-.08-79.529 64.327-144.065 143.856-144.144 68.844-.069 128.107 48.601 141.424 116.144a16 16 0 0 0 13.6 12.8c43.742 6.229 74.151 46.738 67.923 90.479-5.593 39.278-39.129 68.523-78.803 68.721h-64v32h64c61.856-.187 111.848-50.483 111.66-112.339-.156-51.49-35.4-96.241-85.42-108.46z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                  <path d="m245.035 253.664-64 64 22.56 22.56 36.8-36.64v153.44h32v-153.44l36.64 36.64 22.56-22.56-64-64c-6.241-6.204-16.319-6.204-22.56 0z" fill="#818898" opacity="1" data-original="#818898" class=""></path>
                                </g>
                              </svg>
                            </span>
                            <p class="mb-0">Upload Logo / Image</p>
                          </div>
                          <div class="upload-img d-none">
                            <img src="../public/assets/img/login-left.jpg" class="rounded-4" alt="upload-img" />
                          </div>
                        </label>
                        <input type="file" class="form-control form-control-lg d-none" id="cateImg" placeholder="Enter Category" />
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <div class="card mt-3">
              <div class="card-header">
                <div class="card-title d-flex justify-content-between align-items-center">
                  <h2>Add System Phase</h2>
                </div>
              </div>
              <div class="card-body">
                <form class="upload-form">
                  <div class="row form-group mt-1 mt-md-2">
                    <div class="col-12 col-md-4">
                      <label for="feature" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Phase Title</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <div class="d-flex">
                        <input type="text" id="phaseTitle" class="form-control form-control-lg form-input" placeholder="Enter Phase Title..." required />
                        <a href="#phase_title" class="btn mb-2" onclick="addInput1()">
                          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#5f6368">
                            <path d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="phase_title" id="phase_title"></div>

                  <div class="row form-group">
                    <div class="col-12 col-md-4">
                      <label for="inputLink" class="col-form-label form-label d-flex justify-content-start justify-content-md-center">Phase Feature</label>
                    </div>
                    <div class="col-12 col-md-8 mt-0">
                      <div class="sub-input d-flex">
                        <input type="text" id="inputLink" class="form-control form-control-lg form-input" placeholder="Enter Phase Feature..." list="subheader-link" id="subheader-link" required />
                        <a href="#phase_feature" class="btn mb-2 float-left" onclick="addInput2()">
                          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#5f6368">
                            <path d="M444-444H240v-72h204v-204h72v204h204v72H516v204h-72v-204Z" />
                          </svg>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div id="phase_feature"></div>
                </form>
              </div>
            </div>
          </div>

          <div class="col-12 my-3">
            <div
              class="d-flex justify-content-center justify-content-md-end gap-3">
              <a href="" class="btn cancel_btn">Cancel</a>
              <a href="#" class="btn submit-btn">Submit</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


