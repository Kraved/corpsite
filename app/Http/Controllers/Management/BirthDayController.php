<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Requests\Management\BirthDayRequest;
use App\Model\BirthDay;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class BirthDayController extends Controller
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
        $data = BirthDay::first();
        return view('birthday.management.index', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Factory|View
     */
    public function edit($id)
    {
        $data = BirthDay::findOrFail($id);
        return view('birthday.management.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param BirthDayRequest $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(BirthDayRequest $request, $id)
    {
        $data = $request->all();
        $result = app(BirthDay::class)->findOrFail($id)->update($data);
        if ($result) {
            return redirect()
                ->route('birthday.management.index')
                ->with(['success' => 'Документ успешно изменен']);
        } else {
            return back()
                ->withErrors(['error' => 'Ошибка изменения документа'])
                ->withInput();
        }
    }

}
