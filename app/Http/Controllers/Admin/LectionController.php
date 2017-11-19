<?php
/**
 * Created by PhpStorm.
 * User: kjyer
 * Date: 19-Nov-17
 * Time: 1:03 AM
 */

namespace App\Http\Controllers\Admin;

use App\Models\Lection;
use Illuminate\Http\Request;

class LectionController
{
    public function index()
    {
        $lections = Lection::paginate(10);

        return view('lection.index', compact('lections'));
    }

    public function edit($id)
    {
        $lection = Lection::find($id);

        return view('lection.edit', compact('lection'));
    }

    public function update(Request $request, $id)
    {
        $lection = Lection::find($id);

        $lection->title = $request->title;
        $lection->description = $request->description;
        $lection->url = $request->url;

        $lection->update();

        return redirect()->back();
    }
}