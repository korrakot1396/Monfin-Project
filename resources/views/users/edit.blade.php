@extends('layouts.master')

@section('content')
<link rel="stylesheet" href="http://getbootstrap.com/dist/css/bootstrap.css">
<div class="w3-container w3-padding-16 w3-center" id="team">
<h3><img src="{{ url('/') }}/storage/images/icons/edit.png" width="50" height="50" alt="edit">
    
    EDIT USER</h3>
    </div>


<div class="w3-container w3-card w3-white w3-round w3-margin " ><br>
<form action="{{ action('UsersController@update',['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif

    @method('PATCH')
    @method('PUT')
    <div class="form-group">
    <img src="{{ $user->image }}" id="output" alt="Avatar" class="w3-left w3-circle w3-margin-right" width="80" height="80">
    <h4>{{ $user->username }}</h4>
        <br>
        <br>
        <br>
        <label for="firstname">Firstname</label>
        <input type="text" class="form-control @error('firstname') is-invalid @enderror" id="firstname" name="firstname" 
                value=" {{ old('firstname' , $user->firstname)}}">
               
    </div>
    <div class="form-group">
        <label for="lastname">Lastname</label>
        <textarea class="form-control @error('lastname') is-invalid @enderror"
                id="lastname"
                name="lastname">{{ old('lastname' , $user->lastname )}}</textarea>

    </div>
    <div class="form-group">
        <label for="telephone">Phone Number</label>
        <textarea class="form-control @error('telephone') is-invalid @enderror"
                id="telephone"
                name="telephone">{{ old('telephone' , $user->telephone )}}</textarea>

    </div>
    <!-- <div class="form-group d-flex flex-column">
        <label for="image">Change Image</label>
        <input type="file" name="image" class="py-2" accept="image/*" onchange="loadFile(event)">
        <div>{{ $errors->first('image') }}</div>
    </div> -->

        <div class="panel panel-primary">
        <label for="image">Change Image</label>
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
        </div>
        
    
    <button type="submit" class="w3-button w3-pink">Update </button>
</form>


<br>

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