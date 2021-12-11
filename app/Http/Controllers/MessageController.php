<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function index() {
        $title = "Сообщения | Pinpoint";
        return view('user.messages', compact('title'));
    }

}
