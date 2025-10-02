@extends('layouts.base')
@section('content')

		<div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-fluid">
                <h1 class="text-center pb-3 fs-1">Payment History</h1>
                <div class="row">
                  <div class="col-lg-12">

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
                                    href="{{url('/due-payment/'.$advertisement_id)}}"
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
                                    Due Payment
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
                                      <th class="">Total Payment</th>
                                      <th class="">Discount</th>
                                      <th class="">Total Paid Amount</th>
                                      <th class="">Due Amount</th>
                                      <th class="">Pay Amount</th>
                                      <th class="">Payment Method</th>
                                      <th class="">Payment Reason</th>
                                      <!-- <th class="" width="10%">Action</th> -->
                                    </tr>
                                  </thead>
                                  <tbody
                                    class="fw-bold text-gray-600 text-left"
                                  >
                                  <?php $counter=1; ?>
                                  	@foreach($payment_histories as $payment_history)
                                    <tr class="odd">
                                      <td>{{$counter}}</td>
                                      <td>{{$payment_history->total_payment}}</td>
                                      <td>{{$payment_history->discount}}</td>
                                      <td>{{$payment_history->total_paid_amount}}</td>
                                      <td>{{$payment_history->due_amount}}</td>
                                      <td>{{$payment_history->pay_amount}}</td>
                                      <td class="text-left pe-0">
                                        {{$payment_history->name}}
                                      </td>
                                      <td>@if($payment_history->is_due_payment==1) Due Payment @else Purchase Payment @endif </td>
                                      <!-- <td class="text-center">
                                        <div
                                          class="d-flex justify-content-center flex-shrink-0"
                                        >
                                          @if(auth()->user()->admin_role==0)
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
                                      </td> -->
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