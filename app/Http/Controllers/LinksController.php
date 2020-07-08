<?php

namespace App\Http\Controllers;

use App\Model\Links;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class LinksController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @param Links $model
     * @return Factory|View
     */
    public function index(Links $model)
    {
        $data = $model->get();
        return view('links.index', compact('data'));
    }
}
