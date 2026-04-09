@extends('main-landing')
@section('title', 'Farm Coffee')
@section('content')

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">Farm Coffee</h1>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Team Start -->
<div class="page-team">
    <div class="container">
        <div class="row">

            @for($i=1;$i <= 9; $i++)
                <div class="col-lg-4 col-md-6">
                    <!-- Team Item Start -->
                    <div class="team-item wow fadeInUp">
                        <!-- team Image Start -->
                        <div class="team-image">
                            <a href="" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="{{ asset('assets/landing-page/images/img/gmb7.png') }}" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- team Image End -->

                        <!-- Team Body Start -->
                        <div class="team-body">
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="">Lorem Ipsum</a></h3>
                                <p>Lorem Ipsum Lorem Ipsum</p>
                            </div>
                            <!-- Team Content End -->
                        </div>
                        <!-- Team Body End -->
                    </div>
                    <!-- Team Item End -->
                </div>
            @endfor

        </div>
    </div>
</div>
<!-- Page Team End -->

@endsection