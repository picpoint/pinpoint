<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\DB;

class SearchFreindController extends Controller
{

    public function search(Request $request) {

        $title = "Результаты поиска";


        $userName = Auth::user()->name;
        $currentuser_id = Auth::user()->id;
        $allFreinds = DB::table('freinds')->join('users', 'freinds.user_id', '=', 'users.id')->where('currentuser_id', $currentuser_id)->get();


        $request->validate([
            'searchfreind' => 'required'
        ]);


        $search = $request->searchfreind;

        $result = User::where('name', 'LIKE', "%{$search}%")->paginate(100);

        if($result->total() == 0) {
            $result = "По Вашему запросу ничего не найдено ... :-( ";
        }

        return view('user.freinds', compact('title', 'result', 'allFreinds'));

    }

}
