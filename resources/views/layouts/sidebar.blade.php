        <div
          id="kt_aside"
          class="aside aside-dark aside-hoverable"
          data-kt-drawer="true"
          data-kt-drawer-name="aside"
          data-kt-drawer-activate="{default: true, lg: false}"
          data-kt-drawer-overlay="true"
          data-kt-drawer-width="{default:'200px', '300px': '250px'}"
          data-kt-drawer-direction="start"
          data-kt-drawer-toggle="#kt_aside_mobile_toggle"
        >
          <div class="aside-logo flex-column-auto" id="kt_aside_logo">
            <a href="{{url('/dashboard')}}">
              <img
                alt="Logo"
                src="https://i.ibb.co/6D35WjX/logo.png"
                class="h-25px logo"
              />
            </a>
            <div
              id="kt_aside_toggle"
              class="btn btn-icon w-auto px-0 btn-active-color-primary aside-toggle"
              data-kt-toggle="true"
              data-kt-toggle-state="active"
              data-kt-toggle-target="body"
              data-kt-toggle-name="aside-minimize"
            >
              <span class="svg-icon svg-icon-1 rotate-180">
                <!--begin::Svg Icon | path: /var/www/preview.সাপ্তাহিক আজকাল.com/সাপ্তাহিক আজকাল/metronic/docs/core/html/src/media/icons/duotune/general/gen008.svg-->
                <span class="svg-icon svg-icon-muted svg-icon-2hx"
                  ><svg
                    width="24"
                    height="24"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                      fill="currentColor"
                    />
                    <path
                      opacity="0.3"
                      d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                      fill="currentColor"
                    />
                  </svg>
                </span>
                <!--end::Svg Icon-->
              </span>
            </div>
          </div>
          

          
          
                  



          <div class="aside-menu flex-column-fluid">
            <div
              class="hover-scroll-overlay-y my-5 my-lg-5"
              id="kt_aside_menu_wrapper"
              data-kt-scroll="true"
              data-kt-scroll-activate="{default: false, lg: true}"
              data-kt-scroll-height="auto"
              data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
              data-kt-scroll-wrappers="#kt_aside_menu"
              data-kt-scroll-offset="0"
            >
              <div
                class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500"
                id="#kt_aside_menu"
                data-kt-menu="true"
                data-kt-menu-expand="false"
              >
                <div class="menu-item">
                  <a class="menu-link" href="{{ url('/dashboard') }}">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11 2.375L2 9.575V20.575C2 21.175 2.4 21.575 3 21.575H9C9.6 21.575 10 21.175 10 20.575V14.575C10 13.975 10.4 13.575 11 13.575H13C13.6 13.575 14 13.975 14 14.575V20.575C14 21.175 14.4 21.575 15 21.575H21C21.6 21.575 22 21.175 22 20.575V9.575L13 2.375C12.4 1.875 11.6 1.875 11 2.375Z" fill="currentColor"/>
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </div>
                @if(Auth::user()->admin_role == 1 || Auth::user()->admin_role == 2 || Auth::user()->admin_role == 3)
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16 14C16.4 13.6 16.4 12.9 16 12.5C15.6 12.1 15.4 12.6 15 13L11 16L9 15C8.6 14.6 8.4 14.1 8 14.5C7.6 14.9 8.1 15.6 8.5 16L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="currentColor"/>
                          <path d="M10.4343 15.4343L9.25 14.25C8.83579 13.8358 8.16421 13.8358 7.75 14.25C7.33579 14.6642 7.33579 15.3358 7.75 15.75L10.2929 18.2929C10.6834 18.6834 11.3166 18.6834 11.7071 18.2929L16.25 13.75C16.6642 13.3358 16.6642 12.6642 16.25 12.25C15.8358 11.8358 15.1642 11.8358 14.75 12.25L11.5657 15.4343C11.2533 15.7467 10.7467 15.7467 10.4343 15.4343Z" fill="currentColor"/>
                          <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor"/>
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">News</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <a class="menu-link" href="{{ url('/all-news') }}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">All News</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a class="menu-link" href="{{ url('/create-news') }}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create News</span>
                      </a>
                    </div>
                  </div>
                </div>
                @endif
                @if(Auth::user()->admin_role == 1 || Auth::user()->admin_role == 2)
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M14 10V20C14 20.6 13.6 21 13 21H10C9.4 21 9 20.6 9 20V10C9 9.4 9.4 9 10 9H13C13.6 9 14 9.4 14 10ZM20 9H17C16.4 9 16 9.4 16 10V20C16 20.6 16.4 21 17 21H20C20.6 21 21 20.6 21 20V10C21 9.4 20.6 9 20 9Z" fill="currentColor"/>
                          <path d="M7 10V20C7 20.6 6.6 21 6 21H3C2.4 21 2 20.6 2 20V10C2 9.4 2.4 9 3 9H6C6.6 9 7 9.4 7 10ZM21 6V3C21 2.4 20.6 2 20 2H3C2.4 2 2 2.4 2 3V6C2 6.6 2.4 7 3 7H20C20.6 7 21 6.6 21 6Z" fill="currentColor"/>
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">Category</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/all-categories') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">All Category</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/create-category') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create Category</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion" >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M3 6C2.4 6 2 5.6 2 5V3C2 2.4 2.4 2 3 2H5C5.6 2 6 2.4 6 3C6 3.6 5.6 4 5 4H4V5C4 5.6 3.6 6 3 6ZM22 5V3C22 2.4 21.6 2 21 2H19C18.4 2 18 2.4 18 3C18 3.6 18.4 4 19 4H20V5C20 5.6 20.4 6 21 6C21.6 6 22 5.6 22 5ZM6 21C6 20.4 5.6 20 5 20H4V19C4 18.4 3.6 18 3 18C2.4 18 2 18.4 2 19V21C2 21.6 2.4 22 3 22H5C5.6 22 6 21.6 6 21ZM22 21V19C22 18.4 21.6 18 21 18C20.4 18 20 18.4 20 19V20H19C18.4 20 18 20.4 18 21C18 21.6 18.4 22 19 22H21C21.6 22 22 21.6 22 21ZM16 11V9C16 6.8 14.2 5 12 5C9.8 5 8 6.8 8 9V11C7.2 11 6.5 11.7 6.5 12.5C6.5 13.3 7.2 14 8 14V15C8 17.2 9.8 19 12 19C14.2 19 16 17.2 16 15V14C16.8 14 17.5 13.3 17.5 12.5C17.5 11.7 16.8 11 16 11ZM13.4 15C13.7 15 14 15.3 13.9 15.6C13.6 16.4 12.9 17 12 17C11.1 17 10.4 16.5 10.1 15.7C10 15.4 10.2 15 10.6 15H13.4Z" fill="currentColor"/>
                          <path d="M9.2 12.9C9.1 12.8 9.10001 12.7 9.10001 12.6C9.00001 12.2 9.3 11.7 9.7 11.6C10.1 11.5 10.6 11.8 10.7 12.2C10.7 12.3 10.7 12.4 10.7 12.5L9.2 12.9ZM14.8 12.9C14.9 12.8 14.9 12.7 14.9 12.6C15 12.2 14.7 11.7 14.3 11.6C13.9 11.5 13.4 11.8 13.3 12.2C13.3 12.3 13.3 12.4 13.3 12.5L14.8 12.9ZM16 7.29998C16.3 6.99998 16.5 6.69998 16.7 6.29998C16.3 6.29998 15.8 6.30001 15.4 6.20001C15 6.10001 14.7 5.90001 14.4 5.70001C13.8 5.20001 13 5.00002 12.2 4.90002C9.9 4.80002 8.10001 6.79997 8.10001 9.09997V11.4C8.90001 10.7 9.40001 9.8 9.60001 9C11 9.1 13.4 8.69998 14.5 8.29998C14.7 9.39998 15.3 10.5 16.1 11.4V9C16.1 8.5 16 8 15.8 7.5C15.8 7.5 15.9 7.39998 16 7.29998Z" fill="currentColor"/>
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">User</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/all-users') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">All User</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/create-user') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create User</span>
                      </a>
                    </div>
                  </div>
                </div>
                @endif
                @if(Auth::user()->admin_role != 3)
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion" >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
                          <path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"/>
                          <path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"/>
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">Advertisements</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/advertisement-categories') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Ads Position & Pricing</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/all-advertisements') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">All Advertisements</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/create-advertisement') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create Advertisement</span>
                      </a>
                    </div>
                    @if(Auth::user()->admin_role == 1 || Auth::user()->admin_role == 2 || Auth::user()->admin_role == 5)
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/advertisement-report') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Summury Report</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/report') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Advance Report</span>
                      </a>
                    </div>
                    @endif
                  </div>
                </div>
                @endif
                @if(Auth::user()->admin_role == 1 || Auth::user()->admin_role == 2)
                <div
                  data-kt-menu-trigger="click"
                  class="menu-item menu-accordion"
                >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg
                          width="24"
                          height="24"
                          viewBox="0 0 24 24"
                          fill="none"
                          xmlns="http://www.w3.org/2000/svg"
                        >
                          <path
                            d="M8 18L10 14L9.60001 13.2C9.30001 12.6 9.69999 12 10.4 12H13.7C14.3 12 14.7 12.7 14.5 13.2L14 14L16 18H8ZM6 6H4V8H6V6ZM7 11C7 11.6 7.4 12 8 12C8.6 12 9 11.6 9 11V10H7V11ZM10 6V8H20V6H10Z"
                            fill="currentColor"
                          />
                          <path
                            opacity="0.3"
                            d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM20 4H4V18H20V4ZM10 9V6H6V9C6 9.6 6.4 10 7 10H9C9.6 10 10 9.6 10 9Z"
                            fill="currentColor"
                          />
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">Marketing & Promotion</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <a class="menu-link" href="{{ url('/create-email') }}">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Email Marketing</span>
                      </a>
                    </div>
                    <!-- <div class="menu-item">
                      <a class="menu-link" href="sms.html">
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">SMS Marketing</span>
                      </a>
                    </div> -->
                  </div>
                </div>
                @endif
                @if(Auth::user()->admin_role == 1 || Auth::user()->admin_role == 2 || Auth::user()->admin_role == 3)
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion" >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 18L10 14L9.60001 13.2C9.30001 12.6 9.69999 12 10.4 12H13.7C14.3 12 14.7 12.7 14.5 13.2L14 14L16 18H8ZM6 6H4V8H6V6ZM7 11C7 11.6 7.4 12 8 12C8.6 12 9 11.6 9 11V10H7V11ZM10 6V8H20V6H10Z" fill="currentColor"/>
                          <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM20 4H4V18H20V4ZM10 9V6H6V9C6 9.6 6.4 10 7 10H9C9.6 10 10 9.6 10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">ePaper</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/all-epapers') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">All ePaper</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/create-epaper') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create ePaper</span>
                      </a>
                    </div>
                  </div>
                </div>
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion" >
                  <span class="menu-link">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M8 18L10 14L9.60001 13.2C9.30001 12.6 9.69999 12 10.4 12H13.7C14.3 12 14.7 12.7 14.5 13.2L14 14L16 18H8ZM6 6H4V8H6V6ZM7 11C7 11.6 7.4 12 8 12C8.6 12 9 11.6 9 11V10H7V11ZM10 6V8H20V6H10Z" fill="currentColor"/>
                          <path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H21C21.6 2 22 2.4 22 3V21C22 21.6 21.6 22 21 22ZM20 4H4V18H20V4ZM10 9V6H6V9C6 9.6 6.4 10 7 10H9C9.6 10 10 9.6 10 9Z" fill="currentColor"/>
                        </svg>
                      </span>
                    </span>
                    <span class="menu-title">Archive</span>
                    <span class="menu-arrow"></span>
                  </span>
                  <div class="menu-sub menu-sub-accordion menu-active-bg">
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/all-archives') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">All Editions</span>
                      </a>
                    </div>
                    <div class="menu-item">
                      <a
                        class="menu-link"
                        href="{{ url('/create-archive') }}"
                      >
                        <span class="menu-bullet">
                          <span class="bullet bullet-dot"></span>
                        </span>
                        <span class="menu-title">Create Edition</span>
                      </a>
                    </div>
                  </div>
                </div>
                @endif
                <!-- <div class="menu-item">
                  <a class="menu-link" href="site-setting.html">
                    <span class="menu-icon">
                      <span class="svg-icon svg-icon-2">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor"/>
                          <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor"/>
                          </svg>
                      </span>
                    </span>
                    <span class="menu-title">Settings</span>
                  </a>
                </div> -->
              </div>
            </div>
          </div>




          <div
            class="aside-footer flex-column-auto pt-5 pb-7 px-5"
            id="kt_aside_footer"
          >
            <a
              href="{{url('/logout')}}"
              class="btn btn-custom btn-primary w-100"
              data-bs-toggle="tooltip"
              data-bs-trigger="hover"
              data-bs-dismiss-="click"
              title="200+ in-house components and 3rd-party plugins"
            >
              <span class="btn-label">Logout</span>
              <span class="svg-icon btn-icon svg-icon-2">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                >
                  <path
                    opacity="0.3"
                    d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z"
                    fill="currentColor"
                  />
                  <rect
                    x="7"
                    y="17"
                    width="6"
                    height="2"
                    rx="1"
                    fill="currentColor"
                  />
                  <rect
                    x="7"
                    y="12"
                    width="10"
                    height="2"
                    rx="1"
                    fill="currentColor"
                  />
                  <rect
                    x="7"
                    y="7"
                    width="6"
                    height="2"
                    rx="1"
                    fill="currentColor"
                  />
                  <path
                    d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z"
                    fill="currentColor"
                  />
                </svg>
              </span>
            </a>
          </div>

        </div>