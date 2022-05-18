<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SettingsController extends Controller
{
    /**
     * Контроллер настройки и отображение данных по пользователю
     *
     * Метод отображения страницы с данными пользователя
     */
    public function index()
    {
        $title = 'Настройки | Pinpoint';
        $id = Auth::user()->id;
        $raw = DB::table('users')->where('id', '=', $id)->get();

        $user = $raw[0];

        $dateOfReg = Carbon::parse($user->created_at)->format('d.m.Y');

        return view('user.settings', compact('title', 'user', 'dateOfReg'));

    }


    /**
     * Метод изменения аватара пользователя
     */
    public function changeAvatar(Request $request) {

        $id = Auth::user()->id;

        $img = $request->file('fieldchangeavatar')->storeAs("/img/{$id}", 'avatar.jpg');

        DB::table('users')->where('id', $id)->update(['avatar' => $img]);

        return redirect()->route('settings');

    }



}
