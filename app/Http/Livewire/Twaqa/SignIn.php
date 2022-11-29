<?php

namespace App\Http\Livewire\Twaqa;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class SignIn extends Component
{
    use LivewireAlert;
    public $email;
    public $password;
    public $validated_data;
    public $submit = false;
    public $check = '';
    public $user;

    public function render()
    {
        return view('livewire.twaqa.sign-in');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        $this->validated_data = $this->validate();

        $this->user = User::where('email', $this->email)->first();

        if ($this->user) {

            $check = Hash::check($this->password, $this->user->password);

            if ($check) {
                $this->submit = true;
                $this->check = "";
            } else {
                $this->submit = false;
                $this->check = "يرجى التحقق من كلمة السر او البريد الالكتروني";
            }
        }
    }

    public function submit()
    {
        if ($this->submit) {
            Auth::login($this->user);
            if ($this->user->user_type == 'student') {
                return redirect()->route('std.home')->with('login_user', 'لقد تم تسجيل دخولك بنجاح!!');
            }

            if ($this->user->user_type == 'teacher') {
                return redirect()->route('teacher.home')->with('login_user', 'لقد تم تسجيل دخولك بنجاح!!');
            }

            return redirect()->route('home');
        }

        $this->alert('warning', 'تنبيه', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => 'يرجى إدخال البيانات الصحيحة 😚😚',
            'timerProgressBar' => true,
        ]);

        $this->validated_data = $this->validate();
    }

    public function rules()
    {
        request()->validate(['unique:table,column,except,id']);
        return [
            'email' => ['required', 'email', 'exists:users,email'],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'هذا الحقل مطلوب!',
            'password.required' => 'هذا الحقل مطلوب!',

            'email.email' => 'يرجى إدخال بريد الكتروني صحيح',
            'email.exists' => 'البريد الالكتروني غير موجود',
        ];
    }
}
