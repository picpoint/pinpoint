<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index() {
        $title = "Сообщения | Pinpoint";
        $currentUser = Auth::user()->id;
        $allFreinds = Freind::where('user_id', '!=', $currentUser)->get();

        return view('user.messages', compact('title', 'allFreinds'));
    }

}
