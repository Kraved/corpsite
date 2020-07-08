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
     * @param News $model
     * @return Factory|View
     */
    public function index(News $model)
    {
        $data = $model->paginate(50);
        return view('news.management.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        // Сделать проверку группы moderator, или admin
        return view('news.management.create');
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
                ->route('news.management.index')
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
        return view('news.management.edit', compact('data'));
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
                ->route('news.management.index')
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
                ->route('news.management.index')
                ->with(['success' => 'Запись успешно удалена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка удаления записи'])
                ->withInput();
        }
    }
}
