<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchPageController extends Controller
{

    public function index() {
        $title = 'Поиск';
        return view('user.searchpage', compact('title'));
    }

}
