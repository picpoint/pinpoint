<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchPageController extends Controller
{

    public function index() {
        $title = 'Поиск';
        $result = '';
        return view('user.searchpage', compact('title', 'result'));
    }


    public function search(Request $request) {
//        dd($request->all());
        $title = 'Поиск';
        $result = DB::table('users')->where('name', 'LIKE', "%{$request->searchfield}%")->get();

        return view('user.searchpage', compact('result', 'title'));
    }


}
