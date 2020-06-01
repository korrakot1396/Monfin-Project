
@extends('layouts.master')

@section('content')


<div class = "w3-center">
<br>
<h1><img src="{{ url('/') }}/storage/images/icons/user.png" width="80" height="80" alt="puukao"> ALL USER</h1>
</div>


@foreach ($users as $user)
    <div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
        <img src="{{ $user->profile_image }}" alt="Avatar" class="w3-left w3-circle w3-margin-right" width="60" height="60">
        <a href="{{ route('users.show', ['user' => $user->id]) }}" class="w3-right w3-button w3-indigo">View</a>
        <h4>{{ $user->username }}</h4>
        <p>{{$user->posts->count() }} reviews {{$user->details->count() }} reserve</p>
        <p>firstname: {{ $user->firstname }} </p>
        <p>lastname: {{ $user->lastname }}</p>
        <p>email: {{ $user->email}}</p>
        <p>phonenumber: {{ $user->telephone }}</p>


    </div>
    @endforeach
@endsection
