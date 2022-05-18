<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{

    /**
     * Контроллер пользователя с базовыми методами
     *
     * метод отображения формы регистрации
     */

    public function create() {
        $title = "Регистрация | Pinpoint";
        return view('user.registration', compact('title'));
    }


    /**
     * Метод регистрации пользователя
     * Auth::login($user) - авторизация сразу после регистрации в ЛК
     */
    public function store(Request $request) {

        $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'surname' => $request->surname,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);


        session()->flash('success', 'Вы зарегистрировались');

        Auth::login($user);

        return redirect()->route('personalpage');
    }


    /**
     * Форма логирования на сайте
     */
    public function loginForm() {
        $title = "PinPoint | Регистрация";
        return view('user.login', compact('title'));
    }


    /**
     * Метод логирования на сайте с проверкой логина и пароля
     */
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

    }


    /**
     * Метод разлогирования
     */
    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }


}
