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
<!-- ======= New product ======= -->
<div class="bg-dish">
    <img src="{{ asset('goldcurry/images/dish02.png') }}" alt="" class="dish02">
    <div class="container">
        <div class="row m-0 bg-newproduct-slice">
            <div class="col-sm-12 col-lg-4 position-relative text-center">
                <div class="title-bg mt-3">NEW PRODUCT!</div>
                <img src="{{ asset('goldcurry/images/food02.jpg') }}" alt="" class="img-fluid img-food2-newproduct">
            </div>
            <div class="col-sm-12 col-lg-8 position-relative">
                <div class="text-div">
                    <h3>New Product</h3>
                    <hr>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora fugiat alias odit
                        dignissimos unde! Fugit qui expedita, temporibus at nemo, earum, eum dolorem voluptatibus
                        est odio recusandae ut. Adipisci, dolorem.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat natus illum veniam
                        expedita in placeat quisquam dolore quae voluptas fuga, quis repellendus non facilis
                        exercitationem esse quidem ratione provident perferendis!
                    </p>

                </div>
                <img src="{{ asset('goldcurry/images/spoon.png') }}" alt="" class="spoon">
            </div>
        </div>
    </div>
    <img src="{{ asset('goldcurry/images/dish03.png') }}" alt="" class="dish03">
</div>
<!-- ======= facebook &new menu ======= -->
<div class="container mb-5">
    <div class="row m-0 p-new-menu">
        <div class="col-xs-12 col-md-12 col-lg-4 position-relative">
            <div class="title-bg">FACEBOOK</div>
            <div class="facebook facebook-pc text-center">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGoldCurryBangkok&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="" height="500" style="border:none; overflow:hidden;" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
            <div class="facebook facebook-mobile text-center">
                <iframe
                    src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FGoldCurryBangkok&tabs=timeline&width=240&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                    width="" height="500" style="border:none; overflow:hidden;" scrolling="no" frameborder="0"
                    allowfullscreen="true"
                    allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
            </div>
        </div>
        <div class="col-md-12 col-lg-7 position-relative mx-auto">
            <div class="title-bg">NEW MENU</div>
            <div class="row bg-detail-new-menu">
                <div class="col-sm-12 col-md-4 text-center">
                    <img src="{{ asset('goldcurry/images/food01.jpg') }}" alt="" class="img-fluid img-new-menu">
                </div>
                <div class="col-sm-12 col-md-8">
                    <p class="detail-new-menu">
                        ตอนนี้ประเทศไทยแกงกะหรี่ญี่ปุ่นมีขายเยอะๆ<br>
                        ที่นี่ก็ขายแกงกะหรี่แต่รับรองว่าอร่อยมากครับ<br>
                        เพราะว่าไม่เหมือนกับที่อื่นๆแน่นอน อร่อยครับ <br>มีข้าวแกงกะหรี่จานใหญ่มากๆ
                        <br>1จาน2กิโล699฿<br>
                        ถ้าหากว่าคุณกินหมดภายใน15นาที <br>ฟรี http://jfoodsbkk.namjai.cc/e863395.html
                    </p>
                    <div class="dish01"><img src="{{ asset('goldcurry/images/dish01.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ======= New shop ======= -->
<div class="container bg-frame01">
    <div class="row m-0">
        <img src="{{ asset('goldcurry/images/title-new-shop.png') }}" alt="" class="img-fluid title-new-shop">
    </div>
    <div class="row m-0 mt-4">
        <div class="col-xs-12 col-sm-6 col-md-3 mb-4 text-center newshop-col-1">
            <img src="{{ asset('goldcurry/images/newshop3_.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-xs-12 col-sm-6 col-md-3 mb-4 text-center newshop-col-1">
            <img src="{{ asset('goldcurry/images/newshop3.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 position-relative newshop-col-2">
            <div class="title-bg">NEW SHOP</div>
            <div class="detail-newshop">
                <p class="intro-shop">#สวัสดีค่ะร้านโกลด์เคอรี่ สาขาที่11 </p>
                <p>สาขาใหม่<br> ชิดลมเปิดให้บริการแล้ววันนี้
                    ขอบคุณลูกค้าทุกท่านที่แวะมาร่วมสนุกกับเรา(แข่งได้ทุกสาขา) ข้าวแกงกะหรี่ขนาด10kg
                    สามารถสั่งมาท้าลองแข่งกับเวลาได้จับเวลา1ชั่วโมงหากทานได้ตามเวลาที่กำหนดรับเงินสดไปเลย40,000฿
                    หากทานไม่ได้ตามเวลาที่กำหนดจ่าย2,899฿
                    สำหรับท่านใดที่ชอบท้าทาย หรือจะสั่งมาแชร์ทานกับเพื่อนๆก็ได้เช่นกันค่ะ</p>
                <p class="intro-shop"> Tel : <span class="text-dark">02-118-2429</span> / Open : 11:00-22:00 </p>
                <!-- <p class="intro-shop">#สวัสดีค่ะร้านโกลด์เคอรี่ สาขาที่11 </p>
        <p>สาขาใหม่<br> บางปะกงมอเตอร์เวย์ขาเข้ากรุงเทพเปิดให้บริการทุกวัน <br>
          หากลูกค้าทุกท่านกลับจากเที่ยวพัทยา ชลบุรีแล้ว <br>
          ขากลับเข้ากรุงเทพอย่าลืมแวะทานข้าวแกงกะหรี่ได้นะคะ</p>
        <p class="intro-shop">Tel : 033-020-302 </p>-->
            </div>
        </div>
    </div>
</div>


<!-- ======= Instagram ======= -->
<div class="container mt-5">
    <div class="row">
        <img src="{{ asset('goldcurry/images/insta.png') }}" alt="" style="width:192px;">
    </div>
    <div class="row row-cols-12 m-0 insta mt-4">
        @foreach ($instagrams as $item)
            <div class="col"><img src="{{ url('instagram/'.$item->image) }}" alt="" class="img-fluid"></div>
        @endforeach
    </div>
</div>
@endsection
