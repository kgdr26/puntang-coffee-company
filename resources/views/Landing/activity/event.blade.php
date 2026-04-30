@extends('main-landing')
@section('title', 'Event')
@section('content')

<section class="page-header page-header-modern page-header-background page-header-background-md overlay overlay-color-dark overlay-show overlay-op-7" style="background-image: url('{{ asset('assets/img/gmb_f20.png') }}');">
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="text-9 font-weight-bold">Event</h1>
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
        <div class="col-lg-3">
            <aside class="sidebar">
                <form action="page-search-results.html" method="get">
                    <div class="input-group mb-3 pb-1">
                        <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                        <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                    </div>
                </form>
                <h5 class="font-weight-semi-bold pt-4">About Us</h5>
				<p>“We Care, We Share” LMDH Bukit Amanah Gunung Puntang bersama NIPPON STEEL. *(directing to the explanation of CSR)</p>
            </aside>
        </div>
        <div class="col-lg-9">
            <div class="blog-posts">

                @foreach ($list_event as $key => $val)
                    <article class="post post-medium">
                        <div class="row mb-3">
                            <div class="col-lg-5">
                                <div class="post-image">
                                    @php
                                        $images = array_filter(explode(',', $val->tre_image ?? ''));
                                    @endphp

                                    <div class="owl-carousel owl-theme" data-plugin-options="{'items': 1, 'autoplay': true, 'autoplayTimeout': 4000, 'margin': 10, 'animateIn': 'slideInDown', 'animateOut': 'slideOutDown'}">

                                        @forelse($images as $img)
                                            <div>
                                                <img alt="" class="img-fluid rounded" src="{{ asset('assets/img/event/'.$val->tre_code.'/'.$img) }}">
                                            </div>
                                        @empty
                                            <div>
                                                <img alt="" class="img-fluid rounded" src="{{ asset('assets/landing-page/img/blog/medium/blog-11.jpg') }}">
                                            </div>
                                            <div>
                                                <img alt="" class="img-fluid rounded" src="{{ asset('assets/landing-page/img/blog/medium/blog-11.jpg') }}">
                                            </div>
                                        @endforelse

                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="post-content">
                                    <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                        <a href="{{ route('getevent', ['id' => Hashids::encode($val->tre_id)]) }}">{{ $val->tre_title }}</a>
                                    </h2>
                                    <p class="mb-0">
                                        {{ \Illuminate\Support\Str::limit(strip_tags($val->tre_content), 400, '... ...') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="post-meta">
                                    <span>
                                        <i class="far fa-calendar-alt"></i> 
                                        {{ \Carbon\Carbon::parse($val->tre_created_date)->translatedFormat('l, d F Y') }}
                                    </span>
                                    <span><i class="far fa-user"></i> By <a href="#">{{ $val->created_by_name }}</a> </span>
                                    {{-- <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span> --}}
                                    <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0">
                                        <a href="{{ route('getevent', ['id' => Hashids::encode($val->tre_id)]) }}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach

                <ul class="pagination float-end">
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                </ul>

            </div>
        </div>
    </div>

</div>


@endsection