<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    //função autenticar se utilizador tiver a conta activa
    public function authenticate(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $username = $credentials['username'];
        $password = $credentials['password'];

        if (Auth::attempt(['username' => $username, 'password' => $password, 'estado' => 1])) {
            $info = 1;
        } else {
            $info = 0;
        }
        echo $info;
    }
}
