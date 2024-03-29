<?php

namespace App\Http\Controllers;

use App\Events\CreatePinEvent;
use App\Models\News;
use App\Models\Pin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CreatePinController extends Controller
{
    /**
     * ресурс контроллер для создания пина на карте
     *
     * главная страница на которой показываются все пины текущего юзера
     * а так же пины которые были репостнуты другом
     */
    public function index()
    {
        $title = Auth::user()->name;
        $user_id = Auth::user()->id;
        $pins = DB::table('pins')->where('user_id', $user_id)->get();
        $sharePins = News::where('receiver_user', $user_id)->get();

        return view('user.personalpage', compact('title', 'pins', 'sharePins'));
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
     * Создание пина и сохранение его в БД
     */
    public function store(Request $request)
    {

        $user_id = Auth::user()->id;
        $img = $request->file('upfile')->store("img/{$user_id}");

        $pinCreated = Pin::create([
            'user_id' => $user_id,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'commentaries' => $request->commentaries,
            'image' => $img

        ]);

//        event(new CreatePinEvent($pinCreated));
//        event(new CreatePinEvent($request->msgNotification));
        CreatePinEvent::dispatch('Пользователь создал пин');


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
