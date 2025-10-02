@extends('layouts.base')
@section('content')


		<div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
        >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-fluid">
                <h1 class="text-center pb-3 fs-1"><span class="no_print">Advertisement Report</span></h1>
                <!--begin::Products-->
                <div class="card card-flush mb-2 no_print">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="card card-flush">
                        <div class="card-body">
                          <form
                            id="kt_docs_formvalidation_daterangepicker"
                            class="form"
                            action="#"
                            autocomplete="off"
                          >
                            <div class="row">
                              <div class="col-lg-3">
                                <div class="fv-row mb-5">
                                  <label class="required fw-bold fs-6 mb-2"
                                    >Select User</label
                                  >
                                  <select class="form-select form-select-lg form-select-solid" id="user_id" data-control="select2" data-allow-clear="false">
                                    <option selected value="0">All</option>
                                    @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->full_name}}</option>
                                    @endforeach
                                </select>
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="fv-row mb-5">
                                  <label class="required fw-bold fs-6 mb-2"
                                    >Start Date</label
                                  >

                                  <input
                                    class="form-control form-control-solid kt_datepicker_2"
                                    placeholder="Pick a date"
                                    name="start_date"
                                    id="report_start_date"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="fv-row mb-5">
                                  <label class="required fw-bold fs-6 mb-2"
                                    >End Date</label
                                  >

                                  <input
                                    class="form-control form-control-solid kt_datepicker_2"
                                    placeholder="Pick a date"
                                    name="end_date"
                                    id="report_end_date"
                                  />
                                </div>
                              </div>
                              <div class="col-lg-3">
                                <div class="fv-row mb-5">
                                    <button
                                      id="report_generate_btn"
                                      type="button"
                                      class="btn btn-primary mt-8"
                                    >
                                        <span class="indicator-label" >
                                            Generate Report
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>
                              </div>
                            </div>                           
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card card-flush" id="report_section">
                  <!--begin::Card header-->
                  <div
                    class="card-header align-items-center py-5 gap-2 gap-md-5"
                  >
                    <!--begin::Card title-->
                    <div class="card-title">
                      <!--begin::Export buttons-->
                      <div
                        id="kt_ecommerce_report_sales_export"
                        class="d-none"
                      ></div>
                      <!--end::Export buttons-->
                    </div>
                    <!--end::Card title-->
                    <h1>Ads Payment Report from <span id="start_date_label"></span> to <span id="end_date_label"></span></h1>
                    <!--begin::Card toolbar-->
                    <div
                      class="card-toolbar flex-row-fluid justify-content-end gap-5"
                    >
                      <!--begin::Export dropdown-->
                      <!-- <button
                        type="button"
                        class="btn btn-light-primary"
                        data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end"
                      >
                        <i class="fa fa-download"></i>
                        </span>
                        Download Report
                      </button> -->
                      <!--end::Export dropdown-->
                    </div>
                    <!--end::Card toolbar-->
                  </div>
                  <!--end::Card header-->
                  <!--begin::Card body-->
                  <div class="card-body pt-0">
                    <!--begin::Table-->
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
                          <th>Company</th>
                          <th>Name</th>
                          <th>Position</th>
                          <th>Duration</th>
                          <th>Start From</th>
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
                        
                      </tbody>
                      <!--end::Table body-->
                        <tfoot>
                            <tr>
                              <!--begin::Date=-->
                              <td class="text-end" colspan="6">Grand Total</td>
                              <td class="text-end"><b>$</b><strong id="grand_total"></strong></td>
                              <td class="text-end">
                                $<span id="discount_total"></span>
                              </td>
                              <td class="text-end text-success">
                                $<span id="paid_total"></span>
                              </td>
                              <td class="text-end text-danger">
                                $<span id="due_total"></span>
                              </td>
                              <!--end::Total=-->
                            </tr>
                        </tfoot>
                    </table>
                    <button type="button" id="report_print_btn" class="btn btn-success my-1 me-12" onclick="window.print();"><span class="no_print">Print Report</span></button>
                    <!--end::Table-->
                  </div>
                  <!--end::Card body-->
                </div>
                <!--end::Products-->
              </div>
              <!--end::Container-->
            </div>
            <!--end::Post-->
          </div>


@endsection