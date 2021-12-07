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

        $fieldSearch = $request->search;
        $users = User::where('name', 'LIKE', "%{$fieldSearch}%")->get();

        return view('user.freinds', compact('users', 'title'));

    }

}
