

@extends('layouts.master')

@section('content')
<div class = "w3-center">
<br>
<h1>Show Rooms</h1>

<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
       
        <img src="{{ $room->user->image}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">   
        
       
        <h3>ดำเนินการต่อ</h3>
        <button type="submit" class="w3-button w3-pink">Confirm </button>
        <br>
        

   
        <br>
     
        
    </div>
</div>






@endsection