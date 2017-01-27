<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after login / registration.
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
            'name' => 'required|max:255',
            'address' => 'required|max:255',
            'pcod' => 'required|numeric|min:0|max:99999',
            'email' => 'required|email|max:255|unique:users',
            'telephone' =>'required|max:9',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'address' => $data['address'],
            'pcod' => $data['pcod'],
            'email' => $data['email'],
            'telephone' => $data['telephone'],
            'password' => bcrypt($data['password'])
        ]);
        $user = $data['email'];
        $name = $data['name'];
        Mail::send('03_mails.registro', $user, function($message)
    {
        $message->from('domohelpproject@gmail.com', 'Admin')->subject('Registro DomoHelp')->to($user, $name);
    
    });
        
        
    
    }
}
