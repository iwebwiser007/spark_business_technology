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
  <div class="main-data">
    <div class="container-fluid">
      <div class="dash-head d-flex justify-content-between">
        <div class="dash_title">
          <h2 class="main-title">Blog List</h2>
        </div>
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="{{route('dashboard')}}">Dashboard</a>
          </li>
          <li class="breadcrumb-item active" aria-current="page">
            Blog List
          </li>
        </ol>
      </div>
      @if (Session::has('success_message'))
      <div class="alert alert-success alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
        role="alert">
        <div>
          <strong>Success:</strong> {{ Session::get('success_message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      @if (Session::has('error_message'))
      <div class="alert alert-danger alert-dismissible fade show mt-3 d-flex justify-content-between align-items-center"
        role="alert">
        <div>
          <strong>Error:</strong> {{ Session::get('error_message') }}
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if ($errors->any())
      <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
        <div class="d-flex justify-content-between align-items-center">
          <div class="d-flex flex-column">
            <ul class="mb-0 ps-3">
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      </div>
      @endif

      <div class="container-fluid">
        <div class="card">
          <div class="card-header">
            <div
              class="card-title d-flex justify-content-between align-items-center">
              <h2>Blog List</h2>
              <a href="{{url( 'admin/add-blog' )}}" class="btn sub_btn">ADD</a>
            </div>
          </div>
          <div class="card-body">
            <form method="GET" action="{{ route('admin.blogList') }}" class="data-form">
              <div class="form-group d-flex align-items-center">
                <select name="perPage" id="perPage" onchange="updatePagination()">
                  <option value="10" {{ $perPage == 10 ? 'selected' : '' }}>Show 10</option>
                  <option value="20" {{ $perPage == 20 ? 'selected' : '' }}>Show 20</option>
                  <option value="50" {{ $perPage == 50 ? 'selected' : '' }}>Show 50</option>
                  <option value="100" {{ $perPage == 100 ? 'selected' : '' }}>Show 100</option>
                </select>
                <span>
                  <input
                    type="search"
                    name="search"
                    id="searchInput"
                    class="form-control form-control-sm me-3"
                    placeholder="Search by title..."
                    value="{{ request()->query('search') }}" />
                </span>
                <button type="submit" class="btn sub_btn mb-2">Search</button>
              </div>
            </form>
            <div class="table-content table-responsive">
              <table class="table ">
                <thead>
                  <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($blogs as $blog)
                  <tr>
                    <td class="list_img">
                      <div class="table_img">
                        <img src="{{ asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) }}"
                          alt="banner-1"
                          class="img-fluid" />
                      </div>
                    </td>
                    <td>
                      <p class="text-truncate">{{$blog->title}}</p>
                    </td>
                    <td class="">
                      <p class="desc text-truncate">
                        {{$blog->description}}
                      </p>
                    </td>
                    <td>
                      <p class="text-truncate">{{$blog->slug}}</p>
                    </td>
                    <td class="table_action">
                      <div class="d-inline-flex justify-content-center align-items-center gap-3">
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-primary-subtle"
                          title="View"
                          data-bs-toggle="modal"
                          data-bs-target="#viewModal-{{$blog->id}}"><svg
                            xmlns="http://www.w3.org/2000/svg"
                            height="12"
                            viewBox="0 -960 960 960"
                            width="12"
                            fill="#0029ff">
                            <path
                              d="M480-312q70 0 119-49t49-119q0-70-49-119t-119-49q-70 0-119 49t-49 119q0 70 49 119t119 49Zm0-72q-40 0-68-28t-28-68q0-40 28-68t68-28q40 0 68 28t28 68q0 40-28 68t-68 28Zm0 192q-142.6 0-259.8-78.5Q103-349 48-480q55-131 172.2-209.5Q337.4-768 480-768q142.6 0 259.8 78.5Q857-611 912-480q-55 131-172.2 209.5Q622.6-192 480-192Zm0-288Zm0 216q112 0 207-58t146-158q-51-100-146-158t-207-58q-112 0-207 58T127-480q51 100 146 158t207 58Z" />
                          </svg>
                        </a>
                        <div class="modal fade" id="viewModal-{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title" id="exampleModalLabel">View Blog</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <span>
                                  <img src="{{ asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) }}" alt="image" class="img-fluid" />
                                  <h1 class="fs-5 p-2 mt-4">{{ $blog->title }}</h1>
                                  <p class="desc px-4">{{ $blog->description }}</p>
                                </span>
                                <button type="button" class="btn btn-secondary cancel_modal my-3" data-bs-dismiss="modal">Close</button>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a
                          role="button"
                          href="#"
                          class="btn text-decoration-none table_edit bg-info-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#editModal-{{$blog->id}}"
                          title="Edit"><svg xmlns="http://www.w3.org/2000/svg" height="12" viewBox="0 -960 960 960" width="12" fill="rgb(25 135 84)">
                            <path d="M80 0v-160h800V0H80Zm160-320h56l312-311-29-29-28-28-311 312v56Zm-80 80v-170l448-447q11-11 25.5-17t30.5-6q16 0 31 6t27 18l55 56q12 11 17.5 26t5.5 31q0 15-5.5 29.5T777-687L330-240H160Zm560-504-56-56 56 56ZM608-631l-29-29-28-28 57 57Z" />
                          </svg>
                        </a>
                      
                        <div class="modal fade" id="editModal-{{$blog->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content p-3">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Blog-{{$blog->id}}</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>

                              <div class="modal-body">
                                <div class="container">
                                  <form class="upload-form" action="{{ isset($blog) ? route('admin.blogUpdate', $blog->id) : route('blog.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @if(isset($blog))
                                    @method('POST')
                                    @endif
                                    <div class="row form-group g-4">
                                      <div class="col-md-6">
                                        <label for="inputBlogTitle" class="form-label text-start d-block">Blog Title</label>
                                        <input type="text" name="title" id="inputBlogTitle" class="form-control form-input" placeholder="Enter Blog Title..." value="{{ old('title', $blog->title ?? '') }}" required>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="inputBlogLink" class="form-label text-start d-block  ">Blog Link</label>
                                        <input type="text" name="slug" id="inputBlogLink" class="form-control form-input" placeholder="Enter Blog Link..." value="{{ old('slug', $blog->slug ?? '') }}" required>
                                      </div>
                                    </div>

                                    <div class="row form-group g-4 mt-3">
                                      <div class="col-md-6">
                                        <label for="inputBlogDescription" class="form-label text-start d-block ">Blog Description</label>
                                        <textarea class="form-control form-textbox" name="description" id="inputBlogDescription" rows="3" placeholder="Write your blog description here..." required>{{ old('description', $blog->description ?? '') }}</textarea>
                                      </div>
                                      <div class="col-md-6">
                                        <label for="metaTags" class="form-label  text-start d-block   ">Enter Metas (JSON Format)</label>
                                        <textarea name="meta_tags" id="metaTags" class="form-control form-textbox" placeholder="Enter JSON formatted metas..." required rows="3">{{ old('meta_tags', $blog->meta_tags ?? '') }}</textarea>
                                      </div>
                                    </div>

                                    <div class="row form-group  mt-3">
                                      <div class="col-12">
                                        <label for="html_content" class="form-label  text-start d-block    ">Blog Content</label>
                                        <textarea class="form-control ckeditor form-textbox" id="html_content_{{$blog->id}}" name="html_content" rows="6">{{ old('html_content', $blog->html_content ?? '') }}</textarea>
                                      </div>
                                    </div>

                                    <script>
                                      CKEDITOR.replace('html_content_{{ $blog->id }}', {
                                        allowedContent: true,
                                      });
                                    </script>

                                    <div class="row form-group">
                                      <div class="col-12 col-md-6 ">
                                        <label for="inputBlogTitle" class="form-label text-start d-block">Upload Thumbnail Image</label>

                                        <div class="form-group upload-input">
                                          <label
                                            for="thumbnailImg-{{$blog->id}}"
                                            class=" form-img-uploader rounded-2 d-flex align-items-center justify-content-center w-100 py-2">
                                            <div
                                              class="d-flex flex-column align-items-center gap-3">

                                              <p id="thumbnailText-{{$blog->id}}" style="display: none;">Upload Image</p>
                                            </div>
                                            <div id="thumbnailPreview-{{$blog->id}}" class="">
                                              <img id="previewThumbnailImg-{{$blog->id}}" src="{{ isset($blog) ? asset('storage/app/public/images/thumbnails/' . $blog->thumbnail_image) : '' }}" alt="Thumbnail Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 400px; height: 279px; border-radius: 8px;" />
                                            </div>
                                          </label>
                                          <input type="file" name="thumbnail_image" class="form-control form-control-lg d-none" id="thumbnailImg-{{$blog->id}}" onchange="previewThumbnailImage(event, {{$blog->id}})" />

                                        </div>
                                      </div>
                                      <div class="col-12 col-md-6 mt-0">
                                        <label for="inputBlogTitle" class="form-label text-start d-block">Upload Banner Image</label>

                                        <div class="form-group mb-20 upload-input">
                                          <label
                                            for="bannerImg-{{$blog->id}}"
                                            class=" form-img-uploader rounded-2 d-flex align-items-center justify-content-center w-100 py-2">
                                            <div
                                              class="d-flex flex-column align-items-center gap-3">

                                              <p id="bannerText-{{$blog->id}}" style="display: none;">Upload Image</p>
                                            </div>
                                            <div id="bannerPreview-{{$blog->id}}" class="">
                                              <img id="previewBannerImg-{{$blog->id}}" src="{{ isset($blog) ? asset('storage/app/public/images/banners/' . $blog->banner_image) : '' }}" alt="Banner Image Preview" style="display: {{ isset($blog) ? 'block' : 'none' }}; width: 100%; max-width: 400px; height:279px;
                                               border-radius: 8px;" />
                                            </div>
                                          </label>
                                          <input type="file" name="banner_image" class="form-control  d-none" id="bannerImg-{{$blog->id}}" onchange="previewBannerImage(event, {{$blog->id}})" />
                                        </div>
                                      </div>
                                      <div class="col-1 d-none d-sm-block"></div>
                                    </div>

                                    <div class="row">
                                      <div class="col-4 col-md-3"></div>
                                      <div class="col-12 col-md-9 form-button">
                                        <button type="button" class="btn btn-secondary cancel_modal my-3" data-bs-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn form-btn my-0">Update</button>
                                      </div>
                                    </div>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <a
                          href="#"
                          role="button"
                          class="btn text-decoration-none table_del bg-danger-subtle"
                          data-bs-toggle="modal"
                          data-bs-target="#deleteModal-{{ $blog->id }}"
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
                        <div
                          class="modal fade"
                          id="deleteModal-{{ $blog->id }}"
                          tabindex="-1"
                          aria-labelledby="exampleModalLabel"
                          aria-hidden="true">
                          <div
                            class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
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
                                  Delete Blog
                                </h1>
                                <p class="pb-4">
                                  Are you sure you want to delete
                                  this Blog?
                                </p>
                                <div>
                                  <form action="{{ route('admin.blogDelete' , $blog->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="btn btn-secondary cancel_modal" data-bs-dismiss="modal">
                                      Cancel
                                    </button>

                                    <button type="submit" class="btn btn-danger del_modal">
                                      Delete
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          <div class="card-footer">
            <p>Showing {{ $blogs->firstItem() }} to {{ $blogs->lastItem() }} of {{ $blogs->total() }} entries</p>
            <div class="pagination-div">
              <nav aria-label="Page navigation example">
                <ul class="pagination">
                  @if ($blogs->onFirstPage())
                  <li class="page-item disabled">
                    <span class="page-link">Previous</span>
                  </li>
                  @else
                  <li class="page-item">
                    <a class="page-link" href="{{ $blogs->previousPageUrl() }}">Previous</a>
                  </li>
                  @endif
                  @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                  <li class="page-item {{ $blogs->currentPage() == $page ? 'active' : '' }}">
                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                  </li>
                  @endforeach
                  @if ($blogs->hasMorePages())
                  <li class="page-item">
                    <a class="page-link" href="{{ $blogs->nextPageUrl() }}">Next</a>
                  </li>
                  @else
                  <li class="page-item disabled">
                    <span class="page-link">Next</span>
                  </li>
                  @endif
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function previewThumbnailImage(event, blogId) {
    const preview = document.getElementById('previewThumbnailImg-' + blogId);
    const file = event.target.files[0];
    const reader = new FileReader();
    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';
      document.getElementById('thumbnailText-' + blogId).style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  function previewBannerImage(event, blogId) {
    const preview = document.getElementById('previewBannerImg-' + blogId);
    const file = event.target.files[0];
    const reader = new FileReader();
    reader.onload = function() {
      preview.src = reader.result;
      preview.style.display = 'block';
      document.getElementById('bannerText-' + blogId).style.display = 'none';
    };
    reader.readAsDataURL(file);
  }

  function updatePagination() {
    const perPage = document.getElementById('perPage').value;
    window.location.href = `?perPage=${perPage}`;
  }
</script>
@endsection