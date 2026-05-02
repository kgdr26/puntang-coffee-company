@extends('main-landing')
@section('title', 'CSR')
@section('content')

<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{ asset('assets/img/gmb_f20.png') }}');">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-9 font-weight-bold">CSR</h1>
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

<div id="examples" class="container py-2">
    <div class="row align-items-center">
        <div class="col-sm-9 col-md-7 mx-auto order-2 order-md-1">

            <div class="cascading-images-wrapper">
                <div class="cascading-images position-relative">
                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                        <img src="{{ asset('assets/img/gmb_f2.png') }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                    </div>
                    <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{ asset('assets/img/gmb_f3.png') }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                        </div>
                    </div>
                    <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{ asset('assets/img/gmb_f7.png') }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" />
                        </div>
                    </div>
                </div>
            </div>
            <div id="floatingEffectCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
                
            </div>

        </div>
        <div class="col-md-4 py-lg-5 my-lg-5 mb-4 order-1 order-md-2">

            <div class="pe-3 ps-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-left-light border-sm-none">
                <h4 class="mb-2">Highlight of products knowledge</h4>
                <p class="mb-2">
                    <em>From Highland Soil to Your Cup</em>
                    Berasal dari dataran tinggi Gunung Puntang , setiap biji kopi Puntang Wangi ditanam pada ketinggian ideal antara 1250 – 1500 mpdl. Iklim pegunungan yang sejuk, tanah yang kaya mineral, dan sentuhan langsung para petani kopi lokal dalam merawat tanaman kopi tanpa bahan kimia memberikan karakter rasa yang unik, kompleks, dan autentik.
                </p>
                <a href="#floatingEffectCascadingImagesPopup" class="popup-with-zoom-anim">Why Choose Us</a>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col">
            <hr class="solid my-5">
        </div>
    </div>

    <div class="row align-items-center py-5">
        <div class="col-md-4 py-lg-5 my-lg-5 mb-4">

            <div class="pe-3 pe-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-right-light border-sm-none">
                <h4 class="mb-2">International proof</h4>
                <p class="mb-2">
                    Kopi Puntang dengan jenis Yellow Bourbone berhasil meraih gelar juara dunia dalam ajang Specialty Coffee Association of America Expo di Atlanta, Amerika Serikat, pada April 2016. Kualitas kopi Puntang Wangi menjadi komitmen utama kami dalam menciptakan profil rasa seimbang yang terus menerus kami upayakan untuk dapat dikenal di pasar internasional melalui beberapa pameran yang telah kami laksanakan seperti di negara Algeria, Qatar, dan Turkey.
                </p>
                <a href="#floatingEffect2CascadingImagesPopup" class="popup-with-zoom-anim">Why Choose Us</a>
            </div>

        </div>
        <div class="col-sm-8 ps-5">

            <div class="cascading-images-wrapper bg-color-grey border-radius-2 p-5 w-100 text-center">
                <div class="cascading-images transform-none position-relative clearfix">

                    <div class="position-absolute z-index-3" style="top: 20%;">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                            <img src="{{ asset('assets/img/gmb_f8.png') }}" style="max-width: 200px;" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                        </div>
                    </div>

                    <div class="position-relative z-index-2">
                        <img src="{{ asset('assets/img/gmb_f19.png') }}" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                    </div>

                    <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="bottom: -8%; right: 9%;">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px;">
                            <svg width="100%" height="100%">
                                <defs>
                                    <pattern id="dots" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                        <circle fill="#5d422f" cx="1.5" cy="1.5" r="1.5" />
                                    </pattern>
                                </defs>
                                <rect x="0" y="0" width="100%" height="100%" fill="url(#dots)" />
                            </svg>
                        </div>
                    </div>

                    <div class="patterns opacity-7 position-absolute z-index-1 d-none d-md-block" style="top: 10%; left: -38.2%;">
                        <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}" style="width: 310px; height: 170px;">
                            <svg width="100%" height="100%">
                                <defs>
                                    <pattern id="dots2" x="0" y="0" width="18" height="18" patternUnits="userSpaceOnUse">
                                        <circle fill="#5d422f" cx="1.5" cy="1.5" r="1.5" />
                                    </pattern>
                                </defs>
                                <rect x="0" y="0" width="100%" height="100%" fill="url(#dots2)" />
                            </svg>
                        </div>
                    </div>

                </div>
            </div>
            <div id="floatingEffect2CascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
                
            </div>

        </div>

    </div>
</div>


@endsection