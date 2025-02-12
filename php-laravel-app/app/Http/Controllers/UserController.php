<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    // Показ формы регистрации
    public function showRegisterForm()
    {
        return view('register');
    }


    public function register(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = User::create([
           'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('success', 'Регистрация прошла успешно! Теперь войдите.');
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }

        return redirect('/dashboard')->with('success', 'Вы успешно вошли!');

    }
}
