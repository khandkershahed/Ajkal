@extends('layouts.base')
@section('content')

		<div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">Due Payment</h1>
                <div class="row">
                  <div class="col-lg-10 offset-1">
                    <div class="card card-flush">
                      <div class="card-body">
                        <!--begin::Form-->
                        <form
                          id="kt_docs_formvalidation_text1"
                          method="post"
                          class="form"
                          action="{{url('/due-payment')}}"
                          autocomplete="off"
                        >
                        @csrf
                        <input type="hidden" name="due_advertisement_id" value="{{$advertisement->id}}">
                          <div class="row">
                            
                            
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Total Payment</label>
                                <input
                                  type="number"
                                  class="form-control form-control-solid"
                                  name="total_payment"
                                  id="total_payment"
                                  value="{{$advertisement->payable_amount}}"
                                  readonly
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
                                  id="discount"
                                  value="{{$advertisement->discount}}"
                                  readonly
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Paid Amount</label>
                                <input
                                  type="number"
                                  class="form-control form-control-solid"
                                  name="paid_amount"
                                  id=""
                                  value="{{$advertisement->paid_amount}}"
                                  readonly
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Due Amount</label>
                                <input
                                  type="number"
                                  class="form-control form-control-solid"
                                  name="due_amount"
                                  id=""
                                  value="{{$advertisement->due_amount}}"
                                  readonly
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-6">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Pay Amount</label>
                                <input
                                  type="number"
                                  class="form-control form-control-solid"
                                  name="pay_amount"
                                  id="pay_amount"
                                  value="{{$advertisement->due_amount}}"
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
                                  required
                                >
                                  <option></option>
                                  @foreach($payment_methods as $payment_method)
                                  <option @if($advertisement->payment_method_id==$payment_method->id) selected @endif value="{{$payment_method->id}}">{{$payment_method->name}}</option>
                                  @endforeach
                                </select>
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
                                Submit
                              </span>
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