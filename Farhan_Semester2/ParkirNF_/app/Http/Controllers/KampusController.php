<?php

namespace App\Http\Controllers;

use App\Models\Kampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class KampusController extends Controller
{
    public function index()
    {
        $list_kampus = Kampus::all();
        return view('kampus.index', ['list_kampus' => $list_kampus]);
    }

    public function create()
    {
        return view('kampus.form', ['kampus' => new Kampus()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        Kampus::create($request->all());

        return redirect()->route('kampus.index')->with('success', 'Kampus berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kampus = Kampus::find($id);
        return view('kampus.form', ['kampus' => $kampus]);
    }

    public function view($id)
    {
        $kampus = Kampus::find($id);
        return view('kampus.view', ['kampus' => $kampus]);
    }

    public function destroy($id)
    {
        Kampus::find($id)->delete();
        return redirect()->route('kampus.index')->with('success', 'Kampus berhasil dihapus.');
    }
}
