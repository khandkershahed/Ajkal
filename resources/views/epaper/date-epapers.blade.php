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
                <h1 class="text-center pb-3 fs-1">All Epapers</h1>
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
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
                            href="{{url('/create-date-epaper/'.$epapers[0]->epaper_date)}}"
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
                            Add ePaper Page
                          </a>
                          <!--end::Export dropdown-->
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <table
                          class="table align-middle border rounded table-striped fs-6 g-5"
                          id="kt_datatable_example_1"
                        >
                          <thead>
                            <!--begin::Table row-->
                            <tr
                              class="text-center text-gray-400 bg-light-dark fw-bolder fs-7 text-uppercase"
                            >
                              <th class="">Page Number</th>
                              <th class="">Page Preview</th>
                              <th class="">Title</th>
                              <th class="">Date</th>
                              <th class="">Status</th>
                              <th class="">Action</th>
                            </tr>
                            <!--end::Table row-->
                          </thead>
                          <tbody class="fw-bold text-gray-600">
                            @foreach($epapers as $epaper)
                            <tr class="odd">
                              <td class="text-center">{{$epaper->page_number}}</td>
                              <td class="text-center pe-0">
                                <img
                                  class="rounded-circle"
                                  width="50px"
                                  height="50px"
                                  src="{{ config('app.url').'/img/epaper/'.$epaper->epaper_image}}"
                                  alt="ePaper image" 
                                />
                              </td>
                              <td>
                                {{$epaper->name}}
                              </td>
                              <td class="text-center">{{$epaper->epaper_date}}</td>
                              <td class="text-center pe-0">@if($epaper->status==1) Published @else Pending @endif</td>
                              <td class="text-center">
                                <div class="d-flex justify-content-end flex-shrink-0">
                                  <a
                                    href="{{url('/view-epaper/'.$epaper->id)}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                  >
                                    <span class="svg-icon svg-icon-3">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M168 80c-13.3 0-24 10.7-24 24V408c0 8.4-1.4 16.5-4.1 24H440c13.3 0 24-10.7 24-24V104c0-13.3-10.7-24-24-24H168zM72 480c-39.8 0-72-32.2-72-72V112C0 98.7 10.7 88 24 88s24 10.7 24 24V408c0 13.3 10.7 24 24 24s24-10.7 24-24V104c0-39.8 32.2-72 72-72H440c39.8 0 72 32.2 72 72V408c0 39.8-32.2 72-72 72H72zM176 136c0-13.3 10.7-24 24-24h96c13.3 0 24 10.7 24 24v80c0 13.3-10.7 24-24 24H200c-13.3 0-24-10.7-24-24V136zm200-24h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80h32c13.3 0 24 10.7 24 24s-10.7 24-24 24H376c-13.3 0-24-10.7-24-24s10.7-24 24-24zM200 272H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24zm0 80H408c13.3 0 24 10.7 24 24s-10.7 24-24 24H200c-13.3 0-24-10.7-24-24s10.7-24 24-24z"/></svg>
                                    </span>
                                  </a>
                                  <a
                                    href="{{url('/crop-epaper/'.$epaper->id)}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                  >
                                    <span class="svg-icon svg-icon-3">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M128 32c0-17.7-14.3-32-32-32S64 14.3 64 32V64H32C14.3 64 0 78.3 0 96s14.3 32 32 32H64V384c0 35.3 28.7 64 64 64H352V384H128V32zM384 480c0 17.7 14.3 32 32 32s32-14.3 32-32V448h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H448l0-256c0-35.3-28.7-64-64-64L160 64v64l224 0 0 352z"/></svg>
                                    </span>
                                  </a>
                                  <a
                                    href="{{url('/edit-epaper/'.$epaper->id)}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                  >
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152V424c0 48.6 39.4 88 88 88H360c48.6 0 88-39.4 88-88V312c0-13.3-10.7-24-24-24s-24 10.7-24 24V424c0 22.1-17.9 40-40 40H88c-22.1 0-40-17.9-40-40V152c0-22.1 17.9-40 40-40H200c13.3 0 24-10.7 24-24s-10.7-24-24-24H88z"/></svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </a>
                                </div>
                              </td>
                            </tr>
                            @endforeach
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
