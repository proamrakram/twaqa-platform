<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Ejazat;
use App\Models\Qualification;
use App\Models\TeacherCertificate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserService extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function teacherImage()
    {
        $user = User::find(auth()->id());
        $user->update([
            'img' => $this->request->image
        ]);

        return redirect()->back()->with('success', __('Your photo has been updated successfully'));
    }

    public function teacherPhoneNumbers()
    {
        $user = User::find(auth()->id());

        $user->update([
            'phonenumber' => $this->request->phonenumber,
            'phonenumber2' => $this->request->phonenumber2
        ]);

        return redirect()->back()->with('success', __('Your phone numbers has been updated successfully'));
    }

    public function teacherBasic()
    {
        $user = User::find(auth()->id());

        $user->update([
            'full_name' => $this->request->full_name,
            'gender' => $this->request->gender,
            'description' => $this->request->description,
            'birthday' => $this->request->birthday,
            'age' => $this->request->age,
            'position' => $this->request->position,
        ]);

        return redirect()->back()->with('success', __('Your basic data has been updated successfully'));
    }

    public function teacherLinks()
    {
        $user = User::find(auth()->id());

        $user->update([
            'facebook' => $this->request->facebook,
            'twitter' => $this->request->twitter,
            'whatsapp' => $this->request->whatsapp,
        ]);

        return redirect()->back()->with('success', __('Your links has been updated successfully'));
    }

    public function storeTeacherQualifications()
    {
        $request = json_decode(json_encode($this->request->input('qualifications-group')));
        $teacher = auth()->user();

        foreach ($request as $qualification) {
            Qualification::create([
                'user_id' => $teacher->id,
                'qualification_degree' => $qualification->qualification_degree,
                'specialization' => $qualification->specialization,
                'university' => $qualification->university,
                'country_id' => $qualification->country_id,
                'year' => $qualification->year,
            ]);
        }

        return redirect()->back()->with('success', __('Your qualifications has been updated successfully'));
    }

    public function updateTeacherQualifications($qualification_id)
    {
        $teacher = auth()->user();

        $qualification = Qualification::find($qualification_id);
        // dd($qualification, $this->request->university, $this->request->all());
        $qualification->update([
            'user_id' => $teacher->id,
            'qualification_degree' => $this->request->qualification_degree,
            'specialization' => $this->request->specialization,
            'university' => $this->request->university,
            // 'country_id' => $this->request->country_id,
            'year' => $this->request->year,
        ]);

        return redirect()->back()->with('success', __('Your qualifications has been updated successfully'));
    }

    public function storeTeacherCertificates()
    {
        $request = json_decode(json_encode($this->request->input('qualifications-group')));
        $teacher = auth()->user();

        foreach ($request as $certificate) {
            TeacherCertificate::create([
                'user_id' => $teacher->id,
                'certificate_name' => $certificate->certificate_name,
                'specialization' => $certificate->specialization,
                'university' => $certificate->university,
                'country_id' => $certificate->country_id,
                'year' => $certificate->year,
            ]);
        }

        return redirect()->back()->with('success', __('Your certificates has been updated successfully'));
    }

    public function storeTeacherEjazats()
    {
        $request = json_decode(json_encode($this->request->input('qualifications-group')));
        $teacher = auth()->user();

        foreach ($request as $ejazat) {
            Ejazat::create([
                'user_id' => $teacher->id,
                'ejazat_name' => $ejazat->ejazat_name,
                'specialization' => $ejazat->specialization,
                'university' => $ejazat->university,
                'country_id' => $ejazat->country_id,
                'year' => $ejazat->year,
            ]);
        }

        return redirect()->back()->with('success', __('Your ejazat has been updated successfully'));
    }

    public function updateTeacherCertificates($certificate_id)
    {
        $teacher = auth()->user();

        $certificate = TeacherCertificate::find($certificate_id);

        $certificate->update([
            'user_id' => $teacher->id,
            'certificate_name' => $this->request->certificate_name,
            'specialization' => $this->request->specialization,
            'university' => $this->request->university,
            // 'country_id' => $this->request->country_id,
            'year' => $this->request->year,
        ]);

        return redirect()->back()->with('success', __('Your certificates has been updated successfully'));
    }


    public function updateTeacherEjazats($ejazat_id)
    {
        $teacher = auth()->user();

        $ejazat = Ejazat::find($ejazat_id);

        $ejazat->update([
            'user_id' => $teacher->id,
            'ejazat_name' => $this->request->ejazat_name,
            'specialization' => $this->request->specialization,
            'university' => $this->request->university,
            // 'country_id' => $this->request->country_id,
            'year' => $this->request->year,
        ]);

        return redirect()->back()->with('success', __('Your ejazat has been updated successfully'));
    }

    public function deleteTeacherQualification($qualification_id)
    {
        $qualification = Qualification::find($qualification_id);
        $qualification->update(['is_delete' => '1']);
        return redirect()->back()->with('success', __('Your certificates has been deleted successfully'));
    }

    public function deleteTeacherCertificate($certificate_id)
    {
        $certificate = TeacherCertificate::find($certificate_id);
        $certificate->update(['is_delete' => '1']);
        return redirect()->back()->with('success', __('Your certificates has been deleted successfully'));
    }

    public function deleteTeacherEjazats($ejazat_id)
    {
        $ejazat = Ejazat::find($ejazat_id);
        $ejazat->update(['is_delete' => '1']);
        return redirect()->back()->with('success', __('Your ejazat has been deleted successfully'));
    }

    public function updateTeacherEmail()
    {
        $user = User::find(auth()->id());

        $user->update([
            'email' => $this->request->email
        ]);

        return redirect()->back()->with('success', __('Your email has been updated successfully'));
    }

    public function updateTeacherPassword()
    {
        $this->request->validate([
            'password' => ['required', 'confirmed'],
            'password_old' => ['required'],
        ]);

        if (!Hash::check($this->request->password_old, auth()->user()->password)) {
            return back()->with('error', __('The provided password does not match our records.'));
        }

        $user = User::find(auth()->id());

        $user->update([
            'password' => Hash::make($this->request->password)
        ]);

        return redirect()->back()->with('success', __('Your password has been updated successfully'));
    }

    public function updateTeacherVideoAudio()
    {
    }

    public function storeTeacherVideoAudio()
    {
    }

    public function deleteTeacherVideoAudio()
    {
    }
}
