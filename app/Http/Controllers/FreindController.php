<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FreindController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userName = Auth::user()->name;
        $currentuser_id = Auth::user()->id;
        $title = "Друзья $userName";
        $result = "Начните поиск друзей";


        $allFreinds = DB::table('freinds')->join('users', 'freinds.user_id', '=', 'users.id')->where('currentuser_id', $currentuser_id)->get();

//        dd($allFreinds);


        return view('user.freinds', compact('title', 'result', 'allFreinds'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $currentuser_id = Auth::user()->id;
        $user_freind = $request->id;

        Freind::create([
            'currentuser_id' => $currentuser_id,
            'user_id' => $user_freind
        ]);

        Freind::create([
            'currentuser_id' => $user_freind,
            'user_id' => $currentuser_id
        ]);

        return redirect()->route('personalpage');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
