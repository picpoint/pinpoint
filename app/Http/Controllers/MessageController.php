<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function index() {
        $title = "Сообщения | Pinpoint";
        $currentUser = Auth::user()->id;
        $allFreinds = Freind::where('user_id', '!=', $currentUser)->where('currentuser_id', '=', $currentUser)->get();

        return view('user.messages', compact('title', 'allFreinds'));
    }


    public function writeMessage(Request $request) {
//        dd($request->all());

        $title = "Сообщения | Pinpoint";
//        $currentUser = Auth::user()->id;
        $currentUserId = Auth::user()->id;
        $allFreinds = Freind::where('user_id', '!=', $currentUserId)->where('currentuser_id', '=', $currentUserId)->get();



        $request->validate([
            'idfreind' => 'required',
            'sendmessage' => 'required'
        ]);

        Message::create([
            'currentuser_id' => $currentUserId,
            'user_id' => $request->idfreind,
            'message' => $request->sendmessage,
        ]);


//        return true;


//        return view('user.messages', compact('title', 'allFreinds'));

    }

}
