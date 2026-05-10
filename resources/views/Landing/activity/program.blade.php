@extends('main-landing')
@section('title', 'Program')
@section('content')

<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{ asset('assets/img/gmb_f20.png') }}');">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-9 font-weight-bold">PROGRAM</h1>
                <span class="sub-title">The perfect choice for your next project</span>
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

<div class="container">
    <div class="row g-3">

        @foreach($list_program as $key => $val)

            <div class="col-lg-4 col-sm-12 col-xl-4 col-md-4">
                <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-lighten thumb-info-bottom-info thumb-info-bottom-info-dark thumb-info-bottom-info-show-more thumb-info-no-zoom">
                    <span class="thumb-info-wrapper">
                        <img src="{{ asset('assets/img/program/'.$val->trp_image) }}" class="img-fluid" alt="" style="min-height: 19rem;max-height: 19rem;">
                        <span class="thumb-info-title">
                            <span class="thumb-info-inner line-height-1">{{ $val->trp_tahun }}</span>
                            <span class="thumb-info-type opacity-8">{{ $val->trp_title }}</span>
                            <span class="thumb-info-show-more-content opacity-7"><p class="mb-0 text-1 line-height-5">{{ \Illuminate\Support\Str::limit(strip_tags($val->trp_description), 100, '... ...') }}</p></span>
                        </span>
                    </span>
                </span>
            </div>
        @endforeach

    </div>
</div>

{{-- <div class="container">
    <div class="row">
        <div class="col py-4">
            <hr class="solid">
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mx-md-auto text-center">

            <h4>ACTIVITY OUTCOMES</h4>

            <section class="timeline" id="timeline">
                <div class="timeline-body">
                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2023 - 2024</h3>
                    </div>

                    <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f19.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Plantation of Coffee Trees</h3>
                            <p class="mb-0 text-2">4250 Coffee Trees have been planted</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2023</h3>
                    </div>

                    <article class="timeline-box right text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f20.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Rejuvenation of Coffee Trees</h3>
                            <p class="mb-0 text-2">800 Coffee Trees have been rejuvenated</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2023</h3>
                    </div>

                    <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f21.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Nursery of Endemic Trees</h3>
                            <p class="mb-0 text-2">100 Endemic Trees have been nurtured</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2023</h3>
                    </div>

                    <article class="timeline-box right text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f22.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Rejuvenation of Coffee Trees</h3>
                            <p class="mb-0 text-2">800 Coffee Trees have been rejuvenated</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2023</h3>
                    </div>

                    <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f23.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Green House</h3>
                            <p class="mb-0 text-2">More efficient drying time for coffee cherry up to 15 days reduction in 2 ton capacity</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2023</h3>
                    </div>

                    <article class="timeline-box right text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f24.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Compost House</h3>
                            <p class="mb-0 text-2">Utilizing animal waste & cherry skin become compost in 10 ton capacity</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2023</h3>
                    </div>

                    <article class="timeline-box left text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="600">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f16.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Access Road</h3>
                            <p class="mb-0 text-2">150 x 2,5 sqm has been built on the access to the coffee plantation</p>
                        </div>
                    </article>

                    <div class="timeline-date">
                        <h3 class="text-primary font-weight-bold">2024</h3>
                    </div>

                    <article class="timeline-box right text-start appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="400">
                        <div class="timeline-box-arrow"></div>
                        <div class="p-2">
                            <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f25.png') }}" />
                            <h3 class="font-weight-bold text-3 mt-3 mb-1">Electrical Installation</h3>
                            <p class="mb-0 text-2">900kWh electricity have been installed</p>
                        </div>
                    </article>
                </div>
            </section>

        </div>
    </div>
</div> --}}


@endsection