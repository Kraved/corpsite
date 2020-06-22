<?php

namespace App\Http\Controllers;

use App\Model\News;
use App\Model\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $data = $news->paginate(10);
        return view('news.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['author'] = 'test';
//        $data['author'] = Auth::user();
        $model = new News();
        $result = $model->create($data);
        if ($result) {
            return redirect()
                ->route('news.index')
                ->with(['success' => 'Запись успешно добавлена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка добавления записи'])
                ->withInput();
        }
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $data = News::find($id);
        return view('news.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $record = News::find($id);
        $data = $request->all();
        //        $data['author'] = Auth::user();
        $data['author'] = 'test';
        $result = $record->fill($request->all())->save();
        if ($result) {
            return redirect()
                ->route('news.index')
                ->with(['success' => 'Запись успешно добавлена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка добавления записи'])
                ->withInput();
        }
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
