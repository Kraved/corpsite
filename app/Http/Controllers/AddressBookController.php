<?php

namespace App\Http\Controllers;

use App\Model\AddressBook;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AddressBookController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @param AddressBook $model
     * @return Factory|View
     */
    public function index(AddressBook $model)
    {
        $data = $model->paginate(25);
        return view('addressbook.index', compact('data'));
    }


}
