@extends('main-landing')
@section('title', 'About')
@section('content')

<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-4" style="background-image: url('{{ asset('assets/img/gmb_f4.png') }}');">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-9 font-weight-bold">About Us</h1>
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

<section class="section section-default border-0 my-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="750">
    <div class="container py-4">

        <div class="row align-items-center">
            <div class="col-md-6 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000">
                <div class="owl-carousel owl-theme nav-inside mb-0" data-plugin-options="{'items': 1, 'margin': 10, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 6000, 'loop': true}">
                    <div>
                        <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f21.png') }}">
                    </div>
                    <div>
                        <img alt="" class="img-fluid" src="{{ asset('assets/img/gmb_f24.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="overflow-hidden mb-2">
                    <h2 class="text-color-dark font-weight-normal text-7 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200"><strong class="font-weight-extra-bold">-- From Coffee Beans a Life Raises –-</strong></h2>
                </div>
                <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1400">
                    Bermula dari aktivitas ilegal yang menjadi tumpuan hidup, Masyarakat Gunung Puntang memenuhi kebutuhan sehari-hari melalui perburuan liar, perambahan lahan hutan, penebangan pohon secara sembarangan. Tanpa memperhatikan dampak lingkungan yang ada, keberlangsungan hidup keluarga menjadi satu-satunya prioritas yang dimiliki oleh Masyarakat desa hutan tanpa kemampuan maupun rantai ekonomi yang memadai.
                </p>
                <p class="mb-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600">
                    Tahun 2017 menjadi titik awal perjalanan, ketika lingkungan terasa tidak lagi memberikan keamanan sehingga sering terjadi banjir, terganggunya ekosistem fauna hutan, dan masalah sosial yang timbul. Tanggal 26 Oktober 2017 Kementerian Lingkungan Hidup dan Kehutanan melalui Direktorat Perhutanan Sosial dan Kemitraan Lingkungan Republik Indonesia memberikan kesempatan hak kelola kemitraan kehutanan seluas 306,12 hektare kepada Masyarakat yang selanjutnya dibentuk dan dikenal sebagai Lembaga Masyarakat Desa Hutan (LMDH) Bukit Amanah Gunung Puntang.
                </p>
            </div>
        </div>

    </div>
</section>

<div class="container">
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
</div>

<div class="container pt-5 pb-2">
    <div class="overflow-hidden mb-3">
        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
            Berlokasi di Gunung Puntang Desa Campakamulya, Kecamatan Cimaung, Kabupaten Bandung, Provinsi Jawa Barat, LMDH ini beranggotakan dengan masing-masing kelompok sekitar 40 kepala keluarga yang diketuai oleh Deni Sofian Dimyati atau yang biasa dikenal sebagai Abah Onil.
        </p>
        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
            Komitmen terhadap keberlangsungan lingkungan diaktualisasikan melalui budidaya tanaman kopi yang dilakukan dengan metode Green Farming yang merupakan pendekatan budidaya tanaman dengan mengutamakan kelestarian lingkungan, keberlanjutan ekosistem, dan kesehatan manusia dengan meminimalkan penggunaan bahan kimia sintetis. Pemanfaatan pupuk organik yang diperoleh melalui kulit biji ceri kopi dan feses hewan ternak diolah untuk menjadi bahan fertilisasi.
        </p>
    </div>
    <div class="row">
        <div class="col">

            <div class="my-4 lightbox appear-animation" data-appear-animation="fadeInUpShorter" data-plugin-options="{'delegate': 'a.lightbox-portfolio', 'type': 'image', 'gallery': {'enabled': true}}">
                <div class="owl-carousel owl-theme pb-3" data-plugin-options="{'items': 4, 'margin': 35, 'loop': false}">

                    @for($i=1;$i<=10;$i++)
                        <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/img/gmb_f21.png') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">OUR DATA</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                        </a>
                                        <a href="{{ asset('assets/img/gmb_f21.png') }}" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/img/gmb_f22.png') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">OUR DATA</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                        </a>
                                        <a href="{{ asset('assets/img/gmb_f22.png') }}" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                        </div>

                        <div class="portfolio-item">
                            <span class="thumb-info thumb-info-lighten thumb-info-no-borders thumb-info-bottom-info thumb-info-centered-icons border-radius-0">
                                <span class="thumb-info-wrapper border-radius-0">
                                    <img src="{{ asset('assets/img/gmb_f23.png') }}" class="img-fluid border-radius-0" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner line-height-1 font-weight-bold text-dark position-relative top-3">OUR DATA</span>
                                        <span class="thumb-info-type">Brand</span>
                                    </span>
                                    <span class="thumb-info-action">
                                        <a href="portfolio-single-wide-slider.html">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-primary"><i class="fas fa-link"></i></span>
                                        </a>
                                        <a href="{{ asset('assets/img/gmb_f23.png') }}" class="lightbox-portfolio">
                                            <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-search text-dark"></i></span>
                                        </a>
                                    </span>
                                </span>
                            </span>
                        </div>
                    @endfor

                </div>
            </div>

        </div>
    </div>
</div>

@endsection