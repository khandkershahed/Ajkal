@extends('layouts.base')
@section('content')

          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-fluid">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                        <!-- begin::Body-->
                        <div class="card-body py-20">
                            <!-- begin::Wrapper-->
                            <div class="mw-lg-950px mx-auto w-100">
                                <!-- begin::Header-->
                                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                                    <h4 class="fw-boldest text-gray-800 fs-2qx pe-5 pb-7"><span class="no_print">INVOICE</span></h4>
                                    <!--end::Logo-->
                                    <div class="text-sm-end">
                                        <!--begin::Logo-->
                                        <a href="#" class="d-block mw-150px ms-sm-auto">
                                            <img alt="Logo" src="https://i.ibb.co/6D35WjX/logo.png" class="w-100" />
                                        </a>
                                        <!--end::Logo-->
                                        <!--begin::Text-->
                                        <div class="text-sm-end fw-bold fs-4 text-muted mt-7">
                                            <div>71-16 35th Ave, Jackson Heights</div>
                                            <div>NY 11372, USA.</div>
                                        </div>
                                        <!--end::Text-->
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="pb-12">
                                    <!--begin::Wrapper-->
                                    <div class="d-flex flex-column gap-7 gap-md-10">
                                        <!--begin::Message-->
                                        <div class="fw-bolder fs-2">{{$invoice->full_name}}
                                        <span class="fs-6">{{$invoice->email}}</span>,
                                        <br />
                                        <span class="text-muted fs-5">Here are your order details. We thank you for your purchase.</span></div>
                                        <!--begin::Message-->
                                        <!--begin::Separator-->
                                        <div class="separator"></div>
                                        <!--begin::Separator-->
                                        <!--begin::Order details-->
                                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bolder">
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Order ID</span>
                                                <span class="fs-5">#{{$invoice->id}}</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Date</span>
                                                <span class="fs-5">{{date('Y-m-d')}}</span>
                                            </div>
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Invoice ID</span>
                                                <span class="fs-5">#INV-000{{$invoice->id}}</span>
                                            </div>
                                            <!-- <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Shipment ID</span>
                                                <span class="fs-5">#SHP-0025410</span>
                                            </div> -->
                                        </div>
                                        <!--end::Order details-->
                                        <!--begin::Billing & shipping-->
                                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bolder">
                                            <div class="flex-root d-flex flex-column">
                                                <span class="text-muted">Billing Address</span>
                                                <span class="fs-6">{{$invoice->address}}</span>
                                            </div>
                                        </div>
                                        <!--end::Billing & shipping-->
                                        <!--begin:Order summary-->
                                        <div class="d-flex justify-content-between flex-column">
                                            <!--begin::Table-->
                                            <div class="table-responsive border-bottom mb-9">
                                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                    <thead>
                                                        <tr class="border-bottom fs-6 fw-bolder text-muted">
                                                            <th class="min-w-175px pb-2">Products</th>
                                                            <th class="min-w-70px text-end pb-2">Duration</th>
                                                            <th class="min-w-80px text-end pb-2">Start From</th>
                                                            <th class="min-w-100px text-end pb-2">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="fw-bold text-gray-600">
                                                        <!--begin::Products-->
                                                        <tr>
                                                            <!--begin::Product-->
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Thumbnail-->
                                                                    <a href="#" class="symbol symbol-50px">
                                                                      <img class="symbol-label"
                                                                      src="{{ config('app.url').'/img/ad/'.$invoice->ad_banner}}">
                                                                    </a>
                                                                    <!--end::Thumbnail-->
                                                                    <!--begin::Title-->
                                                                    <div class="ms-5">
                                                                        <div class="fw-bolder">{{$invoice->name}}</div>
                                                                        <div class="fs-7 text-muted">
                                                                          @if($invoice->type==1) ePaper @else NewsPortal @endif
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                            </td>
                                                            <!--end::Product-->
                                                            <!--begin::SKU-->
                                                            <td class="text-end">
                                                              {{$invoice->duration}} 
                                                              @if($invoice->duration==1) week @else weeks @endif
                                                            </td>
                                                            <!--end::SKU-->
                                                            <!--begin::Quantity-->
                                                            <td class="text-end">{{$invoice->start_date}}</td>
                                                            <!--end::Quantity-->
                                                            <!--begin::Total-->
                                                            <td class="text-end">${{$invoice->payable_amount}}</td>
                                                            <!--end::Total-->
                                                        </tr>
                                                        <!--end::Products-->
                                                        <!--begin::Subtotal-->
                                                        <tr>
                                                            <td colspan="3" class="text-end">Subtotal</td>
                                                            <td class="text-end">${{$invoice->payable_amount}}</td>
                                                        </tr>
                                                        <!--end::Subtotal-->
                                                        <!--begin::VAT-->
                                                        <tr>
                                                            <td colspan="3" class="text-end">Discount</td>
                                                            <td class="text-end">${{$invoice->discount}}</td>
                                                        </tr>
                                                        <!--end::VAT-->
                                                        <!--begin::Shipping-->
                                                        <tr>
                                                            <td colspan="3" class="text-end">Paid</td>
                                                            <td class="text-end">${{$invoice->paid_amount}}</td>
                                                        </tr>
                                                        <!--end::Shipping-->
                                                        <!--begin::Grand total-->
                                                        <tr>
                                                            <td colspan="3" class="fs-3 text-dark fw-bolder text-end">Due</td>
                                                            <td class="text-dark fs-3 fw-boldest text-end">${{$invoice->due_amount}}</td>
                                                        </tr>
                                                        <!--end::Grand total-->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!--end::Table-->
                                        </div>
                                        <!--end:Order summary-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Body-->
                                <!-- begin::Footer-->
                                <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                                    <!-- begin::Actions-->
                                    <div class="my-1 me-5">
                                        <!-- begin::Pint-->
                                        <button type="button" id="invoice_print_btn" class="btn btn-success my-1 me-12" onclick="window.print();"><span class="no_print">Print Invoice</span></button>
                                        <!-- end::Pint-->
                                        <!-- begin::Download-->
                                        <!-- <button type="button" class="btn btn-light-success my-1">Download</button> -->
                                        <!-- end::Download-->
                                    </div>
                                    <!-- end::Actions-->
                                    <!-- begin::Action-->
                                    <!-- <a href="../../demo1/dist/apps/invoices/create.html" class="btn btn-primary my-1">Create Invoice</a> -->
                                    <!-- end::Action-->
                                </div>
                                <!-- end::Footer-->
                            </div>
                            <!-- end::Wrapper-->
                        </div>
                        <!-- end::Body-->
                    </div>
                    <!-- end::Invoice 1-->
                  </div>
                </div>
              </div>
              <!--end::Container-->
            </div>
            <!--end::Post-->
          </div>

@endsection