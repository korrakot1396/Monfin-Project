@extends('layouts.master')
@section('content')
<h1>Create New Post</h1>
<form action="{{ action('PostsController@store') }}"
method="POST">


@csrf @method('PUT') @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif


<div class="form-group">
    <label for="post-detail">Post Detail</label>
    <textarea class="form-control @error('detail') is-invalid @enderror"id="post-detail" name="detail"></textarea>
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
