<?php

namespace App\Http\Controllers;

use App\Models\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function create(Request $request)
    {
        $makul = Makul::create($request->all());
        return response()->json($makul, 201);
    }

    public function read()
    {
        $makul = Makul::all();
        return response()->json($makul, 200);
    }

    public function update(Request $request, $id)
    {
        $makul = Makul::findOrFail($id);
        $makul->update($request->all());
        return response()->json($makul, 200);
    }

    public function delete($id)
    {
        Makul::findOrFail($id)->delete();
        return response()->json('Deleted Successfully', 200);
    }
}
