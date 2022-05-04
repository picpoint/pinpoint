<?php

namespace App\Http\Controllers;

use App\Models\Pin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Pins | Pinpoint';
        $userId = Auth::user()->id;
        $allPins = DB::table('pins')->where('user_id', $userId)->get();
        return view('user.pins.pinspage', compact('title', 'allPins'));
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
        //
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
        $title = 'Редактирование метки | Pinpoint';
        $pin = DB::table('pins')->where('id', $id)->get();
        return view('user.pins.pinedit', compact('title', 'id', 'pin'));
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
        $user_id = Auth::user()->id;

        $pinForEdit = Pin::find($id);
        $pin = DB::table('pins')->where('id', $id)->get();

        if ($request->commentaries != $pin[0]->commentaries) {
            $pinForEdit->update([
                'commentaries' => $request->commentaries,
            ]);
        }

        $str = "img/$user_id/";
        $nameFile = str_replace($str, '', $pin[0]->image);


        if ($request->pictfield != null) {
            $pinForEdit->update([
                'image' => $request->pictfield->storeAs("img/$user_id/", $nameFile)
            ]);
        }

        session()->flash('success', 'Запись обновлена');
        return redirect()->route('pins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_id = Auth::user()->id;

        dd($user_id);

        $rawData = DB::table('pins')->where('id', $id)->get();

        dd($rawData[0]->image);

        Pin::destroy($id);

        session()->flash('success', 'Запись удалена');
        return redirect()->route('pins.index');
    }
}
