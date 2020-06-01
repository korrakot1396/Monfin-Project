@extends('layouts.master')

@section('content')


<div class = "w3-center">
<br>
<h1><img src="{{ url('/') }}/storage/images/icons/user1.png" width="80" height="80" alt="puukao"> ข้อมูลส่วนตัว</h1>
</div>

<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
        <img src="{{  $user->image }}" alt="Avatar" class="w3-left w3-circle w3-margin-right"  width="60" height="60">
        <div class="form-group w3-right">
        @can('update',$user)
        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="bw3-right w3-button w3-indigo">Edit</a>
        <a href="{{ route('changePassword') }}" class="bw3-right w3-button w3-pink">Change Password</a>
        @endcan
        </div>
        <h4>{{ $user->username }}</h4>
        <br>
        <br>
        <p>firstname: {{ $user->firstname }} </p>
        <p>lastname: {{ $user->lastname }}</p>
        <p>email: {{ $user->email}}</p>
        <p>phonenumber: {{ $user->telephone }}</p>
 
        
    </div>
@endsection