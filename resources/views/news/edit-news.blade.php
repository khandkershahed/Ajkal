@extends('layouts.base')
@section('content')
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <div class="post d-flex flex-column-fluid" id="kt_post">
            <div id="kt_content_container" class="container-fluid">
                <h1 class="text-center pb-3 fs-1">Edit News Post</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-flush">
                            <div class="card-body">
                                <form id="" class="form" method="post" action="{{ url('/update-news') }}"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="editable_news_id" value="{{ $news->id }}">
                                    <input type="hidden" name="existing_news_image" value="{{ $news->title_img }}">
                                    <input type="hidden" name="existing_thumbnail_image"
                                        value="{{ $news->thumbnail_img }}">
                                    <div class="row">
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">Headline</label>

                                                        <input class="form-control form-control-solid" name="news_title"
                                                            value="{{ $news->news_title }}" required="required" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Short Brief</label>

                                                        <input class="form-control form-control-solid" name="short_brief"
                                                            value="{{ $news->news_short_brief }}" id="" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Video URL</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="video_url" value="{{ $news->video_url }}" />
                                                    </div>
                                                </div>

                                                <div class="col-lg-3">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">News Author</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="news_author" value="{{ $news->news_author }}" />
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
                                                            name="news_image" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Image Caption</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="image_caption" value="{{ $news->image_caption }}" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="fw-bold fs-6 mb-2">Meta Keywords</label>
                                                        <input type="text" class="form-control form-control-solid"
                                                            name="meta_tags" value="{{ $news->meta_tags }}" />
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <label class="required fw-bold fs-6 mb-2">News Details</label>
                                                    <textarea name="news_detail" class="tox-target kt_docs_tinymce_plugins">{{ $news->news_detail }}</textarea>
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
                                                                <option @if ($news->category_id == $category->id) selected @endif
                                                                    value="{{ $category->id }}">{{ $category->name }}
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
                                                            <option @if ($news->news_type == 1) selected @endif
                                                                value="1">Breaking</option>
                                                            <option @if ($news->news_type == 2) selected @endif
                                                                value="2">Spotlight</option>
                                                            <option @if ($news->news_type == 3) selected @endif
                                                                value="3">General</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">Is Featured</label>
                                                        <select class="form-select form-select-solid" name="is_featured"
                                                            data-control="select2" data-placeholder="Select an option">
                                                            <option @if ($news->is_featured == 1) selected @endif
                                                                value="1">Yes</option>
                                                            <option @if ($news->is_featured == 0) selected @endif
                                                                value="0">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="fv-row mb-5">
                                                        <label class="required fw-bold fs-6 mb-2">Status</label>
                                                        <select class="form-select form-select-solid" name="status"
                                                            data-control="select2" data-placeholder="Select an option">
                                                            <option @if ($news->status == 1) selected @endif
                                                                value="1">Publish</option>
                                                            <option @if ($news->status == 2) selected @endif
                                                                value="2">Pending</option>
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
