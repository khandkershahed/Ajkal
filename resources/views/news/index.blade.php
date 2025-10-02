@extends('layouts.base')

@section('content')

          <!--begin::Content-->
          <div
            class="content d-flex flex-column flex-column-fluid"
            id="kt_content"
          >
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <!--begin::Container-->
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">All News</h1>
                @if(Session::has('message'))
                  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-flush">
                      <div
                        class="card-header align-items-center py-5 gap-2 gap-md-5"
                      >
                        <div class="card-title">
                          <!--begin::Search-->
                          <div
                            class="d-flex align-items-center position-relative my-1"
                          >
                            <span
                              class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4"
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
                            <input
                              type="text"
                              data-kt-filter="search"
                              class="form-control form-control-solid w-250px ps-14"
                              placeholder="Search Report"
                            />
                          </div>
                          <!--end::Search-->
                          <!--begin::Export buttons-->
                          <div
                            id="kt_datatable_example_1_export"
                            class="d-none"
                          ></div>
                          <!--end::Export buttons-->
                        </div>
                        <div
                          class="card-toolbar flex-row-fluid justify-content-end gap-5"
                        >
                          <!--begin::Export dropdown-->
                          <a
                            type="button"
                            class="btn btn-light-primary"
                            href="{{url('/create-news')}}"
                          >
                            <span class="svg-icon svg-icon-3">
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
                            Add Post
                          </a>
                          <!--end::Export dropdown-->
                        </div>
                      </div>
                      <div class="card-body pt-0">
                        <table
                          class="table align-middle border rounded table-striped fs-6 g-5"
                          id="kt_datatable_example_1"
                        >
                          <thead>
                            <!--begin::Table row-->
                            <tr
                              class="text-center text-gray-400 bg-light-dark fw-bolder fs-7 text-uppercase"
                            >
                              <th class="">Sl</th>
                              <th class="">Image</th>
                              <th class="">Post Title</th>
                              <th class="">Category</th>
                              <!-- <th class="">News Description</th> -->
                              <th class="">Posted</th>
                              <th class="">Action</th>
                            </tr>
                            <!--end::Table row-->
                          </thead>
                          <tbody class="fw-bold text-gray-600">
                            <?php $i=1; ?>
                            @foreach($all_news as $news)
                            <tr class="odd">
                              <td>{{$i}}</td>
                              <td class="text-center pe-0">
                                @if($news->thumbnail_img!='')
                                <img
                                  class="rounded-circle"
                                  width="50px"
                                  height="50px"
                                  src="{{ config('app.url').'/img/news/'.$news->thumbnail_img}}"
                                  alt="Thumnail image"
                                />
                                @elseif($news->title_img!='')
                                <img
                                  class="rounded-circle"
                                  width="50px"
                                  height="50px"
                                  src="{{ config('app.url').'/img/news/'.$news->title_img}}"
                                  alt="Title image"
                                />
                                @else
                                <img
                                  class="rounded-circle"
                                  width="50px"
                                  height="50px"
                                  src="{{URL::asset('/images/news.png')}}" alt="Default image" height="200" width="200"
                                  alt=""
                                />
                                @endif
                              </td>
                              <td>
                                {{$news->news_title}}
                              </td>
                              <td>{{$news->name}}</td>
                              <!-- <td data-order="2022-03-10T14:40:00+05:00">
                                {{$news->news_detail}}
                              </td> -->
                              <td class="text-center pe-0">{{$news->news_time}}</td>
                              <td class="text-center">
                                <div class="d-flex justify-content-end flex-shrink-0">
                                  <!-- <a
                                    href="edit-news.html"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                  >
                                    <span class="svg-icon svg-icon-3">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          opacity="0.3"
                                          d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                          fill="currentColor"
                                        ></path>
                                      </svg>
                                    </span>
                                  </a> -->
                                  <a
                                    href="{{url('/edit-news/'.$news->id)}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                  >
                                    <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                    <span class="svg-icon svg-icon-3">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          opacity="0.3"
                                          d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                          fill="currentColor"
                                        ></path>
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </a>
                                  <a
                                    href="{{url('/delete-news/'.$news->id)}}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                  >
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                    <span class="svg-icon svg-icon-3">
                                      <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                      >
                                        <path
                                          d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          opacity="0.5"
                                          d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                          fill="currentColor"
                                        ></path>
                                        <path
                                          opacity="0.5"
                                          d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                          fill="currentColor"
                                        ></path>
                                      </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                  </a>
                                </div>
                              </td>
                            </tr>
                            <?php $i=$i+1; ?>
                            @endforeach
                          </tbody>
                        </table>
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


<script>
  
ConfirmDialog('Are you sure');


function ConfirmDialog(message) {
  $('<div></div>').appendTo('body')
    .html('<div><h6>' + message + '?</h6></div>')
    .dialog({
      modal: true,
      title: 'Delete message',
      zIndex: 10000,
      autoOpen: true,
      width: 'auto',
      resizable: false,
      buttons: {
        Yes: function() {
          // $(obj).removeAttr('onclick');                                
          // $(obj).parents('.Parent').remove();

          $('body').append('<h1>Confirm Dialog Result: <i>Yes</i></h1>');

          $(this).dialog("close");
        },
        No: function() {
          $('body').append('<h1>Confirm Dialog Result: <i>No</i></h1>');

          $(this).dialog("close");
        }
      },
      close: function(event, ui) {
        $(this).remove();
      }
    });
};

</script>