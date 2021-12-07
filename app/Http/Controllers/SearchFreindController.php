<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchFreindController extends Controller
{

    public function search(Request $request) {

        $title = "Результаты поиска";

        $request->validate([
            'search' => 'required',
        ]);

        $result = $request->search;
        $users = User::where('name', 'LIKE', "%{$result}%")->get();

        return view('user.freinds', compact('users', 'title'));

    }

}
