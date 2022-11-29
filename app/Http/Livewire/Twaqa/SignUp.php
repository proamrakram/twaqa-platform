<?php

namespace App\Http\Livewire\Twaqa;

use App\Models\City;
use App\Models\Country;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class SignUp extends Component
{
    public $first_name;
    public $second_name;
    public $gender;
    public $country_id = 1;
    public $city_id;
    public $email;
    public $age;
    public $user_type;
    public $password;
    public $password_confirmation;
    public $cities;

    public $validated_data;
    public $user;

    public function render()
    {
        $this->cities = City::where('country_id', $this->country_id)->get();
        return view('livewire.twaqa.sign-up');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->cities = City::where('country_id', $this->country_id)->get();

        if ($this->cities->count()) {
            $this->city_id = $this->cities->first()->id;
        }
        $this->validated_data = $this->validate();
        $this->user = User::where('email', $this->email)->first();
    }

    public function submit()
    {
        $this->validate();

        $this->user = User::create([
            'full_name' => $this->first_name . ' ' . $this->second_name,
            'password' => Hash::make($this->password),
            'country_id' => $this->country_id,
            'state' => $this->city_id,
            'gender' => $this->gender,
            'email' => $this->email,
            'registered_at' => now(),
            'user_type' => $this->user_type,
            'age' => $this->age,
            'is_delete' => '0',
            'active' => 1,
            'suspended_balance' => 0.0,
            'available_balance' => 0.0,
        ]);

        return redirect()->route('signin')->with('new_register', 'لقد تم تسجيل حسابك بنجاح صديقي، يمكنك الان تسجيل الدخول');
    }

    public function rules()
    {
        return [
            'first_name' => ['required'],
            'second_name' => ['required'],
            'gender' => ['required', 'in:male,female'],
            'country_id' => ['required', 'exists:countries,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'email' => ['required', 'email', 'unique:users,email'],
            'age' => ['required'],
            'user_type' => ['required', 'in:teacher,student'],
            'password' => ['required', 'confirmed'],
            'password_confirmation' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'هذا الحقل مطلوب!',
            'email.email' => 'يرجى إدخال بريد الكتروني صحيح',
            'email.unique' => 'البريد الالكتروني موجود مسبقا',

            'password_confirmation.required' => 'هذا الحقل مطلوب!',
            'password.confirmed' => 'كلمات السر غير متطابقة',
            'password.required' => 'هذا الحقل مطلوب!',

            'first_name.required' => 'هذا الحقل مطلوب !!',
            'second_name.required' => 'هذا الحقل مطلوب !!',

            'gender.required' => 'هذا الحقل مطلوب',
            'gender.in' => 'القيمة خاطئة',

            'country_id.required' => 'هذا الحقل مطلوب',
            'city_id.required'  => 'هذا الحقل مطلوب',

            'age.required' => 'هذا الحقل مطلوب',

            'user_type.required' => 'هذا الحقل مطلوب',
            'user_type.in' => 'القيمة خاطئة',
        ];
    }
}
