@extends('layouts.base')
@section('content')
          <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <div class="post d-flex flex-column-fluid" id="kt_post">
              <div id="kt_content_container" class="container-xxl">
                <h1 class="text-center pb-3 fs-1">ePaper</h1>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card card-flush">
                      <div class="card-body">
                          <div class="main-container">
                              <div class="img-container">
                                  <img
                                    style="display: block;max-width: 100%;"
                                    usemap="#epapermap"
                                    class="map"
                                    src="{{ config('app.url').'/img/epaper/'.$epaper->epaper_image}}"
                                    alt="ePaper image"
                                  />
                              </div>
                          </div>

                          <map name="epapermap">
                              @foreach($epaper_details as $epaper_detail)
                                <area shape="rect" coords="{{$epaper_detail->top_x}},{{$epaper_detail->top_y}},{{$epaper_detail->bottom_x}},{{$epaper_detail->bottom_y}}" alt="ePaper" href="javascript:window.open('http://{{$host}}/view-crop-epaper/{{$epaper_detail->id}}', 'AjKalUSA', 'width=500,height=350');">
                              @endforeach
                          </map>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
