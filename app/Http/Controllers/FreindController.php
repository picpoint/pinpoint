<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FreindController extends Controller
{

    public function index() {
        $title = "Друзья | Pinpoint";
        return view('user.freinds', compact('title'));
    }


    public function addToFreind(Request $request, $id) {
        dump($id);
        dd($request->all());
    }


}
