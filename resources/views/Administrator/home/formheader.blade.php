@extends('main-admin')
@section('title', 'Form Header Home')
@section('content')

<style>
    .custom-card {
        width: 180px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
    }

    .custom-thumb {
        width: 100%;
        height: 150px;
        overflow: hidden;
        background: #f5f5f5;
        padding: 0.5rem;
    }

    .custom-thumb img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .custom-info {
        padding: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .status {
        font-size: 13px;
    }

    .text-danger {
        color: red;
    }
</style>

<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Form Header Home</h4>
                        <span>Management headeer slide home.</span>
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
                        <button type="button" class="btn btn-primary" id="btnSave"><i class="feather icon-file"></i>Save Data</button>
                    </div>
                    <div class="card-body">
                        <form id="formdata">

                            <input type="hidden" name="ths_id" id="ths_id" value="{{ $arr->ths_id ?? '' }}">

                            <div class="mb-3 row">
                                <label class="form-label col-sm-2 col-form-label">Imgae</label>
                                <div class="col-xl-12 col-md-12 col-lg-2 col-sm-12">
                                    <input type="file" name="files" id="files"  data-file="{{ asset('assets/img/home/' . ($arr->ths_image ?? '')) }}">
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="form-label col-sm-2 col-form-label">Text 1</label>
                                <div class="col-xl-12 col-md-12 col-lg-2 col-sm-12">
                                    <textarea class="form-control" name="ths_text_1" id="ths_text_1" rows="5">{{ $arr->ths_text_1 ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="form-label col-sm-2 col-form-label">Text 2</label>
                                <div class="col-xl-12 col-md-12 col-lg-2 col-sm-12">
                                    <textarea class="form-control" name="ths_text_2" id="ths_text_2" rows="5">{{ $arr->ths_text_2 ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label class="form-label col-sm-2 col-form-label">Text 3</label>
                                <div class="col-xl-12 col-md-12 col-lg-2 col-sm-12">
                                    <textarea class="form-control" name="ths_text_3" id="ths_text_3" rows="5">{{ $arr->ths_text_3 ?? '' }}</textarea>
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