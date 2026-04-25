@extends('main-landing')
@section('title', 'Home')
@section('content')

<!-- Hero Section Start -->
<div class="hero-home parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Puntang Coffee</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Every bean represents the dedication of indonesia farmers and the richress of indonesia's land.
                        </p>
                    </div>
                    <!-- Section Title End -->
                    
                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="" class="btn-default">Discover Our Coffee</a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<div class="about-us">
    <div class="container">
        <div class="slider-container rev_slider_wrapper" style="height: 670px;">
            <div id="revolutionSlider" class="slider rev_slider" data-version="5.4.8" data-plugin-revolution-slider data-plugin-options="{'delay': 9000, 'gridwidth': 1170, 'gridheight': 670, 'disableProgressBar': 'on', 'responsiveLevels': [4096,1200,992,500], 'parallax': { 'type': 'scroll', 'origo': 'enterpoint', 'speed': 1000, 'levels': [2,3,4,5,6,7,8,9,12,50], 'disable_onmobile': 'on' }, 'navigation' : {'arrows': { 'enable': true }, 'bullets': {'enable': true, 'style': 'bullets-style-1', 'h_align': 'center', 'v_align': 'bottom', 'space': 7, 'v_offset': 70, 'h_offset': 0}}}">
                <ul>
                    <li data-transition="fade">
                        <img src="img/slides/slide-bg.jpg"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">

                        <div class="tp-caption tp-resizeme"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"opacity:0;x:100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image" 
                            data-x="right"
                            data-y="top"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide"><img src="img/slides/slide-devices.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme"
                            data-frames='[{"delay":1500,"speed":2000,"frame":"0","from":"opacity:0;x:-100%;y:-100%;","to":"o:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image" 
                            data-x="left"
                            data-y="center"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide"><img src="img/slides/slide-laptop.jpg" alt=""></div>

                        <div class="tp-caption tp-resizeme rs-parallaxlevel-7"
                            data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"opacity:0;x:-50%;y:-50%;","to":"opacity:1;x:0;y:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-type="image" 
                            data-x="-500"
                            data-y="-700"
                            data-width="['auto']"
                            data-height="['auto']"
                            data-basealign="slide"><img src="img/slides/slide-parallax-porto-symbol.png" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-150','-150','-150','-240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['22','22','22','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">DO YOU NEED A NEW</div>

                        <div class="tp-caption d-none d-md-block"
                            data-frames='[{"delay":2400,"speed":500,"frame":"0","from":"opacity:0;x:10%;","to":"opacity:1;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['80','80','80','135']"
                            data-y="center" data-voffset="['-33','-33','-33','-55']"><img src="img/slides/slide-blue-line.png" alt=""></div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['150','150','150','240']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-2"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">WEB DESIGN?</div>

                        <div class="tp-caption font-weight-light"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['40','40','40','80']"
                            data-fontsize="['18','18','18','50']"
                            data-lineheight="['20','20','20','55']"
                            style="color: #b5b5b5;">Check out our options and features</div>

                    </li>
                    <li class="slide-overlay" data-transition="fade">
                        <img src="img/slides/slide-bg-2.jpg"  
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
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">WE WORK HARD AND PORTO HAS</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['170','170','170','350']"
                            data-y="center" data-voffset="['-50','-50','-50','-75']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light negative-ls-1"
                            data-frames='[{"delay":1000,"speed":2000,"frame":"0","from":"sX:1.5;opacity:0;fb:20px;","to":"o:1;fb:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center"
                            data-fontsize="['50','50','50','90']"
                            data-lineheight="['55','55','55','95']">THE BEST DESIGN</div>

                        <div class="tp-caption font-weight-light ws-normal text-center"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2000,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['60','60','60','105']"
                            data-width="['530','530','530','1100']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']"
                            style="color: #b5b5b5;">Trusted by over <strong class="text-color-light">30,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace.</div>

                    </li>
                    <li class="slide-overlay slide-overlay-primary" data-transition="fade">
                        <img src="img/slides/slide-bg-6.jpg"  
                            alt=""
                            data-bgposition="center center" 
                            data-bgfit="cover" 
                            data-bgrepeat="no-repeat" 
                            class="rev-slidebg">

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['-145','-145','-145','-320']"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="1000"
                            data-transform_in="x:[-300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption text-color-light font-weight-normal"
                            data-x="center"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="700"
                            data-fontsize="['16','16','16','40']"
                            data-lineheight="['25','25','25','45']"
                            data-transform_in="y:[-50%];opacity:0;s:500;">WE CREATE DESIGNS, WE ARE</div>

                        <div class="tp-caption"
                            data-x="center" data-hoffset="['145','145','145','320']"
                            data-y="center" data-voffset="['-80','-80','-80','-130']"
                            data-start="1000"
                            data-transform_in="x:[300%];opacity:0;s:500;"
                            data-transform_idle="opacity:0.2;s:500;"><img src="img/slides/slide-title-border.png" alt=""></div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":1300,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['-155','-155','-155','-255']"
                            data-y="center"
                            data-fontsize="['145','145','145','250']"
                            data-lineheight="['150','150','150','260']">P</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":1500,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['-80','-80','-80','-130']"
                            data-y="center"
                            data-fontsize="['145','145','145','250']"
                            data-lineheight="['150','150','150','260']">O</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":1700,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center"
                            data-y="center"
                            data-fontsize="['145','145','145','250']"
                            data-lineheight="['150','150','150','260']">R</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":1900,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['65','65','65','115']"
                            data-y="center"
                            data-fontsize="['145','145','145','250']"
                            data-lineheight="['150','150','150','260']">T</div>

                        <div class="tp-caption font-weight-extra-bold text-color-light"
                            data-frames='[{"delay":2100,"speed":1000,"frame":"0","from":"opacity:0;x:-50%;","to":"opacity:0.7;x:0;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;fb:0;","ease":"Power3.easeInOut"}]'
                            data-x="center" data-hoffset="['139','139','139','240']"
                            data-y="center"
                            data-fontsize="['145','145','145','250']"
                            data-lineheight="['150','150','150','260']">O</div>

                        <div class="tp-caption font-weight-light text-color-light"
                            data-frames='[{"from":"opacity:0;","speed":300,"to":"o:1;","delay":2300,"split":"chars","splitdelay":0.05,"ease":"Power2.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'
                            data-x="center"
                            data-y="center" data-voffset="['85','85','85','140']"
                            data-fontsize="['18','18','18','40']"
                            data-lineheight="['26','26','26','45']">The best choice for your new website</div>

                    </li>
                </ul>
            </div>
        </div>

        <div class="home-intro bg-primary" id="home-intro">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-8">
                        <p>
                            The fastest way to grow your business with the leader in <span class="highlighted-word">Technology</span>
                            <span>Check out our options and features included.</span>
                        </p>
                    </div>
                    <div class="col-lg-4">
                        <div class="get-started text-start text-lg-end">
                            <a href="#" class="btn btn-dark btn-lg text-3 font-weight-semibold px-4 py-3">Get Started Now</a>
                            <div class="learn-more">or <a href="index.html">learn more.</a></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- About us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Highlight of products knowledge</h3>
                        <p class="text-anime-style-3" data-cursor="-opaque">
                            <em>From Highland Soil to Your Cup</em><br>
                            Berasal dari dataran tinggi Gunung Puntang , setiap biji kopi Puntang Wangi ditanam pada ketinggian ideal antara 1250 – 1500 mpdl. Iklim pegunungan yang sejuk, tanah yang kaya mineral, dan sentuhan langsung para petani kopi lokal dalam merawat tanaman kopi tanpa bahan kimia memberikan karakter rasa yang unik, kompleks, dan autentik.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- About us Content End -->
            </div>

            <div class="col-lg-6">
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/landing-page/images/img/gmb_f2.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="post-item wow fadeInUp">
                    <!-- Post Featured Image Start-->
                    <div class="post-featured-image">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/landing-page/images/img/gmb_f3.png') }}" alt="">
                        </figure>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <!-- About us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">International proof</h3>
                        <p class="text-anime-style-3" data-cursor="-opaque">
                            Kopi Puntang dengan jenis Yellow Bourbone berhasil meraih gelar juara dunia dalam ajang Specialty Coffee Association of America Expo di Atlanta, Amerika Serikat, pada April 2016. Kualitas kopi Puntang Wangi menjadi komitmen utama kami dalam menciptakan profil rasa seimbang yang terus menerus kami upayakan untuk dapat dikenal di pasar internasional melalui beberapa pameran yang telah kami laksanakan seperti di negara Algeria, Qatar, dan Turkey.
                        </p>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- About us Content End -->
            </div>
        </div>
    </div>
</div>
<!-- About us Section End -->

@endsection