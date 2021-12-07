<?php

namespace App\Http\Controllers;

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
        dump(Auth::user()->id);
        dd($request->all());
    }

}
