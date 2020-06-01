<?php

namespace App\Http\Controllers;


use Auth;
use App\Post;
use Illuminate\Http\Request;
use Gate;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    


    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
       // dd($posts); //dd dump and die
        return view('posts.index',['posts' => $posts]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;
        
       
      /*   $validatedData = $request->validate([
            
            'detail' => ['required' , 'max:500' , 'min:10'],
            [
                'detail.required' => 'กรุณากรอกข้อความที่ต้องการจะรีวิวที่พัก',
        ]); */

        $this->validate($request,['detail' =>  'required|max:500|min:10'],
            [
                'detail.required' => 'กรุณากรอกข้อความที่ต้องการจะรีวิวที่พัก',
                'detail.min' => 'กรุณากรอกข้อความที่ต้องการจะรีวิวที่พักอย่าน้อย 10 ตัวอักษร',
            ]);

        
        $post->detail = $request->input('detail');
        $post->view_count = 0;

        $post->user_id = Auth::user()->id;
        
        if ($request->image){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
                [
                    'image.required' => 'กรุณาใส่รูปภาพที่ต้องการจะแนบรีวิว',
                    'image.mimes' => 'กรุณาอัพโหลดไฟล์รูปที่เป็น jpeg,png,jpg,gif,svg เท่านั้น',
                
            ]);
      
            $imageName = time().'.'.$request->image->extension();  
       
            $request->image->move(public_path('images'), $imageName);
            
            $post->image = '/images/' . $imageName;
           
        };
       

        $post->save();
        
        return redirect()->action('PostsController@show',
        ['post' => $post->id]);
        /* Post::create([ 'title' => request('title'), 'detail' => request('detail'), 'user_id' => Auth::id()]); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) //URL: 127.0.0.1:8000/posts/{id}
    {
        $post = Post::findOrFail($id);
        return view('posts.show', ['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        /* $this->authorize('update',$post); */
        
        $post = Post::findOrFail($id);
        $this->authorize('update',$post);
            
        return view('posts.edit', ['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        /* $post = Post::findOrFail($id);
        $post->title = $request->input('title');
        $post->detail = $request->input('detail');
        $post->save();
        
        return redirect()->action('PostsController@show',['post' => $id]); */

        /* $this->authorize('update',$post); */

        $post = Post::findOrFail($id);
        $this->authorize('update',$post);

        /* $validatedData = $request->validate([
            
            'detail' => ['required' , 'max:500']
        ]); */
        $this->validate($request,['detail' =>  'required|max:500|min:10'],
        [
            'detail.required' => 'กรุณากรอกข้อความที่ต้องการจะแก้ไข',
            'detail.min' => 'กรุณากรอกข้อความที่ต้องการจะรีวิวที่พักอย่าน้อย 10 ตัวอักษร',
        ]);

       
        $post->detail = $request->input('detail');
        if ($request->image){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
            ]);
      
            $imageName = time().'.'.$request->image->extension();  
       
            $request->image->move(public_path('images'), $imageName);
            
            $post->image = '/images/' . $imageName;
           
        };
        $post->save();
        return redirect()->route('posts.show',['post' => $post->id]);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $this->authorize('delete',$post);
        $post->delete();
        return redirect()->action('PostsController@index');
    }
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function click($view_count) {
        $post = new Post;
        $post->view_count += 1;
    }
}
