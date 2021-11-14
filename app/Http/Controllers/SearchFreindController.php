<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchFreindController extends Controller
{

    public function search(Request $request) {

        $title = "Результаты поиска";

        $request->validate([
            'searchfreind' => 'required'
        ]);


        $search = $request->searchfreind;

        $result = User::where('name', 'LIKE', "%{$search}%")->paginate(100);

        if($result->total() == 0) {
            $result = "По Вашему запросу ничего не найдено ... :-( ";
        }

        return view('user.freinds', compact('title', 'result'));

    }

}
