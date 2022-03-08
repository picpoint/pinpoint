<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{

    public function index() {
        $title = "Сообщения | Pinpoint";
        $currentUser = Auth::user()->id;
//        $data = Message::where('currentuser_id', '=', $currentUser)->get();

        $arrRes = [];

        $dataMe = DB::table('messages')->where('currentuser_id', $currentUser)->pluck('user_id');

        foreach ($dataMe as $dtMe) {
            $arrRes[] = $dtMe;
        }


        $dataToMe = DB::table('messages')->where('user_id', $currentUser)->pluck('currentuser_id');

        foreach ($dataToMe as $dtTMe) {
            $arrRes[] = $dtTMe;
        }

        $usersWithMsg = array_unique($arrRes);

//        dd($usersWithMsg);

        foreach ($usersWithMsg as $key => $value) {
            $hasMsg[] = User::where('id', $value)->get();
        }

//        dd($hasMsg);


        return view('user.messages', compact('title','hasMsg'));
    }



    public function writeMessageForm(Request $request, $id) {
        $title = 'Чат | Pinpoint';
        $currentUser = Auth::user()->id;

        $chat = DB::table('messages')->where('currentuser_id', '=', $currentUser)->get();


        return view('user.messagesto', compact('title', 'chat'));
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
