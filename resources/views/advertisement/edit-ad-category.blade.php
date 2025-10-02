@extends('layouts.base')
@section('content')

		      <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">
                  Edit Ads Position & Pricing
                </h1>
                <div class="row">
                  <div class="col-lg-6 offset-3 ">
                    <div class="card card-flush">
                      <div class="card-body">
                        <!--begin::Form-->
                        <form
                          id="kt_docs_formvalidation_text1"
                          class="form"
                          method="post"
                          action="{{url('/update-ad-category')}}"
                          autocomplete="off"
                        >
                        @csrf
                        <input type="hidden" name="editable_ad_category_id" value="{{$advertisement_category->id}}">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2"
                                  >Advertisement Position
                                </label>

                                <input
                                  type="text"
                                  name="ad_position_name"
                                  class="form-control form-control-solid"
                                  value="{{$advertisement_category->name}}"
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">NewsPaper Type</label>

                                <select
                                  name="newspaper_type"
                                  class="form-select form-select-solid"
                                  data-control="select2"
                                  data-placeholder="Select an option"
                                  required
                                >
                                  <option></option>
                                  <option @if($advertisement_category->type==1) selected @endif value="1">ePaper</option>
                                  <option @if($advertisement_category->type==2) selected @endif value="2">NewsPortal</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Price</label>
                                <input
                                  type="number"
                                  name="ad_price"
                                  class="form-control form-control-solid"
                                  value="{{$advertisement_category->price}}"
                                  required
                                />
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="fv-row mb-5">
                                <label class="required fw-bold fs-6 mb-2">Status</label>
                                <select
                                  name="status"
                                  class="form-select form-select-solid"
                                  data-control="select2"
                                  data-placeholder="Select an option"
                                  required
                                >
                                  <option></option>
                                  <option @if($advertisement_category->status==1) selected @endif value="1">Active</option>
                                  <option @if($advertisement_category->status==0) selected @endif value="0">Inactive</option>
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
                              <span class="indicator-label">Update</span>
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
              <!--end::Container-->
            </div>
            <!--end::Post-->
          </div>
          <!--end::Content-->

@endsection