<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo = '/';

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
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|string|email|max:255|unique:users',
            'user_student_id' => 'required|number|max:255|regex:/(\d\d-\d\d-\d\d-\d\d\d)/g',
//            'user_phone' => 'required|number|max:10|min:10',
            'user_password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @return \App\User
     */
    protected function create()
    {
//        dd(request());
        // create new user in database
        $newUser = User::create([
            'name' => \request('name'),
            'email' =>  \request('email'),
            'student_id' => \request('student_id'),
            'phone' => \request('phone'),
            'password' => bcrypt(\request('password')),
            'remember_token' => \request('_token'),
        ]);


        //login the new user

        auth()->login($newUser);

    }

    protected function register() {

//        dd(request('user_phone'));
        $this->validate(request(),[
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'student_id' => 'required|max:12|regex:/[0-9]{2}(-)[0-9]{2}(-)[0-9]{2}(-)[0-9]{3}/',
                'phone' => 'required|string|max:11',
                'password' => 'required|string|min:6|confirmed',
            ]);

//        if ($this->validator([\request('name')
//            , \request('email'), \request('student_id'), \request('password'),
//            \request('password-confirm')])) {
//            $this->create([\request('name')
//                , \request('email'), \request('student_id'), \request('password'),
//                \request('password-confirm')]);
//        }

        $this->create();
        // redirect to home page
        return redirect('/');
    }
}