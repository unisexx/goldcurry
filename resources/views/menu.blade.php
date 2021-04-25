@extends('layouts.app')

@section('content')
<!-- ======= Slide ======= -->
<div class="container mt-2">
    <div class="row m-0">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators mb-2">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('goldcurry/images/slide002.jpg') }}" class="d-block w-100" alt="...">
                </div><!-- Slide 1 -->
                <div class="carousel-item">
                    <img src="{{ asset('goldcurry/images/slide003.jpg') }}" class="d-block w-100" alt="...">
                </div><!-- Slide 2 -->
                <div class="carousel-item">
                    <img src="{{ asset('goldcurry/images/slide004.jpg') }}" class="d-block w-100" alt="...">
                </div><!-- Slide 3 -->
            </div>
            <button class="carousel-control-prev bg-transparent border-0" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next bg-transparent border-0" type="button"
                data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- ======= Menu Slide ======= -->
<div class="bg-dish">
    <img src="{{ asset('goldcurry/images/dish02.png') }}" alt="" class="dish02">
    <div class="container">
        <div class="row m-0 d-flex justify-content-center">
            <div class="title-menu mx-auto">
                MENU
            </div>
        </div>
        <!-- ======= Slide ======= -->
        <div class="row m-0 pt-5">
            <div class="col-md-7 mx-auto">
                <div id="carouselGold" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-indicators mb-2 indicators2">
                        <button type="button" data-bs-target="#carouselGold" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselGold" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselGold" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a class="venobox" href="{{ asset('goldcurry/images/slider_gold_001.jpg') }}" data-gall="gallery01"><img
                                    src="{{ asset('goldcurry/images/slider_gold_001.jpg') }}" class="d-block w-100" alt="..."></a>
                        </div><!-- Slide 1 -->
                        <div class="carousel-item">
                            <a class="venobox" href="{{ asset('goldcurry/images/slider_gold_001.jpg') }}" data-gall="gallery01"><img
                                    src="{{ asset('goldcurry/images/slider_gold_001.jpg') }}" class="d-block w-100" alt="..."></a>
                        </div><!-- Slide 2 -->
                        <div class="carousel-item">
                            <a class="venobox" href="{{ asset('goldcurry/images/slider_gold_001.jpg') }}" data-gall="gallery01"
                                data-gall="gallery01"><img src="{{ asset('goldcurry/images/slider_gold_001.jpg') }}" class="d-block w-100"
                                    alt="..."></a>
                        </div><!-- Slide 3 -->
                    </div>
                    <div class="dish01_b"><img src="{{ asset('goldcurry/images/dish01.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('goldcurry/images/dish03.png') }}" alt="" class="dish03_b">
</div>

<!-- ======= Brochure Menu ======= -->
<div class="container pt-4 pb-5">
    <div class="row m-0">
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-2_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-2.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-3_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-3.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-4_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-4.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-5_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-5.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-6_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-6.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-7_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-7.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-8_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-8.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-9_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-9.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-10_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-10.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-11_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-11.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-12_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-12.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-13_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-13.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-14_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-14.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-15_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-15.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-16_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-16.jpg') }}" alt="" class="img-fluid"></a></div>
        <div class="col-xs-12 col-sm-12 col-lg-4 text-center mb-4"><a class="venobox" href="{{ asset('goldcurry/images/menu/menu-17_big.jpg') }}"
                data-gall="gallery01"><img src="{{ asset('goldcurry/images/menu/menu-17.jpg') }}" alt="" class="img-fluid"></a></div>
    </div>
</div>
@endsection
