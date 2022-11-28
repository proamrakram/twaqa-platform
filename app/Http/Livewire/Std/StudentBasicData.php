<?php

namespace App\Http\Livewire\Std;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class StudentBasicData extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $name;
    public $gender;
    public $department;
    public $birthday;
    public $age;
    public $address;
    public $position;
    public $parent_position;
    public $photo;
    public $phone_number1;
    public $phone_number2;
    public $whatapp_number;
    public $facebook_link;
    public $twitter_link;
    public $subscription_type;
    public $user;
    public $edit_1 = '';
    public $edit_2 = '';
    public $edit_3 = '';
    public $edit_4 = '';

    public function mount()
    {
        $this->user = $this->setValues();
    }

    public function render()
    {
        return view('livewire.std.student-basic-data');
    }

    public function edit($form_id)
    {
        if ($form_id == 1) {
            $this->edit_1 = 'edit';
        }
        if ($form_id == 2) {
            $this->edit_2 = 'edit';
        }
        if ($form_id == 3) {
            $this->edit_3 = 'edit';
        }
        if ($form_id == 4) {
            $this->edit_4 = 'edit';
        }
    }

    protected function rules()
    {
        return [
            'name' => ['required'],
            'gender' => ['required'],
            'department' => ['required'],
            'birthday' => ['required'],
            'age' => ['required'],
            'address' => ['required'],
            'position' => ['required'],
            'parent_position' => ['required'],
            'photo' => ['nullable'],
            'phone_number1' => ['nullable'],
            'phone_number2' => ['nullable'],
            'whatapp_number' => ['nullable'],
            'facebook_link' => ['nullable'],
            'twitter_link' => ['nullable'],
        ];
    }

    protected function messages()
    {
        return [
            'name.required' => 'هذا الحقل مطلوب',
            'gender.required' => 'هذا الحقل مطلوب',
            'department.required' => 'هذا الحقل مطلوب',
            'birthday.required' => 'هذا الحقل مطلوب',
            'age.required' => 'هذا الحقل مطلوب',
            'address.required' => 'هذا الحقل مطلوب',
            'position.required' => 'هذا الحقل مطلوب',
            'parent_position.required' => 'هذا الحقل مطلوب',
            'photo.required' => 'هذا الحقل مطلوب',
            'phone_number1.required' => 'هذا الحقل مطلوب',
            'phone_number2.required' => 'هذا الحقل مطلوب',
            'whatapp_number.required' => 'هذا الحقل مطلوب',
            'facebook_link.required' => 'هذا الحقل مطلوب',
            'twitter_link.required' => 'هذا الحقل مطلوب',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function setValues()
    {
        $user  = User::find(auth()->id());
        $this->name = $user->full_name;
        $this->gender = $user->gender;
        $this->department = $user->department;
        $this->birthday = $user->birthday;
        $this->age = $user->age;
        $this->address = $user->address;
        $this->position = $user->position;
        $this->parent_position = $user->parent_position;
        $this->photo = $user->img;
        $this->phone_number1 = $user->phonenumber;
        $this->phone_number2 = $user->phonenumber2;
        $this->whatapp_number = $user->whatsapp;
        $this->facebook_link = $user->facebook;
        $this->twitter_link = $user->twitter;
        // $this->subscription_type;
        return $user;
    }

    public function basic()
    {
        $validated_data = $this->validate();

        $user = User::find(auth()->id());

        $user->update([
            'full_name' => $validated_data['name'],
            'birthday' => $validated_data['birthday'],
            'age' => $validated_data['age'],
            'position' => $validated_data['position'],
            'parent_position' => $validated_data['parent_position'],
            'department' => $validated_data['department'],
            'gender' => $validated_data['gender'],
            'address' => $validated_data['address'],
        ]);


        $this->setValues();

        $this->alert('success', 'تعديل البيانات الاساسية', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل بياناتك  الاسياسية بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_1 = '';
    }

    public function image()
    {
        $validated_data = $this->validate();

        $user = User::find(auth()->id());

        $img = $validated_data['photo'];

        if ($img) {
            $img->store('images/profile', 'public');
            $user->update(['img' => $img->hashName()]);
        }

        $user = $this->setValues();

        $this->alert('success', 'تعديل الصورة', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل صورتك الشخصية بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_2 = '';
    }

    public function calling()
    {
        $validated_data = $this->validate();
        $user = User::find(auth()->id());
        $user->update([
            'phonenumber' => $validated_data['phone_number1'],
            'phonenumber2' => $validated_data['phone_number2'],
            'whatsapp' => $validated_data['whatapp_number'],
        ]);
        $user = $this->setValues();

        $this->alert('success', 'تعديل بيانات الاتصال', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل بيانات الاتصال بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_3 = '';
    }

    public function links()
    {
        $validated_data = $this->validate();
        $user = User::find(auth()->id());
        $user->update([
            'facebook' => $validated_data['facebook_link'],
            'twitter' => $validated_data['twitter_link'],
        ]);

        $user = $this->setValues();

        $this->alert('success', 'تعديل روابط  السوشيال ميديا', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل رورابط السوشيال ميديا بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_4 = '';
    }
}
