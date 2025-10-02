@extends('layouts.base')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-fluid">
                <h1 class="text-center pb-3 fs-1">News Post</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-flush">
                            <div class="card-body">
                                <form id="" class="form" method="post" action="{{ url('/create-news') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">Headline</label>

                                                        <input class="form-control form-control-solid" name="news_title"
                                                            required="required" id="" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Short Brief</label>

                                                        <input class="form-control form-control-solid" name="short_brief"
                                                            placeholder="" id="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Video URL</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="video_url" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">News Author</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="news_author" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Thumbnail Image</label>
                                                        <input type="file" class="form-control form-control-solid"
                                                            name="thumbnail_image" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">News Image</label>
                                                        <input type="file" class="form-control form-control-solid"
                                                            name="news_image" required />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Image Caption</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="image_caption" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Meta Keywords</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="meta_tags"
                                                            placeholder="news, politics, international..." />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="required fw-bold fs-6 mb-2">News Details</label>
                                                    <textarea name="news_detail" class="tox-target kt_docs_tinymce_plugins"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">Category</label>

                                                        <select class="form-select form-select-solid" name="category_id"
                                                            required data-control="select2"
                                                            data-placeholder="Select an option">
                                                            <option></option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}">{{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">News Type</label>
                                                        <select class="form-select form-select-solid" name="news_type"
                                                            data-control="select2" data-placeholder="Select an option">
                                                            <option value="1">Breaking</option>
                                                            <option value="2">Spotlight</option>
                                                            <option selected value="3">General</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">Is Featured</label>
                                                        <select class="form-select form-select-solid" name="is_featured"
                                                            data-control="select2" data-placeholder="Select an option">
                                                            <option value="1">Yes</option>
                                                            <option selected value="2">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">Status</label>
                                                        <select class="form-select form-select-solid" name="status"
                                                            data-control="select2" data-placeholder="Select an option">
                                                            <option selected value="1">Publish</option>
                                                            <option value="2">Pending</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button id="kt_docs_formvalidation_daterangepicker_submit" type="submit"
                                        class="btn btn-primary mt-3">
                                        <span class="indicator-label"> Submit </span>
                                        <span class="indicator-progress">
                                            Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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
