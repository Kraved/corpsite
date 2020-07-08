<?php

namespace App\Http\Controllers;

use App\Model\News;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class NewsController extends Controller
{


    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @param News $news
     * @return Factory|View
     */
    public function index(News $news)
    {
        $data = $news->wherePublished('1')->paginate(10);
        return view('news.index', compact('data'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function show($id)
    {
        $data = News::find($id);
        return view('news.show', compact('data'));
    }
}
