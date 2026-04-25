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

<div class="container py-4">

    <div class="row">
        <div class="col-md-7 order-2">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Page Of CSR</h2>
            </div>
            <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                Perjalanan LMDH Bukit Amanah bersama dengan NIPPON STEEL dimulai pada tahun 2023. Melalui inisiatif program <em>“We Care, We Share”</em> yang menjadi bagian dari rangkaian CSR dengan pesan:
            </p>
            <p class="pb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="800">
                <em>The Journey of Sustainability: Tribute to the Earth and Humanity.</em>
            </p>
            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                <div class="col-lg-6">
                    <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                    <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                </div>
                <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                    <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                    <ul class="social-icons float-lg-end">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-x-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter">
            <img src="{{ asset('assets/img/gmb_f17.png') }}" class="img-fluid" alt="">
        </div>
    </div>

    <div class="row">
        <div class="col">
            <hr class="solid my-5">
        </div>
    </div>

    <div class="row">
        <div class="col-md-5 order-md-2 mb-4 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
            <img src="{{ asset('assets/img/gmb_f8.png') }}" class="img-fluid" alt="">
        </div>
        <div class="col-md-7 order-2">
            <div class="overflow-hidden">
                <h2 class="text-color-dark font-weight-bold text-8 mb-0 pt-0 mt-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="300">Page Of CSR</h2>
            </div>
            <p class="lead appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="700">
                Terdiri dari 3 perusahaan NIPPON STEEL INDONESIA, PT NIPPON STEEL CHEMICAL AND MATERIAL INDONESIA, NIPPON STEEL ENGINEERING, bersama-sama berupaya meningkatkan kualitas hidup Masyarakat dan menjaga keberlangsungan lingkungan.
            </p>
            <hr class="solid my-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="900">
            <div class="row align-items-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000">
                <div class="col-lg-6">
                    <a href="#" class="btn btn-modern btn-dark mt-3">Get In Touch</a>
                    <a href="#" class="btn btn-modern btn-primary mt-3">Hire Me</a>
                </div>
                <div class="col-sm-6 text-lg-end my-4 my-lg-0">
                    <strong class="text-uppercase text-1 me-3 text-dark">follow me</strong>
                    <ul class="social-icons float-lg-end">
                        <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-x-twitter"></i></a></li>
                        <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection