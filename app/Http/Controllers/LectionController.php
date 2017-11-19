<?php

namespace App\Http\Controllers;

use App\Models\Lection;
use Illuminate\Http\Request;

class LectionController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lections = Lection::paginate(10);

        return view('lection.index', compact('lections'));
    }

    public function show($id)
    {
        $lection = Lection::find($id);

        return view('lection.view', compact('lection'));
    }
}
