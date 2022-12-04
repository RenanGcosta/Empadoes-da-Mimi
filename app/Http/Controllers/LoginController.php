<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index');
    }

    public function auth(Request $request)
    {
        $credenciais = $request->validate(
            [
                'email' => ['required', 'email'],
                'password' => ['required'],

            ],
            [
                'email.required' => 'O campo e-mail é obrigatório',
                'email.email' => 'O email informado não é válido',
                'password.required' => 'O campo senha é obrigatório',
            ]);


        if(Auth::attempt($credenciais))
        {
            $request->session()->regenerate();
            return redirect()->intended(route('dashboard.index'));
        }else{
            return redirect()->back()->with('erro', 'Email ou senha inválida');
        }
    }
}