@extends('main-admin')
@section('title', 'Home')
@section('content')

<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Management Home</h4>
                        <span>Management Home landing page.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row ">

            <div class="col-sm-12">
                <!-- Zero config.table start -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>Slide Header</h4>
                        <a href="{{ route('admin.formhomeheader') }}" class="btn btn-primary"><i class="feather icon-plus"></i>Add Header</a>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="listheader" class="table table-striped table-bordered nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Text 1</th>
                                        <th>Text 2</th>
                                        <th>Text 3</th>
                                        <th>Created Date</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listheader as $kh => $vh)
                                        <tr>
                                            <td class="text-center align-middle">{{ $kh+1 }}</td>
                                            <td class="align-middle">{{ $vh->ths_image }}</td>
                                            <td class="align-middle">{{ \Illuminate\Support\Str::limit(strip_tags($vh->ths_text_1), 50, '...') }}</td>
                                            <td class="align-middle">{{ \Illuminate\Support\Str::limit(strip_tags($vh->ths_text_2), 50, '...') }}</td>
                                            <td class="align-middle">{{ \Illuminate\Support\Str::limit(strip_tags($vh->ths_text_3), 50, '...') }}</td>
                                            <td class="align-middle">{{ \Carbon\Carbon::parse($vh->ths_created_date)->translatedFormat('l, d F Y') }}</td>
                                            <td class="align-middle">{{ $vh->created_by_name }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('admin.formhomeheader', ['id' => Hashids::encode($vh->ths_id)]) }}" class="btn btn-info">
                                                    <i class="icofont icofont-eye-alt"></i>
                                                </a>

                                                 <button class="btn btn-danger" data-name="deleteheader" data-id="{{ $vh->ths_id }}">
                                                    <i class="icofont icofont-not-allowed"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <!-- Zero config.table start -->
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h4>List Content</h4>
                        <a href="{{ route('admin.formhomecontent') }}" class="btn btn-primary"><i class="feather icon-plus"></i>Add Content</a>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="listdata" class="table table-striped table-bordered nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Image</th>
                                        <th>Created Date</th>
                                        <th>Created By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listdata as $key => $val)
                                        <tr>
                                            <td class="text-center align-middle">{{ $key+1 }}</td>
                                            <td class="align-middle">{{ $val->trh_title }}</td>
                                            <td class="align-middle">{{ \Illuminate\Support\Str::limit(strip_tags($val->trh_content), 50, '...') }}</td>
                                            <td class="align-middle">{{ $val->trh_image }}</td>
                                            <td class="align-middle">{{ \Carbon\Carbon::parse($val->trh_created_date)->translatedFormat('l, d F Y') }}</td>
                                            <td class="align-middle">{{ $val->created_by_name }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('admin.formhomecontent', ['id' => Hashids::encode($val->trh_id)]) }}" class="btn btn-info">
                                                    <i class="icofont icofont-eye-alt"></i>
                                                </a>

                                                 <button class="btn btn-danger" data-name="delete" data-id="{{ $val->trh_id }}">
                                                    <i class="icofont icofont-not-allowed"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection