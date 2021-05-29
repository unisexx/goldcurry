@extends('layouts.app')

@section('content')
<!-- ======= Content tiitle ======= -->
<div class="container mt-2">
    <div class="row m-0 d-flex justify-content-center">
        <div class="title-menu mx-auto">
            FRANCHISE
        </div>
    </div>
</div>


<!-- ======= Franchise ======= -->
<div class="container pt-4 pb-5">
    <div class="row m-0 d-flex justify-content-center">
        <div class="col-xs-12 col-sm-12 col-md-10 bg-contact-slice p-xs-2">
            <div class="p-2 p-xs-0">
                <p>
                    บริษัท โกลด์ พาร์ทเนอร์ ( ประเทศไทย ) จากัด ได้มองหาพาร์ทเนอร์ทางธุรกิจ
                    ที่สนใจที่อยากจะเป็นเจ้าของร้านโกลด์ เคอร์รี่ บางกอก
                    โดยได้เปิดการขายแฟรนไชส์ทางธุรกิจให้กับบุคคลที่สนใจในการทาร้านอาหารที่มีงบประมาณที่พอเหมาะ
                    โดยท่านใดสนใจร่วมธุรกิจกับเรา
                </p>
                <div class="row text-center d-flex justify-content-center my-5">
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3"><img src="{{ asset('goldcurry/images/shopinfo09.jpg') }}" alt=""
                            class="img-fluid mb-3"></div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3"><img src="{{ asset('goldcurry/images/shopinfo10.jpg') }}" alt=""
                            class="img-fluid mb-3"></div>
                    <div class="col-12 col-sm-4 col-md-4 col-lg-3"><img src="{{ asset('goldcurry/images/shopinfo08.jpg') }}" alt=""
                            class="img-fluid mb-3"></div>
                </div>
                <p>ข้อมูลติดต่อเพิ่มเติม<br>
                    คุณเกียว<br>
                    Tel : 02-662-5003 / 083-017-7554<br>
                    E-mail : <a href="mailto:goldcurrybkk@hotmail.co.jp"
                        class="word-break">goldcurrybkk@hotmail.co.jp</a>
                </p>
                <p>ที่อยู่<br>
                    20/3 soi sukhumvit 39 sukhumvit rd klongton-nua <br>
                    wattana bangkok thailand 10110
                </p>
            </div>
        </div>

    </div>
</div>

@endsection
