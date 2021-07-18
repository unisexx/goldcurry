@extends('layouts.app')

@section('content')
<!-- ======= Content tiitle ======= -->
<div class="container mt-2">
    <div class="row m-0 d-flex justify-content-center">
        <div class="title-menu mx-auto">
            NEW PRODUCT
        </div>
    </div>
</div>


<!-- ======= Product ======= -->
<div class="bg-dish">
    <div class="container pt-5 pb-5 top-newproduct">
        <img src="images/dish02.png" alt="" class="dish02">
        <div class="row m-0 d-flex justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-10 bg-about-slice p-xs-2">
                <div class="p-2 p-xs-0">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <img src="{{ asset('goldcurry/images/newproduct_001.jpg') }}" alt=""
                                class="newproduct_001 img-fluid">
                        </div>
                        <div class="col-md-6 text-center">
                            <p class="text-new-product4">
                                แกงกะหรี่หมู<br>
                                สำเร็จรูป<br>
                                โกลด์ เคอร์รี่
                            </p>
                        </div>
                    </div>
                    <div class="row text-center d-flex justify-content-center mr-pic-product">
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4"><img
                                src="{{ asset('goldcurry/images/product_001.jpg') }}" alt="" class="img-fluid mb-3">
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4"><img
                                src="{{ asset('goldcurry/images/product_002.jpg') }}" alt="" class="img-fluid mb-3">
                        </div>
                        <div class="col-12 col-sm-4 col-md-4 col-lg-4"><img
                                src="{{ asset('goldcurry/images/product_003.jpg') }}" alt="" class="img-fluid mb-3">
                        </div>
                    </div>
                    <div class="newproduct-line my-5"></div>
                    <div class="text-center">
                        <p class="text-new-product4"><img src="{{ asset('goldcurry/images/icon-shopee.png') }}" alt="">
                            สามารถสั่งซื้อได้ที่
                            <span style="word-break: break-all;">https://shopee.co.th</span></p>
                        <p>
                            สั่งได้แล้ว แกงกะหรี่หมูสำเร็จรูป สั่งผ่านช้อปปี้ได้แล้ววันนี้<br>
                            ขาย แกงกะหรี่หมูสำเร็จรูปโกลด์ เคอร์รี่ (Gold Curry) <span
                                class="text-orange-product">ในราคา ฿100
                                ซื้อได้ในแอป</span> <img src="{{ asset('goldcurry/images/icon-shopee.png') }}" alt=""
                                width="32">
                        </p>
                        <p class="text-orange-product">
                            ทางร้านมีบริการจัดส่งเดลิเวอรี่สั่งขั้นต่่ำ300บาทส่งฟรี​ด้วยนะคะ จัดส่งจากสาขาสุขุมวิท39
                            ค่ะ<br>
                            #ระยะทางจัดส่งไม่เกิน30กิโลเมตร 02-170-7498
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('goldcurry/images/dish03.png') }}" alt="" class="dish03">
</div>
@endsection