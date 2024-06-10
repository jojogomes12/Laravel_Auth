<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        
        try {
            $user = Socialite::driver('google')->stateless()->user();
            
            // Salvar os dados do usuário na sessão
            session(['user' => $user]);
            
            // Ou você pode salvar apenas os campos específicos que deseja
            // session(['user_email' => $user->email]);
            // session(['user_name' => $user->name]);
            
            // Redirecionar para a página desejada
            // return redirect()->route('index')->with('user', $user);
            return view('index')->with('user',$user);
            
        } catch (\Exception $e) {
            // Lidar com exceções, se necessário
            dd($e->getMessage());
        }
    }
}
