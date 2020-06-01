@extends('layouts.master')

@section('content')


<h1>{{ Auth::user()->username }}'s profile</h1>

<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
        <img src="{{ $user->image}}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        <div class="form-group w3-right">
        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="bw3-right w3-button w3-indigo">Edit</a>
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