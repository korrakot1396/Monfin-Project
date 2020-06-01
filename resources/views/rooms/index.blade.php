@extends('layouts.master')

@section('content')
    <div class="w3-center">
        <br>
        <h1><img src="{{ url('/') }}/storage/images/icons/tent.png" width="80" height="80" alt="puukao">ห้องพักที่ว่าง
        </h1>


         <p><b>วันที่จะเข้าพัก: {{$start_date}}  วันที่จะออก: {{$end_date}}</b></p>
         <p><b>จำนวนบ้านพักว่างทั้งหมด {{$rooms->count() }} หลัง <b></p>
         
        <div class = "w3-card w3-teal"> 
          <br>
      <form action="{{ route('rooms.index')}}" method="get">
        <div class="w3-row-padding" style="margin:0 -16px;">
          <div class="w3-half w3-margin-bottom">
            <label><i class="fa fa-calendar-o"></i> วันที่จะเข้าพัก</label>

<input class="w3-input w3-border" type="date" name="dateInput1" id="dateInput1" value="{{$start_date}}" max="2030-01-31" autofocus />
        </div>
          <div class="w3-half">
            <label><i class="fa fa-calendar-o"></i> วันที่จะออก</label>

<input  class="w3-input w3-border" type="date" name="dateInput2" id="dateInput2" value="{{$end_date}}"   max="2030-01-31" autofocus />
            </div>
        </div>

        
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <button type="submit" class="w3-button  w3-indigo"><i class="fa fa-search w3-margin-right"></i>ค้นหาที่พัก</button>
      </form>
      <br>
    </div>
  </div>
  

  </div>


       
    </div>
    
    
    <div class="w3-row-padding">
    @foreach ($rooms as $room)
        <div class="w3-container w3-card w3-white w3-round w3-margin w3-col l5"><br>
            <img src="{{ $room->room_category->image }}" alt="Avatar" class="w3-hover-opacity w3-right"
                 style="width:200px">
            <p><b>โซนที่พัก: {{ $room->name }}</b></p>
            <p><b>ชื่อที่พัก: {{ $room->room_category->name }}</b></p>
            <h6 class="w3-text-deep-orange"><B>ราคา: {{ $room->room_category->price }} บาท/คืน</B></h6>

            <form action=" {{ route('details.create') }}" method="POST">
                @csrf
                <input type="hidden" name="start_date" value="{{$start_date}}">
                <input type="hidden" name="end_date" value="{{$end_date}}">
                <input type="hidden" name="room_id" value="{{$room->id}}">
                <input type="submit" class="w3-left w3-button w3-indigo" value="เลือกห้องนี้">
            </form>
            <br>
            <br>

        </div>
    @endforeach
    </div>
@endsection

@section('script')

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