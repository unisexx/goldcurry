@extends('layouts.app')

@section('content')
<!-- ======= Content tiitle ======= -->
<div class="container mt-2">
    <div class="row m-0 d-flex justify-content-center">
        <div class="title-menu mx-auto">
            CONTACT US
        </div>
    </div>
</div>


<!-- ======= shop info ======= -->
<div class="container pt-4 pb-5">
    <div class="row m-0">
        <div class="col-md-4">
            <div class="img-contact">
                <img src="{{ asset('goldcurry/images/food-contact01.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="img-contact">
                <img src="{{ asset('goldcurry/images/food-contact02.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="img-contact">
                <img src="{{ asset('goldcurry/images/food-contact03.jpg') }}" alt="" class="img-fluid">
            </div>
        </div>
        <div class="col-md-8 bg-contact-slice">
            <p>
                ทางร้าน GOLD CURRY BANGKOK
                นั้นได้นำแกงกะหรี่คานาซาว่าซึ่งที่ญี่ปุ่นเองก็เป็นของขึ้นชื่อที่เป็นที่รู้จักกันอย่างกว้างขวาง
                มาเป็นต้นแบบในการทำแกงกะหรี่ในแบบฉบับของทางร้าน
                โดยมิได้ยึดติดอยู่ในกรอบของแกงกะหรี่คานาซาว่าแต่เพียงเท่านั้น
                เพื่อที่จะให้ได้แกงกะหรี่ที่มีรสชาติอร่อยมากยิ่งขึ้น
                ทางร้านได้พยายามในการค้นคว้าและพัฒนาอย่างต่อเนื่องเรื่อยมา
                ท็อปปิ้งของแกงกะหรี่ก็ไม่ใช่แค่ของทอดหรือเครื่องเคียงตามแบบธรรมดาเท่านั้น
                แต่ทางร้านก็พยายามพัฒนารสชาติให้มีความอร่อยเทียบเท่ากับอาหารจานเดียวเลย
                ทางร้านมั่นใจว่าภายในเมนูอันหลากหลายดังเช่น ข้าวแกงกะหรี่มิวฟิว หรือข้าวห่อไข่ราดแกงกะหรี่นั้น
                ต้องมีเมนูที่เป็นที่ถูกใจของท่านอยู่อย่างแน่นอน
                ขนาดของเมนูก็มีให้เลือกตั้งแต่ขนาดสำหรับเด็กไปจนถึงขนาดใหญ่พิเศษ ส่วนสัญลักษณ์ของทางร้านคือ พระพิฆเนศวร
                ซึ่งเป็นดั่งเทพเจ้าแห่งความสุขของอินเดียซึ่งเป็นต้นตำหรับของแกงกะหรี่ และชื่อของร้าน “GOLD CURRY” นั้น
                ตั้งมาจากความรู้สึกที่ว่า
                “สีเหลืองทองอร่ามอันไม่มีวันจืดจางไปตลอดกาล”
                ขอเชิญชาวไทยทุกท่านมาเพลิดเพลินกับรสชาติอันแสนภาคภูมิใจของพวกเรา
            </p>
            <p>
                ข้อมูลติดต่อเพิ่มเติม<br>
                <a href="http://jfoodsbkk.namjai.cc/e86395.html"
                    class="word-break">http://jfoodsbkk.namjai.cc/e86395.html</a><br>
                Tel : 02 662 5003<br>
                E-mail : <a href="mailto:goldcurrybkk@hotmail.co.jp" class="word-break">goldcurrybkk@hotmail.co.jp</a>
            </p>
            <p>
                ที่อยู่<br>
                20/3soi sukhumvit 39 sukhumvit rd klongton-nua <br>
                wattana bangkok thailand 10110
            </p>
        </div>
        <div class="col-md-12 mt-5">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.7696620538663!2d100.56892851414281!3d13.73239060144445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f01da717437%3A0x3ee45a0f2de1926c!2sGold%20Curry!5e0!3m2!1sth!2sth!4v1616224610366!5m2!1sth!2sth"
                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </div>
</div>
@endsection
