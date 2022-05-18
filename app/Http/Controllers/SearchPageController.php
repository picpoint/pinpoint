<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchPageController extends Controller
{

    /**
     * Контроллер страницы поиска
     *
     * метод показа страницы поиска
     */

    public function index() {
        $title = "Поиск | Pinpoint";
        $result = '';
        return view('user.searchpage', compact('title', 'result'));
    }


    /**
     * Метод поиска(не строгий) друзей по Фамилии
     */
    public function search(Request $request) {
        $title = "Поиск | Pinpoint";
        $result = DB::table('users')->where('surname', 'LIKE', "%{$request->searchfield}%")->get();

        return view('user.searchpage', compact('title', 'result'));
    }


}
