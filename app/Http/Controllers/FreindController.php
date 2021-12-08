<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FreindController extends Controller
{

    public function index() {
        $title = "Друзья | Picpoint";
        $users = "Начните поиск друзей";
        return view('user.freinds', compact('title', 'users'));
    }

    public function addToFreind(Request $request) {
//        dump(Auth::user()->id);
//        dd($request->id);

        $currentUserId = Auth::user()->id;
        $freindId = $request->id;

        Freind::create([
            'currentuser_id' => $currentUserId,
            'user_id' => $freindId
        ]);

        Freind::create([
            'currentuser_id' => $freindId,
            'user_id' => $currentUserId
        ]);

        return redirect()->route('freinds');

    }

}
