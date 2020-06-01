@extends('layouts.master') @section('content')
<br>
<h1>จองที่พัก</h1>
<br>
<h4>แสดงห้องพักที่ว่าง</h4>
<br>

@foreach ($roomcategorie as $roomcategorie)

<div class="w3-row-padding">
    <div class="w3-third w3-container w3-margin-bottom">
        <img
            src="{{ $roomcategorie->image }}"
            alt="Norway"
            style="width:100%"
            class="w3-hover-opacity">
        <div class="w3-container w3-white">
            <br>
            <p>
                <b>{{ $roomcategorie->name}}</b>
            </p>
            <h5 class="w3-text-deep-orange ">
                <b>ราคา:
                    {{ $roomcategorie->price }}
                    บาท/ต่อคืน</b>
            </h5>
            <br>

        
            <a href="{{ route('roomcategories.show', [ $roomcategorie->id]) }}" class="w3-left w3-button w3-indigo">เลือกห้องนี้</a>
        
       
       
        </div>
    </div>

</div>

@endforeach



@endsection