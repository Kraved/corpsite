<?php

namespace App\Http\Controllers;

use App\Model\BirthDay;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class BirthDayController extends Controller
{
    /**
     * Display a listing of the resource.
     * @param BirthDay $model
     * @return Factory|View
     */
    public function index(BirthDay $model)
    {
        $data = $model->get();
        $data = $data->keyBy('month');

        return view('birthday.index', compact('data'));
    }
}
