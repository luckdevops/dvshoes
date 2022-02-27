<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:20'],
            'sobrenome' => ['required', 'string', 'max:60'],
            'cpf' => ['required', 'string', 'min:11', 'max:11'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $request)
    {
        $length = 16;
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
        do {
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $charactersLength - 1)];
            }
            $token_validacao = $randomString."cliente";
            $check_code = User::where('token_validation', $token_validacao)->first();
        } while($check_code != null);

        User::create([
            'name' => $request->nome,
            'sobrenome' => $request->sobrenome,
            'cpf' => $request->cpf,
            'perfil' => User::cliente,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'token_validation' => $token_validacao,
        ]);

        //$this->sendConfirmEmail($token_validacao, $request->nome, $request->email);

        return redirect('/login')->with('message-success', 'Cadastro realizado. Valide-o pelo seu email.');
    }

    public function sendConfirmEmail($token, $name, $email)
    {
        $msg = [
            "Olá, ".$name,
            "Obrigado por realizar o seu cadastro na DV'SHOES.",
            "Realize a validação do seu e-mail para poder realizar suas compras, aproveitar nossas promoções e conhecer novas coleções."
        ];
        Mail::send('mail.confirm-email',['msg' => $msg, 'token' => $token], function($dados) use ($email) {
            $dados->from("emptycross@gmail.com", "DV'SHOES");
            $dados->to($email)->subject('Validação de e-mail.');
        });
    }
}
