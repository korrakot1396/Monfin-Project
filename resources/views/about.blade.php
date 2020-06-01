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

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700">

<link rel="stylesheet" href="css/style.css">
<!-- skin -->
<link rel="stylesheet" href="skin/default.css">

<!--===============================================================================================-->

<script type="text/javascript" src="//cdn.jsdelivr.net/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap/3/css/bootstrap.css" />
 
<!-- Include Date Range Picker -->
<script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

</head>

  <div class="jumbotron big-banner mb-0 jumbotron-fluid" style="height: 600px; padding-top: 80px;">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">

          <div class="col-md-5 text-black animated bounceInDown">
            <h1 class = "w3-text-white"><img src="{{ url('/') }}/storage/images/icons/puukao.png" width="200" height="200" alt="puukao">MonFin</h1><br>
            <div clas = "w3-opacity ">
            <p class="lead animated zoomInRight w3-text-white ">ที่พักที่ดีที่สุดบนดอยอินทนนท์</p>
            </div>
          </div>


        </div>
        <div class="col-md-5 text-black animated fadeInRightBig">
      
            <h1><img src="{{ url('/') }}/storage/images/icons/sleep.png" width="100" height="100" alt="puukao">&nbsp;&nbsp;&nbsp;&nbsp;<img src="{{ url('/') }}/storage/images/icons/nature.png" width="100" height="100" alt="puukao"></h1><br>
            <p class="lead animated zoomInRight w3-text-white ">นอนหลับสบาย&nbsp;&nbsp;&nbsp;ท่ามกลางธรรมชาติ</p><br><br>
           

          </div>



      </div>

    </div>

  </div>


    <!-- <img class="w3-image"  src="{{ url('/') }}/storage/images/3.jpg" alt="Doi-in" style="min-width:1000px" width="1500" height="800"> -->
    <div class="w3-container w3-teal">
      <h2><i class="fas fa-mountain"></i>Search Rooms</h2>
    </div>

    <div class="w3-container w3-white w3-padding-16">
      <form action="{{ route('rooms.index')}}" method="get">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">

            <label><i class="fa fa-calendar-o"></i> วันที่เข้าพัก</label>

<input class="w3-input w3-border" type="date" name="dateInput1" id="dateInput1" value="วันที่เข้าพัก" max="2030-01-31" autofocus />
        </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> วันที่ออก</label>

<input  class="w3-input w3-border" type="date" name="dateInput2" id="dateInput2" value="วันที่ออก" max="2030-01-31" autofocus/>
            </div>
        </div>
        

        @csrf @method('PUT') @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <button type="submit" class="w3-button  w3-teal "><i class="fa fa-search w3-margin-right"></i>ค้นหาที่พัก</button>
        
      </form>


      
    </div>
  </div>
  

  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="{{ url('/') }}/storage/images/room3.jpg" alt="tene room" style="width:100%"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <h3>Tent Room</h3>
        <h6 class="w3-text-deep-orange"><B>ราคา 700 บาท/ต่อคืน</B></h6>
        <p>เตียงเดี่ยว 2 เตียง</p>
        <p>ผู้ใหญ่ สูงสุด 2 คน | เด็ก สูงสุด 1 คน</p>
        <p class="w3-large">
        <div class="w3-dropdown-hover"><i class="fa fa-phone"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโทรศัพท์ให้บริการฟรีภายในห้องพัก</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fa fa-wifi"></i></i>
        <div class="w3-dropdown-content w3-card-4 w3-white " style="width:250px">
        <div class="w3-container">
        <p>มีอินเตอร์เน็ตความเร็วสูงให้บริการ</p>
        </div>
        </div>
        </div>
        <br>
        <br>
        <a class="w3-button w3-block w3-teal w3-margin-bottom" href="tent-room">ดูตัวอย่างห้องพัก</a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="{{ url('/') }}/storage/images/room1.jpg" alt="a-frame" style="width:100%"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <h3>A-Frame House</h3>
        <h6 class="w3-text-deep-orange"><B>ราคา 1500 บาท/ต่อคืน</B></h6>
        <p>1 ห้องนอน 1 ห้องน้ำ</p>
        <p>ผู้ใหญ่ สูงสุด 2 คน | เด็ก สูงสุด 2 คน</p>
        <p class="w3-large">
        <div class="w3-dropdown-hover"> <i class="fa fa-bath"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีห้องน้ำภายในบ้านในใช้บริการ</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fa fa-phone"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโทรศัพท์ให้บริการฟรีภายในห้องพัก</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fa fa-wifi"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white " style="width:250px">
        <div class="w3-container">
        <p>มีอินเตอร์เน็ตความเร็วสูงให้บริการ</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fa fa-tv"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white " style="width:250px">
        <div class="w3-container">
        <p>มีโทรทัศน์ระดับเอชดีให้บริการ</p>
        </div>
        </div>
        </div>
        <br>
        <br>
        <a class="w3-button w3-block w3-teal w3-margin-bottom" href="a-frame">ดูตัวอย่างห้องพัก</a>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="{{ url('/') }}/storage/images/room2.jpg" alt="b-fram" style="width:100%"  class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <h3>
        B-Frame House</h3>
        <h6 class="w3-text-deep-orange" ><B>ราคา 2500 บาท/ต่อคืน</B></h6>
        <p>2 ห้องนอน 1 ห้องน้ำ</p>
        <p>ผู้ใหญ่ สูงสุด 4 คน | เด็ก สูงสุด 4 คน</p>

        <p class="w3-large">

        <div class="w3-dropdown-hover"> <i class="fa fa-bath"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีห้องน้ำภายในบ้านในใช้บริการ</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fa fa-phone"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโทรศัพท์ให้บริการฟรีภายในห้องพัก</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fa fa-wifi"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีอินเตอร์เน็ตความเร็วสูงให้บริการ</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fa fa-tv"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโทรทัศน์ระดับเอชดีให้บริการ</p>
        </div>
        </div>
        </div>

        <div class="w3-dropdown-hover"><i class="fas fa-utensils"></i>
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโต๊ะรับประทานอาหารขนาดเล็ก</p>
        </div>
        </div>
        </div>
        <br>
        <br>
        <a class="w3-button w3-block w3-teal w3-margin-bottom" href="b-frame">ดูตัวอย่างห้องพัก</a>

      </div>
    </div>
  </div>


  <!-- Work Row -->
<div class="w3-container w3-light-grey">
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>RESTAURANT IN THE MONFIN<img src="{{ url('/') }}/storage/images/icons/food.png" width="40" height="40" alt="food"><img src="{{ url('/') }}/storage/images/icons/food.png" width="40" height="40" alt="food"><img src="{{ url('/') }}/storage/images/icons/food.png" width="40" height="40" alt="food"></h2>
<p>ร้านอาหาร RESTAURANT IN THE MONFIN ตั้งอยู่ในที่พักของเรา วัตถุดิบอาหารจากโครงการหลวง สะอาด ปลอดภัยจากสารเคมี คัดสรรวัตถุดิบ อย่างดี สำหรับแขกผู้มาพักหรือจะแวะมาทางอาหารอย่างเดียวเราก็ไม่ว่ากัน มีเมนูให้เลือกหลากหลาย เช่น ต้มยำปลาสเตอร์เจียน ปลาเทราต์ลุยสวน เห็ดหอมทอดซีอิ๊ว กับ ราคาที่ย่อมเยา หรือ ท่านไหนอยากสั่งหมูกระทะมารับประทาน เราก็มีบริการด้วยเช่นกัน</p>
</div>

<div class="w3-quarter" >
<div class="w3-card w3-white">
  <img src="{{ url('/') }}/storage/images/foods/food1.jpg" alt="Snow" style="width:100%">
  <div class="w3-container">
  <br>
  <h4>หมูกระทะอร่อย</h4>
  <br>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="{{ url('/') }}/storage/images/foods/food4.jpg" alt="Lights" style="width:100%">
  <div class="w3-container">
  <br>
  <h4>ลาบหมูน้ำตก</h4>
  <br>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
  <img src="{{ url('/') }}/storage/images/foods/food5.jpg" alt="Mountains" style="width:100%">
  <div class="w3-container">
  <br>
  <h4>ต้มแซ่บ</h4>
  <br>
  </div>
  </div>
</div>

</div>
</div>


<!-- services -->
<section id="section-services" class="section pad-bot30 bg-white">
    <div class="container">

      <div class="row mar-bot40">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="{{ route('about')}}" class="hi-icon hi-icon-earth">screen</a>
            </div>
          </div>
          <h3 class="text-bold">เปิดโลกกว้าง</h3>
          <p>คุณจะได้รับประสบการณ์ที่ดีในการมาพักที่ม่อนฟิน</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="{{ route('about')}}" class="hi-icon hi-icon-location">location</a>
            </div>
          </div>
          <h3 class="text-bold">ใกล้แลนมาร์ค</h3>
          <p>คุณจะได้สัมผัสกับแหล่งท่องเที่ยวที่แสนตระการตา</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="{{ route('about')}}" class="hi-icon hi-icon-images">images</a>
            </div>
          </div>
          <h3 class="text-bold">ภาพถ่าย</h3>
          <p>บอกเล่าความรู้สึกของคุณผ่านภาพถ่าย</p>

          <div class="clear"></div>
        </div>

      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="{{ route('about')}}" class="hi-icon hi-icon-star">star</a>
            </div>
          </div>
          <h3 class="text-bold">รีวิวกับผองเพื่อน</h3>
          <p>เล่าให้ทุกคนฟังว่าคุณรู้สึกอย่างไร</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="{{ route('about')}}" class="hi-icon hi-icon-user">user</a>
            </div>
          </div>
          <h3 class="text-bold">สมัครสมาชิกกับเรา</h3>
          <p>แล้วเราจะออกเดินทางไปพร้อมกัน</p>

          <div class="clear"></div>
        </div>

        <div class="col-lg-4">
          <div class="hi-icon-wrap hi-icon-effect-5 hi-icon-effect-5a mar-top20">
            <div class="float-left mar-right20">
              <a href="{{ route('about')}}" class="hi-icon hi-icon-clock">clock</a>
            </div>
          </div>
          <h3 class="text-bold">เวลาแห่งความสุข</h3>
          <p>คุณจะดื่มด่ำกับทุกช่วงเวลาที่นี้</p>

          <div class="clear"></div>
        </div>

      </div>
    </div>
  </section>



    <!-- Work Row -->
    <div class="w3-container w3-light-grey">
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">
<div class="row  w3-light-grey" >
  				<div class="col-md-6">
  					<h3>เงื่อนไขการเข้าที่พัก</h3>
  					<h5>1. ลูกค้าสามารถเช็คอินได้ตอนเวลา 14.00 น. และเช็คเอ้าได้ตอน 12.00 น.</>
            <h5>2. กรณีที่ลูกค้าจองแล้วขอยกเลิกห้องพักเพื่อขอคืนเงินต้องแจ้งภายใน 3 วันหลังจากจองห้องพัก มิเช่นนั้นทาง Monfin จะไม่คืนเงินทุกกรณี</h5>
            <h5>3. หากลูกค้าจองแล้วไม่เข้าพักภายในวันที่จองหรือเข้าเช็คอินเกิน 18.00 น. ห้องพักจะหลุดจองและทาง Monfin จะไม่คืนเงินทุกกรณี</h5>
            <h5>4. กรณีเข้าเช็คอินหลัง 18.00 น. ต้องโทรมายืนยันภายในวันที่เข้าพัก</h5>
            <h5>5. การเลื่อนวันเข้าพักต้องแจ้งก่อนวันเข้าพัก 7 วัน มิเช่นนั้นจะไม่สามารถขอเลื่อนการเข้าพักได้</h5>
            <h5>6. หากยังไม่ทราบวันเลื่อนเข้าพักสามารถขอเก็บโควตาการเลื่อนเข้าพักได้ 15 วัน นับจากวันที่เข้าพักตามใบจอง หากไม่แจ้งเลื่อนในวันที่กำหนดตามโคตาจะถือว่าการจองถูกยกเลิก</h5>
            <h5>7. การเลื่อนวันเข้าพัก หากวันที่คุณลูกค้าเลื่อนไป มีการปรับราคาห้องพักขึ้น จะต้องชำระเพิ่มเติมเต็มจำนวนเงิน ต่อจากยอดเดิม</h5>
  				</div>
  				<div class="col-md-6" data-aos="fade-up">
  					<img class="img-fluid w3-hover-opacity" src="{{ url('/') }}/storage/images/reviews/10.jpg">
  				</div>
  			</div>
  			<div class="row w3-light-grey"><br></div>
  			<div class="row w3-light-grey">
  				<div class="col-md-6 order-md-1 order-2" data-aos="fade-up">
          <img class="img-fluid w3-hover-opacity" src="{{ url('/') }}/storage/images/reviews/9.jpg">
  				</div>
  				<div class="col-md-6 order-md-12 order-1">
  					<h3>โซนและที่พัก</h3>
  					<p>ที่พักของทาง Monfin นั้นจะแบ่งออกเป็น 2 โซน ได้แก่ โซน A ซึ่งจะอยู่บนเนินเขา และ โซน B ซึ่งจะอยู่ตีนเขา โดยทางที่พักของเราจะมีที่พักอยู่ 3 ประเภท ได้แก่ ที่พักแบบ Tent Room , ที่พักแบบบ้าน A-Frame และที่พักแบบบ้าน B-Frame ซึ่งจะมีทั้งหมด 30 หลังรวม 2 โซน A และ B โซน A และโซน B จะมีบ้านพัก อย่างละ 15 หลัง และประเภทละ 5 หลัง </p>
  					<br>
            <h3>วิธีดูเลขที่บ้าน</h3>
  					<p>หากคุณลูกค้าได้ทำการจองที่พักแล้ว จะได้เลขที่บ้านเช่น AT1 ซึ่งหมายความว่า A ตัวแรกมีความหมายว่า โซนที่พัก นั่นก็คือ โซน A และตัวที่สองก็คือ T นั่นก็คือประเภทของที่พัก นั่นก็คือ Tent ส่วนตัวที่สามจะบอกที่พักหลังที่เท่าไหร่ ในตัวอย่าง AT1 ก็มีความหมายว่า ที่พัก Tent Room โซน A หลังที่ 1 คราวนี้ลุกค้าก็จะได้ไม่หลงและเดินทางมายังสถานที่พักได้อย่างไม่มีความกังวลใดๆแล้ว</p>
  				</div>
          </div>
</div>
</div>





<!-- spacer section:stats -->
<section id="parallax1" class="section" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row appear stats">
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-wifi fa-5x"></i>
            </div>
            <strong id="counter-coffee" class="number">10000</strong><br>
            <span class="text">MB</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-battery-full fa-5x"></i>
            </div>
            <strong id="counter-music" class="number">10000</strong><br>
            <span class="text">Per</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-clock-o fa-5x"></i>
            </div>
            <strong id="counter-clock" class="number">10000</strong><br>
            <span class="text">Hour</span>
          </div>
        </div>
        <div class="col-md-3">
          <div class="align-center color-white txt-shadow">
            <div class="icon">
              <i class="fa fa-heart fa-5x"></i>
            </div>
            <strong id="counter-heart" class="number">10000</strong><br>
            <span class="text">Like</span>
          </div>
        </div>
      </div>
    </div>
  </section>



  <!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<img src="{{ url('/') }}/storage/images/icons/star.png" width="40" height="40" alt="star">
<img src="{{ url('/') }}/storage/images/icons/star.png" width="40" height="40" alt="star">
<img src="{{ url('/') }}/storage/images/icons/star.png" width="40" height="40" alt="star">
 <h2> รีวิวและความประทับใจ</h2>


<div class="w3-row"><br>

<div class="w3-quarter" >
  <img src="{{ url('/') }}/storage/images/reviews/user1.jpg" alt="avatar1" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Korrakot</h3>
  <blockquote><p style="text-align: center;"><em>" เป็นหน้าหนาวที่คุ้มค่ามากๆ ที่ได้มาพักที่นี่ ใกล้แหล่งท่องเที่ยว และอากาศที่หนาวเย็นถ้ามีโอกาสจะมาพักที่นี่อีกแน่นอน "</em></p></blockquote>
</div>

<div class="w3-quarter">
  <img src="{{ url('/') }}/storage/images/reviews/user2.jpg" alt="avatar2" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Nipathm</h3>
  <blockquote><p style="text-align: center;"><em>" เป็นที่พักที่สมบูรณ์แบบจริงๆ ครับ วิวที่สวยงาม บรรยากาศที่เงียบสงบ และ สิ่งอำนวยความสะดวกครบครัน ไม่ต้องไปหาว่าไปดอยอินทนนท์จะพักที่ไหนดี "</em></p></blockquote>
</div>

<div class="w3-quarter">
  <img src="{{ url('/') }}/storage/images/reviews/user3.jpg" alt="avatar3" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Komsorn</h3>
  <blockquote><p style="text-align: center;"><em>" สุดยอดครับ ที่พักสวย พนักงานบริการดี มีขนมปังกาแฟ โอวัลตินส่งถึงห้องเลย หมูกระทะอร่อย "</em></p></blockquote>
</div>

<div class="w3-quarter">
  <img src="{{ url('/') }}/storage/images/reviews/user4.jpg" alt="avatar4" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Pimpapa</h3>
  <blockquote><p style="text-align: center;"><em>" ❤ประทับใจมากค่ะ❤ สวย สะอาด พนักงานดูแลดีมาก "</em></p></blockquote>
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



  <!-- Javascript Library Files -->
  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.localScroll.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/jquery.flexslider-min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

<script>
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("dateInput1")[0].setAttribute('min', today);
</script>

<script>
var today = new Date().toISOString().split('T')[0];
document.getElementsByName("dateInput2")[0].setAttribute('min', today);
</script>

<script>
function myFunction() {
  var x = document.getElementById("dateInput1").max;
  document.getElementById("demo").innerHTML = x;

  var z = document.getElementById("dateInput2").max;
  document.getElementById("demo").innerHTML = z;
}
</script>

<script>
function myFunction() {
  var x = document.getElementById("dateInput1").autofocus;
  document.getElementById("demo").innerHTML = x;

  var z = document.getElementById("dateInput2").autofocus;
  document.getElementById("demo").innerHTML = z;
}
</script>


@endsection
