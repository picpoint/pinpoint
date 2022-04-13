<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Настройки | Pinpoint';
        $id = Auth::user()->id;
        $raw = DB::table('users')->where('id', '=', $id)->get();

        $user = $raw[0];

        $dateOfReg = Carbon::parse($user->created_at)->format('d.m.Y');

        return view('user.settings', compact('title', 'user', 'dateOfReg'));

    }



    public function changeAvatar(Request $request) {

        $id = Auth::user()->id;
        $dataOfUser = User::find($id);

        $img = $request->file('fieldchangeavatar')->storeAs("/img/{$id}", 'avatar.jpg');

        DB::table('users')->where('id', $id)->update(['avatar' => $img]);

        return redirect()->route('settings');

    }



}
