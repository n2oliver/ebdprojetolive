<?php

namespace App\Http\Controllers\Auth;

use App\Usuario;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new tb_usuario, as well as the
    | authentication of existing tb_usuario. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect tb_usuario after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'nome' => 'required|max:255',
            'email' => 'required|email|max:255|unique:tb_usuario',
            'password' => 'required|min:6|confirmed',
            'nascimento' => 'required',
            'classe' => 'required',
            'autoridade' => 'required',

        ]);
    }

    /**
     * Create a new usuario instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return Usuario::create([
            'nome' => $data['nome'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'nascimento' => $data['nascimento'],
            'classe' => $data['classe'],
            'autoridade' => $data['autoridade'],
        ]);
    }
}
