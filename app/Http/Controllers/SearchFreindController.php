<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchFreindController extends Controller
{

    public function search() {
        $result = User::all();
        dd($result);
    }

}
