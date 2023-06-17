<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function create(Request $request)
    {
        $mahasiswa = Mahasiswa::create($request->all());
        return response()->json($mahasiswa, 201);
    }

    public function read()
    {
        $mahasiswa = Mahasiswa::all();
        return response()->json($mahasiswa, 200);
    }

    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->update($request->all());
        return response()->json($mahasiswa, 200);
    }

    public function delete($id)
    {
        Mahasiswa::findOrFail($id)->delete();
        return response()->json('Deleted Successfully', 200);
    }
}
