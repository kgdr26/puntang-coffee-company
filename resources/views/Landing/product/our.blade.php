@extends('main-landing')
@section('title', 'Our Product')
@section('content')

<section class="page-header page-header-modern bg-color-grey page-header-md  mb-0">
    <div class="container-fluid">
        <div class="row align-items-center">

            <div class="col">
                <a href="#" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
                    <div class="d-flex align-items-center line-height-1">
                        <i class="fas fa-arrow-left text-dark text-4 me-3"></i>
                        <div class="d-none d-sm-block line-height-1">
                            <span class="text-dark opacity-4 text-1">PREVIOUS PRODUCT</span>
                            <h4 class="font-weight-bold text-3 mb-0">Puntang Coffee</h4>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <div class="overflow-hidden pb-2">
                            <h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Our Product</h2>
                        </div>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Product</a></li>
                            <li class="active">Our Product</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col">
                <a href="#" class="portfolio-next text-decoration-none d-block float-end appear-animation" data-appear-animation="fadeInLeftShorter">
                    <div class="d-flex align-items-center text-end line-height-1">
                        <div class="d-none d-sm-block line-height-1">
                            <span class="text-dark opacity-4 text-1">NEXT PRODUCT</span>
                            <h4 class="font-weight-bold text-3 mb-0">Puntang Coffee</h4>
                        </div>
                        <i class="fas fa-arrow-right text-dark text-4 ms-3"></i>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>

<div id="revolutionSliderCarouselContainer" class="rev_slider_wrapper fullwidthbanner-container mb-4" data-alias="" style="background: #f3f3f2; height: 600px;">
    <div id="revolutionSliderCarousel" class="rev_slider fullwidthabanner" data-version="5.4.8">
        <ul>
            @foreach ($listproduct as $key => $item)
                
                <li data-index="rs-{{ $key+1 }}" data-transition="fade" data-slotamount="7" data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0" data-saveperformance="off" data-title="" data-description="">
                    <img src="{{ asset('assets/img/'.$item) }}" alt="" data-bgposition="center center" data-bgfit="contain" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                </li>

            @endforeach
        </ul>
    </div>
</div>

<div class="container py-4">

    <div class="row pb-5 pt-2">
        <div class="col-md-7 mb-4 mb-md-0">

            <div class="overflow-hidden mb-2">
                <h2 class="text-color-dark font-weight-normal text-5 mb-0 appear-animation" data-appear-animation="maskUp">Product <strong class="font-weight-extra-bold">Puntang Coffee</strong></h2>
            </div>

            <p class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
                Tipe kopi Arabika & Robusta, dengan beragam jenis varietas yang memiliki notes rasa yang begitu kaya, autentik, dan aftertaste yang seimbang.
            </p>

            <hr class="solid my-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">

        </div>
        <div class="col-md-5 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="900">
            <h2 class="text-color-dark font-weight-normal text-5 mb-2">Product <strong class="font-weight-extra-bold">Puntang Coffee</strong></h2>
            <ul class="list list-icons list-primary list-borders text-2">
                <li><i class="fas fa-caret-right left-10"></i> <strong class="text-color-primary">Shopee URL:</strong> <a href="https://shopee.co.id/puntangwangicoffee" target="_blank" class="text-dark">https://shopee.co.id/puntangwangicoffee</a></li>
            </ul>
        </div>
    </div>

</div>



@endsection