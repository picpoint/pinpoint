<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SharePinController extends Controller
{

    /**
     * Конроллер - поделиться пином с пользователем
     */

    public function sharePin(Request $request) {

        $userId = Auth::user()->id;

        News::create([
            'source_user' => $userId,
            'receiver_user' => $request->selectfreinds,
            'pin_id' => $request->pinid,
        ]);

        session()->flash('success', 'Вы поделились пином');

        return redirect()->route('pins.index');

    }

}
