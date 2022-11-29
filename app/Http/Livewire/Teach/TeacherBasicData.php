<?php

namespace App\Http\Livewire\Teach;

use App\Models\User;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\WithFileUploads;

class TeacherBasicData extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $full_name;
    public $gender;
    public $description;
    public $birthday;
    public $age;
    public $position;

    public $phonenumber;
    public $phonenumber2;
    public $facebook;
    public $twitter;
    public $whatsapp;

    public $edit_1 = '';
    public $edit_2 = '';
    public $edit_3 = '';
    public $edit_4 = '';

    public $user;
    public $photo;

    public function mount()
    {
        $this->user = $this->setFields();
    }

    public function setFields($get = null)
    {
        $user = User::find(auth()->id());

        if ($get == 'get') {
            return $user;
        }

        $this->full_name = $user->full_name;
        $this->gender = $user->gender;
        $this->description = $user->description;
        $this->birthday = $user->birthday;
        $this->age = $user->age;
        $this->position = $user->position;
        $this->phonenumber = $user->phonenumber;
        $this->phonenumber2 = $user->phonenumber2;
        $this->facebook = $user->facebook;
        $this->twitter = $user->twitter;
        $this->whatsapp = $user->whatsapp;

        return $user;
    }

    public function render()
    {
        return view('livewire.teach.teacher-basic-data');
    }
    protected function rules()
    {
        if ($this->edit_1) {
            return [
                'full_name' => ['required'],
                'gender' => ['required'],
                'description' => ['required'],
                'birthday' => ['required'],
                'age' => ['required'],
                'position' => ['required'],
            ];
        }

        if ($this->edit_2) {
            return [
                'photo' => ['nullable'],
            ];
        }

        if ($this->edit_3) {
            return [
                'phonenumber' => ['required'],
                'phonenumber2' => ['required'],
            ];
        }

        if ($this->edit_4) {
            return [
                'facebook' => ['required'],
                'twitter' => ['required'],
                'whatsapp' => ['required'],
            ];
        }
    }

    protected function messages()
    {

        if ($this->edit_1) {
            return [
                'full_name.required' => 'هذا الحقل مطلوب',
                'gender.required' => 'هذا الحقل مطلوب',
                'description.required' => 'هذا الحقل مطلوب',
                'birthday.required' => 'هذا الحقل مطلوب',
                'age.required' => 'هذا الحقل مطلوب',
                'position.required' => 'هذا الحقل مطلوب',
            ];
        }

        if ($this->edit_2) {
            return ['photo.nullable' => 'ok'];
        }

        if ($this->edit_3) {
            return [
                'phonenumber.required' =>  'هذا الحقل مطلوب',
                'phonenumber2.required' => 'هذا الحقل مطلوب',
            ];
        }

        if ($this->edit_4) {
            return [
                'facebook.required' => 'هذا الحقل مطلوب',
                'twitter.required' => 'هذا الحقل مطلوب',
                'whatsapp.required' => 'هذا الحقل مطلوب',
            ];
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeBasicData()
    {
        $validated_data = $this->validate();

        $user = User::find(auth()->id());

        $user->update([
            'full_name' => $validated_data['full_name'],
            'gender' => $validated_data['gender'],
            'description' => $validated_data['description'],
            'birthday' => $validated_data['birthday'],
            'age' => $validated_data['age'],
            'position' => $validated_data['position'],
        ]);

        $this->setFields();

        $this->alert('success', 'تعديل البيانات الاساسية', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل بياناتك الاسياسية بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_1 = '';
    }

    public function storeImage()
    {
        $validated_data = $this->validate();

        $user = User::find(auth()->id());

        $img = $validated_data['photo'];

        if ($img) {
            $img->store('images/profile', 'public');
            $user->update(['img' => $img->hashName()]);
        }

        $this->setFields();

        $this->alert('success', 'تعديل الصورة', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل صورتك الشخصية بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_2 = '';
    }

    public function storeCalling()
    {
        $validated_data = $this->validate();

        $user = User::find(auth()->id());

        $user->update([
            'phonenumber' =>  $validated_data['phonenumber'],
            'phonenumber2' =>  $validated_data['phonenumber2'],
        ]);

        $this->setFields();

        $this->alert('success', 'تعديل ارقام الهاتف', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل ارقام الهواتف بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_3 = '';
    }

    public function storeLinks()
    {
        $validated_data = $this->validate();

        $user = User::find(auth()->id());

        $user->update([
            'facebook' => $validated_data['facebook'],
            'twitter' => $validated_data['twitter'],
            'whatsapp' => $validated_data['whatsapp'],
        ]);

        $this->setFields();

        $this->alert('success', 'تعديل البيانات الاساسية', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل الروابط بنجاح صديقي',
            'timerProgressBar' => true,
        ]);

        $this->edit_4 = '';
    }


    public function edit($edit)
    {
        $this->edit_1 = '';
        $this->edit_2 = '';
        $this->edit_3 = '';
        $this->edit_4 = '';

        if ($edit == 1) {
            $this->edit_1 = 'edit';
        }
        if ($edit == 2) {
            $this->edit_2 = 'edit';
        }
        if ($edit == 3) {
            $this->edit_3 = 'edit';
        }
        if ($edit == 4) {
            $this->edit_4 = 'edit';
        }
    }
}
