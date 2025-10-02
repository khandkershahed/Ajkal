@extends('layouts.base')
@section('content')
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">Category Create</h1>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-flush">
                      <div class="card-body">
                        <form
                        id="kt_docs_formvalidation_daterangepicker"
                        class="form"
                        method="post"
                        action="{{url('/create-category')}}"
                        autocomplete="off"
                      >
                      @csrf
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2"
                                >Category Name</label
                              >
    
                              <input
                                class="form-control form-control-solid"
                                name="name"
                                placeholder=""
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2"
                                >Category Name Bangla</label
                              >
    
                              <input
                                class="form-control form-control-solid"
                                name="name_bangla"
                                placeholder=""
                              />
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Category Code</label>
                              <input
                                class="form-control form-control-solid"
                                name="code"
                                placeholder=""
                              />
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Serial</label>
                              <input class="form-control form-control-solid" type="number" name="serial"/>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Status</label>
                              <select class="form-select form-select-solid" name="status" data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option selected value="1">Active</option>
                                <option value="0">Inactive</option>
                            </select>
                            </div>
                          </div>
                        </div>

                        <button
                          id="kt_docs_formvalidation_daterangepicker_submit"
                          type="submit"
                          class="btn btn-primary mt-3"
                        >
                          <span class="indicator-label"> Add New Category </span>
                          <span class="indicator-progress">
                            Please wait...
                            <span
                              class="spinner-border spinner-border-sm align-middle ms-2"
                            ></span>
                          </span>
                        </button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
