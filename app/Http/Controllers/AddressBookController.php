<?php

namespace App\Http\Controllers;

use App\AddressBook;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class AddressBookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param AddressBook $model
     * @return Factory|View
     */
    public function index(AddressBook $model)
    {
        $data = $model->paginate(10);
        return view('addressbook.index', compact('data'));
    }


}
