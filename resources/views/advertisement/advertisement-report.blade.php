@extends('layouts.base')
@section('content')

		<div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-fluid">
                <h1 class="text-center pb-3 fs-1">Advertisement Report</h1>
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
                              

                              <div class="card-body pt-0">
                                <table
                                  class="table table-bordered align-middle table-row-dashed fs-6 gy-5"
                                  id="kt_ecommerce_report_sales_table"
                                >
                                  <!--begin::Table head-->
                                  <thead>
                                    <!--begin::Table row-->
                                    <tr
                                      class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0"
                                    >
                                      <th class="min-w-100px">Serial</th>
                                      <th>User</th>
                                      <th class="text-end min-w-100px">Total</th>
                                      <th class="text-end min-w-100px">Discount</th>
                                      <th class="text-end min-w-100px">Paid</th>
                                      <th class="text-end min-w-100px">Due</th>
                                    </tr>
                                    <!--end::Table row-->
                                  </thead>
                                  <!--end::Table head-->
                                  <!--begin::Table body-->
                                  <tbody class="fw-bold text-gray-600">
                                    <?php $counter=1; ?>
                                    @foreach($advertisements as $advertisement)
                                    <tr class="odd">
                                      <td>{{$counter}}</td>
                                      <td>{{$advertisement->full_name}}</td>
                                      <td class="text-end">{{$advertisement->payable_amount}}</td>
                                      <td class="text-end">{{$advertisement->discount}}</td>
                                      <td class="text-end">{{$advertisement->paid_amount}}</td>
                                      <td class="text-end">{{$advertisement->due_amount}}</td>
                                    </tr>
                                    <?php $counter++; ?>
                                    @endforeach
                                  </tbody>
                                </table>
                                <button type="button" id="summury_report_print_btn" class="btn btn-success my-1 me-12" onclick="window.print();"><span class="no_print">Print Report</span></button>
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