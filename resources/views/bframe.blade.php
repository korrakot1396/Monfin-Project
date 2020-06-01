@extends('layouts.master')

@section('content')
<br>
<h2 class="w3-center">ห้องพักแบบบ้าน (B-Frame House)</h2>
<br>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame1.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame2.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame3.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame4.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame5.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame6.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame7.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame8.jpg" style="width:100%">
  <img class="mySlides" src="{{ url('/') }}/storage/images/rooms/b-frame9.jpg" style="width:100%">
 
  

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>


  <br>
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home">รายละเอียด</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1">

ข้อมูลเพิ่มเติม</a>
    </li>

  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
  <br>
  <div id="home" class="container tab-pane active"><br>
      <div class="container-fluid">
     <div class="row">
     <div class="col">
     <h3 class="widget-title">เครื่องใช้ส่วนตัวที่มีให้</h3>
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <ul>
     <li>ผ้าเช็ดตัว</li>
     <li>ผ้าเช็ดผม</li>
     <li>สบู่</li>
     </ul>
     </div>
     </div>
     </div>
     </div>
     <div class="col">
     <h3 class="widget-title">เครื่องใช้ไฟฟ้า</h3>
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <ul>
     <li>ทีวี</li>
     <li>โทรศัพท์</li>
     <li>กาน้ำร้อน</li>
     <li>แอร์</li>
     <li>เครื่องทำน้ำอุ่น</li>
     <li>เครื่องปิ้งขนมปัง</li>
     </ul>
     </div>
     </div>
     </div>
     </div>
     <div class="col">
     <h3 class="widget-title">เฟอร์นิเจอร์</h3>
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <ul>
     <li>เตียงนอน 6 ฟุต (2 เตียง)</li>
     <li>เตียงนอน 2 ฟุต (2 เตียง)</li>
     <li>หมอนและผ้าห่ม</li>
     <li>ชุดโต๊ะและเก้าอี้</li>
     <li>โต๊ะเล็กสำหรับกินข้าว</li>
     <li>โต๊ะเล็กภายในห้อง</li>
     </ul>
     </div>
     </div>
     </div>
     </div>
    <div class="col ">
     <h3 class="widget-title">อื่นๆ</h3>
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <ul>
     <li>ชุดอาหารเช้า ณ ห้องอาหาร</li>
     <li>Wifi ฟรีให้บริการ</li>
     <li>ห้องอาบน้ำภายในบ้าน</li>
     </ul>
     </div>
     </div>
     </div>
    </div>
  </div>
</div>
    </div>



    <div id="menu1" class="container tab-pane fade"><br>
    <div class="col">
     <h3 class="widget-title">ข้อมูลเพิ่มเติม</h3>
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <div class="siteorigin-widget-tinymce textwidget">
     <ul>
     <li>ที่นอนเสริม (ขนาด 4 ฟุต)</li>
     <li>หมอน ผ้าห่ม และ เครื่องใช้ส่วนตัว 1 ชุด</li>
     <p>สามารถ เพิ่มได้ 1 ชุดเท่านั้น</p>
     </ul>
     </div>
     </div>
     </div>
     </div>
    </div>
   

@endsection