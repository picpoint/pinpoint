<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Events\MessageCreateEvent;
use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class MessageController extends Controller
{

    /**
     * Контроллер для работы с сообщениями
     *
     * метод показа страницы с сообщениями
     * которые отсылал пользователь и которые присылали данному пользователю
     *
     * $dataMe - массив id-шников(пользователей) которым я отправил сообщения
     * $dataToMe - массив id-шников(пользователей) которые отправили сообщения мне
     * $usersWithMsg - массив уникальных(не повторяющихся) id-шников кто мне отправлял сообщения и кому я отправлял
     * $hasMsg[] - все записи из БД с ообщениями от поьлзователя и пользователю
     */
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


    /**
     * Метод показа сообщений текущего пользователя конкретному пользователю
     * $cht - сообщения которые написал пользователь
     * $chat - все записи сообщений которые написаны пользователю и которые написаны пользователем
     */
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


        return view('user.messagesto', compact('title', 'chat', 'currentUser', 'id'));
    }


    /**
     * Метод создания сообщения конкретному пользователю
     */
    public function writeMessageToUser(Request $request, $id) {
        $currentUser = Auth::user()->id;
        dd(Message::create($request->all()));


//        event(new MessageCreateEvent($message));
//        MessageCreateEvent::dispatch('Пользователь создал пин');


        return redirect()->route('messages.id', compact('id', 'currentUser'));
    }


}
