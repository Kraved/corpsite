<?php

namespace App\Http\Controllers;

use App\Model\BirthDay;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class BirthDayController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     * @param BirthDay $model
     * @return Factory|View
     */
    public function index(BirthDay $model)
    {
        $data = $model->first();

        return view('birthday.index', compact('data'));
    }
}
