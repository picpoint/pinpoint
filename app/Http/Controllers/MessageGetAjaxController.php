<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MessageGetAjaxController extends Controller
{

    public function index(Request $request, $id) {

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

        return $chat;
    }

}
