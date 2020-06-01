<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255'],
            'telephone' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'],
            [ 
                'password.confirmed' => 'รหัสผ่านกับยืนยันรหัสผ่านไม่ตรงกัน',
                'password.min' => 'กรุณากรอกรหัสผ่านอย่างน้อย 8 ตัว',
                'email.unique' => 'อีเมลล์นี้มีผู้ใช้งานแล้วกรุณากรอกอีเมลล์ใหม่อีกครั้ง',
            
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        
        $user = User::create([
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'telephone' => $data['telephone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),

        ]);
        // $this->setImage($user);
        $imageName = time().'.'.$data['image']->extension(); 
        $data['image']->move(public_path('images'), $imageName);
        $user->image = '/images/' . $imageName;
        $user->save();
        return $user;
        
        
    }

    private function setImage($user)
    {
        $user->image = 'beabs';
        $user->save();
    }

    

    
}
