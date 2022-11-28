<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;
    protected $method;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    protected function authenticated(Request $request, $user)
    {
        if ($user->user_type == 'student') {
            return redirect()->route('std.home')->with('login_user', 'لقد تم تسجيل دخولك بنجاح!!');
        }

        if ($user->user_type == 'teacher') {
            return redirect()->route('teacher.home')->with('login_user', 'لقد تم تسجيل دخولك بنجاح!!');
        }

        return redirect()->route('home');
    }


    protected function loggedOut(Request $request)
    {
        return redirect('/')->with('logout_user', 'تم تسجيل خروجك بنجاح');
    }
}
