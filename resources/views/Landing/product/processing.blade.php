@extends('main-landing')
@section('title', 'Processing Methods')
@section('content')

<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-4" style="background-image: url('{{ asset('assets/img/header/'.$get_header->msh_image) }}');">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-9 font-weight-bold">{{ $get_header->msh_title }}</h1>
                <span class="sub-title">{{ $get_header->msh_content }}</span>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb breadcrumb-light d-block text-center">
                    <li><a href="#">Home</a></li>
                    <li class="active">Pages</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container pt-5 pb-2">
    <div class="overflow-hidden mb-3">
        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
            {{ $get_content->tpr_content }}
        </p>
    </div>
</div>

<div id="examples" class="container py-2">

    <div class="row">
        <div class="col">
            @php
                $image = $get_content->tpr_image;
                $loop_img = explode(',',$image);
            @endphp
            <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">

                @foreach($loop_img as $vg)
                    <div>
                        <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/proccess/'.$vg) }}" style="width: 100%;height: 10rem;">
                    </div>
                @endforeach

            </div>
        </div>
    </div>

</div>

<div id="examples" class="container py-2">
    <div class="row mt-5">
        <div class="col">
            <div class="row process process-shapes process-shapes-always-animate my-5">

                @php
                    $methode = $get_content->tpr_list_methode;
                    $loop_methode = json_decode($methode, true);
                    $no = 1;
                @endphp

                @foreach($loop_methode as $item)
                    <div class="process-step col-lg-3 mb-5 mb-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                        <div class="process-step-circle">
                            <strong class="process-step-circle-content">0{{ $no++ }}</strong>
                        </div>
                        <div class="process-step-content">
                            <h4 class="mb-1 text-5 font-weight-bold">{{ $item['title'] }}</h4>
                            <p class="mb-0"> {{ $item['desc'] }}</p>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </div>
</div>

@endsection