@extends('main-admin')
@section('title', 'Activity: CSR')
@section('content')

<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>Management CSR</h4>
                        <span>Management csr created, edit, and delete.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="page-body">
        <div class="row">

            <div class="col-sm-12">
                <!-- Zero config.table start -->
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('admin.formevent') }}" class="btn btn-primary"><i class="feather icon-plus"></i>Add Event</a>
                    </div>
                    <div class="card-body">
                        <div class="dt-responsive table-responsive">
                            <table id="listdata" class="table table-striped table-bordered nowrap" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Title</th>
                                        <th>Content</th>
                                        <th>Event Date</th>
                                        <th>Created Date</th>
                                        <th>Created By</th>
                                        <th>Updated Date</th>
                                        <th>Updated By</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($listdata as $key => $val)
                                        <tr>
                                            <td class="text-center align-middle">{{ $key+1 }}</td>
                                            <td class="align-middle">{{ $val->tre_title }}</td>
                                            <td class="align-middle">{{ \Illuminate\Support\Str::limit(strip_tags($val->tre_content), 50, '...') }}</td>
                                            <td class="align-middle">{{ \Carbon\Carbon::parse($val->tre_date_event)->translatedFormat('l, d F Y') }}</td>
                                            <td class="align-middle">{{ \Carbon\Carbon::parse($val->tre_created_date)->translatedFormat('l, d F Y') }}</td>
                                            <td class="align-middle">{{ $val->created_by_name }}</td>
                                            <td class="align-middle">{{ !empty($val->tre_updated_date) ? \Carbon\Carbon::parse($val->tre_updated_date)->translatedFormat('l, d F Y') : '-' }}</td>
                                            <td class="align-middle">{{ !empty($val->updated_by_name) ? $val->updated_by_name : '-' }}</td>
                                            <td class="align-middle">
                                                <a href="{{ route('admin.formevent', ['id' => Hashids::encode($val->tre_id)]) }}" class="btn btn-info">
                                                    <i class="icofont icofont-eye-alt"></i>
                                                </a>

                                                 <button class="btn btn-danger" data-name="delete" data-id="{{ $val->tre_id }}">
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