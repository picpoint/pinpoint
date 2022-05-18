<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Контроллер для показа главной страницы
     */
    public function index() {
        $title = 'Добро пожаловать | Pinpoint';
        return view('index', compact('title'));
    }

}
