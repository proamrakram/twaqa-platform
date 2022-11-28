<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\Qualification;
use Illuminate\Http\Request;

class StdService extends Controller
{
    protected $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function saveQualifications()
    {
        $request = json_decode(json_encode($this->request->input('qualifications-group')));
        $student = auth()->user();

        foreach ($request as $qualification) {
            Qualification::create([
                'user_id' => $student->id,
                'user_type' => $student->user_type,
                'qualification_degree' => $qualification->qualification_degree,
                'specialization' => $qualification->specialization,
                'university' => $qualification->university,
                'country_id' => $qualification->country_id,
                'year' => $qualification->years,
                'is_delete' => '0',
            ]);
        }

        return redirect()->back()->with('success', __('Your qualifications has been updated successfully'));
    }
}
