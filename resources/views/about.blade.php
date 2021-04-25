@extends('layouts.app')

@section('content')
<!-- ======= Content ======= -->
<div class="container mt-2 bg-about-slice pb-5">
    <div class="row m-0 justify-content-md-center">
        <div class="col-md-12 bubble-speech mx-auto m-5">
            <span class="text-orange-01 position-relative">
                <img src="{{ asset('goldcurry/images/spoon2.png') }}" alt="" class="spoon2">
                ข้าวแกงกระหรี่ หน้าทงคัสซุ <br>ได้กลายเป็นเมนู อันดับ 1 ที่ ญี่ปุ่น ไปแล้ว
                <img src="{{ asset('goldcurry/images/spoon2.png') }}" alt="" class="spoon3">
            </span>
            <p class="text-brown-01">แกงกระหรี่ แบบคานาซะว่า ที่มีเอกลักษณะเฉพาะ</p>
        </div>
    </div>
    <div class="row m-0 justify-content-md-center">
        <div class="col-md-7 col-md-auto text-center">
            <p class="text-brown-02">แกงกระหรี่แบบ คานาซะว่า ที่มีชื่อจนดังระเบิด ในช่วงกลางยุคปี 2000 ที่ Gold curry
                เราทุ่มเท <br>
                ศึกษาค้นคว้าเพื่อค้นหาความอร่อยแบบดั้งเดิมที่ให้ความสำคัญกับต้นตำรับ<br>
                ของ แกงกระหรี่แบบ คานาซะว่า อยู่ทุกวันอย่างต่อเนื่อง</p>
        </div>
    </div>
    <div class="row m-0 justify-content-md-center pt-5 pb-5">
        <div class="col-md-6 position-relative">
            <div class="text-brown-03 text-center">แกงกระหรี่ แบบคานาซะว่า</div><br>
            <div class="text-orange-02 float-end">คืออะไร ?</div>
            <img src="{{ asset('goldcurry/images/bubble-speech2.png') }}" alt="" class="img-fluid bubble-speech2">
        </div>
    </div>
    <div class="row m-0 justify-content-start">
        <div class="col-md-6 col-lg-4 offset-md-3 ul-style01">
            <div class="title-ul-style01">ลักษณะเฉพาะหลักๆ คือ</div>
            <ul>
                <li>รูส์สีจะออกดำๆที่มีความข้นเหมือนดินโคลน</li>
                <li>หมูทอดที่ราดด้วยซอส</li>
                <li>กะหล่ำปลีที่ซอยเป็นเส้นละเอียด</li>
                <li>ชามสแตนเลส</li>
                <li>ทานด้วยช้อนปลายแฉก , กับส้อม</li>
            </ul>
        </div>
    </div>
    <div class="row m-0 justify-content-md-center pb-5">
        <div class="col-md-8 position-relative">
            <img src="{{ asset('goldcurry/images/food03.png') }}" alt="" class="img-fluid mx-auto d-block">
            <div class="title-curry">
                <span class="title-curry-text">แกงกระหรี่ที่มี</span><br>
                <span class="title-curry-text">ต้นกำเนิดที่</span><br>
                <span class="title-curry-text">ร้านอาหารยุโรป</span>
            </div>
            <p class="text-brown-02 text-center pt-3">นอกจากที่กล่าวถึงข้างต้นแล้ว
                ก็ยังมีหลากหลายสไตล์<br>ซึ่งก็ขึ้นอยู่กับแต่ละร้านต้นกำเนิดของสไตล์ที่เห็นอยู่ในปัจจุบัน<br>
                ก็มาจากไอเดียที่ต้องการจะทำให้ พวกนักธุรกิจ พนักงานออฟฟิศที่เป็นผู้หญิง<br> กินเป็นมื้อกลางวันที่เร่งรีบ
                และเป็นแบบอาหารจานเดียว<br> ได้กินกันอย่างรวดเร็วแล้วก็ได้รู้สึกว่า ได้สนุกกับการลองของใหม่ๆที่หลากหลาย
                นั่นเอง</p>
        </div>
    </div>

    <div class="row m-0 justify-content-center pt-3 pb-4">
        <div class="col-sm-12 col-md-12 col-lg-7 mx-auto">
            <span class="text-orange-03">ความพิเศษที่ 1</span><br>
            <div class="text-brown-04 text-center">เอกลักษณะเฉพาะของทงคัสซุ</div>
        </div>
    </div>
    <div class="row m-0 justify-content-center pt-1">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="{{ asset('goldcurry/images/food04.png') }}" alt="" class="img-fluid align-center mb-4 mx-auto d-block">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="title-tonkussu col-md-7">ทงคัสซุ ที่ใช้เกร็ดขนมปังกรอบๆ</div>
            <p class="text-brown-02 pt-4">สำหรับ แกงกระหรี่แบบคานาซะว่า แล้วละก็มันเป็นสิ่งที่ขาดไม่ได้เลยสำหรับ Godl
                curry
                (แกงกระหรี่เกรดพิเศษ) นั้น จะใช้เกร็ดขนมปังคัดพิเศษในการชุบเนื้อหมู การใช้เกร็ดขนมปังเม็ดหยาบ
                จะทำให้ผิวชุบพองขึ้นมาอย่างมากในตอนที่ทอดน้ำมัน ซื่งทำให้น่ากินมาก</p>
            <p class="text-brown-02">ยังมีไอเดียที่จะนำเสมอ ทงคัสซุ สวย ๆ เป็นอาหารจานเดียวด้วยเช่นกัน แล้ว Gold curry
                (แกงกระหรี่เกรดพิเศษ) นั้น ก็ได้มีการทอดแบบชุบเกร็ดขนมปัง แล้วนำมาเสิร์ฟแบบร้อน ๆ</p>
        </div>
    </div>

    <div class="row m-0 justify-content-center pt-3 pb-2">
        <div class="col-sm-12 col-md-12 col-lg-7 mx-auto">
            <span class="text-orange-03">ความพิเศษที่ 2</span><br>
            <div class="text-brown-04 text-center"> เอกลักษณะเฉพาะของรูส์ </div>
        </div>
    </div>
    <div class="row m-0 justify-content-center pt-1">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="title-tonkussu col-md-7">รูส์สำหรับแกงกระหรี่ที่ผลิตขึ้นมา<br>
                อย่างพิเศษที่ผ่านการต้มอย่าง<br>
                เข้มข้นจากโรงงานของตนเอง</div>
            <p class="text-brown-02 pt-4">รูส์ สำหรับแกงกระหรี่ของ Gold curry นั้น
                ผลิตที่โรงงานของตนเองที่ใช้สำหรับผลิตเฉพาะนำแกงกระหรี่ เรารักษาคุณภาพการผลิตที่โรงงานไว้ตลอด
                เพื่อให้สามารถนำส่งความอร่อยที่ไม่เปลี่ยนแปลง ได้อยู่เสมอ
                การนำหัวหอมใหญ่ , มันฝรั่ง , เนื้อสับ ปรุงรวมกันเป็นเวลานาน
                แล้วก็เติมเครื่องเทศที่ผสมขึ้นมาด้วยสูตรเฉพาะของตนเอง </p>
            <p class="text-brown-02">นอกจากนั้นก็จะเกิดรสชาติที่เข้มข้นและหอมที่เป็นเนื้อเดียวกัน
                ด้วยการปล่อยทิ้งไว้ข้ามคืน เป็นความอร่อยที่ Gold curry ใช้เวลาในการทำแกงกระหรี่ที่อร่อย เสมอมา</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-3">
            <img src="{{ asset('goldcurry/images/food05.png') }}" alt="" class="img-fluid align-center mb-4 mx-auto d-block">
        </div>
    </div>

    <div class="row m-0 justify-content-center pt-3 pb-4">
        <div class="col-sm-12 col-md-12 col-lg-7 mx-auto">
            <span class="text-orange-03">ความพิเศษที่ 3</span><br>
            <div class="text-brown-04 text-center">เมนูที่พรั่งพร้อม</div>
        </div>
    </div>
    <div class="row m-0 justify-content-center pt-1">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <img src="{{ asset('goldcurry/images/food06.png') }}" alt="" class="img-fluid align-center mb-4 mx-auto d-block">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="title-tonkussu col-md-7">ก็เพราะว่า อยากให้ลูกค้าทุกคน<br>ได้กินของที่อร่อยๆ</div>
            <p class="text-brown-02 pt-4">ปกติแล้ว ก็จะมีการนำ Gold curry มาทำเป็น เมนูกัน มากว่า 20 ชนิดเลยที่เดียว !
                นอกจากนั้น ยังสามารถ กำหนดขนาด และท็อปปิ้ง แยกย่อยออกไปได้อีก แล้วก็ยังสามารถตอบสนองปัญหาของลูกค้า
                ที่ว่า “ปริมาณ มันเยอะเกินไป กินไม่หมด !” หรือ “เลือก ท็อปปิ้ง ได้แค่อย่างเดียว !” เป็นต้นได้ด้วย</p>
            <p class="text-brown-02">นอกเหนือจาก เมนูปกติแล้ว ก็ยังมีการนำมาทำเมนูที่หลากหลาย ที่เด็ก ๆ และผู้หญิง
                ชอบกัน อย่างเช่น Omu Curry (แกงกระหรี่ หน้าไข่เจียว)หรือ KEEMA Curry (แกงกระหรี่ เนื้อบดชีสไข่แดง)
                เป็นต้นร้านแกงกระหรี่ ที่ไม่น่าเบื่อ ก็จะคิดเมนูใหม่ๆ หรือ
                เมนูที่มีเฉพาะในแต่ฤดูกาลเอามาให้ลูกค้าชี้นิ้วเลือกสั่งกันอยู่เสมอ</p>
        </div>
    </div>

</div>
<!-- /.container -->
@endsection
