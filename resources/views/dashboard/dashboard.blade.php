@extends('layouts.base')
@section('content')

          <!-- Main COntent Start -->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <div class="row g-5 g-xl-10">
                  <div class="col-xl-4 mb-xl-10">
                    <div class="card card-flush h-xl-100">
                      <div
                        class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px"
                        style="
                          background-image: url('assets/media/svg/shapes/top-green.png');
                        "
                      >
                        <h3
                          class="card-title align-items-start flex-column text-white pt-15"
                        >
                          <span class="fw-bolder fs-2x mb-3"
                            >Hello, Admin</span
                          >
                          <div class="fs-4 text-white">
                            <span class="">Super Admin</span> <br />
                          </div>
                        </h3>
                        <div class="card-toolbar pt-5">
                          <button
                            class="btn btn-sm btn-icon btn-active-color-primary btn-color-white bg-white bg-opacity-25 bg-hover-opacity-100 bg-hover-white bg-active-opacity-25 w-20px h-20px"
                            data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end"
                            data-kt-menu-overflow="true"
                          >
                            <span class="svg-icon svg-icon-4">
                              <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                              >
                                <rect
                                  x="10"
                                  y="10"
                                  width="4"
                                  height="4"
                                  rx="2"
                                  fill="currentColor"
                                ></rect>
                                <rect
                                  x="17"
                                  y="10"
                                  width="4"
                                  height="4"
                                  rx="2"
                                  fill="currentColor"
                                ></rect>
                                <rect
                                  x="3"
                                  y="10"
                                  width="4"
                                  height="4"
                                  rx="2"
                                  fill="currentColor"
                                ></rect>
                              </svg>
                            </span>
                          </button>
                          <div
                            class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px"
                            data-kt-menu="true"
                          >
                            <div class="menu-item px-3">
                              <div
                                class="menu-content fs-6 text-dark fw-bolder px-3 py-4"
                              >
                                Quick Actions
                              </div>
                            </div>
                            <div class="separator mb-3 opacity-75"></div>
                            <div class="menu-item px-3">
                              <a
                                href="create-category.html"
                                class="menu-link px-3"
                                >Add Category</a
                              >
                            </div>
                            <div class="menu-item px-3">
                              <a href="create-news.html" class="menu-link px-3"
                                >Add News</a
                              >
                            </div>
                            <div class="menu-item px-3">
                              <a href="#" class="menu-link px-3"
                                >Total Addvertisement</a
                              >
                            </div>
                            <div class="separator mt-3 opacity-75"></div>
                          </div>
                        </div>
                      </div>
                      <div class="card-body mt-n20">
                        <div class="mt-n20 position-relative">
                          <div class="row g-3 g-lg-6">
                            <div class="col-6">
                              <div
                                class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5"
                              >
                                <div class="symbol symbol-30px me-5 mb-8">
                                  <span class="symbol-label">
                                    <span
                                      class="svg-icon svg-icon-1 svg-icon-primary"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M17.9061 13H11.2061C11.2061 12.4 10.8061 12 10.2061 12C9.60605 12 9.20605 12.4 9.20605 13H6.50606L9.20605 8.40002V4C8.60605 4 8.20605 3.6 8.20605 3C8.20605 2.4 8.60605 2 9.20605 2H15.2061C15.8061 2 16.2061 2.4 16.2061 3C16.2061 3.6 15.8061 4 15.2061 4V8.40002L17.9061 13ZM13.2061 9C12.6061 9 12.2061 9.4 12.2061 10C12.2061 10.6 12.6061 11 13.2061 11C13.8061 11 14.2061 10.6 14.2061 10C14.2061 9.4 13.8061 9 13.2061 9Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          d="M18.9061 22H5.40605C3.60605 22 2.40606 20 3.30606 18.4L6.40605 13H9.10605C9.10605 13.6 9.50605 14 10.106 14C10.706 14 11.106 13.6 11.106 13H17.8061L20.9061 18.4C21.9061 20 20.8061 22 18.9061 22ZM14.2061 15C13.1061 15 12.2061 15.9 12.2061 17C12.2061 18.1 13.1061 19 14.2061 19C15.3061 19 16.2061 18.1 16.2061 17C16.2061 15.9 15.3061 15 14.2061 15Z"
                                          fill="currentColor"
                                        ></path>
                                      </svg>
                                    </span>
                                  </span>
                                </div>
                                <div class="m-0">
                                  <span
                                    class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1"
                                    >37</span
                                  >
                                  <span class="text-gray-500 fw-bold fs-6"
                                    >News</span
                                  >
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div
                                class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5"
                              >
                                <div class="symbol symbol-30px me-5 mb-8">
                                  <span class="symbol-label">
                                    <span
                                      class="svg-icon svg-icon-1 svg-icon-primary"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          opacity="0.3"
                                          d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z"
                                          fill="currentColor"
                                        ></path>
                                      </svg>
                                    </span>
                                  </span>
                                </div>
                                <div class="m-0">
                                  <span
                                    class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1"
                                    >6</span
                                  >
                                  <span class="text-gray-500 fw-bold fs-6"
                                    >Category</span
                                  >
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div
                                class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5"
                              >
                                <div class="symbol symbol-30px me-5 mb-8">
                                  <span class="symbol-label">
                                    <span
                                      class="svg-icon svg-icon-1 svg-icon-primary"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M14 18V16H10V18L9 20H15L14 18Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          opacity="0.3"
                                          d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z"
                                          fill="currentColor"
                                        ></path>
                                      </svg>
                                    </span>
                                  </span>
                                </div>
                                <div class="m-0">
                                  <span
                                    class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1"
                                    >4,70</span
                                  >
                                  <span class="text-gray-500 fw-bold fs-6"
                                    >User Visit</span
                                  >
                                </div>
                              </div>
                            </div>
                            <div class="col-6">
                              <div
                                class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5"
                              >
                                <div class="symbol symbol-30px me-5 mb-8">
                                  <span class="symbol-label">
                                    <span
                                      class="svg-icon svg-icon-1 svg-icon-primary"
                                    >
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                          fill="currentColor"
                                        ></path>
                                      </svg>
                                    </span>
                                  </span>
                                </div>
                                <div class="m-0">
                                  <span
                                    class="text-gray-700 fw-boldest d-block fs-2qx lh-1 ls-n1 mb-1"
                                    >822</span
                                  >
                                  <span class="text-gray-500 fw-bold fs-6"
                                    >Advertisement</span
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-8 mb-5 mb-xl-10">
                    <div class="row g-5 g-xl-10">
                      <div class="col-xl-6 mb-xl-10">
                        <div
                          id="kt_sliders_widget_1_slider"
                          class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                          data-bs-ride="carousel"
                          data-bs-interval="5000"
                        >
                          <div class="card-header pt-5">
                            <h4
                              class="card-title d-flex align-items-start flex-column"
                            >
                              <span class="card-label fw-bolder text-gray-800"
                                >Total Visitor</span
                              >
                              <span class="text-gray-400 mt-1 fw-bolder fs-7"
                                >Today, Last
                                <span class="text-primary">7</span> Day, Last
                                <span class="text-primary">15</span> Day</span
                              >
                            </h4>
                            <div class="card-toolbar">
                              <ol
                                class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-primary"
                              >
                                <li
                                  data-bs-target="#kt_sliders_widget_1_slider"
                                  data-bs-slide-to="0"
                                  class="ms-1"
                                ></li>
                                <li
                                  data-bs-target="#kt_sliders_widget_1_slider"
                                  data-bs-slide-to="1"
                                  class="ms-1 active"
                                  aria-current="true"
                                ></li>
                                <li
                                  data-bs-target="#kt_sliders_widget_1_slider"
                                  data-bs-slide-to="2"
                                  class="ms-1"
                                ></li>
                              </ol>
                            </div>
                          </div>
                          <div class="card-body pt-6">
                            <div class="carousel-inner mt-n5">
                              <div class="carousel-item show">
                                <div class="d-flex align-items-center mb-5">
                                  <div class="w-80px flex-shrink-0 me-2">
                                    <div
                                      class="min-h-auto ms-n3 initialized"
                                      id="kt_slider_widget_1_chart_2"
                                      style="height: 100px; min-height: 100px"
                                    >
                                      <div
                                        id="apexchartsli8gjdpa"
                                        class="apexcharts-canvas apexchartsli8gjdpa"
                                        style="width: 0px; height: 100px"
                                      >
                                        <svg
                                          id="SvgjsSvg1286"
                                          width="0"
                                          height="100"
                                          xmlns="http://www.w3.org/2000/svg"
                                          version="1.1"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          xmlns:svgjs="http://svgjs.dev"
                                          class="apexcharts-svg"
                                          xmlns:data="ApexChartsNS"
                                          transform="translate(0, 0)"
                                          style="background: transparent"
                                        >
                                          <g
                                            id="SvgjsG1289"
                                            class="apexcharts-annotations"
                                          ></g>
                                          <g
                                            id="SvgjsG1288"
                                            class="apexcharts-inner apexcharts-graphical"
                                          >
                                            <defs id="SvgjsDefs1287"></defs>
                                          </g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="m-0">
                                    <h4 class="fw-bolder text-gray-800 mb-3">
                                      Today Visitors
                                    </h4>
                                    <div class="d-flex d-grid gap-5">
                                      Total Visitor:
                                      <span class="text-primary">2,300</span>
                                    </div>
                                    <div class="d-flex d-grid gap-5">
                                      Page View:
                                      <span class="text-primary">6</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-1">
                                  <a
                                    href="#"
                                    class="btn btn-sm btn-light-primary"
                                    >Check Vistors</a
                                  >
                                </div>
                              </div>
                              <div class="carousel-item active">
                                <div class="d-flex align-items-center mb-5">
                                  <div class="w-80px flex-shrink-0 me-2">
                                    <div
                                      class="min-h-auto ms-n3 initialized"
                                      id="kt_slider_widget_1_chart_2"
                                      style="height: 100px; min-height: 101px"
                                    >
                                      <div
                                        id="apexchartswep6t0a2"
                                        class="apexcharts-canvas apexchartswep6t0a2 apexcharts-theme-light"
                                        style="width: 90px; height: 101px"
                                      >
                                        <svg
                                          id="SvgjsSvg1268"
                                          width="90"
                                          height="100.99999999999999"
                                          xmlns="http://www.w3.org/2000/svg"
                                          version="1.1"
                                          xmlns:xlink="http://www.w3.org/1999/xlink"
                                          xmlns:svgjs="http://svgjs.dev"
                                          class="apexcharts-svg"
                                          xmlns:data="ApexChartsNS"
                                          transform="translate(0, 0)"
                                          style="background: transparent"
                                        >
                                          <g
                                            id="SvgjsG1270"
                                            class="apexcharts-inner apexcharts-graphical"
                                            transform="translate(-5, 0)"
                                          >
                                            <defs id="SvgjsDefs1269">
                                              <clipPath
                                                id="gridRectMaskwep6t0a2"
                                              >
                                                <rect
                                                  id="SvgjsRect1272"
                                                  width="106"
                                                  height="102"
                                                  x="-3"
                                                  y="-1"
                                                  rx="0"
                                                  ry="0"
                                                  opacity="1"
                                                  stroke-width="0"
                                                  stroke="none"
                                                  stroke-dasharray="0"
                                                  fill="#fff"
                                                ></rect>
                                              </clipPath>
                                              <clipPath
                                                id="forecastMaskwep6t0a2"
                                              ></clipPath>
                                              <clipPath
                                                id="nonForecastMaskwep6t0a2"
                                              ></clipPath>
                                              <clipPath
                                                id="gridRectMarkerMaskwep6t0a2"
                                              >
                                                <rect
                                                  id="SvgjsRect1273"
                                                  width="104"
                                                  height="104"
                                                  x="-2"
                                                  y="-2"
                                                  rx="0"
                                                  ry="0"
                                                  opacity="1"
                                                  stroke-width="0"
                                                  stroke="none"
                                                  stroke-dasharray="0"
                                                  fill="#fff"
                                                ></rect>
                                              </clipPath>
                                            </defs>
                                            <g
                                              id="SvgjsG1274"
                                              class="apexcharts-radialbar"
                                            >
                                              <g id="SvgjsG1275">
                                                <g
                                                  id="SvgjsG1276"
                                                  class="apexcharts-tracks"
                                                >
                                                  <g
                                                    id="SvgjsG1277"
                                                    class="apexcharts-radialbar-track apexcharts-track"
                                                    rel="1"
                                                  >
                                                    <path
                                                      id="apexcharts-radialbarTrack-0"
                                                      d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579"
                                                      fill="none"
                                                      fill-opacity="1"
                                                      stroke="rgba(241,250,255,0.85)"
                                                      stroke-opacity="1"
                                                      stroke-linecap="round"
                                                      stroke-width="8.414634146341463"
                                                      stroke-dasharray="0"
                                                      class="apexcharts-radialbar-area"
                                                      data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 49.994561809492424 18.84146388920579"
                                                    ></path>
                                                  </g>
                                                </g>
                                                <g id="SvgjsG1279">
                                                  <g
                                                    id="SvgjsG1282"
                                                    class="apexcharts-series apexcharts-radial-series"
                                                    seriesName="Progress"
                                                    rel="1"
                                                    data:realIndex="0"
                                                  >
                                                    <path
                                                      id="SvgjsPath1283"
                                                      d="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 40.37148267526841 79.63352925773314"
                                                      fill="none"
                                                      fill-opacity="0.85"
                                                      stroke="rgba(0,158,247,0.85)"
                                                      stroke-opacity="1"
                                                      stroke-linecap="round"
                                                      stroke-width="8.414634146341463"
                                                      stroke-dasharray="0"
                                                      class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                      data:angle="198"
                                                      data:value="55"
                                                      index="0"
                                                      j="0"
                                                      data:pathOrig="M 50 18.84146341463414 A 31.15853658536586 31.15853658536586 0 1 1 40.37148267526841 79.63352925773314"
                                                    ></path>
                                                  </g>
                                                  <circle
                                                    id="SvgjsCircle1280"
                                                    r="26.951219512195127"
                                                    cx="50"
                                                    cy="50"
                                                    class="apexcharts-radialbar-hollow"
                                                    fill="transparent"
                                                  ></circle>
                                                  <g
                                                    id="SvgjsG1281"
                                                    class="apexcharts-datalabels-group"
                                                    transform="translate(0, 0) scale(1)"
                                                    style="opacity: 1"
                                                  ></g>
                                                </g>
                                              </g>
                                            </g>
                                            <line
                                              id="SvgjsLine1284"
                                              x1="0"
                                              y1="0"
                                              x2="100"
                                              y2="0"
                                              stroke="#b6b6b6"
                                              stroke-dasharray="0"
                                              stroke-width="1"
                                              stroke-linecap="butt"
                                              class="apexcharts-ycrosshairs"
                                            ></line>
                                            <line
                                              id="SvgjsLine1285"
                                              x1="0"
                                              y1="0"
                                              x2="100"
                                              y2="0"
                                              stroke-dasharray="0"
                                              stroke-width="0"
                                              stroke-linecap="butt"
                                              class="apexcharts-ycrosshairs-hidden"
                                            ></line>
                                          </g>
                                          <g
                                            id="SvgjsG1271"
                                            class="apexcharts-annotations"
                                          ></g>
                                        </svg>
                                        <div class="apexcharts-legend"></div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="m-0">
                                    <h4 class="fw-bolder text-gray-800 mb-3">
                                      Last 7 Day
                                    </h4>
                                    <div class="d-flex d-grid gap-5">
                                      Total Visitor:
                                      <span class="text-primary">2,300</span>
                                    </div>
                                    <div class="d-flex d-grid gap-5">
                                      Page View:
                                      <span class="text-primary">6</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-1">
                                  <a
                                    href="#"
                                    class="btn btn-sm btn-light-primary"
                                    >Check Vistors</a
                                  >
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="d-flex align-items-center mb-5">
                                  <div class="w-80px flex-shrink-0 me-2">
                                    <div
                                      class="min-h-auto ms-n3"
                                      id="kt_slider_widget_1_chart_3"
                                      style="height: 100px"
                                    ></div>
                                  </div>
                                  <div class="m-0">
                                    <h4 class="fw-bolder text-gray-800 mb-3">
                                      Last 15 Day
                                    </h4>
                                    <div class="d-flex d-grid gap-5">
                                      Total Visitor:
                                      <span class="text-primary">2,300</span>
                                    </div>
                                    <div class="d-flex d-grid gap-5">
                                      Page View:
                                      <span class="text-primary">6</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-1">
                                  <a
                                    href="#"
                                    class="btn btn-sm btn-light-primary"
                                    >Check Vistors</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6 mb-5 mb-xl-10">
                        <div
                          id="kt_sliders_widget_2_slider"
                          class="card card-flush carousel carousel-custom carousel-stretch slide h-xl-100"
                          data-bs-ride="carousel"
                          data-bs-interval="5500"
                        >
                          <div class="card-header pt-5">
                            <h4
                              class="card-title d-flex align-items-start flex-column"
                            >
                              <span class="card-label fw-bolder text-gray-800"
                                >Advertisment Info</span
                              >
                              <span class="text-gray-400 mt-1 fw-bolder fs-7"
                                >24 Add Are Active/Running</span
                              >
                            </h4>
                            <div class="card-toolbar">
                              <ol
                                class="p-0 m-0 carousel-indicators carousel-indicators-bullet carousel-indicators-active-success"
                              >
                                <li
                                  data-bs-target="#kt_sliders_widget_2_slider"
                                  data-bs-slide-to="0"
                                  class="ms-1"
                                ></li>
                                <li
                                  data-bs-target="#kt_sliders_widget_2_slider"
                                  data-bs-slide-to="1"
                                  class="ms-1 active"
                                  aria-current="true"
                                ></li>
                                <li
                                  data-bs-target="#kt_sliders_widget_2_slider"
                                  data-bs-slide-to="2"
                                  class="ms-1"
                                ></li>
                              </ol>
                            </div>
                          </div>
                          <div class="card-body pt-6">
                            <div class="carousel-inner">
                              <div class="carousel-item show">
                                <div class="d-flex align-items-center mb-9">
                                  <div
                                    class="symbol symbol-70px symbol-circle me-5"
                                  >
                                    <span class="symbol-label bg-light-success">
                                      <span
                                        class="svg-icon svg-icon-3x svg-icon-success"
                                      >
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="24"
                                          height="24"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                        >
                                          <path
                                            d="M16.925 3.90078V8.00077L12.025 10.8008V5.10078L15.525 3.10078C16.125 2.80078 16.925 3.20078 16.925 3.90078ZM2.525 13.5008L6.025 15.5008L10.925 12.7008L6.025 9.90078L2.525 11.9008C1.825 12.3008 1.825 13.2008 2.525 13.5008ZM18.025 19.7008V15.6008L13.125 12.8008V18.5008L16.625 20.5008C17.225 20.8008 18.025 20.4008 18.025 19.7008Z"
                                            fill="currentColor"
                                          ></path>
                                          <path
                                            opacity="0.3"
                                            d="M8.52499 3.10078L12.025 5.10078V10.8008L7.125 8.00077V3.90078C7.125 3.20078 7.92499 2.80078 8.52499 3.10078ZM7.42499 20.5008L10.925 18.5008V12.8008L6.02499 15.6008V19.7008C6.02499 20.4008 6.82499 20.8008 7.42499 20.5008ZM21.525 11.9008L18.025 9.90078L13.125 12.7008L18.025 15.5008L21.525 13.5008C22.225 13.2008 22.225 12.3008 21.525 11.9008Z"
                                            fill="currentColor"
                                          ></path>
                                        </svg>
                                      </span>
                                    </span>
                                  </div>
                                  <div class="m-0">
                                    <h4 class="fw-bolder text-gray-800 mb-3">
                                      Show In All Page
                                    </h4>
                                    <div class="d-flex d-grid gap-3">
                                      Total Add Active:<span
                                        class="text-primary"
                                        >05</span
                                      >
                                    </div>
                                    <div class="d-flex d-grid gap-3">
                                      Add Duration:
                                      <span class="text-primary">07 Day</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-1">
                                  <a
                                    href="#"
                                    class="btn btn-sm btn-success"
                                    data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_campaign"
                                    >Check</a
                                  >
                                </div>
                              </div>
                              <div class="carousel-item active">
                                <div class="d-flex align-items-center mb-9">
                                  <div
                                    class="symbol symbol-70px symbol-circle me-5"
                                  >
                                    <span class="symbol-label bg-light-danger">
                                      <span
                                        class="svg-icon svg-icon-3x svg-icon-danger"
                                      >
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="24"
                                          height="24"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                        >
                                          <path
                                            opacity="0.3"
                                            d="M7 20.5L2 17.6V11.8L7 8.90002L12 11.8V17.6L7 20.5ZM21 20.8V18.5L19 17.3L17 18.5V20.8L19 22L21 20.8Z"
                                            fill="currentColor"
                                          ></path>
                                          <path
                                            d="M22 14.1V6L15 2L8 6V14.1L15 18.2L22 14.1Z"
                                            fill="currentColor"
                                          ></path>
                                        </svg>
                                      </span>
                                    </span>
                                  </div>
                                  <div class="m-0">
                                    <h4 class="fw-bolder text-gray-800 mb-3">
                                      First Page
                                    </h4>
                                    <div class="d-flex d-grid gap-3">
                                      Total Add Active:<span
                                        class="text-primary"
                                        >08</span
                                      >
                                    </div>
                                    <div class="d-flex d-grid gap-3">
                                      Add Duration:
                                      <span class="text-primary">15 Day</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-1">
                                  <a
                                    href="#"
                                    class="btn btn-sm btn-success"
                                    data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_campaign"
                                    >Check</a
                                  >
                                </div>
                              </div>
                              <div class="carousel-item">
                                <div class="d-flex align-items-center mb-9">
                                  <div
                                    class="symbol symbol-70px symbol-circle me-5"
                                  >
                                    <span class="symbol-label bg-light-primary">
                                      <span
                                        class="svg-icon svg-icon-3x svg-icon-primary"
                                      >
                                        <svg
                                          xmlns="http://www.w3.org/2000/svg"
                                          width="24"
                                          height="24"
                                          viewBox="0 0 24 24"
                                          fill="none"
                                        >
                                          <path
                                            d="M12.0444 17.9444V12.1444L17.0444 15.0444C18.6444 15.9444 19.1445 18.0444 18.2445 19.6444C17.3445 21.2444 15.2445 21.7444 13.6445 20.8444C12.6445 20.2444 12.0444 19.1444 12.0444 17.9444ZM7.04445 15.0444L12.0444 12.1444L7.04445 9.24445C5.44445 8.34445 3.44444 8.84445 2.44444 10.4444C1.54444 12.0444 2.04445 14.0444 3.64445 15.0444C4.74445 15.6444 6.04445 15.6444 7.04445 15.0444ZM12.0444 6.34444V12.1444L17.0444 9.24445C18.6444 8.34445 19.1445 6.24444 18.2445 4.64444C17.3445 3.04444 15.2445 2.54445 13.6445 3.44445C12.6445 4.04445 12.0444 5.14444 12.0444 6.34444Z"
                                            fill="currentColor"
                                          ></path>
                                          <path
                                            opacity="0.3"
                                            d="M7.04443 9.24445C6.04443 8.64445 5.34442 7.54444 5.34442 6.34444C5.34442 4.54444 6.84444 3.04443 8.64444 3.04443C10.4444 3.04443 11.9444 4.54444 11.9444 6.34444V12.1444L7.04443 9.24445ZM17.0444 15.0444C18.0444 15.6444 19.3444 15.6444 20.3444 15.0444C21.9444 14.1444 22.4444 12.0444 21.5444 10.4444C20.6444 8.84444 18.5444 8.34445 16.9444 9.24445L11.9444 12.1444L17.0444 15.0444ZM7.04443 15.0444C6.04443 15.6444 5.34442 16.7444 5.34442 17.9444C5.34442 19.7444 6.84444 21.2444 8.64444 21.2444C10.4444 21.2444 11.9444 19.7444 11.9444 17.9444V12.1444L7.04443 15.0444Z"
                                            fill="currentColor"
                                          ></path>
                                        </svg>
                                      </span>
                                    </span>
                                  </div>
                                  <div class="m-0">
                                    <h4 class="fw-bolder text-gray-800 mb-3">
                                      Last Page
                                    </h4>
                                    <div class="d-flex d-grid gap-3">
                                      Total Add Active:<span
                                        class="text-primary"
                                        >16</span
                                      >
                                    </div>
                                    <div class="d-flex d-grid gap-3">
                                      Add Duration:
                                      <span class="text-primary">30 Day</span>
                                    </div>
                                  </div>
                                </div>
                                <div class="mb-1">
                                  <a
                                    href="#"
                                    class="btn btn-sm btn-success"
                                    data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_create_campaign"
                                    >Check</a
                                  >
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card" style="background: #1c325e">
                      <div class="card-body d-flex ps-xl-15">
                        <div class="m-0">
                          <div
                            class="position-relative fs-2x z-index-2 fw-bolder text-white mb-7"
                          >
                            <span class="me-2"
                              >You have total
                              <span
                                class="position-relative d-inline-block text-danger"
                              >
                                <a
                                  href="../../demo1/dist/pages/user-profile/overview.html"
                                  class="text-danger opacity-75-hover"
                                  >505</a
                                >
                                <span
                                  class="position-absolute opacity-50 bottom-0 start-0 border-4 border-danger border-bottom w-100"
                                ></span> </span></span
                            >User. <br />Update Or See Advertisement Pricing
                            List.
                          </div>
                          <div class="mb-3">
                            <a
                              href="#"
                              class="btn btn-color-white bg-body bg-opacity-15 bg-hover-opacity-25 fw-bold"
                              data-bs-toggle="modal"
                              data-bs-target="#kt_modal_upgrade_plan"
                              >View Pricing</a
                            >
                          </div>
                        </div>
                        <img
                          src="assets/media/illustrations/sigma-1/17-dark.png"
                          class="position-absolute me-3 bottom-0 end-0 h-200px"
                          alt=""
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Main COntent End -->



@endsection