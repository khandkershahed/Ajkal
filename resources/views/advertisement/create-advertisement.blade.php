@extends('layouts.base')
@section('content')

		<div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">Create Advertisement</h1>
                <div class="row">
                  <div class="col-lg-10 offset-1">
                    <div class="card card-flush">
                      <div class="card-body">
                        <!--begin::Form-->
                        <form
                          id="kt_docs_formvalidation_text1"
                          method="post"
                          class="form"
                          action="{{url('/create-advertisement')}}"
                          enctype="multipart/form-data"
                          autocomplete="off"
                        >
                        @csrf
                          <div class="row">
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Select User
                                </label>

                                <select
                                  name="user_id"
                                  class="form-select form-select-solid"
                                  data-control="select2"
                                  data-placeholder="Select an option"
                                  required
                                >
                                  <option></option>
                                  @foreach($users as $user)
                                  <option value="{{$user->id}}">{{$user->full_name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Select Advertisement Location
                                </label>

                                <select
                                  name="ad_category"
                                  class="form-select form-select-solid"
                                  data-control="select2"
                                  data-placeholder="Select an option"
                                  id="advertisement_location"
                                  required
                                >
                                  <option></option>
                                  @foreach($categories as $ad_location)
                                  <option value="{{$ad_location->id}}">{{$ad_location->name}}</option>
                                  @endforeach
                                </select>
                                <input type="hidden" id="location_price" >
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Duration</label>
                                <select
                                  name="duration"
                                  class="form-select form-select-solid"
                                  data-control="select2"
                                  data-placeholder="Select an option"
                                  id="week_duration"
                                  required
                                >
                                  <option selected value="1">1 week</option>
                                  @for ($i = 2; $i < 49; $i++)
                                    <option value="{{$i}}">{{$i}} weeks</option>
                                  @endfor
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Start Date</label
                                >
                                <input
                                  class="form-control form-control-solid kt_daterangepicker_1"
                                  name="start_date"
                                  id="ad_start_date"
                                  placeholder="Pick start date"
                                  required="required"
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Total Payment</label
                                >
                                <input
                                  type="number"
                                  class="form-control form-control-solid"
                                  name="total_payment"
                                  id="total_payment"
                                  readonly
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Pay Amount</label
                                >
                                <input
                                  type="number"
                                  class="form-control form-control-solid"
                                  name="pay_amount"
                                  id="pay_amount"
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Discount</label>
                                <input
                                  type="number"
                                  class="form-control form-control-solid"
                                  name="discount"
                                  value=0
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Payment Methods</label>
                                <select
                                  name="payment_method_id"
                                  class="form-select form-select-solid"
                                  data-control="select2"
                                  data-placeholder="Select an option"
                                  id=""
                                  required
                                >
                                  <option></option>
                                  @foreach($payment_methods as $payment_method)
                                  <option value="{{$payment_method->id}}">{{$payment_method->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Upload File</label
                                >
                                <input
                                  type="file"
                                  class="form-control form-control-solid"
                                  name="ad_banner"
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Link</label
                                >
                                <input
                                  type="url"
                                  class="form-control form-control-solid"
                                  name="ad_url"
                                  placeholder="https://ajkalusa.com"
                                  required
                                />
                              </div>
                            </div>
                          </div>

                          <!--begin::Actions-->
                          <div class="mt-4 text-end">
                            <button
                              id="kt_docs_formvalidation_text_submit"
                              type="submit"
                              class="btn btn-primary"
                            >
                              <span class="indicator-label">
                                Publish Advertisement</span
                              >
                              <span class="indicator-progress">
                                Please wait...
                                <span
                                  class="spinner-border spinner-border-sm align-middle ms-2"
                                ></span>
                              </span>
                            </button>
                          </div>
                          <!--end::Actions-->
                        </form>
                        <!--end::Form-->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

@endsection



