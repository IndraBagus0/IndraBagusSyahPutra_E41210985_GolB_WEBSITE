<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class ApiPendidikanController extends Controller
{
    public function index()
    {
        $pendidikan = Pendidikan::all();
        return response()->json($pendidikan);
    }

    public function show($id)
    {
        $pendidikan = Pendidikan::find($id);
        if (!$pendidikan) {
            return response()->json([
                'message' => 'Pendidikan not found'
            ], 404);
        }
        return response()->json($pendidikan);
    }

    public function store(Request $request)
    {
        Pendidikan::create($request->all());
        return response()->json([
            'status' => "ok",
            'message' => 'Pendidikan berhasil ditambah',
        ]);
    }

    public function update(Request $request, $id)
    {
        
        $pendidikan = Pendidikan::find($id);
        $pendidikan->update($request->all());
        if (!$pendidikan) {
            return response()->json([
                'message' => 'Pendidikan not found'
            ], 404);
        }
        return response()->json([
            'status' => "ok",
            'message' => 'Pendidikan berhasil dirubah',
        ]);
    }

    public function destroy($id)
    {
        $pendidikan = Pendidikan::find($id);
        if (!$pendidikan) {
            return response()->json([
                'message' => 'Pendidikan not found'
            ], 404);
        }
        $pendidikan->delete();
        return response()->json([
            'status' => "ok",
            'message' => 'Pendidikan berhasil dihapus',
        ]);
    }
}
