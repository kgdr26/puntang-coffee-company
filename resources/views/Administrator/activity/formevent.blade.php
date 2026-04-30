@extends('main-admin')
@section('title', 'Form Event')
@section('content')

<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Form Event</h4>
                        <span>Management event created, edit, and delete.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row">
            <div class="col-sm-12">
                <!-- Basic Form Inputs card start -->
                <div class="card">
                    <div class="card-header">
                        <button class="btn btn-primary"><i class="feather icon-file"></i>Save Data</button>
                    </div>
                    <div class="card-body">
                        <form id="formdata">

                            <div class="mb-3 row">
                                <label class="form-label col-12 col-form-label">Title</label>
                                <div class="col-12">
                                    <input type="text" class="form-control" value="{{ $arr->tre_title }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="form-label col-12 col-form-label">Date Event</label>
                                <div class="col-xl-2 col-md-12 col-lg-2 col-sm-12">
                                    <input type="date" class="form-control" value="{{ $arr->tre_date_event }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="form-label col-sm-2 col-form-label">Imgae Event</label>
                                <div class="col-xl-12 col-md-12 col-lg-2 col-sm-12">
                                    <input type="file" name="files[]" id="filer_input1" multiple="multiple">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="form-label col-sm-2 col-form-label">Content</label>
                                <div class="col-xl-12 col-md-12 col-lg-2 col-sm-12">
                                    <textarea class="form-control" name="tre_content" id="editor" rows="20">{{ $arr->tre_content }}</textarea>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection