<?php

namespace App\Http\Controllers;

use App\Model\Documents;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class DocumentsController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @param Documents $model
     * @return Factory|View
     */
    public function index(Documents $model)
    {
        $data['regulations'] = $model->whereType('regulations')->get();
        $data['templates'] = $model->whereType('templates')->get();
        return view('documents.index', compact('data'));
    }
}
