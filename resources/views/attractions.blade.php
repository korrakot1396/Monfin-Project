@extends('layouts.master')

@section('content')
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" href="css/custom-style.css">
<!--===============================================================================================-->
</head>

<br>
<div class="w3-row-padding" id="about">
    <h1><img src="{{ url('/') }}/storage/images/icons/travel1.png" width="80" height="80" alt="puukao">สถานที่ท่องเที่ยวใกล้เคียง</h1>
</div>
  <div class="w3-container" >
    <h5>คุณพร้อมที่จะออกเดินทางกับเราไหม จุดหมายปลายทางนั้นไม่ใช่สถานที่ใดที่หนึ่ง หากแต่เป็นการมองเห็นสิ่งต่างๆ ด้วยมุมมองใหม่ต่างหาก</h5>
  </div>
  
<div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
<div class="col text-black animated jackInTheBox">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="{{ url('/') }}/storage/images/attractions/1.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding w3-black">พระมหาธาตุเจดีย์นภพลภูมิสิริ</span>
      </div>
    </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
      <div class="col text-black animated jackInTheBox">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/5.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">กิ่วแม่ปาน</span>
          </div>
          </div>
        </div>
        <div class="col text-black animated jackInTheBox">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/6.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">สูงสุดแดนสยาม</span>
          </div>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
      <div class="col text-black animated jackInTheBox">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/7.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">ป่าบงเปียง</span>
          </div>
          </div>
        </div>
        <div class="col text-black animated jackInTheBox">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/8.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">เก๊าไม้ล้านนา</span>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<div class="w3-row-padding w3-padding-16 w3-text-white w3-large">
  <div class="col text-black animated swing">
    <div class="w3-half w3-margin-bottom">
      <div class="w3-display-container">
        <img src="{{ url('/') }}/storage/images/attractions/12.jpg" alt="Cinque Terre" style="width:100%">
        <span class="w3-display-bottomleft w3-padding w3-black">ดอยม่อนจอง</span>
      </div>
      </div>
    </div>
    <div class="w3-half">
      <div class="w3-row-padding" style="margin:0 -16px">
      <div class="col text-black animated swing">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/9.jpg" alt="New York" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">น้ำตกวชิรธาน</span>
          </div>
          </div>
        </div>
        <div class="col text-black animated swing">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/10.jpg" alt="San Francisco" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">ซากุระเมืองไทย หมู่บ้านขุนวาง</span>
          </div>
          </div>
        </div>
      </div>
      <div class="w3-row-padding" style="margin:0 -16px">
      <div class="col text-black animated swing">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/11.jpg" alt="Pisa" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">ไร่สตอเบอรี่ หมู่บ้านขุนวาง</span>
          </div>
          </div>
        </div>
        <div class="col text-black animated swing">
        <div class="w3-half w3-margin-bottom">
          <div class="w3-display-container">
            <img src="{{ url('/') }}/storage/images/attractions/13.jpg" alt="Paris" style="width:100%">
            <span class="w3-display-bottomleft w3-padding w3-black">หน้าผาจูบกัน ออบหลวง</span>
          </div>
            </div>
        </div>
      </div>
    </div>
  </div>

   

@endsection

@section('script')
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
@endsection
