@extends('layouts.master')

@section('content')


<h1>Hello PriceTracks</h1>

@foreach ($pricetracks as $pricetrack)

{{$pricetrack->room_category->name }}
@endforeach
@endsection