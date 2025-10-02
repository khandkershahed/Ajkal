@extends('layouts.base')
@section('content')
          <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">Create Epaper for Date {{$epaper_date}}</h1>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-flush">
                      <div class="card-body">
                        <form
                        id=""
                        class="form"
                        method="post"
                        action="{{url('/create-epaper')}}"
                        enctype="multipart/form-data"
                      >
                        @csrf
                        <input type="hidden" name="epaper_date" value="{{$epaper_date}}">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Name</label>
                              <input
                                class="form-control form-control-solid"
                                name="title"
                                required="required"
                                id=""
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Page Number</label>
                              <select class="form-select form-select-solid" name="page_number" data-control="select2" data-placeholder="Select an option" required>
                                <option value=""></option>
                                @for ($i = 2; $i <= 64; $i++)
                                  <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">ePaper Page</label>
                              <input type="file" class="form-control form-control-solid" name="first_page" required />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Status</label>
                              <select class="form-select form-select-solid" name="status" data-control="select2" data-placeholder="Select an option">
                                <option selected value="1">Publish</option>
                                <option value="0">Pending</option>
                            </select>
                            </div>
                          </div>
                        </div>

                        <button
                          id="kt_docs_formvalidation_daterangepicker_submit"
                          type="submit"
                          class="btn btn-primary mt-3"
                        >
                          <span class="indicator-label"> Submit </span>
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
