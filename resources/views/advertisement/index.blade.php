@extends('layouts.base')
@section('content')

		<div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-fluid">
                <h1 class="text-center pb-3 fs-1">All Advertisement</h1>
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="row">
                  <div class="col-lg-12">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button
                          class="nav-link active"
                          id="home-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#home"
                          type="button"
                          role="tab"
                          aria-controls="home"
                          aria-selected="true"
                        >
                          Advertisements
                        </button>
                      </li>
                      <!-- <li class="nav-item" role="presentation">
                        <button
                          class="nav-link"
                          id="profile-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#profile"
                          type="button"
                          role="tab"
                          aria-controls="profile"
                          aria-selected="false"
                        >
                          User Created
                        </button>
                      </li> -->
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div
                        class="tab-pane active"
                        id="home"
                        role="tabpanel"
                        aria-labelledby="home-tab"
                      >
                        <div class="row">
                          <div class="col-lg-12">
                            <div class="card card-flush">
                              <div
                                class="card-header align-items-center py-5 gap-2 gap-md-5"
                              >
                                <div class="card-title">
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
                                  <div
                                    class="d-none kt_datatable_example_1_export"
                                  ></div>
                                </div>
                                <div
                                  class="card-toolbar flex-row-fluid justify-content-end gap-5"
                                >
                                  <a
                                    type="button"
                                    class="btn btn-light-primary"
                                    href="{{url('/create-advertisement')}}"
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
                                    Add Advertisement
                                  </a>
                                </div>
                              </div>

                              <div class="card-body pt-0">
                                <table
                                  class="table align-middle border rounded table-striped fs-6 g-5 kt_datatable_example_1"
                                >
                                  <thead>
                                    <tr
                                      class="text-left text-gray-400 bg-light-dark fw-bolder fs-7 text-uppercase"
                                    >
                                      <th class="">Sl</th>
                                      <th class="">User</th>
                                      <th class="">Banner</th>
                                      <th class="">Duration</th>
                                      <th class="">Start Date</th>
                                      <th class="">Ads Placement</th>
                                      <th class="">Type</th>
                                      <th class="">Price</th>
                                      <th class="">Payment Status</th>
                                      <th class="" width="10%">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody
                                    class="fw-bold text-gray-600 text-left"
                                  >
                                  <?php $counter=1; ?>
                                  	@foreach($advertisements as $advertisement)
                                    <tr class="odd">
                                      <td>{{$counter}}</td>
                                      <td>{{$advertisement->full_name}}</td>
                                      <td>
                                        <a href="{{ config('app.url').'/img/ad/'.$advertisement->ad_banner}}" download target="_self">
                                          <img
                                            src="{{ config('app.url').'/img/ad/'.$advertisement->ad_banner}}"
                                            class="rounded-1 img-fluid"
                                            width="50"
                                            alt="Advertisement"
                                          />
                                        </a>
                                      </td>
                                      <td>{{$advertisement->duration}} @if($advertisement->duration==1) week @else weeks @endif </td>
                                      <td>{{$advertisement->start_date}}</td>
                                      <td class="text-left pe-0">
                                        {{$advertisement->name}}
                                      </td>

                                      <td>@if($advertisement->type==1) ePaper @else NewsPortal @endif</td>
                                      <td>{{$advertisement->payable_amount}}</td>
                                      <td>
                                      	@if($advertisement->due_amount==0)
                                        <a href="#" class="btn btn-light-primary me-2 mb-2"><i class="las la-wallet fs-2 me-2"></i>Paid</a>
                                        @else
                                        <a href="{{url('/due-payment/'.$advertisement->id)}}" class="btn btn-light-danger me-2 mb-2"><i class="las la-wallet fs-2 me-2"></i>Due</a>
                                        @endif
                                      </td>
                                      <td class="text-center">
                                        <div
                                          class="d-flex justify-content-center flex-shrink-0"
                                        >
                                          <a
                                            href="{{ config('app.url').'/img/ad/'.$advertisement->ad_banner}}"
                                            class="btn btn-icon btn-success me-2 mb-2"
                                            download
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg width="800px" height="800px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                <defs>
                                                  <path id="download-a" d="M4.29289322,1.70710678 C3.90236893,1.31658249 3.90236893,0.683417511 4.29289322,0.292893219 C4.68341751,-0.0976310729 5.31658249,-0.0976310729 5.70710678,0.292893219 L7.70710678,2.29289322 C8.09763107,2.68341751 8.09763107,3.31658249 7.70710678,3.70710678 C7.31658249,4.09763107 6.68341751,4.09763107 6.29289322,3.70710678 L4.29289322,1.70710678 Z M0,8 L16,8 L16,10 L0,10 L0,8 Z"/>
                                                  <path id="download-c" d="M11,9.58578644 L13.2928932,7.29289322 C13.6834175,6.90236893 14.3165825,6.90236893 14.7071068,7.29289322 C15.0976311,7.68341751 15.0976311,8.31658249 14.7071068,8.70710678 L10.7071068,12.7071068 C10.3165825,13.0976311 9.68341751,13.0976311 9.29289322,12.7071068 L5.29289322,8.70710678 C4.90236893,8.31658249 4.90236893,7.68341751 5.29289322,7.29289322 C5.68341751,6.90236893 6.31658249,6.90236893 6.70710678,7.29289322 L9,9.58578644 L9,0.998529185 C9,0.447056744 9.44771525,-7.95978809e-15 10,-7.99360578e-15 C10.5522847,-8.02742346e-15 11,0.447056744 11,0.998529185 L11,9.58578644 Z M18,16 L18,10 C18,9.44771525 18.4477153,9 19,9 C19.5522847,9 20,9.44771525 20,10 L20,17 C20,17.5522847 19.5522847,18 19,18 L1,18 C0.44771525,18 0,17.5522847 0,17 L0,10 C0,9.44771525 0.44771525,9 1,9 C1.55228475,9 2,9.44771525 2,10 L2,16 L18,16 Z"/>
                                                </defs>
                                                <g fill="none" fill-rule="evenodd" transform="translate(2 3)">
                                                  <g transform="translate(2 6)">
                                                    <mask id="download-b" fill="#ffffff">
                                                      <use xlink:href="#download-a"/>
                                                    </mask>
                                                    <use fill="#D8D8D8" fill-rule="nonzero" xlink:href="#download-a"/>
                                                    <g fill="#FFA0A0" mask="url(#download-b)">
                                                      <rect width="24" height="24" transform="translate(-4 -9)"/>
                                                    </g>
                                                  </g>
                                                  <mask id="download-d" fill="#ffffff">
                                                    <use xlink:href="#download-c"/>
                                                  </mask>
                                                  <use fill="#000000" fill-rule="nonzero" xlink:href="#download-c"/>
                                                  <g fill="#7600FF" mask="url(#download-d)">
                                                    <rect width="24" height="24" transform="translate(-2 -3)"/>
                                                  </g>
                                                </g>
                                              </svg>
                                            </span>
                                          </a>
                                          <a
                                            href="{{url('/invoice/'.$advertisement->id)}}"
                                            class="btn btn-icon btn-warning me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.3"
                                                  d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                          <a
                                            href="{{url('/payment-history/'.$advertisement->id)}}"
                                            class="btn btn-icon btn-success me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M0 112.5V422.3c0 18 10.1 35 27 41.3c87 32.5 174 10.3 261-11.9c79.8-20.3 159.6-40.7 239.3-18.9c23 6.3 48.7-9.5 48.7-33.4V89.7c0-18-10.1-35-27-41.3C462 15.9 375 38.1 288 60.3C208.2 80.6 128.4 100.9 48.7 79.1C25.6 72.8 0 88.6 0 112.5zM128 416H64V352c35.3 0 64 28.7 64 64zM64 224V160h64c0 35.3-28.7 64-64 64zM448 352c0-35.3 28.7-64 64-64v64H448zm64-192c-35.3 0-64-28.7-64-64h64v64zM384 256c0 61.9-43 112-96 112s-96-50.1-96-112s43-112 96-112s96 50.1 96 112zM252 208c0 9.7 6.9 17.7 16 19.6V276h-4c-11 0-20 9-20 20s9 20 20 20h24 24c11 0 20-9 20-20s-9-20-20-20h-4V208c0-11-9-20-20-20H272c-11 0-20 9-20 20z"/></svg>
                                    </span>
                                          </a>
                                          <a
                                            href="{{url('/edit-advertisement/'.$advertisement->id)}}"
                                            class="btn btn-icon btn-primary me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  opacity="0.3"
                                                  d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                          @if(auth()->user()->admin_role==1)
                                          <button type="button" id="{{$advertisement->id}}" class="btn btn-icon btn-danger me-2 mb-2 ad_delete_btn">
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.5"
                                                  d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.5"
                                                  d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </button>
                                          @endif
                                        </div>
                                      </td>
                                    </tr>
                                    <?php $counter++; ?>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="tab-pane"
                        id="profile"
                        role="tabpanel"
                        aria-labelledby="profile-tab"
                      >
                        <!-- <div class="row">
                          <div class="col-lg-12">
                            <div class="card card-flush">
                              <div
                                class="card-header align-items-center py-5 gap-2 gap-md-5"
                              >
                                <div class="card-title">
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
                                  <div
                                    class="d-none kt_datatable_example_1"
                                  ></div>
                                </div>
                                <div
                                  class="card-toolbar flex-row-fluid justify-content-end gap-5"
                                >
                                  <a
                                    type="button"
                                    class="btn btn-light-primary"
                                    href="create-advertisement.html"
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
                                    Add Advertisement
                                  </a>
                                </div>
                              </div>

                              <div class="card-body pt-0">
                                <table
                                  class="table align-middle border rounded table-striped fs-6 g-5 kt_datatable_example_1"
                                >
                                  <thead>
                                    <tr
                                      class="text-left text-gray-400 bg-light-dark fw-bolder fs-7 text-uppercase"
                                    >
                                      <th class="">Sl</th>
                                      <th class="">Client</th>
                                      <th class="">Banner</th>
                                      <th class="">Duration</th>
                                      <th class="">Start Date</th>
                                      <th class="">End Date</th>
                                      <th class="">Ads Placement</th>
                                      <th class="">Created By</th>
                                      <th class="">Type</th>
                                      <th class="">Price</th>
                                      <th class="">Status</th>
                                      <th class="" width="10%">Action</th>
                                    </tr>
                                  </thead>
                                  <tbody
                                    class="fw-bold text-gray-600 text-left"
                                  >
                                    <tr class="odd">
                                      <td>1</td>
                                      <td>Galaxy Media</td>
                                      <td>
                                        <img
                                          src="https://www.barattalo.it/ambdemo/data/dbimg/media/138_0.jpg"
                                          class="rounded-1 img-fluid"
                                          width="50"
                                          alt=""
                                        />
                                      </td>
                                      <td>2 Weeks</td>
                                      <td>14/03/2024</td>
                                      <td>28/03/2024</td>
                                      <td class="text-left pe-0">
                                        HomePage Top
                                      </td>

                                      <td>Admin</td>
                                      <td>ePaper</td>
                                      <td>$100</td>
                                      <td>
                                        <a
                                          href="#"
                                          class="btn btn-light-primary me-2 mb-2"
                                          ><i
                                            class="las la-wallet fs-2 me-2"
                                          ></i
                                          >Paid</a
                                        >
                                      </td>
                                      <td class="text-center">
                                        <div
                                          class="d-flex justify-content-center flex-shrink-0"
                                        >
                                          <a
                                            href="edit-news.html"
                                            class="btn btn-icon btn-warning me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.3"
                                                  d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                          <a
                                            href="edit-news.html"
                                            class="btn btn-icon btn-primary me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  opacity="0.3"
                                                  d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                          <a
                                            href="#"
                                            class="btn btn-icon btn-danger me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.5"
                                                  d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.5"
                                                  d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                        </div>
                                      </td>
                                    </tr>
                                    <tr class="odd">
                                      <td>1</td>
                                      <td>Galaxy Media</td>
                                      <td>
                                        <img
                                          src="https://www.barattalo.it/ambdemo/data/dbimg/media/138_0.jpg"
                                          class="rounded-1 img-fluid"
                                          width="50"
                                          alt=""
                                        />
                                      </td>
                                      <td>2 Weeks</td>
                                      <td>14/03/2024</td>
                                      <td>28/03/2024</td>
                                      <td class="text-left pe-0">
                                        HomePage Top
                                      </td>

                                      <td>Admin</td>
                                      <td>ePaper</td>
                                      <td>$100</td>
                                      <td>
                                        <a
                                          href="#"
                                          class="btn btn-light-danger me-2 mb-2"
                                          ><i
                                            class="las la-wallet fs-2 me-2"
                                          ></i
                                          >Due</a
                                        >
                                      </td>
                                      <td class="text-center">
                                        <div
                                          class="d-flex justify-content-center flex-shrink-0"
                                        >
                                          <a
                                            href="edit-news.html"
                                            class="btn btn-icon btn-warning me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.3"
                                                  d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                          <a
                                            href="edit"
                                            class="btn btn-icon btn-primary me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  opacity="0.3"
                                                  d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                          <a
                                            href="delete"
                                            class="btn btn-icon btn-danger me-2 mb-2"
                                          >
                                            <span class="svg-icon svg-icon-3">
                                              <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                width="24"
                                                height="24"
                                                viewBox="0 0 24 24"
                                                fill="none"
                                              >
                                                <path
                                                  d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.5"
                                                  d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                  fill="currentColor"
                                                ></path>
                                                <path
                                                  opacity="0.5"
                                                  d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                  fill="currentColor"
                                                ></path>
                                              </svg>
                                            </span>
                                          </a>
                                        </div>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Container-->
            </div>
            <!--end::Post-->
          </div>

@endsection