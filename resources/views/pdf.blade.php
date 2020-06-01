<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
@font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: normal;
    src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
}
@font-face {
    font-family: 'THSarabunNew';
    font-style: normal;
    font-weight: bold;
    src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
}
@font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: normal;
    src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
}

@font-face {
    font-family: 'THSarabunNew';
    font-style: italic;
    font-weight: bold;
    src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
}
body{
    font-family: 'THSarabunNew';
}
table{
    border-collapse: collapse;
}
td,th{
    border:1px solid;
    padding: 4px;
}
table, th, td {
  border: 1px solid black;
}



</style>
</head>
<body>

<br>
<div class="w3-center">
<h2 > รายงานการจองที่พักประจำเดือนพฤษจิกายนของ Monfin</h2>
<p>สรุปรายงานการของที่พัก Monfin ประจำเดือน พฤษจิกายน พุทธศักราช 2562</p>
</div>

<br>

<table >
<tr>
    <td>ลำดับ</td>
    <td>วันที่เข้าพัก</td>
    <td>วันที่ออก</td>
    <td>ชื่อผู้จอง</td>
    <td>ชื่อห้องพัก</td>
    <td>โซนที่พัก</td>
    <td>ราคาห้องต่อคืน</td>
    <td>จำนวนคืน</td>
    <td>ราคาสุทธิ</td>
    <td>เงินมัดจำ</td>
    <td>สถานะการชำระเงิน</td>
</tr>
{{ $total = 0 }}
{{ $earnprice = 0 }}
@foreach($details as $c)
  <tr>
    <td>{{$c->id}}</td>
    <td>{{$c->checkin_date->toFormattedDateString()}}</td>
    <td>{{$c->checkout_date->toFormattedDateString()}}</td>
    <td>{{$c->user->username}}</td>
    <td>{{$c->room->room_category->name}}</td>
    <td>{{$c->room->name}}</td>
    <td>{{$c->price_room}} บาท</td>
    <td>{{$c->nightStay}}</td>
    <td>{{$c->totalPrice}} บาท</td>
    <td>{{$c->earnest_price}} บาท</td>
    <td>{{$c->status}}</td>
  </tr>
  @php
     $total += $c->totalPrice  ;
     $earnprice += $c->earnest_price  ;
  @endphp
 
@endforeach

</table>

<table >
<tr>
<td>ราคาสุทธิทั้งหมด</td>
<td>{{$total}} บาท</td>
<td>ราคามัดจำทั้งหมด</td>
<td>{{$earnprice}} บาท</td>
</tr>
</table>




</body>
</html>
