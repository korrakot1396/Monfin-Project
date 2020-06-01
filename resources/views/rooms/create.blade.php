

@extends('layouts.master')

@section('content')
<div class = "w3-center">
<br>
<h1>Create Rooms</h1>

</div>


<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
<form action="{{ action('RoomsController@store') }}" method="POST">
    @csrf

    <div class="form-group">
    <h3><b>{{ Auth::user()->username }}<b> คุณต้องการจองใช่ไหม</h3> 
    <label for="title">Room Categories(ID)</label>
                <input
                    type="text"
                    class="form-control "
                    name="room_categorie_id"
                    value="{{ old('1' , 2)}}">
            </div>
        <br>
        <br>
        

    
    <button type="submit" class="w3-button w3-pink">Confirm </button>
</form>
<br>
</div>




@endsection