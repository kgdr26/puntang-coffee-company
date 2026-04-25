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
                <h5 class="font-weight-semi-bold pt-4">Categories</h5>
                <ul class="nav nav-list flex-column mb-5">
                    <li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Photos (4)</a>
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">People</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
                </ul>
                <h5 class="font-weight-semi-bold pt-4">About Us</h5>
				<p>“We Care, We Share” LMDH Bukit Amanah Gunung Puntang bersama NIPPON STEEL. *(directing to the explanation of CSR)</p>
            </aside>
        </div>
        <div class="col-lg-9">
            <div class="blog-posts">

                <article class="post post-medium">
                    <div class="row mb-3">
                        <div class="col-lg-5">
                            <div class="post-image">
                                <a href="blog-post.html">
                                    <img src="{{ asset('assets/landing-page/img/blog/medium/blog-11.jpg') }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="post-content">
                                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                    <a href="">Atlanta, 2016</a>
                                </h2>
                                <p class="mb-0">
                                    Juara Dunia ajang Specialty Coffee Association of America Expo, Amerika Serikat.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="post-meta">
                                <span><i class="far fa-calendar-alt"></i> January 10, 2024 </span>
                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="post post-medium">
                    <div class="row mb-3">
                        <div class="col-lg-5">
                            <div class="post-image">
                                <a href="blog-post.html">
                                    <img src="{{ asset('assets/landing-page/img/blog/medium/blog-11.jpg') }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="post-content">
                                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                    <a href="">Pameran di pasar global pada agenda MUSIAD</a>
                                </h2>
                                <p class="mb-0">
                                    Pameran di pasar global pada agenda MUSIAD (Mütakil Sanayici ve Adamlar Dernei) Expo ke-16. Dibuka oleh Presiden Turki Recep Tayyip Erdogan, Kopi Puntang Wangi dapat dikenal oleh para pengusaha Turki.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="post-meta">
                                <span><i class="far fa-calendar-alt"></i> January 10, 2024 </span>
                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </article>

                <article class="post post-medium">
                    <div class="row mb-3">
                        <div class="col-lg-5">
                            <div class="post-image">
                                <a href="blog-post.html">
                                    <img src="{{ asset('assets/landing-page/img/blog/medium/blog-11.jpg') }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="post-content">
                                <h2 class="font-weight-semibold pt-4 pt-lg-0 text-5 line-height-4 mb-2">
                                    <a href="">Kopi Puntang Wangi di panggung Internasional</a>
                                </h2>
                                <p class="mb-0">
                                    Kopi Puntang Wangi di panggung Internasional melalui ajang bergengsi di benua Alger, Aljazair. Perhelatan diselenggarakan pada tanggal 4 – 5 Desember 2024 oleh Kedutaan Besar Republik Indonesia (KBRI) dengan tema “Indonesia Spice Up the World 2024”.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="post-meta">
                                <span><i class="far fa-calendar-alt"></i> January 10, 2024 </span>
                                <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                            </div>
                        </div>
                    </div>
                </article>

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