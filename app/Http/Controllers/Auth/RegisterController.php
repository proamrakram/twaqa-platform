<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
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
    protected $redirectTo = RouteServiceProvider::HOME;

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
            'age' => ['required', 'numeric'],
            'gender' => ['required', 'in:male,female'],
            'country_id' => ['required', 'string',],
            'city_id' => ['required', 'string',],
            'first_name' => ['required', 'string', 'max:255'],
            'second_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'user_type' => ['required', 'in:student,teacher'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'age.required' => __('The age field is required'),
            'gender.required' => __('The gender field is required'),
            'country_id.required' => __('The country field is required'),
            'city_id.required' => __('The state field is required'),
            'first_name.required' => __('The first name field is required'),
            'second_name.required' => __('The second name field is required'),
            'email.required' => __('The email field is required'),
            'password.required' => __('The password field is required'),
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'full_name' => $data['first_name'] . ' ' . $data['second_name'],
            'password' => Hash::make($data['password']),
            'second_name' => $data['second_name'],
            'first_name' => $data['first_name'],
            'country' => $data['country_id'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'state' => $data['city_id'],
            'registered_at' => now(),
            'user_type' => $data['user_type'],
            'age' => $data['age'],
            'is_delete' => '0',
            'active' => 1,
            'suspended_balance' => 0.0,
            'available_balance' => 0.0,
            // 'phonenumber',
            // 'phonenumber2',
            // 'whatsapp',
            // 'facebook',
            // 'twitter',
            // 'position',
            // 'parent_position',
            // 'qualification',
            // 'department',
            // 'category',
            // 'img',
        ]);
    }
}
