<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonalPageController extends Controller
{


    public function index() {
        $title = "Personal page";
        return view('user.personalpage', compact('title'));
    }

}
