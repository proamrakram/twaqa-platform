<?php

namespace App\Http\Livewire\Std;

use App\Models\Qualification;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Qualifications extends Component
{
    use LivewireAlert;
    protected $listeners = ['confirmDeleting'];

    public $qualification_degree = '';
    public $specialization = '';
    public $university = '';
    public $country_id = '';
    public $year = '';

    public $qualification;

    public $edit = '';


    public function mount($qualification_id)
    {
        $this->qualification = Qualification::find($qualification_id);
        $this->qualification_id = $qualification_id;
        $this->setValues();
    }

    public function setValues()
    {
        $qualification = Qualification::find($this->qualification_id);
        $this->qualification_degree = $qualification->qualification_degree;
        $this->specialization = $qualification->specialization;
        $this->university = $qualification->university;
        $this->country_id = $qualification->country_id;
        $this->year = $qualification->year;
    }

    public function edit()
    {
        $this->edit = 'edit';
    }

    public function render()
    {
        return view('livewire.std.Qualifications');
    }

    public function rules()
    {
        return [
            'qualification_degree' => ['required'],
            'specialization' => ['required'],
            'university' => ['required'],
            'country_id' => ['required'],
            'year' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'qualification_degree.required' => 'هذا الحقل مطلوب!',
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

        $this->qualification->update([
            'qualification_degree' => $validated_data['qualification_degree'],
            'specialization' => $validated_data['specialization'],
            'university' => $validated_data['university'],
            'country_id' => $validated_data['country_id'],
            'year' => $validated_data['year'],
        ]);

        $this->setValues();

        $this->alert('success', 'تعديل المؤهل', [
            'toast' => true,
            'position' => 'center',
            'timer' => 3000,
            'text' => '👍 تم تعديل المؤهل العلمي بنجاح',
            'timerProgressBar' => true,
        ]);

        $this->edit = '';
    }

    public function delete()
    {
        $this->alert('question', 'هل انت متأكد من حذف المؤهل العلمي؟', [
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
        $this->qualification->update(['is_delete' => '1']);
        return redirect()->route('std.qualifications')->with('success', 'لقد تمت عملية الحذف بنجاح');
    }
}
