<?php


namespace App\Http\Controllers\Management;


use App\Http\Controllers\Controller;
use App\Http\Requests\Management\AddressBookRequest;
use App\Model\AddressBook;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AddressBookController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:manager');
    }


   /**
     * Display a listing of the resource.
     *
     * @param AddressBook $model
     * @return Factory|View
     */
    public function index(AddressBook $model)
    {
        $data = $model->paginate(50);
        return view('addressbook.management.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        return view('addressbook.management.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AddressBookRequest $request
     * @param AddressBook $model
     * @return RedirectResponse
     */
    public function store(AddressBookRequest $request, AddressBook $model)
    {
        $data = $request->all();
        $result = $model->create($data);
        if ($result) {
            return redirect()
                ->route('addressbook.management.index')
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
     * @param int $id
     * @return Factory|View
     */
    public function edit(int $id)
    {
        $data = AddressBook::findOrFail($id);
        return view('addressbook.management.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AddressBookRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(AddressBookRequest $request, $id)
    {
        $record = AddressBook::findOrFail($id);
        $result = $record->fill($request->all())->save();
        if ($result) {
            return redirect()
                ->route('addressbook.management.index')
                ->with(['success' => 'Запись изменена добавлена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка изменения записи'])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $record = AddressBook::findOrFail($id);
        $result = $record->delete();
        if ($result) {
            return redirect()
                ->route('addressbook.management.index')
                ->with(['success' => 'Запись успешно удалена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка удаления записи'])
                ->withInput();
        }
    }
}
