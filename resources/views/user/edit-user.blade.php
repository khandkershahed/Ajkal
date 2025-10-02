@extends('layouts.base')
@section('content')
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">Edit User</h1>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-flush">
                      <div class="card-body">
                        <form
                        method="post"
                        class="form"
                        action="{{url('/update-user')}}"
                        autocomplete="off"
                      >
                        @csrf
                        <input type="hidden" name="editable_user_id" value="{{$user->id}}">
                        <div class="row">
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2"
                                >Full Name</label>
                              <input
                                class="form-control form-control-solid"
                                name="full_name"
                                value="{{$user->full_name}}"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="fw-bold fs-6 mb-2">Company Name</label>
                              <input
                                class="form-control form-control-solid"
                                name="company_name"
                                value="{{$user->company_name}}"
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Email</label>
                              <input
                                class="form-control form-control-solid"
                                type="email"
                                name="email"
                                value="{{$user->email}}"
                                required
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Username</label>
                              <input
                                class="form-control form-control-solid"
                                name="username"
                                value="{{$user->username}}"
                                required
                              />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Phone</label>
                              <input class="form-control form-control-solid" name="phone" required type="number" value="{{$user->phone}}" />
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Gender</label>
                              <select class="form-select form-select-solid" name="gender" required data-control="select2" data-placeholder="Select an option">
                                <option></option>
                                <option @if ($user->gender==1) selected @endif value="1">Male</option>
                                <option @if ($user->gender==2) selected @endif value="2">Female</option>
                            </select>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="fw-bold fs-6 mb-2">Password</label>
                              <input class="form-control form-control-solid" name="password"/>
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Stauts</label>
                              <select class="form-select form-select-solid" name="status" data-control="select2" data-placeholder="Select an option">
                                <option @if ($user->status==0) selected @endif value="0">Inactive</option>
                                <option @if ($user->status==1) selected @endif value="1">Active</option>
                            </select>
                            </div>
                          </div>
                          <div class="col-lg-12">
                            <div class="fv-row mb-5">
                              <label class="required fw-bold fs-6 mb-2">Address</label>
                              <input class="form-control form-control-solid" name="address" required value="{{$user->address}}" />
                            </div>
                          </div>
                        </div>

                        <button
                          id="kt_docs_formvalidation_daterangepicker_submit"
                          type="submit"
                          class="btn btn-primary mt-3"
                        >
                          <span class="indicator-label"> Update User </span>
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
