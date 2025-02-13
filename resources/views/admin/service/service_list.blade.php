@extends('components.admin.layouts')
<script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@section('styles')
<style>
  .cke_notification_warning {
    display: none !important;
  }
</style>
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

      @if (Session::has('success_message'))
      <!-- Check vendorRegister() method in Front/VendorController.php -->
      <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
        role="alert">
        <div>
          <strong>Success:</strong> {{ Session::get('success_message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <div class="container-fluid">
        <!-- card start here  -->
        <div class="card">
          <!-- card header start here  -->
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Services List</h2>
              <a href="{{ url('admin/add-edit-service') }}" class="btn sub_btn">ADD</a>
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
                    class="d-none d-sm-block" />
                </span>
              </div>
            </form>
            <!-- form end here  -->

            <!-- table content start here  -->
            <div class="table-content table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    {{-- <th scope="col">Image</th> --}}
                    <th scope="col">Name</th>
                    <th scope="col">Title</th>
                    <!-- <th scope="col">Description</th> -->
                    <th scope="col">Button Link</th>
                    {{-- <th scope="col">Sub-Services</th> --}}
                    <th scope="col">Actions</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($services as $service)
                  <!-- service-1 start here  -->
                  <tr>
                    <td>{{ $service->name }}</td>
                    <!-- Service-1 image start here -->
                    {{-- <td class="list_img">
                                  <div class="icon_img">
                                    <img
                                      src="../assets/img/mobile.png"
                                      alt="banner-1"
                                      class="img-fluid"
                                    />
                                  </div>
                                </td> --}}
                    <!-- Service-1 image end here  -->

                    <!-- Service-1 title start here  -->
                    <td>
                      <p class="text-nowrap">
                        {{$service->title}}
                      </p>
                    </td>
                    <!-- Service-1 title end here  -->

                    <!-- Service-1 Description start here  -->
                    <!-- <td class="banner_desc">
                      <p class="desc text-truncate">
                        {{$service->description}}
                      </p>
                    </td> -->
                    <!-- Service-1 Description end here -->

                    <!-- Service button link start here -->
                    <td>
                      <p class="text-truncate">
                        {{$service->link}}
                      </p>
                    </td>
                    <!-- Service button link end here  -->

                    <!-- sub-services title start here  -->
                    {{-- <td>
                                  <p class="text-truncate">Sub-Service-1</p>
                                </td> --}}
                    <!-- sub-services title end here  -->

                    <!-- Service edit and delete icon start here  -->
                    <td class="table_action">
                      <div
                        class="d-inline-flex justify-content-center align-items-center gap-3">
                        <!-- edit button start here  -->
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$service->id}}"
                          title="Edit"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="rgb(25 135 84)">
                            <path
                              d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z" />
                          </svg>
                        </a>




                        <!-- edit button end here  -->

                        <!-- Edit Modal start here  --
                        <div
                          class="modal fade"
                          id="editModal-{{ $service->id }}"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div
                            class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1
                                  class="modal-title"
                                  id="exampleModalLabel">
                                  Edit Blog-{{$service->id}}
                                </h1>
                                <button
                                  type="button"
                                  class="btn-close"
                                  data-bs-dismiss="modal"
                                  aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ route('service.update' , $service->id) }}"
                                    method="POST">
                                    @csrf
                                    <!-- title  --
                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  --
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Service Name
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  --
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputName"
                                            name="name"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Title..."
                                            value="{{ old('name', $service->name ?? '') }}"
                                            required />
                                        </div>
                                      </div>
                                      <!-- title input end here  --
                                    </div>

                                    <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  --
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Service Title
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  --
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            name="title"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Title..."
                                            value="{{ old('title', $service->title ?? '') }}"
                                            required />
                                        </div>
                                      </div>
                                      <!-- title input end here  
                                    </div>

                                    <!-- description  --
                                    {{-- <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- description label start here  --
                                      <div
                                        class="col-3 d-flex justify-content-center">
                                        <label
                                          for="inputDescription"
                                          class="col-form-label form-label text-break">Description</label>
                                      </div>
                                      <!-- description label end here  -->

                                      <!-- description textarea box start here  --
                                      <div class="col-9">
                                        <div class="form-floating">
                                          <textarea
                                            class="form-control form-control-lg form-textbox"
                                            id="inputDescription"
                                            name="description"
                                            rows="4"
                                            cols="30"
                                            placeholder="write your service description here..."
                                             required>{{ old('description', $service->description ?? '') }}</textarea>

                                </div>
                              </div>

                              <!-- description textarea box end here  --
                            </div> --}}

                            <!-- Sub title  --
                            {{-- <div
                                      class="row form-group g-3 align-items-center">
                                      <!-- title label start here  --
                                      <div class="col-3">
                                        <label
                                          for="inputTitle"
                                          class="col-form-label form-label">Sub-service Title
                                        </label>
                                      </div>
                                      <!-- title label end here  -->

                                      <!-- title input start here  --
                                      <div class="col-9">
                                        <div class="mb-3 mt-3">
                                          <input
                                            type="text"
                                            id="inputTitle"
                                            class="form-control form-control-lg form-input"
                                            placeholder="Enter Title..."
                                            required />
                                        </div>
                                      </div>
                                      <!-- title input end here  --
                                    </div> --}}

                            <!-- Social Link area start here  --
                            <div
                              class="row form-group g-3 align-items-center">
                              <!-- Social Link label start here  --
                              <div
                                class="col-3 d-flex justify-content-center align-items-center">
                                <label
                                  for="inputTitle"
                                  class="col-form-label form-label">Button Link
                                </label>
                              </div>
                              <!-- Social Link label end here  -->

                              <!-- Social Link input start here  --
                              <div class="col-9">
                                <div class="mb-3 mt-3">
                                  <input
                                    type="text"
                                    id="inputTitle"
                                    name="link"
                                    class="form-control form-control-lg form-input"
                                    placeholder="Enter Link..."
                                    value="{{ old('link', $service->link ?? '') }}"
                                    required />
                                </div>
                              </div>
                              <!-- Social Link input end here  --
                            </div>
                            <!-- Sociall Link area end here  -->

                            <!-- image  --
                            {{-- <div
                                      class="row form-group g-3 align-items-center mt-3">
                                      <!-- upload banner input area start here  --
                                      <div class="col-12">
                                        <div
                                          class="form-group mb-20 upload-input">
                                          <label
                                            for="ImgUpload"
                                            class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4 position-relative">
                                            <img
                                              src="../assets/img/mobile.png"
                                              class="img-fluid rounded-4"
                                              width="30%"
                                              alt="upload image" />
                                            <!-- close button start here  --
                                            <button
                                              type="button"
                                              data-bs-dismiss="modal"
                                              class="btn-close position-absolute top-0 end-0 p-2"
                                              aria-label="Close"></button>
                                          </label>
                                        </div>
                                      </div>
                                      <!-- upload banner input area end here  --
                                    </div> --}}


                            <!-- Blog Content --
                            <div class="row form-group">
                              <div class="col-12 col-md-3">
                                <label for="metaTags" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Enter Metas (JSON Format)</label>
                              </div>
                              <div class="col-12 col-md-8">
                                <textarea name="meta_tags" id="metaTags" class="form-control form-control-lg form-input" placeholder="Enter JSON formatted metas..." required rows="8" style="height: 250px;">{{ old('meta_tags', $service->meta_tags ?? '') }}</textarea>
                              </div>
                              <div class="col-1"></div>
                            </div>

                            <div class="row form-group">
                              <div class="col-12 col-md-3">
                                <label for="html_content" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Service Content</label>
                              </div>
                              <div class="col-12 col-md-8 mt-0">
                                <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="10">
                                {{ old('html_content', $service->html_content ?? '') }}
                                </textarea>
                              </div>
                            </div>



                            <!-- Image Upload --
                            {{-- <div class="row form-group">
    <div class="col-12 col-md-3">
      <label for="inputBlogFile" class="col-form-label form-label d-flex justify-content-left justify-content-md-center">Upload Banner Image</label>
    </div>
    <div class="col-12 col-md-8 mt-0">
      <div class="form-group mb-20 upload-input">
        <label for="blogImg" class="form-label form-img-uploader rounded-4 d-flex align-items-center justify-content-center w-100 py-4">
          <div class="d-flex flex-column align-items-center gap-3">
            <span>
              <!-- SVG Icon or placeholder icon goes here 
            </span>
            <p class="mb-0">Upload Image</p>
          </div>
        </label>
        <input type="file" name="image" class="form-control form-control-lg d-none" id="blogImg" onchange="previewImage(event)" />
      </div>

      <!-- Image Preview Area 
      <div id="imagePreview" class="mt-3">
      <img id="previewImg" src="{{ isset($service) ? asset('http://localhost/spark_technology/storage/app/public/images/' . $service->image) : '' }}"
                            alt="Image Preview" style="display: {{ isset($service) ? 'block' : 'none' }}; width: 100%; max-width: 200px; border-radius: 8px;" />
                          </div>
                        </div>
                      </div> --}}





                      <!-- cancel and submit button  
                      <div class="my-3">
                        <button
                          type="button"
                          class="btn btn-secondary cancel_modal"
                          data-bs-dismiss="modal">
                          Close
                        </button>
                        <button
                          type="submit"
                          class="btn add_modal">
                          Update
                        </button>
                      </div>
                      </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit modal end here  -->



<!-- Edit Modal start here -->
<div class="modal fade" id="editModal-{{ $service->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-start" id="exampleModalLabel">Edit Blog-{{$service->id}}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
        <div class="container">
          <form class="upload-form" action="{{ route('service.update' , $service->id) }}" method="POST">
            @csrf
            <div class="row g-3">
              <!-- Service Name -->
              <div class="col-md-4">
                <label for="inputName" class="col-form-label form-label text-start d-block ">Service Name</label>
                <input type="text" id="inputName" name="name" class="form-control" placeholder="Enter Name..." value="{{ old('name', $service->name ?? '') }}" required>
              </div>

              <!-- Service Title -->
              <div class="col-md-4">
                <label for="inputTitle" class="col-form-label form-label text-start d-block">Service Title</label>
                <input type="text" id="inputTitle" name="title" class="form-control" placeholder="Enter Title..." value="{{ old('title', $service->title ?? '') }}" required>
              </div>

              <!-- Button Link -->
              <div class="col-md-4">
                <label for="btnLink" class="col-form-label form-label text-start d-block ">Button Link</label>
                <input type="text" id="btnLink" name="link" class="form-control" placeholder="Enter Button Link..." value="{{ old('link', $service->link ?? '') }}" required>
              </div>

              <!-- Enter Metas (Full Width) -->
              <div class="col-12">
                <label for="metaTags" class="col-form-label form-label text-start d-block ">Enter Metas (JSON Format)</label>
                <textarea name="meta_tags" id="metaTags" class="form-control" rows="4" placeholder="Enter JSON formatted metas..." required>{{ old('meta_tags', $service->meta_tags ?? '') }}</textarea>
              </div>

              <!-- Service Content (Full Width) -->
              <div class="col-12">
                <label for="html_content" class="col-form-label form-label text-start d-block">Service Content</label>
                <textarea class="form-control ckeditor" id="html_content" name="html_content" rows="6">{{ old('html_content', $service->html_content ?? '') }}</textarea>
              </div>
            </div>

            <!-- Buttons -->
            <div class="d-flex justify-content-end mt-4">
              <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Edit Modal End Here -->










    

    <!-- delete button start here  -->
    <a
      href="#"
      role="button"
      class="btn text-decoration-none table_del bg-danger-subtle"
      data-bs-toggle="modal"
      data-bs-target="#deleteModal-{{ $service->id }}"
      title="delete">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        height="12"
        viewBox="0 -960 960 960"
        width="12"
        fill="#f70808">
        <path
          d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
      </svg>
    </a>
    <!-- delete button end here  -->

    <!-- delete modal start here  -->
    <div
      class="modal fade"
      id="deleteModal-{{ $service->id }}"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div
        class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <!-- close button start here  -->
          <a
            href="#"
            role="button"
            data-bs-dismiss="modal"
            class="position-absolute end-0 p-2"
            arial-label="close">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              height="24"
              viewBox="0 -960 960 960"
              width="24"
              fill="#5d6d7e">
              <path
                d="m291-240-51-51 189-189-189-189 51-51 189 189 189-189 51 51-189 189 189 189-51 51-189-189-189 189Z" />
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
                fill="#dc3545">
                <path
                  d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z" />
              </svg>
            </span>
            <h1
              class="modal-title mt-2"
              id="exampleModalLabel">
              Delete Service
            </h1>
            <p class="pb-4">
              Are you sure you want to delete
              this Service?
            </p>

            <!-- delete and cancel button start here  -->
            <div>
             <form action="{{ route('service.delete', $service->id) }}" method="POST">
                    @csrf
                    @method('DELETE') <!-- This is important to use the DELETE HTTP method -->
                    <button type="button" class="btn btn-secondary cancel_modal" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-danger del_modal">
                        Delete
                    </button>
                </form>
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
  @endforeach
  <!-- service-1 end here  -->


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
            aria-label="Previous">
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
<script>
  // CKEditor initialization for the edit form
  CKEDITOR.replace('html_content', {
    enterMode: CKEDITOR.ENTER_DIV, // Use <div> for line breaks
    shiftEnterMode: CKEDITOR.ENTER_BR, // Use <br> on shift + enter
    // Other configurations if needed
  });
</script>

@endsection