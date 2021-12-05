<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreindController extends Controller
{

    public function index() {
        $title = "Друзья | Picpoint";
        return view('user.freinds', compact('title'));
    }

}
