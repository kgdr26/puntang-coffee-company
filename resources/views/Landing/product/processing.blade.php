@extends('main-landing')
@section('title', 'Processing Methods')
@section('content')

<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{ asset('assets/img/gmb_f9.png') }}');">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-9 font-weight-bold">Processing Methods</h1>
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

<div class="container pt-5 pb-2">
    <div class="overflow-hidden mb-3">
        <p class="mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">
            Kopi Puntang Wangi adalah produk yang dihasilkan dari dataran tinggi Gunung Puntang yang berada di 1,250 – 1,500 meter di atas permukaan laut (mpdl). Berbagai metode pengolahan buah kopi menciptakan beraneka ragam cita rasa.
        </p>
    </div>
</div>

<div id="examples" class="container py-2">
    <div class="row mt-5">
        <div class="col">
            <div class="row process process-shapes process-shapes-always-animate my-5">
                <div class="process-step col-lg-3 mb-5 mb-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">01</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-5 font-weight-bold">Honey Process</h4>
                        <p class="mb-0"> Buah kopi dilakukan pengupasan kulit dengan sedikit sisa daging buahnya, menghasilkan keseimbangan rasa manis buah-buahan dan keasaman yang lembut, serta aroma yang kompleks.</p>
                    </div>
                </div>
                <div class="process-step col-lg-3 mb-5 mb-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
                    <div class="process-step-circle process-shapes-always-animate-delay">
                        <strong class="process-step-circle-content">02</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-5 font-weight-bold">Natural Process</h4>
                        <p class="mb-0">Buah kopi dikeringkan secara utuh bersama kulitnya sehingga menciptakan rasa buah yang kaya dan manis, seperti cokelat hitam, buah beri, dan sedikit rasa kayu manis.</p>
                    </div>
                </div>
                <div class="process-step col-lg-3 mb-5 mb-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">03</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-5 font-weight-bold">Washed Process</h4>
                        <p class="mb-0">Metode yang membutuhkan proses pencucian biji kopi dan pembersihan kulit dengan air sebelum pengeringan untuk menghasilkan cita rasa yang lebih bersih, asam lebih terang, dan sentuhan floral serta sitrus.</p>
                    </div>
                </div>
                <div class="process-step col-lg-3 mb-5 mb-lg-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                    <div class="process-step-circle">
                        <strong class="process-step-circle-content">04</strong>
                    </div>
                    <div class="process-step-content">
                        <h4 class="mb-1 text-5 font-weight-bold">Wine Process</h4>
                        <p class="mb-0">Biji kopi melalui proses fermentasi seperti pembuatan anggur untuk menghasilkan cita rasa kompleks dan khas dengan nuansa buah-buahan matang, rempah, dan sedikit rasa manis.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection