<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{

    public function index() {
        $title = "Сообщения | Pinpoint";
        $currentUser = Auth::user()->id;
        $data = Message::where('currentuser_id', '=', $currentUser)->get();

        return view('user.messages', compact('title', 'data'));
    }


    public function writeMessageForm(Request $request, $id) {
        $title = 'Чат | Pinpoint';
        $currentUser = Auth::user()->id;

        return view('user.messagesto', compact('title'));
    }


    
    public function writeMessageToUser(Request $request, $id) {
        $currentUser = Auth::user()->id;

        Message::create([
            'currentuser_id' => $currentUser,
            'user_id' => $id,
            'message' => $request->sendmsg,
        ]);


        return redirect()->route('messages.id', compact('id'));
    }


}
