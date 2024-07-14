<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;

class JenisController extends Controller
{
    public function index()
    {
        $list_jenis = Jenis::all();
        return view('jenis.index', ['list_jenis' => $list_jenis]);
    }

    public function create()
    {
        return view('jenis.form', ['jenis' => new Jenis()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        Jenis::create($request->all());

        return redirect()->route('jenis.index')->with('success', 'Jenis berhasil didaftarkan.');
    }

    public function edit($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.form', ['jenis' => $jenis]);
    }

    public function view($id)
    {
        $jenis = Jenis::find($id);
        return view('jenis.view', ['jenis' => $jenis]);
    }

    public function destroy($id)
    {
        Jenis::find($id)->delete();
        return redirect()->route('jenis.index')->with('success', 'Jenis berhasil dihapus.');
    }
}
