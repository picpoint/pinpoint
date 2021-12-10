<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Freind;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class SearchFreindController extends Controller
{

    public function search(Request $request) {

        $title = "Результаты поиска";
        $currentUser = Auth::user()->id;
        $resFreinds = DB::table('freinds')->where('currentuser_id', '=', $currentUser)->get();

        $request->validate([
            'search' => 'required',
        ]);

        $fieldSearch = $request->search;
        $users = User::where('name', 'LIKE', "%{$fieldSearch}%")->get();

        return view('user.freinds', compact('users', 'title', 'resFreinds'));

    }

}
