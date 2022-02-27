<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use Illuminate\Http\Request;

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

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login() {

		if(Auth::check()){
			return view('index');
		}

		return view('login');
	}


    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\Guard
     */
    public function guard()
    {
        return Auth::guard();
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first(); // buscando um registro do cliente por email

        if ((!is_null($user)) && ($user->status == 0))
        {
            return redirect('/login')->with('message-error', 'Usuário inválido');
        }

        $credentials = ['email' => $request->get('email'),'password' => $request->get('password')]; //your custom parameters

        if (Auth::attempt($credentials, $request->has('remember')))
        {
            return redirect()->intended('/');
        }else{
            return redirect('/login')->with('message-error', 'Email ou Senha incorretos');
        }

        /*$email = $request->email;
        $password = $request->password;

        $user = User::where('email', $email)->first(); // buscando um registro do cliente por email

        if ($user) // encontrou o usuário
        {
            if (Hash::check($password, $user->senha)) // conferindo senha
            {
                Auth::login($user); // autentica o usuário
                return redirect()->intended('/');
            }
            else
            {
                return redirect('/login')->with('message-error', 'Senha inválida');
            }
        }
        else
        {
            return redirect('/login')->with('message-error', 'Email ou Senha incorretos');
        }*/
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}
