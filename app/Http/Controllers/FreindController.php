<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FreindController extends Controller
{

    public function index() {
        $title = "Друзья | Picpoint";
        $users = "Начните поиск друзей";
//        $resultFreinds = '';
        $resultFreinds = DB::table('freinds')->get();
        return view('user.freinds', compact('title', 'users', 'resultFreinds'));
    }


    public function addToFreind(Request $request) {
        $resultFreinds = '';
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

        return redirect()->route('personalpage');
    }


    public function showFreinds() {
        $currentUser = Auth::user()->id();

        $resultFreinds = DB::table('freinds')->get();

        return view('freinds.show', compact('resultFreinds'));

    }


}
