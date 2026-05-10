@extends('main-landing')
@section('title', 'About')
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

<section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750" style="background: var(--bg-warm);">
    <div class="container py-4">

        <div class="row align-items-center">
            <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                    @php
                        $image = $get_sec_one->tas_image;
                        $loop_img = explode(',',$image);
                    @endphp

                    @foreach($loop_img as $val)
                        <div>
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/about/'.$val) }}">
                        </div>
                    @endforeach
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">
                        <strong class="font-weight-extra-bold">{{ $get_sec_one->tas_title }}</strong>
                    </h2>
                </div>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400" style="text-align: justify;">
                    {{ $get_sec_one->tas_content }}
                </p>
            </div>
        </div>

    </div>
</section>

{{-- <div class="container">
    <div class="row">
        <div class="col py-4">
            <hr class="solid">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-md-auto text-center">

            <p>LMDH Bukit Amanah Gunung Puntang terdiri atas 3 Kelompok Tani Hutan (KTH) yaitu:</p>

            <section class="timeline" id="timeline">
                <div class="timeline-body">
                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">KTH Datar Nangsi</h3>
                    </div>

                    <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/landing-page/img/history/history-3.jpg') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">KTH Datar Nangsi</h3>
                            <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat, ante.</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">KTH Adhu</h3>
                    </div>

                    <article class="timeline-box right text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/landing-page/img/history/history-2.jpg') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">KTH Adhu</h3>
                            <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel pellentesque consequat.</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">KTH Datar Baru</h3>
                    </div>

                    <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/landing-page/img/history/history-1.jpg') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">KTH Datar Baru</h3>
                            <p class="mb-0 text-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce elementum, nulla vel consequat, ante.</p>
                        </div>
                    </article>
                </div>
            </section>

        </div>
    </div>
</div> --}}

<div class="container pt-5 pb-2">
    <div class="overflow-hidden mb-3">
        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200" style="text-align: justify;">
            {{ $get_sec_two->tas_content }}
        </p>
    </div>
    <div class="row">
        <div class="col">

            <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                <div class="owl-carousel owl-theme pb-3" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

                    @foreach($get_sec_three as $vg)
                        <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/img/about/'.$vg) }}" class="img-fluid border-radius-0" alt="">
                                </span>
                            </span>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</div>

@endsection