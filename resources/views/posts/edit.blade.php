@extends('layouts.master') @section('content')
<div class="w3-container w3-padding-16 w3-center" id="team">
    <h3><img
        src="{{ url('/') }}/storage/images/icons/edit.png"
        width="50"
        height="50"
        alt="edit">

        EDIT REVIEWS</h3>
</div>

<div class="w3-container w3-card w3-white w3-round w3-margin "><br>

    <form action="{{ route('posts.update' , ['post'=> $post->id])}}" method="post" enctype="multipart/form-data">

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
            <img
                src="{{ $post->user->image }}"
                alt="Avatar"
                class="w3-left w3-circle w3-margin-right"
                style="width:60px">
            <h4>{{ $post->user->username }}</h4>
            <span class="w3-opacity">{{ $post->created_at->diffForHumans() }}</span><br><br>

           

            <div>
                <label for="detail">Review Detail</label>
                <textarea
                    name="detail"
                    class="form-control  @error('detail') is-invalid @enderror"
                    id="detail"
                    cols="30"
                    row="10">{{ old('detail' , $post->detail)}}</textarea>
                <!-- @error('detail')
                <div class='alert alert-danger'>{{$message}}</div>
                @enderror -->
            </div>

         <!--    
            <br>
            <img src="{{ $post->image }}"  width="100" height="100"  id="output">
            <br>
 -->

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
                <button type="submit" class="w3-button w3-pink">Update
                </button>
            </div>
        </div>

      
            <div>
              
            </div>
        </form>

    </div>
</div>

@endsection


@section('script')

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>
 

@endsection