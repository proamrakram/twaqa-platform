<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = auth()->user();

        if ($user) {
            if (auth()->user()->user_type == 'admin') {

                return redirect()->route('admin.settings.global');
            }

            if (auth()->user()->user_type == 'student') {
                return redirect()->route('index');
            }

            if (auth()->user()->user_type == 'teacher') {
                return redirect()->route('teacher.home');
            }

            if (auth()->user()->user_type == 'supervisor') {
                return redirect()->route('admin.supervisors.index');
            }
        }

        return view('home');
    }


    public function getUser(Request $request)
    {
        $data['users'] = User::where('is_delete', 0)->where('active', 1)->where("user_type", $request->type)
            ->get();
        return response()->json($data);
    }
}
