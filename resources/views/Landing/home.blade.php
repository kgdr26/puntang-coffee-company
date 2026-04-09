@extends('main-landing')
@section('title', 'Home')
@section('content')

<!-- Hero Section Start -->
<div class="hero parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-md-10">
                <!-- Hero Content Start -->
                <div class="hero-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</h3>
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Lorem Ipsum Lorem Ipsum Lorem Ipsum</h1>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">
                            Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.
                        </p>
                    </div>
                    <!-- Section Title End -->
                    
                    <!-- Hero Button Start -->
                    <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                        <a href="" class="btn-default">Lorem Ipsum</a>
                        <a href="" class="btn-default btn-highlighted">Lorem Ipsum</a>
                    </div>
                    <!-- Hero Button End -->
                </div>
                <!-- Hero Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Hero Section End -->

<!-- About us Section Start -->
<div class="about-us">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <!-- About us Content Start -->
                <div class="about-us-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Lorem Ipsum</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</h2>
                    </div>
                    <!-- Section Title End -->
                        
                    <!-- About Body List Start -->
                    <div class="about-body-list">
                        <!-- About Body Item Start -->
                        <div class="about-body-item wow fadeInUp" data-wow-delay="0.2s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/landing-page/images/icon-about-body-item-1.svg') }}" alt="">
                            </div>
                            <div class="about-body-list-content">
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.</p>
                            </div>
                        </div>
                        <!-- About Body Item End -->
                        
                        <!-- About Body Item Start -->
                        <div class="about-body-item wow fadeInUp" data-wow-delay="0.4s">
                            <div class="icon-box">
                                <img src="{{ asset('assets/landing-page/images/icon-about-body-item-2.svg') }}" alt="">
                            </div>
                            <div class="about-body-list-content">
                                <h3>Lorem Ipsum</h3>
                                <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.</p>
                            </div>
                        </div>
                        <!-- About Body Item End -->
                    </div>
                    <!-- About Body List End -->
                    
                    <!-- About Us Footer Start -->
                    <div class="about-us-footer wow fadeInUp" data-wow-delay="0.6s">
                        <!-- About Button Start -->
                        <div class="about-btn">
                            <a href="" class="btn-default">Lorem Ipsum</a>
                        </div>
                        <!-- About Button End -->
                        
                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=rR-ieWyOwBI" class="popup-video" data-cursor-text="Play">
                                <i class="fa-solid fa-play"></i>
                            </a>
                            <p>Lorem Ipsum</p>
                        </div>
                        <!-- Video Play Button End -->
                    </div>
                    <!-- About Us Footer End -->
                </div>
                <!-- About us Content End -->
            </div>

            <div class="col-lg-6">
                <!-- About Us Image Start -->
                <div class="about-us-image">
                    <!-- About Us Image Start -->
                    <div class="about-us-img">
                        <figure class="image-anime">
                            <img src="{{ asset('assets/landing-page/images/img/gmb2.png') }}" alt="">
                        </figure>
                    </div>
                    <!-- About Us Image End -->
                    
                    <!-- Opening Time Box Start -->
                    <div class="opening-time-box">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <i class="fa-regular fa-clock"></i>
                        </div>
                        <!-- Icon Box End -->
                        
                        <!-- Opening Time Content Start -->
                        <div class="opening-time-content">
                            <h3>Lorem Ipsum</h3>
                            <ul>
                                <li>Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>
                                <li>Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>
                                <li>Lorem Ipsum Lorem Ipsum Lorem Ipsum</li>
                            </ul>
                        </div>
                        <!-- Opening Time Content End -->
                    </div>
                    <!-- About Menu Box End -->
                </div>
                <!-- Opening Time Box End -->
            </div>
        </div>
    </div>
</div>
<!-- About us Section End -->

<!-- Why Choose Us Section Start -->
<div class="why-choose-us light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <!-- Why Choose Content Start -->
                <div class="why-choose-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Lorem Ipsum</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Lorem Ipsum Lorem Ipsum Lorem Ipsum</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Why Choose Button Start -->
                    <div class="why-choose-btn wow fadeInUp" data-wow-delay="0.2s">
                        <a href="" class="btn-default">Lorem Ipsum</a>
                    </div>
                    <!-- Why Choose Button End -->
                </div>
                <!-- Why Choose Content End -->
            </div>

            <div class="col-lg-6">
                <!-- Why Choose List Start -->
                <div class="why-choose-list wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-why-choose-1.svg') }}" alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->

                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-why-choose-2.svg') }}" alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->

                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-why-choose-3.svg') }}" alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->

                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-why-choose-4.svg') }}" alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum.</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->


                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-why-choose-5.svg') }}" alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum..</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->


                    <!-- Why Choose Item Start -->
                    <div class="why-choose-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-why-choose-6.svg') }}" alt="">
                        </div>
                        <div class="why-choose-item-content">
                            <h3>Lorem Ipsum</h3>
                            <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum..</p>
                        </div>
                    </div>
                    <!-- Why Choose Item End -->
                </div>
                <!-- Why Choose List End -->
            </div>
        </div>
    </div>
</div>
<!-- Why Choose Us Section End -->

<!-- Intro Video Section Start -->
<div class="intro-video parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-8">
                <!-- Intro Video Content Start -->
                <div class="intro-video-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Lorem Ipsum</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
                <!-- Intro Video Content End -->
            </div>

            <div class="col-lg-6 col-md-4">
                <!-- Intro Video Box Start -->
                <div class="intro-video-box about-intro-video wow fadeInUp" data-wow-delay="0.2s">
                    <!-- Video Play Button Start -->
                    <div class="video-play-button">
                        <a href="https://www.youtube.com/watch?v=rR-ieWyOwBI" class="popup-video" data-cursor-text="Play">
                            <i class="fa-solid fa-play"></i>
                        </a>
                        <p>watch video</p>
                    </div>
                    <!-- Video Play Button End -->
                </div>
                <!-- Intro Video Box End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Intro Video Counters Start -->
                <div class="intro-video-counters">
                    <!-- Video Counter Item Start -->
                    <div class="video-counter-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-intro-video-counter-1.svg') }}" alt="">
                        </div>
                        <div class="video-counter-content">
                            <h2><span class="counter">300</span>+</h2>
                        <p>Lorem Ipsum</p>
                        </div>
                    </div>
                    <!-- Video Counter Item End -->

                    <!-- Video Counter Item Start -->
                    <div class="video-counter-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-intro-video-counter-2.svg') }}" alt="">
                        </div>
                        <div class="video-counter-content">
                            <h2><span class="counter">50</span></h2>
                        <p>Lorem Ipsum</p>
                        </div>
                    </div>
                    <!-- Video Counter Item End -->

                    <!-- Video Counter Item Start -->
                    <div class="video-counter-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-intro-video-counter-3.svg') }}" alt="">
                        </div>
                        <div class="video-counter-content">
                            <h2><span class="counter">120</span>+</h2>
                            <p>Lorem Ipsum</p>
                        </div>
                    </div>
                    <!-- Video Counter Item End -->

                    <!-- Video Counter Item Start -->
                    <div class="video-counter-item">
                        <div class="icon-box">
                            <img src="{{ asset('assets/landing-page/images/icon-intro-video-counter-4.svg') }}" alt="">
                        </div>
                        <div class="video-counter-content">
                            <h2><span class="counter">500</span>+</h2>
                            <p>Lorem Ipsum</p>
                        </div>
                    </div>
                    <!-- Video Counter Item End -->
                </div>
                <!-- Intro Video Counters End -->
            </div>
        </div>
    </div>
</div>
<!-- Intro Video Section End -->

<!-- CTA Box Section Start -->
<div class="cta-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- CTA Box Content Start -->
                <div class="cta-box-content">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Lorem Ipsum</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Lorem Ipsum</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum .</p>
                    </div>
                    <!-- Section Title End -->
                    
                    <!-- CTA Box Buttons Start -->
                    <div class="cta-box-buttons wow fadeInUp" data-wow-delay="0.4s">
                        <a href="#" class="btn-default"><i class="fa-brands fa-app-store-ios"></i> Lorem Ipsum</a>
                        <a href="#" class="btn-default"><i class="fa-brands fa-google-play"></i> Lorem Ipsum</a>
                    </div>
                    <!-- CTA Box Buttons End -->
                </div>
                <!-- CTA Box Content End -->
            </div>
        </div>
    </div>
</div>
<!-- CTA Box Section End -->

@endsection