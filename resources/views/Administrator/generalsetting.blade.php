@extends('main-admin')
@section('title', 'General Setting')
@section('content')

<div class="page-wrapper">
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <h4>General Setting</h4>
                        <span>Pengaturan dasar website seperti identitas, kontak, dan informasi global.</span>
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
                        <h5>Setting Color Themes</h5>
                        <div class="card-header-right">
                            <i class="icofont icofont-spinner-alt-5"></i>
                        </div>
                    </div>
                    <div class="card-body">

                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th>Name Style</th>
                                            <th>Value Style</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($themes_setting as $ks => $vs)
                                            <tr>
                                                <td class="text-center">{{ $ks+1 }}</td>
                                                <td>{{ $vs->name }}</td>
                                                <td>
                                                    {{-- HEX COLOR --}}
                                                    @if(Str::startsWith($vs->value, '#'))
                                                        <input type="color" 
                                                            name="{{ $vs->name }}" 
                                                            value="{{ $vs->value }}" 
                                                            class="form-control">

                                                        <input type="text" 
                                                            name="{{ $vs->name }}" 
                                                            value="{{ $vs->value }}" 
                                                            class="form-control">

                                                    {{-- RGBA --}}
                                                    @elseif(Str::startsWith($vs->value, 'rgba'))
                                                        <input type="text" 
                                                            name="{{ $vs->name }}" 
                                                            value="{{ $vs->value }}" 
                                                            class="form-control">

                                                    {{-- SIZE --}}
                                                    @elseif(Str::contains($vs->value, 'px'))
                                                        <input type="text" 
                                                            name="{{ $vs->name }}" 
                                                            value="{{ $vs->value }}" 
                                                            class="form-control">

                                                    {{-- DEFAULT --}}
                                                    @else
                                                        <input type="text" 
                                                            name="{{ $vs->name }}" 
                                                            value="{{ $vs->value }}" 
                                                            class="form-control">
                                                    @endif
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-sm btn-success">Change</button>
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
</div>


@endsection