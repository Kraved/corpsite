<?php


namespace App\Http\Controllers\Management;


use App\Http\Controllers\Controller;
use App\Http\Requests\Management\NewsRequest;
use App\Model\News;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class NewsController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:manager');
    }

    /**
     * Display a listing of the resource.
     *
     * @param News $model
     * @return Factory|View
     */
    public function index(News $model)
    {
        $data = $model
            ->with(['user:id,name'])
            ->orderByDesc('id')
            ->paginate(25);
        return view('news.management.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {

        return view('news.management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsRequest $request
     * @return RedirectResponse
     */
    public function store(NewsRequest $request)
    {

        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
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
        $data = News::findOrFail($id);
        return view('news.management.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsRequest $request
     * @param  int  $id
     * @return RedirectResponse
     */
    public function update(NewsRequest $request, $id)
    {
        // Сделать проверку группы moderator, admin или владелец
        $record = News::findOrFail($id);
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
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
        $record = News::findOrFail($id);
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
