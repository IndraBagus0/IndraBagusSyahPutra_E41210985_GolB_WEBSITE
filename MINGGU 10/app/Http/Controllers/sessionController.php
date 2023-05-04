<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sessionController extends Controller
{
    //membuat session
    public function create(Request $request)
    {
        $request->session()->put('nama', 'indra bagus ');
        echo "Name has been added to session";
    }
    //menampilkan isi session
    public function show(Request $request)
    {
        if ($request->session()->has('nama')) {
            echo $request->session()->get('nama');
        } else {
            echo 'there is no seesion in database';
        }
    }
    //menghapus session
    public function delete(Request $request)
    {
        $request->session()->forget('nama');
        echo 'Data hasbeen deleted ';
    }
}
