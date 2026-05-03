@extends('main-landing')
@section('title', 'Home')
@section('content')

<div class="slider-container rev_slider_wrapper" style="height: 670px;">
    <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 5000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
        <ul>
            @foreach($list_slide as $ks => $vs)

                @if($ks == 0)
                    <li data-transition="fade">
                        <img src="{{ asset('assets/img/home/'.$vs->ths_image) }}"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">

                        <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                            data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image" 
                            data-x="-500"
                            data-y="-700"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide"><img src="{{ asset('assets/landing-page/img/slides/slide-parallax-porto-symbol.png') }}" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-150','-150','-150','-240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('assets/landing-page/img/slides/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['22','22','22','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;"
                            style="color: #FFFFFF;">{!! $vs->ths_text_1 !!}</div>

                        <div class="tp-caption d-none d-md-block"
                            data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['80','80','80','135']"
                            data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="{{ asset('assets/landing-page/img/slides/slide-blue-line.png') }}" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['150','150','150','240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('assets/landing-page/img/slides/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']"
                            style="color: #FFFFFF;">{!! $vs->ths_text_2 !!}</div>

                        <div class="tp-caption font-weight-light"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['40','40','40','80']"
                            data-fontsize="['18','18','18','50']"
                            data-lineheight="['20','20','20','55']"
                            style="color: #FFFFFF;">{!! $vs->ths_text_3 !!}</div>

                    </li>
                @else
                    <li class="slide-overlay slide-overlay-primary" data-transition="fade">
                        <img src="{{ asset('assets/img/home/'.$vs->ths_image) }}"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-170','-170','-170','-350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('assets/landing-page/img/slides/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">{!! $vs->ths_text_1 !!}</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['170','170','170','350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="{{ asset('assets/landing-page/img/slides/slide-title-border.png') }}" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">{!! $vs->ths_text_2 !!}</div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            style="color: #FFFFFF;">{!! $vs->ths_text_3 !!}</div>

                    </li>
                @endif

            @endforeach
            
        </ul>
    </div>
</div>

<div id="examples" class="container py-2">

    @foreach ($list_content as $val)

        @if($loop->index % 2 == 0)

            <div class="row align-items-center">
                <div class="col-sm-9 col-md-7 mx-auto order-2 order-md-1">

                    @php
                        $valimage = $val->trh_image;
                        $img = explode(",", $valimage);
                    @endphp

                    @if($val->trh_type_image == 1)

                        <div class="cascading-images-wrapper">
                            <div class="cascading-images position-relative">
                                <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                    <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[0]) }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                                </div>
                                <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                        <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[1]) }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                                    </div>
                                </div>
                                <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                        <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[2]) }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="floatingEffectCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
                            
                        </div>

                    @else

                        <div class="cascading-images-wrapper bg-color-grey border-radius-2 p-5 w-100 text-center">
                            <div class="cascading-images transform-none position-relative clearfix">

                                <div class="position-absolute z-index-3" style="top: 20%;">
                                    <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                        <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[0]) }}" style="max-width: 200px;" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                                    </div>
                                </div>

                                <div class="position-relative z-index-2">
                                    <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[1]) }}" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
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

                    @endif

                    

                </div>

                <div class="col-md-4 py-lg-5 my-lg-5 mb-4 order-1 order-md-2">

                    <div class="pe-3 ps-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-left-light border-sm-none">
                        <h4 class="mb-2">{{ $val->trh_title }}</h4>
                        <p class="mb-2">
                            {{ $val->trh_content }}
                        </p>
                    </div>

                </div>
            </div>

        @else

            <div class="row align-items-center py-5">
                <div class="col-md-4 py-lg-5 my-lg-5 mb-4">

                    <div class="pe-3 ps-md-5 pb-3 pb-sm-0 py-lg-5 my-lg-4 border-left-light border-sm-none">
                        <h4 class="mb-2">{{ $val->trh_title }}</h4>
                        <p class="mb-2">
                            {{ $val->trh_content }}
                        </p>
                    </div>

                </div>

                <div class="col-sm-8 ps-5">

                    @php
                        $valimage = $val->trh_image;
                        $img = explode(",", $valimage);
                    @endphp

                    @if($val->trh_type_image == 1)

                        <div class="cascading-images-wrapper">
                            <div class="cascading-images position-relative">
                                <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                    <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[0]) }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
                                </div>
                                <div class="position-absolute w-100" style="top: 41%; left: -30%;">
                                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                        <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[1]) }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                                    </div>
                                </div>
                                <div class="position-absolute w-100" style="top: 75%; left: 30%;">
                                    <div data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                        <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[2]) }}" class="appear-animation" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="600" data-appear-animation-duration="600ms" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="floatingEffectCascadingImagesPopup" class="dialog dialog-lg zoom-anim-dialog mfp-hide mfp-close-out px-3">
                            
                        </div>

                    @else

                        <div class="cascading-images-wrapper bg-color-grey border-radius-2 p-5 w-100 text-center">
                            <div class="cascading-images transform-none position-relative clearfix">

                                <div class="position-absolute z-index-3" style="top: 20%;">
                                    <div data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.1, 'transition': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                                        <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[0]) }}" style="max-width: 200px;" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-delay="300" data-appear-animation-duration="600ms" />
                                    </div>
                                </div>

                                <div class="position-relative z-index-2">
                                    <img src="{{ asset('assets/img/home/'.$val->trh_code.'/'.$img[1]) }}" class="appear-animation border-radius-2 box-shadow-3" width="500" alt="" data-appear-animation="expandIn" data-appear-animation-duration="600ms" />
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

                    @endif

                </div>

            </div>

        @endif

        <div class="row">
            <div class="col">
                <hr class="solid my-5">
            </div>
        </div>
        
    @endforeach

</div>

<div id="examples" class="container py-2">

    <div class="row">
        <div class="col">
            <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 6, 'margin': 10, 'loop': false, 'nav': true, 'dots': false, 'stagePadding': 40}">
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f10.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f11.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f12.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f13.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f14.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f15.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f10.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f11.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f12.png') }}">
                </div>
                <div>
                    <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/gmb_f13.png') }}">
                </div>
            </div>
        </div>
    </div>

</div>


@endsection