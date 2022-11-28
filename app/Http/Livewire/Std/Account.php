<?php

namespace App\Http\Livewire\Std;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Account extends Component
{
    use LivewireAlert;
    public $email = '';
    public $edit_1 = '';
    public $edit_2 = '';

    public $old_password;
    public $new_password;
    public $confirm_password;
    public $old_password_message_er = '';
    public $old_password_message_su = '';
    public $new_password_message = '';
    public $confirm_password_message = '';

    public function mount()
    {
        $user = $this->getUser();
        $this->email = $user->email;
    }

    public function render()
    {
        $user = $this->getUser();
        return view('livewire.std.account', [
            'user' => $user
        ]);
    }

    public function rules()
    {
        if ($this->edit_1) {
            return [
                'email' => ['required'],
            ];
        }

        if ($this->edit_2) {
            return [
                'old_password' => ['required'],
                'new_password' => ['required'],
                'confirm_password' => ['required'],
            ];
        }
    }

    public function messages()
    {
        if ($this->edit_1) {
            return [
                'email.required' => 'هذا الحقل مطلوب صديقي !!'
            ];
        }

        if ($this->edit_2) {
            return [
                'old_password.required' => 'هذا الحقل مطلوب صديقي !!',
                'new_password.required' => 'هذا الحقل مطلوب صديقي !!',
                'confirm_password.required' => 'هذا الحقل مطلوب صديقي !!',
            ];
        }
    }

    public function edit($num)
    {
        if ($num == 1) {
            $this->edit_1 = 'edit';
        }

        if ($num == 2) {
            $this->edit_2 = 'edit';
        }
    }

    public function getUser()
    {
        return User::find(auth()->id());
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
        if ($this->edit_2) {
            $this->passwordCheck();
        }
    }

    public function updateEmail()
    {
        $validated_data = $this->validate();

        $this->getUser()->update([
            'email' => $this->email
        ]);

        $this->alert('success', 'تعديل الايميل', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل الايميل بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_1 = '';
    }

    public function updatePassword()
    {
        $validated_data = $this->validate();
        $user = $this->passwordCheck();

        $user->update([
            'password' => Hash::make($this->new_password)
        ]);

        $this->alert('success', '', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل كلمة المرور بنجاح',
            'timerProgressBar' => true,
        ]);

        $this->edit_2 = '';
        $this->old_password_message_su = '';
        $this->old_password_message_er = '';
        $this->new_password_message = '';
        $this->confirm_password_message = '';
    }

    public function passwordCheck()
    {
        $user = auth()->user();

        $check = Hash::check($this->old_password, $user->password);

        if (!$check) {
            $this->old_password_message_su = '';
            $this->old_password_message_er = 'كلمة المرور خاطئة';
        } else {
            $this->old_password_message_er = '';
            $this->old_password_message_su = 'تمت التأكد من صحة كلمة المرور بنجاح!!';
        }

        if ($this->new_password != $this->confirm_password) {
            $this->new_password_message = 'كلمة المرور الجديدة غير متطابقة';
            $this->confirm_password_message = 'كلمة المرور الجديدة غير متطابقة';
            return false;
        } else {
            $this->confirm_password_message = 'تم التأكد من المطابقة بنجاح!!';
            $this->new_password_message = 'تم التأكد من المطابقة بنجاح!!';
        }

        return User::find($user->id);
    }
}
