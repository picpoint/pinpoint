<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class MessageController extends Controller
{

    public function index() {
        $title = "Сообщения | Pinpoint";
        $currentUser = Auth::user()->id;

        $arrRes = [];
        $hasMsg = [];

        $dataMe = DB::table('messages')->where('currentuser_id', $currentUser)->pluck('user_id');

        foreach ($dataMe as $dtMe) {
            $arrRes[] = $dtMe;
        }


        $dataToMe = DB::table('messages')->where('user_id', $currentUser)->pluck('currentuser_id');

        foreach ($dataToMe as $dtTMe) {
            $arrRes[] = $dtTMe;
        }

        $usersWithMsg = array_unique($arrRes);


        foreach ($usersWithMsg as $key => $value) {
            $hasMsg[] = User::where('id', $value)->get();
        }


        if (count($hasMsg) == 0) {
            $hasMsg = [];
        }


        return view('user.messages', compact('title','hasMsg'));
    }



    public function writeMessageForm(Request $request, $id) {
        $title = 'Чат | Pinpoint';
        $currentUser = Auth::user()->id;

        $cht = DB::table('messages')
            ->where('currentuser_id', '=', $currentUser)
            ->where('user_id', '=', $id);

        $chat = DB::table('messages')
            ->where('currentuser_id', '=', $id)
            ->where('user_id', '=', $currentUser)
            ->union($cht)
            ->orderBy('created_at')
            ->get();


        return view('user.messagesto', compact('title', 'chat', 'currentUser'));
    }



    public function writeMessageToUser(Request $request, $id) {
        $currentUser = Auth::user()->id;

        Message::create([
            'currentuser_id' => $currentUser,
            'user_id' => $id,
            'message' => $request->sendmsg,
        ]);


//        Redis::set('msg' . $currentUser, $request->sendmsg);
//        dump(Redis::get('msg'. $request->sendmsg));

        event(new MessageCreated($request->sendmsg));
//        MessageCreated::dispatch($request->sendmsg);

        return redirect()->route('messages.id', compact('id'));
    }


}
