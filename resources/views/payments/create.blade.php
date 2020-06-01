@extends('layouts.master')

@section('content')
<h1>Create Payments</h1>

 
<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
<form action="{{ action('PaymentsController@store') }}" method="POST">
@csrf

<h4>คุณ {{Auth::user()->firstname}} ต้องการทำรายการชำระเงินใช่ไหม</h4>
<label for="detail_id">Detail (ID)</label>
                <input
                    type="text"
                    class="form-control "
                    name="detail_id"
                    value="{{ $detail_id }}"  readonly >
                    <br>

    

    
    <button type="submit" class="w3-button w3-pink">Confirm </button>
</form>


<br>
</div>
@endsection