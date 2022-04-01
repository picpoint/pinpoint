<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function index() {
        $title = 'Настройки | Pinpoint';
        return view('user.settings', compact('title'));
    }

}
