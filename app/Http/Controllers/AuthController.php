<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Buscar el usuario en la base de datos
        $user = User::query()
            ->where('email', $request->username)
            ->first();

        // Verificar si el usuario existe y la contraseña es correcta
        if ($user && Hash::check($request->password, $user->password)) {
            // Autenticar al usuario y redirigirlo
            Auth::login($user);
            return redirect()->intended('/');
        } else {
            // Retornar un mensaje de error
            return back()->withErrors([
                'message' => 'El usuario o la contraseña son incorrectos.',
            ]);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }
}
