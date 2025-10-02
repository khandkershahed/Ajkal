@extends('layouts.base')

@section('content')

          <!--begin::Content-->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <!--begin::Container-->
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">All News</h1>
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif

                <div class="row">
                  <div class="col-lg-3">
                      <div class="card-header align-items-center py-5 gap-2 gap-md-5" >
                        <label class="fw-bold fs-6 mb-2">News Category</label>
                          <select class="form-select form-select-solid" id="category_filter">
                            <option value="">All</option>
                            @foreach($categories as $category)
                              <option value="{{$category->id}}">{{$category->name_bangla}}</option>
                            @endforeach
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="card-header align-items-center py-5 gap-2 gap-md-5" >
                        <label class="fw-bold fs-6 mb-2">News Type</label>
                          <select class="form-select form-select-solid" id="type_filter">
                            <option value="">All</option>
                            <option value="1">Breaking</option>
                            <option value="2">Spotlight</option>
                            <option value="3">General</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="card-header align-items-center py-5 gap-2 gap-md-5" >
                        <label class="fw-bold fs-6 mb-2">Is Featured</label>
                          <select class="form-select form-select-solid" id="featured_filter">
                            <option value="">All</option>
                            <option value="1">Yes</option>
                            <option value="2">No</option>
                          </select>
                      </div>
                  </div>
                  <div class="col-lg-3">
                      <div class="card-header align-items-center py-5 gap-2 gap-md-5" >
                        <label class="fw-bold fs-6 mb-2">Status</label>
                          <select class="form-select form-select-solid" id="status_filter">
                            <option value="">All</option>
                            <option value="1">Published</option>
                            <option value="2">Pending</option>
                          </select>
                      </div>
                  </div>
                </div>

                <br>

                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-flush">
                      <div
                        class="card-header align-items-center py-5 gap-2 gap-md-5"
                      >
                        <div class="card-title">
                          <!--begin::Search-->
                          <div
                            class="d-flex align-items-center position-relative my-1"
                          >
                            <span
                              class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                              >
                                <rect
                                  opacity="0.5"
                                  x="17.0365"
                                  y="15.1223"
                                  width="8.15546"
                                  height="2"
                                  rx="1"
                                  transform="rotate(45 17.0365 15.1223)"
                                  fill="currentColor"
                                ></rect>
                                <path
                                  d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                  fill="currentColor"
                                ></path>
                              </svg>
                            </span>
                            <input
                              type="text"
                              data-kt-filter="search"
                              class="form-control form-control-solid w-250px ps-14"
                              placeholder="Search Report"
                            />
                          </div>
                          <!--end::Search-->
                          <!--begin::Export buttons-->
                          <div
                            id="kt_datatable_example_1_export"
                            class="d-none"
                          ></div>
                          <!--end::Export buttons-->
                        </div>
                        <div
                          class="card-toolbar flex-row-fluid justify-content-end gap-5"
                        >
                          <!--begin::Export dropdown-->
                          <a
                            type="button"
                            class="btn btn-light-primary"
                            href="{{url('/create-news')}}"
                          >
                            <span class="svg-icon svg-icon-3">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                              >
                                <rect
                                  opacity="0.5"
                                  x="11.364"
                                  y="20.364"
                                  width="16"
                                  height="2"
                                  rx="1"
                                  transform="rotate(-90 11.364 20.364)"
                                  fill="currentColor"
                                ></rect>
                                <rect
                                  x="4.36396"
                                  y="11.364"
                                  width="16"
                                  height="2"
                                  rx="1"
                                  fill="currentColor"
                                ></rect>
                              </svg>
                            </span>
                            Add Post
                          </a>
                          <!--end::Export dropdown-->
                        </div>
                      </div>
                      
                      <div class="card-body pt-0">
                        <table class="table table-bordered yajra-datatable">
                            <thead>
                                <tr>
                                    <th>Serial</th>
                                    <!-- <th>Name</th> -->
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Author</th>
                                    <th>Type</th>
                                    <th>Featured</th>
                                    <th>Status</th>
                                    <th>Time</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Container-->
            </div>
            <!--end::Post-->
          </div>
          <!--end::Content-->

@endsection

