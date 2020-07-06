<?php


namespace App\Http\Controllers\Admin;


use App\Model\AddressBook;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AddressBookController
{
   /**
     * Display a listing of the resource.
     *
     * @param AddressBook $model
     * @return Factory|View
     */
    public function index(AddressBook $model)
    {
        $data = $model->paginate(50);
        return view('admin.addressbook.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Factory|View
     */
    public function create()
    {
        // Сделать проверку группы moderator, admin
        return view('admin.addressbook.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param AddressBook $model
     * @return RedirectResponse
     */
    public function store(Request $request, AddressBook $model)
    {
        // Сделать проверку группы moderator, admin
        $data = $request->all();
        $result = $model->create($data);
        if ($result) {
            return redirect()
                ->route('admin.addressbook.index')
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
        // Сделать проверку группы moderator, admin
        $data = AddressBook::find($id);
        return view('admin.addressbook.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Сделать проверку группы moderator, admin
        $record = AddressBook::find($id);
        $result = $record->fill($request->all())->save();
        if ($result) {
            return redirect()
                ->route('admin.addressbook.index')
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
        $record = AddressBook::find($id);
        $result = $record->delete();
        if ($result) {
            return redirect()
                ->route('admin.addressbook.index')
                ->with(['success' => 'Запись успешно удалена']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка удаления записи'])
                ->withInput();
        }
    }
}
