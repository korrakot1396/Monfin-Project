@extends('layouts.master') 

@section('content')

<div class="w3-container w3-card w3-white w3-round w3-margin ">
    <br>
    <img
        src="{{ $post->user->image }}"
        alt="Avatar"
        class="w3-left w3-circle w3-margin-right"
        style="width:60px">

    
    @can('delete',$post)
   <!--  @if (Gate::allows('update-post' , $post)) -->
    <form method="POST" action="/posts/{{$post->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group w3-right">

            <!-- Trigger the modal with a button -->
            <button
                type="button"
                class="btn btn-info btn-danger delete-user"
                data-toggle="modal"
                data-target="#myModal">Delete</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade " role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p>คุณต้องการจะลบรีวิวนี้ใช่ไหม?</p>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" class="btn btn-danger delete-user" value="Yes">
                            <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </form>
    @endcan
    

    

     @can('update',$post)
    <div class="form-group w3-right">
        <a
            href="{{ route('posts.edit', ['post' => $post->id]) }}"
            class="btn btn-primary">Edit</a>
    </div>
    <!-- @endif -->
    @endcan

    <h4>{{ $post->user->username }}</h4>
    <span class="w3-opacity">{{ $post->created_at->diffForHumans() }}</span>
    <br>
    <br>
    <h6>{{ $post->title }}
    </h6>
    <hr class="w3-clear">
    <div class="panel-body">
        <p>{{ $post->detail }}</p>
          
            <img src="{{ $post->image }}"style="width:100%"  class="w3-hover-opacity">
        </div>
        <br>

</div>

<br>

@endsection

@section('script')

@endsection