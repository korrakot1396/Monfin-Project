<?php

namespace App\Http\Controllers;


use App\USER;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $users = USER::orderBy('id')->get();
        return view('users.index',['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
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
        $user = User::findOrFail($id);

/*         $validatedData = $request->validate([
            
            'firstname' => ['required' , 'max:500' , 'min:5'],
            
            'lastname' => ['required' , 'max:500' , 'min:5'],
            
            'telephone' => ['required' , 'max:10' , 'min:10'],
            
        ]); */

        $this->validate($request,['firstname' =>  'required|max:500|min:5', 'lastname' =>  'required|max:500|min:5' , 'telephone' =>  'required|max:10|min:10' ],
        [
            'firstname.required' => 'กรุณากรอกชื่อจริงของคุณในช่อง Firstname',
            'firstname.min' => 'กรุณากรอกชื่อจริงอย่างน้อย 5 ตัวอักษร',
            'lastname.required' => 'กรุณากรอกนามสกุลของคุณในช่อง Lastname',
            'lastname.min' => 'กรุณากรอกนามสกุลอย่างน้อย 5 ตัวอักษร',
            'telephone.required' => 'กรุณากรอกเบอร์โทรศัพท์ของคุณในช่อง Telephone',
            'telephone.min' => 'กรุณากรอกเบอร์โทรศัพท์ 10 ตัว',

        ]);

        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->telephone = $request->input('telephone');
        
       
        // $imageName = $request->file('image')->getClientOriginalName();
        // $user->image = '/'.$request->file('image')->storeAs('/storage/images/users', $imageName);
        // $this->storeImage($user);
        if ($request->image){
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                
            ]);
      
            $imageName = time().'.'.$request->image->extension();  
       
            $request->image->move(public_path('images'), $imageName);
            
            $user->image = '/images/' . $imageName;
        };
            
        $user->save();

        return redirect()->action('UsersController@show',['user' => $id]);


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function profile()
    {
        return view('users.profile');
    }

    public function validateRequest()
    {
       return tap(request()->validate([
           'firstname' => 'required|min:3',
           'lastname' => 'required|min:3',
           'telephone' => 'required',
       ]), function () {

            if(request()->hasfile('image')) {
                request()->validate([
                    'image' => 'file|image|max:5000',
                ]);
            }
       });
    }

    public function storeImage($user)
    {
        if (request()->has('image')) {
            $user->update([
                'image' => request()->image->store('images', 'public'),
            ]);
        }
    }

}
