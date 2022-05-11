<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SharePinController extends Controller
{

    public function sharePin(Request $request) {
        dd($request->all());
    }

}
