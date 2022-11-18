<?php

namespace App\Http\Controllers\Services;

use App\Http\Controllers\Controller;
use App\Models\CallUs;
use Illuminate\Http\Request;

class CallUsService extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function store()
    {
        CallUs::create([
            'name' => $this->request->name,
            'email' => $this->request->email,
            'phone' => $this->request->phone,
            'consultas' => $this->request->consultas
        ]);

        return redirect()->back()->with('message', 'لقد تم إرسال رسالتك بنجاح');
    }
}
