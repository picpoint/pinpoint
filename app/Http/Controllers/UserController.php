<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function create() {
        $title = "Регистрация | Pinpoint";
        return view('user.registration', compact('title'));
    }


    public function store(Request $request) {
        $request->validate([
            'login' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->login,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        session()->flash('success', 'Вы зарегистрировались');

        Auth::login($user);

        return redirect()->route('personalpage');
    }


    public function loginForm() {
        $title = "PinPoint | Регистрация";
        return view('user.login', compact('title'));
    }


    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            return redirect()->route('personalpage');
        }

        return redirect()->back()->with('error', 'Логин или пароль неправильны...');

//        dd($request->all());
    }


    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }


}
