<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class FreindController extends Controller
{
    /**
     * Контроллер для добавления друзей
     *
     * главная страница, отображающая всех текущих друзей
     */
    public function index() {
        $title = "Друзья | Pinpoint";
        $freinds = '';
        $currentUser = Auth::user()->id;
        $freinds = Freind::where('currentuser_id', '=', $currentUser)->get();

        return view('user.freinds', compact('title', 'freinds'));
    }


    /**
     * Добавить пользователя в друзья
     */
    public function addToFreind(Request $request, $id) {
        $currentUser = Auth::user()->id;

        Freind::create([
            'currentuser_id' => $currentUser,
            'user_id' => $id,
        ]);

        Freind::create([
            'currentuser_id' => $id,
            'user_id' => $currentUser,
        ]);

        return redirect()->route('search');

    }


    public function showFreinds() {
        $currentUser = Auth::user()->id();

        $freinds = DB::table('freinds')->where('currentuser_id', '=', $currentUser)->get();

        return view('user.freinds', compact('freinds'));

    }


}
