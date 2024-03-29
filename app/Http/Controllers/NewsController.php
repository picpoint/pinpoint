<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    /**
     * Ресурс контроллер для работы с новостями(репостами меток)
     *
     * Главная страница, с метками, которые репостнул пользователю друг
     */
    public function index()
    {
        $arrWhoSharepin = [];

        $title = "Новости | Pinpoint";
        $userId = Auth::user()->id;
        $allNews = News::where('receiver_user', $userId)->rightJoin('users', 'users.id', '=', 'source_user')->get();

        return view('user.news.newspage', compact('title', 'allNews', 'arrWhoSharepin'));
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
     * Метод удаления новости(репостнутого пина) из таблицы news
     */
    public function destroy($id)
    {
        News::destroy($id);
        session()->flash('success', 'Вы удалили пин');

        return redirect()->route('news.index');

    }
}
