<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\DocumentRequest;
use App\Model\Documents;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class DocumentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:manager');
    }

    /**
     * Display a listing of the resource.
     *
     * @param Documents $model
     * @return Factory|View
     */
    public function index(Documents $model)
    {
        $data = $model
            ->with(['user:id,name'])
            ->paginate(25);
        return view('documents.management.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {

        return view('documents.management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DocumentRequest $request
     * @return RedirectResponse
     */
    public function store(DocumentRequest $request)
    {

        $data['name'] = $request->name;
        $data['type'] = $request->type;
        $data['path'] = $request->file('file')
            ->storeAs($request->type, $request->name . "." . $request->file('file')
                    ->getClientOriginalExtension(), 'public');
        $data['user_id'] = Auth::user()->id;
        $result = Documents::create($data);
        if ($result) {
            return redirect()
                ->route('documents.management.index')
                ->with(['success' => 'Документ успешно добавлен']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка добавления документа'])
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
        $record = Documents::find($id);
        $result = Storage::delete('public/' . $record->path);
        if (! $result)
            return back()
                ->withErrors(['error' => 'Ошибка удаления документа'])
                ->withInput();
        $result = $record->delete();
        if ($result) {
            return redirect()
                ->route('documents.management.index')
                ->with(['success' => 'Документ успешно удален']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка удаления документа'])
                ->withInput();
        }
    }
}
