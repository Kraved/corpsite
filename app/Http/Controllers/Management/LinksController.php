<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\LinksRequest;
use App\Model\Links;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Illuminate\View\View;

class LinksController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:manager');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $data = Links::all();
        return view('links.management.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('links.management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param LinksRequest $request
     * @return RedirectResponse|Redirector
     */
    public function store(LinksRequest $request)
    {
        $data = $request->all();
        $result = Links::create($data);
        if ($result) {
            return redirect()
                ->route('links.management.index')
                ->with(['success' => 'Ссылка успешно добавлена']);
        }else{
            return back()
                ->withErrors(['error' => 'Ошибка добавлена ссылки!'])
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
        $record = Links::findOrFail($id);
        $result = $record->delete();
        if ($result) {
            return redirect()
                ->route('links.management.index')
                ->with(['success' => 'Ссылка успешно удалена']);
        }else{
            return back()
                ->withErrors(['error' => 'Ошибка удаления ссылки!'])
                ->withInput();
        }
    }
}
