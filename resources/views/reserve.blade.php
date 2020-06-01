@extends('layouts.master')

@section('content')
<br>
<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container">
    <a href="#" onclick="w3_close()" class="w3-hide-large w3-right w3-jumbo w3-padding w3-hover-grey" title="close menu">
      <i class="fa fa-remove"></i>
    </a>
    <img src="{{ url('/') }}/storage/images/icons/avatar1.jpg" style="width:45%;" alt="Avatar" class="w3-left w3-circle"><br><br>
  </div>
  <div class="w3-container">
  <h4><b>USER</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="inforeserve" onclick="w3_close()" class="w3-bar-item w3-button w3-padding "><i class="fas fa-id-card"></i> ข้อมูลการจอง</a>
    <a href="infopayment" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fas fa-hand-holding-usd"></i> ข้อมูลการชำระเงิน</a> 
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-padding"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</a>
  </div>

</nav>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px">

  <!-- Header -->
  <header id="portfolio">

    <span class="w3-button w3-hide-large w3-xxlarge w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i></span>
    <div class="w3-container">
    <h1><b>จำนวนห้องว่าง</b></h1>
    <div class="w3-section w3-bottombar w3-padding-16">
      <span class="w3-margin-right">เมนู:</span> 
      <button class="w3-button w3-teal">ทั้งหมด</button>
      <button class="w3-button w3-white"></i>ห้องพักแบบเต้นท์ที่ว่าง</button>
      <button class="w3-button w3-white w3-hide-small"></i>ห้องพักแบบ A-Frame ที่ว่าง</button>
      <button class="w3-button w3-white w3-hide-small"></i>ห้องพักแบบ B-Frame ที่ว่าง</button>
    </div>
    </div>
  </header>
  
  <!-- First Photo Grid-->
  <div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="{{ url('/') }}/storage/images/room3.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
        <br>
        <p><b>ห้องพักแบบเต้นท์ (Tent Room)</b></p>
        <h5 class = "w3-text-deep-orange "><b>ราคา: 700 บาท/ต่อคืน</b></h5>
        <p>ผู้ใหญ่ สูงสุด 2 คน | เด็ก สูงสุด 1 คน</p>
        <p>สิ่งอำนวยความสะดวก: </p>

        <p class="w3-large">

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/wifi.png" width="30" height="30" alt="wifi">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีอินเตอร์เน็ตความเร็วสูงให้บริการ</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/tv.png" width="30" height="30" alt="tv">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโทรทัศน์ความคมชัดเอชดีให้บริการ</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/gar.png" width="30" height="30" alt="gar">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีกาน้ำร้อนให้บริการ</p>
        </div>
        </div>
        </div> 
        <br>
        <br>
        <div>
        <label>จำนวนห้อง:</label>
		    <select name="hb-num-of-rooms" class="number_room_select">
                <option value="">เลือกจำนวน</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
            </select>     
            <a class="w3-button w3-block w3-teal w3-margin-bottom" href="#">เลือกห้องนี้</a>                       
        </div>
      </div>
    </div>
    <div class="w3-third w3-container w3-margin-bottom">
      <img src="{{ url('/') }}/storage/images/room1.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white " >
        <br>
        <p><b>ห้องพักแบบบ้าน (A-Frame House)</b></p>
        <h5 class = "w3-text-deep-orange"><b>ราคา: 1500 บาท/ต่อคืน</b></h5>
        <p>ผู้ใหญ่ สูงสุด 2 คน | เด็ก สูงสุด 2 คน</p>
        <p>สิ่งอำนวยความสะดวก: </p>

         <p class="w3-large">

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/wifi.png" width="30" height="30" alt="wifi">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีอินเตอร์เน็ตความเร็วสูงให้บริการ</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/tv.png" width="30" height="30" alt="tv">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโทรทัศน์ความคมชัดเอชดีให้บริการ</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/gar.png" width="30" height="30" alt="gar">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีกาน้ำร้อนให้บริการ</p>
        </div>
        </div>
        </div>
        
        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/air.png" width="30" height="30" alt="Air conditioner" >
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีเครื่องปรับอากาศภายในบ้านพัก</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/bathroom.png" width="30" height="30" alt="bathroom">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีห้องน้ำภายในบ้านพัก</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/waterwarm.png" width="30" height="30" alt="waterwarm">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีเครื่องทำน้ำอุ่นปรับระดับ</p>
        </div>
        </div>
        </div> 
        <br>
        <br>
        <div>
        <label>จำนวนห้อง:</label>
		    <select name="hb-num-of-rooms" class="number_room_select">
                <option value="">เลือกจำนวน</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
            </select>     
            <a class="w3-button w3-block w3-teal w3-margin-bottom" href="#">เลือกห้องนี้</a>                       
        </div>
      </div>
    </div>
    <div class="w3-third w3-container">
      <img src="{{ url('/') }}/storage/images/room2.jpg" alt="Norway" style="width:100%" class="w3-hover-opacity">
      <div class="w3-container w3-white">
      <br>
        <p><b>ห้องพักแบบบ้าน (ฺB-Frame House)</b></p>
        <h5 class = "w3-text-deep-orange"><b>ราคา: 2500 บาท/ต่อคืน</b></h5>
        <p>ผู้ใหญ่ สูงสุด 4 คน | เด็ก สูงสุด 4 คน</p>
        <p>สิ่งอำนวยความสะดวก: </p>

        <p class="w3-large">

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/wifi.png" width="30" height="30" alt="wifi">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีอินเตอร์เน็ตความเร็วสูงให้บริการ</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/tv.png" width="30" height="30" alt="tv">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีโทรทัศน์ความคมชัดเอชดีให้บริการ</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/gar.png" width="30" height="30" alt="gar">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีกาน้ำร้อนให้บริการ</p>
        </div>
        </div>
        </div>
        
        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/air.png" width="30" height="30" alt="Air conditioner" >
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีเครื่องปรับอากาศภายในบ้านพัก</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/bathroom.png" width="30" height="30" alt="bathroom">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>มีห้องน้ำภายในบ้านพัก</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/waterwarm.png" width="30" height="30" alt="waterwarm">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>เครื่องทำน้ำอุ่น</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/foodtable.png" width="30" height="30" alt="Air conditioner">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>โต๊ะอาหาร</p>
        </div>
        </div>
        </div> 

        <div class="w3-dropdown-hover"> <img src="{{ url('/') }}/storage/images/icons/wave.jpg" width="30" height="30" alt="Air conditioner">
        <div class="w3-dropdown-content w3-card-4 w3-white" style="width:250px">
        <div class="w3-container">
        <p>ไมโครเวฟ</p>
        </div>
        </div>
        </div> 
        <br>
        <br>
        <label>จำนวนห้อง:</label>
		    <select name="hb-num-of-rooms" class="number_room_select">
                <option value="">เลือกจำนวน</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
            </select>     
            <a class="w3-button w3-block w3-teal w3-margin-bottom" href="#">เลือกห้องนี้</a>                       
        </div>
      </div>
    </div>
  </div>
@endsection