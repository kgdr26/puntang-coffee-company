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