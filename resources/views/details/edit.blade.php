

@extends('layouts.master')

@section('content')
<div class = "w3-center">
<br>
<h1>สถานะการชำระเงิน</h1>

</div>

<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
<form action="{{ action('DetailsController@update',
['detail' => $detail->id]) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
    <img src="{{ $detail->user->image}}" alt="Avatar" class="w3-left w3-circle w3-margin-right"  width="60" height="60">
    <br>
    <br>
    <br>
    <img src="{{ $detail->room->room_category->image }}" alt="Avatar" class="w3-right w3-border w3-padding "  style="width:500px">
        <p><b>ID การจอง: {{ $detail->id }}</b></p>
        <p><b>ผู้ใช้ที่จอง: {{ $detail->user->username }}</b></p>
        <p><b>ชื่อ-นามสกุล: {{ $detail->user->firstname }} {{ $detail->user->lastname }}</b></p>
        <p><b>วันที่เข้าพัก: {{ $detail->checkin_date }}</b></p>
        <p><b>วันที่ออก: {{ $detail->checkout_date }}</b></p>
        <p><b>จำนวนคืน: {{ $detail->nightStay }} คืน</b></p>
        <p><b>เลขที่บ้าน: {{ $detail->room->name }}</b></p>
        <p><b>โซน: {{ $detail->room->zone}}</b></p>
        <p><b>ชื่อบ้านที่จอง: {{ $detail->room->room_category->name }}</b></p>
        <h6 class="w3-text-deep-orange"><B>ราคา: {{ $detail->room->room_category->price }} บาท/คืน</B></h6>
        <h6 class="w3-text-deep-orange"><B>ราคาสุทธิ: {{ $detail->totalPrice }} บาท</B></h6>
        <h6 class="w3-text-deep-orange"><B>เงินมัดจำที่พัก:  {{ $detail->earnest_price }} บาท</B></h6>
        <h5><b><img src="{{ url('/') }}/storage/images/icons/p2.png" width="40" height="40" >สถานะการชำระเงิน</b></h5>
        <h4><b><li><span class="badge @if($detail->status === 'ยังไม่ได้ชำระเงิน') badge-danger @else badge-success  @endif ">  {{ $detail->status }} </span></b></h4>
        <p class=" @if($detail->detail === 'ยังไม่ได้อัพโหลดหลักฐานการชำระเงิน') w3-text-red @elseif($detail->detail === 'หลักฐานการชำระเงินไม่ถูกต้อง กรุณาอัพโหลดหลักฐานใหม่') w3-text-yellow @else w3-text-green  @endif"><b>รายละเอียด: {{ $detail->detail}}</b></p>
        
        
        <label for="title" input-mysize>เงินมัดจำ</label>
                <input
                    type="text"
                    class="form-control "
                    name="earnest_price"
                    style="width:100px;"
                    value="{{ $detail->earnest_price }}
                     ">
        
        
        <select class="w3-select" name="status"  style="width:200px;">
  <option value="" disabled selected>เลือกสถานะการชำระเงิน</option>
  <option value="ยังไม่ได้ชำระเงิน">ยังไม่ได้ชำระเงิน</option>
  <option value="ชำระเงินแล้ว">ชำระเงินแล้ว</option>
</select>

<select class="w3-select" name="detail"  style="width:150px;">
  <option value="" disabled selected>เลือกสถานะหลักฐาน</option>
  <option value="ยังไม่ได้อัพโหลดหลักฐานการชำระเงิน">ยังไม่ได้อัพโหลดหลักฐานการชำระเงิน</option>
  <option value="หลักฐานการชำระเงินไม่ถูกต้อง กรุณาอัพโหลดหลักฐานใหม่">หลักฐานการชำระเงินไม่ถูกต้อง กรุณาอัพโหลดหลักฐานใหม่</option>
  <option value="หลักฐานการชำระเงินถูกต้อง">หลักฐานการชำระเงินถูกต้อง</option>
</select>
    </div>

 <button type="submit" class="w3-button w3-pink">Update </button>
</form>
<br>
</div>




@endsection
