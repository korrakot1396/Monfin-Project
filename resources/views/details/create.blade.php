

@extends('layouts.master')

@section('content')
<div class = "w3-center">
<br>


</div>


<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
<form action="{{ action('DetailsController@store') }}" method="POST">
    @csrf

    <div class="form-group">
    <h3><b>{{ Auth::user()->username }}<b> คุณต้องการจองใช่ไหม</h3>
    <label for="title">หมายเลขห้องพัก</label>
                <input
                    type="text"
                    class="form-control "
                    name="room_id"
                    value="{{ $room_id }}" readonly>
            </div>
    <label for="title">วันที่เข้าพัก</label>
                <input
                    type="text"
                    class="form-control "
                    name="start_date"
                    value="{{ $start_date }}" readonly>

     <label for="title">วันที่ออก</label>
                <input
                    type="text"
                    class="form-control "
                    name="end_date"
                    value="{{ $end_date }}" readonly>

        <br>
                      <button type="submit" class="w3-button w3-pink">Confirm </button>
    <a  href="javascript:history.back()" type="submit" class="w3-button w3-teal">Back </a>
    <br>

    <br>

            </div>
            <br>


</form>
<br>
<br>
</div>




@endsection
