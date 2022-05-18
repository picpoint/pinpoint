<?php

namespace App\Http\Controllers;

use App\Models\Freind;
use App\Models\Pin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PinController extends Controller
{
    /**
     * Ресурс контроллер для работы с пином
     *
     * Главная страница отображения всех пинов списком
     */
    public function index()
    {
        $title = 'Pins | Pinpoint';
        $userId = Auth::user()->id;
        $allPins = DB::table('pins')->where('user_id', $userId)->get();
        $allFreinds = Freind::where('currentuser_id', $userId)->get();

        return view('user.pins.pinspage', compact('title', 'allPins', 'allFreinds'));
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
     * Метод отображения формы редактирования пина
     */
    public function edit($id)
    {
        $title = 'Редактирование метки | Pinpoint';
        $pin = DB::table('pins')->where('id', $id)->get();
        return view('user.pins.pinedit', compact('title', 'id', 'pin'));
    }

    /**
     * Метод обновления пина
     *
     * $pinForEdit - отображаем конкретный пин который хотим отредактировать
     * перый if - если пользователь изменил комментарии
     * второй if - если пользователь сменил картинку(сохраняем её под тем же именем что и у предыдущей)
     * $nameFile - берём имя текущей картинки
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
                'image' => $request->pictfield->storeAs("img/$user_id", $nameFile)
            ]);
        }

        session()->flash('success', 'Запись обновлена');
        return redirect()->route('pins.index');
    }

    /**
     * Метод удаления конкретноно пина из БД
     * а так же удаление конкретно картинки данного пина с жёсткого диска
     */
    public function destroy($id)
    {
        $currentPin = DB::table('pins')->where('id', $id)->get();

        Pin::destroy($id);

        unlink("C:/OpenServer/domains/pinpoint/public/assets/users/" . $currentPin[0]->image);

        session()->flash('success', 'Запись удалена');
        return redirect()->route('pins.index');
    }
}
