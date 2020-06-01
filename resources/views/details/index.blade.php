
@extends('layouts.master')

@section('content')
<br>
<div class="w3-center " >
<h1><img src="{{ url('/') }}/storage/images/icons/info.jpg" width="80" height="80" alt="puukao"> ข้อมูลการจองที่พักทั้งหมด</h1>
<br>
</div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link @if(Route::currentRouteName() === 'details.index' ) active @endif"  href="{{ route('details.index')}}">รอการส่งหลักฐานการจอง</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link @if(Route::currentRouteName() === 'details.paid' ) active @endif"  href="{{ route('details.paid')}}">ประวัติการจองที่พัก</a>
        </li>
        <li class="nav-item ">
            <a class="nav-link @if(Route::currentRouteName() === 'details.all' ) active @endif"  href="{{ route('details.all')}}">ทั้งหมด</a>

        </li>
    </ul>




    @foreach ($details as $detail)
   
    <div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
        <img src="{{ $detail->user->image}}" alt="Avatar" class="w3-left w3-circle w3-margin-right"  width="60" height="60">
        <a href="{{ route('details.edit', ['detail' => $detail->id]) }}" class="w3-right w3-button w3-indigo">Edit</a>
        <h4>{{ $detail->user->username }}</h4>
        <span class="w3-opacity">จองเมื่อ: {{ $detail->created_at }}</span>
        <br>
        <br>
        <img src="{{ $detail->room->room_category->image }}" alt="Avatar" class="w3-right w3-border w3-padding "  style="width:500px">
        <p><b>ID การจอง: {{ $detail->id }}</b></p>
        <p><b>ผู้ใช้ที่จอง: {{ $detail->user->username }}</b></p>
        <p><b>ชื่อ-นามสกุล: {{ $detail->user->firstname }} {{ $detail->user->lastname }}</b></p>
        <p><b>วันที่เข้าพัก: {{ $detail->checkin_date->toFormattedDateString() }}</b></p>
        <p><b>วันที่ออก: {{ $detail->checkout_date->toFormattedDateString() }}</b></p>
        <p><b>จำนวนคืน: {{ $detail->nightStay }} คืน</b></p>
        <p><b>ชื่อบ้านที่จอง: {{ $detail->room->room_category->name }}</b></p>
        <p><b>เลขที่บ้าน: {{ $detail->room->name }}</b></p>
        <p><b>โซน: {{ $detail->room->zone}}</b></p>

        <h6 class="w3-text-deep-orange"><B>ราคาห้องพัก: {{ $detail->price_room }} บาท/คืน</B></h6>
        <h6 class="w3-text-deep-orange"><B>ราคาสุทธิ: {{ $detail->totalPrice }} บาท</B></h6>
        <h6 class="w3-text-deep-orange"><B>เงินมัดจำที่พัก:  {{ $detail->earnest_price }} บาท</B></h6>

        <h5><b><img src="{{ url('/') }}/storage/images/icons/p2.png" width="40" height="40" >สถานะการชำระเงิน</b></h5>
        <h4><b><li><span class="badge @if($detail->status === 'ยังไม่ได้ชำระเงิน') badge-danger @else badge-success  @endif ">  {{ $detail->status }} </span></b></h4>
        
        <p class=" @if($detail->detail === 'ยังไม่ได้อัพโหลดหลักฐานการชำระเงิน') w3-red @elseif($detail->detail === 'หลักฐานการชำระเงินไม่ถูกต้อง กรุณาอัพโหลดหลักฐานใหม่') w3-yellow @else w3-green  @endif"><b>รายละเอียด: {{ $detail->detail}}</b></p>
        
        
     
        <br>

        <br>


        </div>


   
    @endforeach

   

    <a href="{{ route('reports.index')}}" class="w3-right w3-button w3-amber">ออกรายงานการจองทั้งหมด</a>



@endsection
