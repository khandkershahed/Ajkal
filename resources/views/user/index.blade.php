@extends('layouts.base')
@section('content')
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <!--begin::Container-->
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">All User</h1>
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      <!--begin::Card header-->
                      <div class="card-header border-0 pt-6">
                        <!--begin::Card title-->
                        <div class="card-title">
                          <!--begin::Search-->
                          <div
                            class="d-flex align-items-center position-relative my-1"
                          >
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span
                              class="svg-icon svg-icon-1 position-absolute ms-6"
                            >
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                              >
                                <rect
                                  opacity="0.5"
                                  x="17.0365"
                                  y="15.1223"
                                  width="8.15546"
                                  height="2"
                                  rx="1"
                                  transform="rotate(45 17.0365 15.1223)"
                                  fill="currentColor"
                                ></rect>
                                <path
                                  d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                  fill="currentColor"
                                ></path>
                              </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input
                              type="text"
                              data-kt-user-table-filter="search"
                              class="form-control form-control-solid w-250px ps-14"
                              placeholder="Search user"
                            />
                          </div>
                          <!--end::Search-->
                        </div>
                        <!--begin::Card title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                          <!--begin::Toolbar-->
                          <div
                            class="d-flex justify-content-end"
                            data-kt-user-table-toolbar="base"
                          >
                            <!--end::Export-->
                            <!--begin::Add user-->
                            <a
                              href="{{url('/create-user')}}"
                              class="btn btn-primary"
                            >
                              <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                              <span class="svg-icon svg-icon-2">
                                <svg
                                  xmlns="http://www.w3.org/2000/svg"
                                  width="24"
                                  height="24"
                                  viewBox="0 0 24 24"
                                  fill="none"
                                >
                                  <rect
                                    opacity="0.5"
                                    x="11.364"
                                    y="20.364"
                                    width="16"
                                    height="2"
                                    rx="1"
                                    transform="rotate(-90 11.364 20.364)"
                                    fill="currentColor"
                                  ></rect>
                                  <rect
                                    x="4.36396"
                                    y="11.364"
                                    width="16"
                                    height="2"
                                    rx="1"
                                    fill="currentColor"
                                  ></rect>
                                </svg>
                              </span>
                              <!--end::Svg Icon-->Add User
                            </a>
                            <!--end::Add user-->
                          </div>
                          <!--end::Toolbar-->
                          <!--begin::Group actions-->
                          <div
                            class="d-flex justify-content-end align-items-center d-none"
                            data-kt-user-table-toolbar="selected"
                          >
                            <div class="fw-bolder me-5">
                              <span
                                class="me-2"
                                data-kt-user-table-select="selected_count"
                              ></span
                              >Selected
                            </div>
                            <button
                              type="button"
                              class="btn btn-danger"
                              data-kt-user-table-select="delete_selected"
                            >
                              Delete Selected
                            </button>
                          </div>
                          <!--end::Group actions-->
                          <!--begin::Modal - Adjust Balance-->
                          <div
                            class="modal fade"
                            id="kt_modal_export_users"
                            tabindex="-1"
                            aria-hidden="true"
                          >
                            <!--begin::Modal dialog-->
                            <div
                              class="modal-dialog modal-dialog-centered mw-650px"
                            >
                              <!--begin::Modal content-->
                              <div class="modal-content">
                                <!--begin::Modal header-->
                                <div class="modal-header">
                                  <!--begin::Modal title-->
                                  <h2 class="fw-bolder">Export Users</h2>
                                  <!--end::Modal title-->
                                  <!--begin::Close-->
                                  <div
                                    class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-kt-users-modal-action="close"
                                  >
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <rect
                                          opacity="0.5"
                                          x="6"
                                          y="17.3137"
                                          width="16"
                                          height="2"
                                          rx="1"
                                          transform="rotate(-45 6 17.3137)"
                                          fill="currentColor"
                                        ></rect>
                                        <rect
                                          x="7.41422"
                                          y="6"
                                          width="16"
                                          height="2"
                                          rx="1"
                                          transform="rotate(45 7.41422 6)"
                                          fill="currentColor"
                                        ></rect>
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </div>
                                  <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div
                                  class="modal-body scroll-y mx-5 mx-xl-15 my-7"
                                >
                                  <!--begin::Form-->
                                  <form
                                    id="kt_modal_export_users_form"
                                    class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                    action="#"
                                  >
                                    <!--begin::Input group-->
                                    <div class="fv-row mb-10">
                                      <!--begin::Label-->
                                      <label
                                        class="fs-6 fw-bold form-label mb-2"
                                        >Select Roles:</label
                                      >
                                      <!--end::Label-->
                                      <!--begin::Input-->
                                      <select
                                        name="role"
                                        data-control="select2"
                                        data-placeholder="Select a role"
                                        data-hide-search="true"
                                        class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                        data-select2-id="select2-data-16-h51k"
                                        tabindex="-1"
                                        aria-hidden="true"
                                      >
                                        <option
                                          data-select2-id="select2-data-18-5n33"
                                        ></option>
                                        <option value="Administrator">
                                          Administrator
                                        </option>
                                        <option value="Analyst">Analyst</option>
                                        <option value="Developer">
                                          Developer
                                        </option>
                                        <option value="Support">Support</option>
                                        <option value="Trial">
                                          Trial
                                        </option></select
                                      ><span
                                        class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr"
                                        data-select2-id="select2-data-17-bq6j"
                                        style="width: 100%"
                                        ><span class="selection"
                                          ><span
                                            class="select2-selection select2-selection--single form-select form-select-solid fw-bolder"
                                            role="combobox"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            tabindex="0"
                                            aria-disabled="false"
                                            aria-labelledby="select2-role-2x-container"
                                            aria-controls="select2-role-2x-container"
                                            ><span
                                              class="select2-selection__rendered"
                                              id="select2-role-2x-container"
                                              role="textbox"
                                              aria-readonly="true"
                                              title="Select a role"
                                              ><span
                                                class="select2-selection__placeholder"
                                                >Select a role</span
                                              ></span
                                            ><span
                                              class="select2-selection__arrow"
                                              role="presentation"
                                              ><b
                                                role="presentation"
                                              ></b></span></span></span
                                        ><span
                                          class="dropdown-wrapper"
                                          aria-hidden="true"
                                        ></span
                                      ></span>
                                      <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div
                                      class="fv-row mb-10 fv-plugins-icon-container"
                                    >
                                      <!--begin::Label-->
                                      <label
                                        class="required fs-6 fw-bold form-label mb-2"
                                        >Select Export Format:</label
                                      >
                                      <!--end::Label-->
                                      <!--begin::Input-->
                                      <select
                                        name="format"
                                        data-control="select2"
                                        data-placeholder="Select a format"
                                        data-hide-search="true"
                                        class="form-select form-select-solid fw-bolder select2-hidden-accessible"
                                        data-select2-id="select2-data-19-t997"
                                        tabindex="-1"
                                        aria-hidden="true"
                                      >
                                        <option
                                          data-select2-id="select2-data-21-i9lk"
                                        ></option>
                                        <option value="excel">Excel</option>
                                        <option value="pdf">PDF</option>
                                        <option value="cvs">CVS</option>
                                        <option value="zip">ZIP</option></select
                                      ><span
                                        class="select2 select2-container select2-container--bootstrap5"
                                        dir="ltr"
                                        data-select2-id="select2-data-20-dgn2"
                                        style="width: 100%"
                                        ><span class="selection"
                                          ><span
                                            class="select2-selection select2-selection--single form-select form-select-solid fw-bolder"
                                            role="combobox"
                                            aria-haspopup="true"
                                            aria-expanded="false"
                                            tabindex="0"
                                            aria-disabled="false"
                                            aria-labelledby="select2-format-vd-container"
                                            aria-controls="select2-format-vd-container"
                                            ><span
                                              class="select2-selection__rendered"
                                              id="select2-format-vd-container"
                                              role="textbox"
                                              aria-readonly="true"
                                              title="Select a format"
                                              ><span
                                                class="select2-selection__placeholder"
                                                >Select a format</span
                                              ></span
                                            ><span
                                              class="select2-selection__arrow"
                                              role="presentation"
                                              ><b
                                                role="presentation"
                                              ></b></span></span></span
                                        ><span
                                          class="dropdown-wrapper"
                                          aria-hidden="true"
                                        ></span
                                      ></span>
                                      <!--end::Input-->
                                      <div
                                        class="fv-plugins-message-container invalid-feedback"
                                      ></div>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="text-center">
                                      <button
                                        type="reset"
                                        class="btn btn-light me-3"
                                        data-kt-users-modal-action="cancel"
                                      >
                                        Discard
                                      </button>
                                      <button
                                        type="submit"
                                        class="btn btn-primary"
                                        data-kt-users-modal-action="submit"
                                      >
                                        <span class="indicator-label"
                                          >Submit</span
                                        >
                                        <span class="indicator-progress"
                                          >Please wait...
                                          <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"
                                          ></span
                                        ></span>
                                      </button>
                                    </div>
                                    <!--end::Actions-->
                                    <div></div>
                                  </form>
                                  <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
                              </div>
                              <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                          </div>
                          <!--end::Modal - New Card-->
                          <!--begin::Modal - Add task-->
                          <div
                            class="modal fade"
                            id="kt_modal_add_user"
                            tabindex="-1"
                            aria-hidden="true"
                          >
                            <!--begin::Modal dialog-->
                            <div
                              class="modal-dialog modal-dialog-centered mw-650px"
                            >
                              <!--begin::Modal content-->
                              <div class="modal-content">
                                <!--begin::Modal header-->
                                <div
                                  class="modal-header"
                                  id="kt_modal_add_user_header"
                                >
                                  <!--begin::Modal title-->
                                  <h2 class="fw-bolder">Add Usereeeeeeeeeeeee</h2>
                                  <!--end::Modal title-->
                                  <!--begin::Close-->
                                  <div
                                    class="btn btn-icon btn-sm btn-active-icon-primary"
                                    data-kt-users-modal-action="close"
                                  >
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                    <span class="svg-icon svg-icon-1">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <rect
                                          opacity="0.5"
                                          x="6"
                                          y="17.3137"
                                          width="16"
                                          height="2"
                                          rx="1"
                                          transform="rotate(-45 6 17.3137)"
                                          fill="currentColor"
                                        ></rect>
                                        <rect
                                          x="7.41422"
                                          y="6"
                                          width="16"
                                          height="2"
                                          rx="1"
                                          transform="rotate(45 7.41422 6)"
                                          fill="currentColor"
                                        ></rect>
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </div>
                                  <!--end::Close-->
                                </div>
                                <!--end::Modal header-->
                                <!--begin::Modal body-->
                                <div
                                  class="modal-body scroll-y mx-5 mx-xl-15 my-7"
                                >
                                  <!--begin::Form-->
                                  <form
                                    id="kt_modal_add_user_form"
                                    class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                    action="#"
                                  >
                                    <!--begin::Scroll-->
                                    <div
                                      class="d-flex flex-column scroll-y me-n7 pe-7"
                                      id="kt_modal_add_user_scroll"
                                      data-kt-scroll="true"
                                      data-kt-scroll-activate="{default: false, lg: true}"
                                      data-kt-scroll-max-height="auto"
                                      data-kt-scroll-dependencies="#kt_modal_add_user_header"
                                      data-kt-scroll-wrappers="#kt_modal_add_user_scroll"
                                      data-kt-scroll-offset="300px"
                                      style="max-height: 261px"
                                    >
                                      <!--begin::Input group-->
                                      <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="d-block fw-bold fs-6 mb-5"
                                          >Avatar</label
                                        >
                                        <!--end::Label-->
                                        <!--begin::Image input-->
                                        <div
                                          class="image-input image-input-outline"
                                          data-kt-image-input="true"
                                          style="
                                            background-image: url('assets/media/svg/avatars/blank.svg');
                                          "
                                        >
                                          <!--begin::Preview existing avatar-->
                                          <div
                                            class="image-input-wrapper w-125px h-125px"
                                            style="
                                              background-image: url(assets/media/avatars/300-6.jpg);
                                            "
                                          ></div>
                                          <!--end::Preview existing avatar-->
                                          <!--begin::Label-->
                                          <label
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="change"
                                            data-bs-toggle="tooltip"
                                            title=""
                                            data-bs-original-title="Change avatar"
                                          >
                                            <i
                                              class="bi bi-pencil-fill fs-7"
                                            ></i>
                                            <!--begin::Inputs-->
                                            <input
                                              type="file"
                                              name="avatar"
                                              accept=".png, .jpg, .jpeg"
                                            />
                                            <input
                                              type="hidden"
                                              name="avatar_remove"
                                            />
                                            <!--end::Inputs-->
                                          </label>
                                          <!--end::Label-->
                                          <!--begin::Cancel-->
                                          <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="cancel"
                                            data-bs-toggle="tooltip"
                                            title=""
                                            data-bs-original-title="Cancel avatar"
                                          >
                                            <i class="bi bi-x fs-2"></i>
                                          </span>
                                          <!--end::Cancel-->
                                          <!--begin::Remove-->
                                          <span
                                            class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                            data-kt-image-input-action="remove"
                                            data-bs-toggle="tooltip"
                                            title=""
                                            data-bs-original-title="Remove avatar"
                                          >
                                            <i class="bi bi-x fs-2"></i>
                                          </span>
                                          <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Hint-->
                                        <div class="form-text">
                                          Allowed file types: png, jpg, jpeg.
                                        </div>
                                        <!--end::Hint-->
                                      </div>
                                      <!--end::Input group-->
                                      <!--begin::Input group-->
                                      <div
                                        class="fv-row mb-7 fv-plugins-icon-container"
                                      >
                                        <!--begin::Label-->
                                        <label
                                          class="required fw-bold fs-6 mb-2"
                                          >Full Name</label
                                        >
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input
                                          type="text"
                                          name="user_name"
                                          class="form-control form-control-solid mb-3 mb-lg-0"
                                          placeholder="Full name"
                                          value="Emma Smith"
                                        />
                                        <!--end::Input-->
                                        <div
                                          class="fv-plugins-message-container invalid-feedback"
                                        ></div>
                                      </div>
                                      <!--end::Input group-->
                                      <!--begin::Input group-->
                                      <div
                                        class="fv-row mb-7 fv-plugins-icon-container"
                                      >
                                        <!--begin::Label-->
                                        <label
                                          class="required fw-bold fs-6 mb-2"
                                          >Email</label
                                        >
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input
                                          type="email"
                                          name="user_email"
                                          class="form-control form-control-solid mb-3 mb-lg-0"
                                          placeholder="example@domain.com"
                                          value="smith@kpmg.com"
                                        />
                                        <!--end::Input-->
                                        <div
                                          class="fv-plugins-message-container invalid-feedback"
                                        ></div>
                                      </div>
                                      <!--end::Input group-->
                                      <!--begin::Input group-->
                                      <div class="mb-7">
                                        <!--begin::Label-->
                                        <label
                                          class="required fw-bold fs-6 mb-5"
                                          >Role</label
                                        >
                                        <!--end::Label-->
                                        <!--begin::Roles-->
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                          <!--begin::Radio-->
                                          <div
                                            class="form-check form-check-custom form-check-solid"
                                          >
                                            <!--begin::Input-->
                                            <input
                                              class="form-check-input me-3"
                                              name="user_role"
                                              type="radio"
                                              value="0"
                                              id="kt_modal_update_role_option_0"
                                              checked="checked"
                                            />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label
                                              class="form-check-label"
                                              for="kt_modal_update_role_option_0"
                                            >
                                              <div
                                                class="fw-bolder text-gray-800"
                                              >
                                                Administrator
                                              </div>
                                              <div class="text-gray-600">
                                                Best for business owners and
                                                company administrators
                                              </div>
                                            </label>
                                            <!--end::Label-->
                                          </div>
                                          <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div
                                          class="separator separator-dashed my-5"
                                        ></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                          <!--begin::Radio-->
                                          <div
                                            class="form-check form-check-custom form-check-solid"
                                          >
                                            <!--begin::Input-->
                                            <input
                                              class="form-check-input me-3"
                                              name="user_role"
                                              type="radio"
                                              value="1"
                                              id="kt_modal_update_role_option_1"
                                            />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label
                                              class="form-check-label"
                                              for="kt_modal_update_role_option_1"
                                            >
                                              <div
                                                class="fw-bolder text-gray-800"
                                              >
                                                Developer
                                              </div>
                                              <div class="text-gray-600">
                                                Best for developers or people
                                                primarily using the API
                                              </div>
                                            </label>
                                            <!--end::Label-->
                                          </div>
                                          <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div
                                          class="separator separator-dashed my-5"
                                        ></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                          <!--begin::Radio-->
                                          <div
                                            class="form-check form-check-custom form-check-solid"
                                          >
                                            <!--begin::Input-->
                                            <input
                                              class="form-check-input me-3"
                                              name="user_role"
                                              type="radio"
                                              value="2"
                                              id="kt_modal_update_role_option_2"
                                            />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label
                                              class="form-check-label"
                                              for="kt_modal_update_role_option_2"
                                            >
                                              <div
                                                class="fw-bolder text-gray-800"
                                              >
                                                Analyst
                                              </div>
                                              <div class="text-gray-600">
                                                Best for people who need full
                                                access to analytics data, but
                                                don't need to update business
                                                settings
                                              </div>
                                            </label>
                                            <!--end::Label-->
                                          </div>
                                          <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div
                                          class="separator separator-dashed my-5"
                                        ></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                          <!--begin::Radio-->
                                          <div
                                            class="form-check form-check-custom form-check-solid"
                                          >
                                            <!--begin::Input-->
                                            <input
                                              class="form-check-input me-3"
                                              name="user_role"
                                              type="radio"
                                              value="3"
                                              id="kt_modal_update_role_option_3"
                                            />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label
                                              class="form-check-label"
                                              for="kt_modal_update_role_option_3"
                                            >
                                              <div
                                                class="fw-bolder text-gray-800"
                                              >
                                                Support
                                              </div>
                                              <div class="text-gray-600">
                                                Best for employees who regularly
                                                refund payments and respond to
                                                disputes
                                              </div>
                                            </label>
                                            <!--end::Label-->
                                          </div>
                                          <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div
                                          class="separator separator-dashed my-5"
                                        ></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                          <!--begin::Radio-->
                                          <div
                                            class="form-check form-check-custom form-check-solid"
                                          >
                                            <!--begin::Input-->
                                            <input
                                              class="form-check-input me-3"
                                              name="user_role"
                                              type="radio"
                                              value="4"
                                              id="kt_modal_update_role_option_4"
                                            />
                                            <!--end::Input-->
                                            <!--begin::Label-->
                                            <label
                                              class="form-check-label"
                                              for="kt_modal_update_role_option_4"
                                            >
                                              <div
                                                class="fw-bolder text-gray-800"
                                              >
                                                Trial
                                              </div>
                                              <div class="text-gray-600">
                                                Best for people who need to
                                                preview content data, but don't
                                                need to make any updates
                                              </div>
                                            </label>
                                            <!--end::Label-->
                                          </div>
                                          <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <!--end::Roles-->
                                      </div>
                                      <!--end::Input group-->
                                    </div>
                                    <!--end::Scroll-->
                                    <!--begin::Actions-->
                                    <div class="text-center pt-15">
                                      <button
                                        type="reset"
                                        class="btn btn-light me-3"
                                        data-kt-users-modal-action="cancel"
                                      >
                                        Discard
                                      </button>
                                      <button
                                        type="submit"
                                        class="btn btn-primary"
                                        data-kt-users-modal-action="submit"
                                      >
                                        <span class="indicator-label"
                                          >Submit</span
                                        >
                                        <span class="indicator-progress"
                                          >Please wait...
                                          <span
                                            class="spinner-border spinner-border-sm align-middle ms-2"
                                          ></span
                                        ></span>
                                      </button>
                                    </div>
                                    <!--end::Actions-->
                                    <div></div>
                                  </form>
                                  <!--end::Form-->
                                </div>
                                <!--end::Modal body-->
                              </div>
                              <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                          </div>
                          <!--end::Modal - Add task-->
                        </div>
                        <!--end::Card toolbar-->
                      </div>
                      <!--end::Card header-->
                      <!--begin::Card body-->
                      <div class="card-body py-4">
                        <!--begin::Table-->
                        <div
                          id="kt_table_users_wrapper"
                          class="dataTables_wrapper dt-bootstrap4 no-footer"
                        >
                          <div class="table-responsive">
                            <table
                              class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer"
                              id="kt_table_users"
                            >
                              <!--begin::Table head-->
                              <thead>
                                <!--begin::Table row-->
                                <tr
                                  class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0"
                                >
                                  <th
                                    class="w-10px pe-2 sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    aria-label="
                                
                                  
                                
                              "
                                    style="width: 29.25px"
                                  >
                                    <div
                                      class="form-check form-check-sm form-check-custom form-check-solid me-3"
                                    >
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        data-kt-check="true"
                                        data-kt-check-target="#kt_table_users .form-check-input"
                                        value="1"
                                      />
                                    </div>
                                  </th>
                                  <th
                                    class="min-w-125px sorting"
                                    tabindex="0"
                                    aria-controls="kt_table_users"
                                    rowspan="1"
                                    colspan="1"
                                    aria-label="User: activate to sort column ascending"
                                    style="width: 288.641px"
                                  >
                                    User
                                  </th>
                                  <th
                                    class="min-w-125px sorting"
                                    tabindex="0"
                                    aria-controls="kt_table_users"
                                    rowspan="1"
                                    colspan="1"
                                    aria-label="Role: activate to sort column ascending"
                                    style="width: 160.516px"
                                  >
                                    Gender
                                  </th>
                                  <th
                                    class="min-w-125px sorting"
                                    tabindex="0"
                                    aria-controls="kt_table_users"
                                    rowspan="1"
                                    colspan="1"
                                    aria-label="Last login: activate to sort column ascending"
                                    style="width: 160.516px"
                                  >
                                    Username
                                  </th>
                                  <th
                                    class="min-w-125px sorting"
                                    tabindex="0"
                                    aria-controls="kt_table_users"
                                    rowspan="1"
                                    colspan="1"
                                    aria-label="Two-step: activate to sort column ascending"
                                    style="width: 160.516px"
                                  >
                                    Status
                                  </th>
                                  <th
                                    class="min-w-125px sorting"
                                    tabindex="0"
                                    aria-controls="kt_table_users"
                                    rowspan="1"
                                    colspan="1"
                                    aria-label="Joined Date: activate to sort column ascending"
                                    style="width: 208.062px"
                                  >
                                    Joined Date
                                  </th>
                                  <th
                                    class="text-end min-w-100px sorting_disabled"
                                    rowspan="1"
                                    colspan="1"
                                    aria-label="Actions"
                                    style="width: 129px"
                                  >
                                    Actions
                                  </th>
                                </tr>
                                <!--end::Table row-->
                              </thead>
                              <!--end::Table head-->
                              <!--begin::Table body-->
                              <tbody class="text-gray-600 fw-bold">
                                <!--begin::Table row-->
                                @foreach($all_users as $user)
                                <tr class="odd">
                                  <!--begin::Checkbox-->
                                  <td>
                                    <div
                                      class="form-check form-check-sm form-check-custom form-check-solid"
                                    >
                                      <input
                                        class="form-check-input"
                                        type="checkbox"
                                        value="1"
                                      />
                                    </div>
                                  </td>
                                  <!--end::Checkbox-->
                                  <!--begin::User=-->
                                  <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div
                                      class="symbol symbol-circle symbol-50px overflow-hidden me-3"
                                    >
                                      <a
                                        href="../../demo1/dist/apps/user-management/users/view.html"
                                      >
                                        <div class="symbol-label">
                                          <img
                                            src="{{URL::asset('/images/profile.png')}}"
                                            alt="Emma Smith"
                                            class="w-100"
                                          />
                                        </div>
                                      </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                      <a
                                        href="../../demo1/dist/apps/user-management/users/view.html"
                                        class="text-gray-800 text-hover-primary mb-1"
                                        >{{$user->full_name}}</a
                                      >
                                      <span>{{$user->email}}</span>
                                    </div>
                                    <!--begin::User details-->
                                  </td>
                                  <!--end::User=-->
                                  <!--begin::Role=-->
                                  <td>@if($user->gender==1) Male @else Female @endif</td>
                                  <!--end::Role=-->
                                  <!--begin::Last login=-->
                                  <td data-order="2024-02-27T00:03:54+06:00">
                                    <div class="badge badge-light fw-bolder">
                                      {{$user->username}}
                                    </div>
                                  </td>
                                  <!--end::Last login=-->
                                  <!--begin::Two step=-->
                                  <td>@if($user->status==1) Active @else Inactive @endif</td>
                                  <!--end::Two step=-->
                                  <!--begin::Joined-->
                                  <td data-order="2022-07-25T18:05:00+06:00">
                                    {{$user->created_at}}
                                  </td>
                                  <!--begin::Joined-->
                                  <!--begin::Action=-->
                                  <td class="text-end">
                                    <a
                                      href="#"
                                      class="btn btn-light btn-active-light-primary btn-sm"
                                      data-kt-menu-trigger="click"
                                      data-kt-menu-placement="bottom-end"
                                      >Actions
                                      <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                                      <span class="svg-icon svg-icon-5 m-0">
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="24"
                                          height="24"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                        >
                                          <path
                                            d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                            fill="currentColor"
                                          ></path>
                                        </svg>
                                      </span>
                                      <!--end::Svg Icon--></a
                                    >
                                    <!--begin::Menu-->
                                    <div
                                      class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                      data-kt-menu="true"
                                    >
                                      <!--begin::Menu item-->
                                      <div class="menu-item px-3">
                                        <a
                                          href="{{url('edit-user/'.$user->id)}}"
                                          class="menu-link px-3"
                                          >Edit</a
                                        >
                                      </div>
                                      <!--end::Menu item-->
                                      <!--begin::Menu item-->
                                      @if(auth()->user()->admin_role==1)
                                      <div class="menu-item px-3">
                                        <a href="#" id="{{$user->id}}" class="menu-link px-3 user_delete_btn">
                                          Delete
                                        </a>
                                      </div>
                                      @endif
                                      <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                  </td>
                                  <!--end::Action=-->
                                </tr>
                                @endforeach
                              </tbody>
                              <!--end::Table body-->
                            </table>
                          </div>
                          <div class="row">
                            <div
                              class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"
                            ></div>
                            <div
                              class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"
                            >
                              <div
                                class="dataTables_paginate paging_simple_numbers"
                                id="kt_table_users_paginate"
                              >
                                <ul class="pagination">
                                  <li
                                    class="paginate_button page-item previous disabled"
                                    id="kt_table_users_previous"
                                  >
                                    <a
                                      href="#"
                                      aria-controls="kt_table_users"
                                      data-dt-idx="0"
                                      tabindex="0"
                                      class="page-link"
                                      ><i class="previous"></i
                                    ></a>
                                  </li>
                                  <li class="paginate_button page-item active">
                                    <a
                                      href="#"
                                      aria-controls="kt_table_users"
                                      data-dt-idx="1"
                                      tabindex="0"
                                      class="page-link"
                                      >1</a
                                    >
                                  </li>
                                  <!-- <li class="paginate_button page-item">
                                    <a
                                      href="#"
                                      aria-controls="kt_table_users"
                                      data-dt-idx="2"
                                      tabindex="0"
                                      class="page-link"
                                      >2</a
                                    >
                                  </li>
                                  <li class="paginate_button page-item">
                                    <a
                                      href="#"
                                      aria-controls="kt_table_users"
                                      data-dt-idx="3"
                                      tabindex="0"
                                      class="page-link"
                                      >3</a
                                    >
                                  </li> -->
                                  <li
                                    class="paginate_button page-item next"
                                    id="kt_table_users_next"
                                  >
                                    <a
                                      href="#"
                                      aria-controls="kt_table_users"
                                      data-dt-idx="4"
                                      tabindex="0"
                                      class="page-link"
                                      ><i class="next"></i
                                    ></a>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--end::Table-->
                      </div>
                      <!--end::Card body-->
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
