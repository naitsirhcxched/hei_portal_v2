<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }


    public function login_execute(Request $request)
    {
        $request->validate([
            'hei_username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        $user = User::where('hei_username', $request->hei_username)->first();

        if ($user && md5($request->password) === $user->hei_password) {
            Auth::login($user);

            return redirect()->intended($this->redirectTo);
        }

        return back()->withErrors([
            'credentials' => 'The provided credentials do not match our records.',
        ]);
    }
}
