<?php

namespace App\Http\Livewire\Teach;

use App\Models\TeacherCertificate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Certificates extends Component
{
    use LivewireAlert;
    protected $listeners = ['confirmDeleting'];

    public $certificate_name = '';
    public $specialization = '';
    public $university = '';
    public $country_id = '';
    public $year = '';

    public $certificate;

    public $edit = '';

    public function mount($certificate_id)
    {
        $this->certificate = TeacherCertificate::find($certificate_id);
        $this->certificate_id = $certificate_id;
        $this->setValues();
    }

    public function setValues()
    {
        $certificate = TeacherCertificate::find($this->certificate_id);
        $this->certificate_name = $certificate->certificate_name;
        $this->specialization = $certificate->specialization;
        $this->university = $certificate->university;
        $this->country_id = $certificate->country_id;
        $this->year = $certificate->year;
    }

    public function edit()
    {
        $this->edit = 'edit';
    }


    public function render()
    {
        return view('livewire.teach.certificates');
    }


    public function rules()
    {
        return [
            'certificate_name' => ['required'],
            'specialization' => ['required'],
            'university' => ['required'],
            'country_id' => ['required'],
            'year' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'certificate_name.required' => 'هذا الحقل مطلوب!',
            'specialization.required' => 'هذا الحقل مطلوب!',
            'university.required' => 'هذا الحقل مطلوب!',
            'country_id.required' => 'هذا الحقل مطلوب!',
            'year.required' => 'هذا الحقل مطلوب!',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function update()
    {
        $validated_data = $this->validate();

        $this->certificate->update([
            'certificate_name' => $validated_data['certificate_name'],
            'specialization' => $validated_data['specialization'],
            'university' => $validated_data['university'],
            'country_id' => $validated_data['country_id'],
            'year' => $validated_data['year'],
        ]);

        $this->setValues();

        $this->alert('success', 'تعديل الشهادة', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل الشهادة بنجاح',
            'timerProgressBar' => true,
        ]);

        $this->edit = '';
    }

    public function delete()
    {
        $this->alert('question', 'هل انت متأكد من حذف الشهادة', [
            'position' => 'center',
            'showConfirmButton' => true,
            'showCancelButton' => true,
            'timer' => null,
            'confirmButtonText' => 'نعم',
            'cancelButtonText' => 'لا',
            'onConfirmed' => 'confirmDeleting'
        ]);
    }

    public function confirmDeleting()
    {
        $this->certificate->update(['is_delete' => '1']);
        return redirect()->route('teacher.certificates')->with('success', 'لقد تمت عملية الحذف بنجاح');
    }
}
