<?php


namespace App\Http\Controllers\Management;


use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{

    public function __construct()
    {
//        $this->middleware('roles:moderator');
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
        return view('news.admin.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        // Сделать проверку группы moderator, или admin
        return view('news.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        // Сделать проверку группы moderator, или admin
        $data = $request->all();
        $data['author'] = 'test';
//        $data['author'] = Auth::user();
        $model = new News();
        $result = $model->create($data);
        if ($result) {
            return redirect()
                ->route('news.admin.index')
                ->with(['success' => 'Запись успешно добавлена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка добавления записи'])
                ->withInput();
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {
        // Сделать проверку группы moderator, admin или владелец
        $data = News::find($id);
        return view('news.admin.edit', compact('data'));
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
        // Сделать проверку группы moderator, admin или владелец
        $record = News::find($id);
        $data = $request->all();
        //        $data['author'] = Auth::user();
        $data['author'] = 'test';
        $result = $record->fill($request->all())->save();
        if ($result) {
            return redirect()
                ->route('admin.news.index')
                ->with(['success' => 'Запись успешно изменена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка изменения записи'])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $record = News::find($id);
        $result = $record->delete();
        if ($result) {
            return redirect()
                ->route('admin.news.index')
                ->with(['success' => 'Запись успешно удалена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка удаления записи'])
                ->withInput();
        }
    }
}
