@extends('main-landing')
@section('title', 'Product')
@section('content')

<!-- Page Header Start -->
<div class="page-header product parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12"> 
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Product</h1>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Single Post Start -->
<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <!-- Post Single Content Start -->
                <div class="post-content">
                    <!-- Post Entry Start -->
                    <div class="post-entry">
                        <p class="wow fadeInUp">
                            Kopi Puntang Wangi adalah produk yang dihasilkan dari dataran tinggi Gunung Puntang yang berada di 1,250 – 1,500 meter di atas permukaan laut (mpdl). Berbagai metode pengolahan buah kopi menciptakan beraneka ragam cita rasa.
                        </p>
                    </div>
                </div>

                <!-- Post Featured Image Start -->
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/landing-page/images/img/gmb_f6.png') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/landing-page/images/img/gmb_f7.png') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-12">
                        <div class="post-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/landing-page/images/img/gmb_f8.png') }}" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Post Featured Image Start -->

                <!-- Post Single Content Start -->
                <div class="post-content">
                    <!-- Post Entry Start -->
                    <div class="post-entry">
                        <h3 class="wow fadeInUp" data-wow-delay="0.8s">Honey Process</h3>

                        <p class="wow fadeInUp">
                            > Buah kopi dilakukan pengupasan kulit dengan sedikit sisa daging buahnya, menghasilkan keseimbangan rasa manis buah-buahan dan keasaman yang lembut, serta aroma yang kompleks.
                        </p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.8s">Natural Process</h3>

                        <p class="wow fadeInUp">
                            > Buah kopi dikeringkan secara utuh bersama kulitnya sehingga menciptakan rasa buah yang kaya dan manis, seperti cokelat hitam, buah beri, dan sedikit rasa kayu manis.
                        </p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.8s">Washed Process</h3>

                        <p class="wow fadeInUp">
                            > Metode yang membutuhkan proses pencucian biji kopi dan pembersihan kulit dengan air sebelum pengeringan untuk menghasilkan cita rasa yang lebih bersih, asam lebih terang, dan sentuhan floral serta sitrus.
                        </p>

                        <h3 class="wow fadeInUp" data-wow-delay="0.8s">Wine Process</h3>

                        <p class="wow fadeInUp">
                            > Biji kopi melalui proses fermentasi seperti pembuatan anggur untuk menghasilkan cita rasa kompleks dan khas dengan nuansa buah-buahan matang, rempah, dan sedikit rasa manis.
                        </p>

                    </div>
                    <!-- Post Entry End -->
                </div>
                <!-- Post Single Content End -->
            </div>

            <div class="col-lg-12">
                <!-- Post Single Content Start -->
                <div class="post-content">
                    <!-- Post Entry Start -->
                    <div class="post-entry">

                        <blockquote class="wow fadeInUp" data-wow-delay="0.4s">
                            <p>
                                Tipe kopi Arabika & Robusta, dengan beragam jenis varietas yang memiliki notes rasa yang begitu kaya, autentik, dan aftertaste yang seimbang.
                            </p>
                        </blockquote>

                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <!-- gallery section start -->
                <div class="row gallery-items page-gallery-box">

                    @foreach ($listproduct as $val)
                        
                        <div class="col-lg-4 col-6">
                            <!-- image gallery start -->
                            <div class="photo-gallery wow fadeInUp">
                                <a href="{{ asset('assets/landing-page/images/img/'.$val) }}" data-cursor-text="View">
                                    <figure class="image-anime">
                                        <img src="{{ asset('assets/landing-page/images/img/'.$val) }}" alt="">
                                    </figure>
                                </a>
                            </div>
                            <!-- image gallery end -->
                        </div>

                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Single Post End -->

@endsection