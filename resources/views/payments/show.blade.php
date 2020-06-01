@extends('layouts.master')

@section('content')


<div class = "w3-center">
<br>
<h1><img src="{{ url('/') }}/storage/images/icons/payment.png" width="80" height="80" alt="puukao"> ข้อมูลการชำระเงินของ <b>{{ Auth::user()->username }}<b></h1>




@foreach ($payments as $payment)
</div>
<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
<img src="{{ $payment->user->image}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" width="60" height="60">
<a href="{{ route('payments.edit', ['payment' => $payment->id]) }}" class="w3-right w3-button w3-teal">อัพโหลดหลักฐานการชำระเงิน</a>
    <h4>{{ $payment->detail->user->username }}</h4>
    <span class="w3-opacity">จองเมื่อ: {{ $payment->detail->created_at }}</span>
        <br>
        <br>
        <img src="{{ $payment->detail->room->room_category->image }}" alt="Avatar" class="w3-right w3-border w3-padding "  style="width:500px">
        <p><b>ผู้ใช้ที่จอง: {{ $payment->detail->user->username }}</b></p>
        <p><b>ชื่อ-นามสกุล: {{ $payment->detail->user->firstname }} {{ $payment->detail->user->lastname }}</b></p>
        <p><b>วันที่เข้าพัก: {{ $payment->detail->checkin_date->toFormattedDateString() }}</b></p>
        <p><b>วันที่ออก: {{ $payment->detail->checkout_date->toFormattedDateString() }}</b></p>
        <p><b>จำนวนคืน: {{ $payment->detail->nightStay }} คืน</b></p>
        <p><b>ชื่อบ้านที่จอง: {{ $payment->detail->room->room_category->name }}</b></p>
        <p><b>เลขที่บ้าน: {{ $payment->detail->room->name }}</b></p>
        <p><b>โซน: {{ $payment->detail->room->zone}}</b></p>
        <p class="w3-text-deep-orange"><b>ราคาห้องพัก: {{ $payment->detail->price_room}} บาท/คืน</b></p>


        <p class="w3-text-amber"><b>ราคาสุทธิ: {{ $payment->net_price }} บาท</b></p>
        <h5><b><img src="{{ url('/') }}/storage/images/icons/p2.png" width="40" height="40" >สถานะการชำระเงิน</b></h5>
        <h4><b><li><span class="badge @if($payment->detail->status === 'ยังไม่ได้ชำระเงิน') badge-danger @else badge-success  @endif ">  {{ $payment->detail->status }} </span></b></h4>
        <h5><b><img src="{{ url('/') }}/storage/images/icons/p1.png" width="40" height="40" alt="puukao">หลักฐานการชำระเงิน</b></h5>
        <li> <a href="{{ $payment->image }}"  data-easyzoom-source="{{ $payment->image }}"> <img src="{{ $payment->image }}"  alt="Avatar" class=" w3-border w3-padding "  width="300" height="500"></a> </li>
        <br>
        <p class=" @if($payment->detail->detail === 'ยังไม่ได้อัพโหลดหลักฐานการชำระเงิน') w3-red @elseif($payment->detail->detail === 'หลักฐานการชำระเงินไม่ถูกต้อง กรุณาอัพโหลดหลักฐานใหม่') w3-yellow @else w3-green  @endif"><b>รายละเอียด: {{ $payment->detail->detail}}</b></p>
        <br>
        <br>
        </div>




@endforeach
@endsection

@section('script')
<script type='text/javascript' src='http://code.jquery.com/jquery-1.10.1.min.js'></script>
<link rel='stylesheet' id='zoom-css'  href='css/zoom.css' type='text/css' media='all' />
<script type='text/javascript' src='js/jquery.nicescroll.min.js'></script>
<script type='text/javascript' src='js/jquery.slider.js'></script>
<script type='text/javascript' src='js/jquery.mousewheel.js'></script>
<script type='text/javascript' src='js/touch.js'></script>
<script type='text/javascript' src='js/zoom.js'></script>
<script type="text/javascript">
jQuery(document).ready(function(){
jQuery('a#zoom1').swinxyzoom({mode:'dock', controls: false, size: '100%', dock: { position: 'right' } }); // dock window slippy lens
jQuery('.views-gallery a').click(function(e) {
e.preventDefault();
var $this = jQuery(this),
largeImage  = $this.attr('href');
smallImage  = $this.data('easyzoom-source');
if (!$this.parent().hasClass('thumbnail-active')) {
jQuery('a#zoom1').swinxyzoom('load', smallImage,  largeImage);
jQuery('.lightbox-btn').attr('href', largeImage);
jQuery('.views-gallery .slide.thumbnail-active').removeClass('thumbnail-active');
$this.parent().toggleClass('thumbnail-active');
}
});
});
</script>


@endsection
