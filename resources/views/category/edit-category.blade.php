@extends('layouts.base')
@section('content')
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">Edit Category</h1>
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-flush">
                      <div class="card-body">
                        <form
                        id="kt_docs_formvalidation_daterangepicker"
                        class="form"
                        method="post"
                        action="{{url('/update-category')}}"
                        autocomplete="off"
                      >
                      @csrf
                      <input type="hidden" name="editable_category_id" value="{{$category->id}}">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2"
                                >Category Name</label
                              >
    
                              <input
                                class="form-control form-control-solid"
                                name="name"
                                value="{{$category->name}}"
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
                                value="{{$category->name_bangla}}"
                              />
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Category Code</label>
                              <input
                                class="form-control form-control-solid"
                                name="code"
                                value="{{$category->code}}"
                              />
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Serial</label>
                              <input class="form-control form-control-solid" type="number" name="serial" value="{{$category->serial}}"/>
                            </div>
                          </div>
                          <div class="col-lg-4">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Status</label>
                              <select class="form-select form-select-solid" name="status" data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option @if($category->status==1) selected @endif value="1">Active</option>
                                <option @if($category->status==0) selected @endif value="0">Inactive</option>
                            </select>
                            </div>
                          </div>
                        </div>

                        <button
                          id="kt_docs_formvalidation_daterangepicker_submit"
                          type="submit"
                          class="btn btn-primary mt-3"
                        >
                          <span class="indicator-label"> Update Category </span>
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
