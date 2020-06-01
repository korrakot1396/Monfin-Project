@extends('layouts.master')

@section('content')
        <br>
        <br>
        <br>
        
        <img src="{{ $roomcategorie->image }}"  style="width:20%" class="w3-hover-opacity">
        <br>
        <br>
        <h4>ที่พัก: {{ $roomcategorie->name }}</h4>
        <h4>ราคา: {{ $roomcategorie->price }}</h4>
        <br>
        <a href=" {{ route('rooms.create') }} " class="w3-center w3-button w3-indigo">จอง</a>
       
@endsection