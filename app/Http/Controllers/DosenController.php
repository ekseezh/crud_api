<?php

namespace App\Http\Controllers;

use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function create(Request $request)
    {
        $dosen = Dosen::create($request->all());
        return response()->json($dosen, 201);
    }

    public function read()
    {
        $dosen = Dosen::all();
        return response()->json($dosen, 200);
    }

    public function update(Request $request, $id)
    {
        $dosen = Dosen::findOrFail($id);
        $dosen->update($request->all());
        return response()->json($dosen, 200);
    }

    public function delete($id)
    {
        Dosen::findOrFail($id)->delete();
        return response()->json('Deleted Successfully', 200);
    }
}
