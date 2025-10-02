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
                        <input type="hidden" id="epaper_id" value="{{$epaper->id}}">
                          <div class="main-container">
                              <div class="img-container">
                                  <img
                                    style="display: block;max-width: 100%;"
                                    id="cropImage"
                                    src="{{ config('app.url').'/img/epaper/'.$epaper->epaper_image}}"
                                    alt="ePaper image"
                                  />
                              </div>
                              <!-- <button id="btn-crop">Crop</button> -->
                              <button id="save-btn">Save</button>
                              <div class="cropped-container">
                                  <img src="" id="output">
                              </div>
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
@endsection
