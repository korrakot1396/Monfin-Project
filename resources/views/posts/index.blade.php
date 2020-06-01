@extends('layouts.master')

@section('content')
    
    <div class="w3-container w3-padding-16 w3-center" id="team">
    <img src="{{ url('/') }}/storage/images/icons/happy.png" width="40" height="40" alt="happy">
    <img src="{{ url('/') }}/storage/images/icons/happy.png" width="40" height="40" alt="happy">
    <img src="{{ url('/storage/images/icons/happy.png') }}" width="40" height="40" alt="happy">
    <br>
    <br>
    @auth
    <h5>All REVIEWS FOR <h3><b>{{ Auth::user()->username }}</b></h3></h5>
    @else
    <h5>All Posts</h5>
    @endauth
    </div>

    @auth
     <div class="w3-container w3-light-grey">
    <br>
    <h2>สร้างรีวิวของคุณ</h2>
    <br>
    <form action="{{ action('PostsController@store') }}"method="POST" enctype="multipart/form-data">
    
    @csrf @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif


    <div class="form-group">
    
             
    
    <div class="form-group">
        <label for="post-detail">รีวิวของคุณ</label>
        <textarea class="form-control @error('detail') is-invalid @enderror"
        id="post-detail" name="detail"></textarea>
    </div>

    <div class="panel panel-primary">
            <div class="panel-body">
    
            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            <img src="images/{{ Session::get('image') }}">
            @endif
    
  
    
                    <div  class="form-group d-flex flex-column">
                        <input type="file" name="image" class="py-2" accept="image/*" onchange="loadFile(event)">
                        <div>{{ $errors->first('image') }}</div>
                
    
                </div>
            </div>

            <star-rating v-model="rating"></star-rating>

    <button class="w3-button w3-orange w3-margin-bottom" type="submit"
    class="btn btn-primary">Submit</button>
    <br>
    </form>
    
    @endauth
    
    <br>


    
    @foreach ($posts as $post)    
    <div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
        <img src="{{ $post->user->image }}" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
        @auth
        @if(Auth::user()->id)
        <a href="{{ route('posts.show', ['post' => $post->id]) }}" class="w3-right w3-button w3-indigo">View</a>
        @endif
        @endauth
        <h4>{{ $post->user->username }}</h4>
        <span class="w3-opacity">{{ $post->created_at->diffForHumans() }}</span>
        <hr class="w3-clear">

        <div class="panel-body">
        <p>{{ $post->detail }}</p>
            <img src="{{ $post->image }}"style="width:100%"  class="w3-hover-opacity">
        </div>
        <br>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"><i class="fa fa-thumbs-up"></i>  {{$post->view_count}}</button> 
        <button type="button" class="w3-button w3-theme-d2 w3-margin-bottom"><i class="fa fa-comment"></i>  Comment</button>
        <star-rating></star-rating>

        
    </div>
    @endforeach

    
   
<br>
</div>




@endsection