<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Parkir;
use App\Models\Jenis;
use App\Models\JenisKendaraan;

class ParkirController extends Controller
{
    public function index()
    {
        $list_parkir = Parkir::all();
        return view('parkir.index', ['list_parkir' => $list_parkir]);
    }
    
    public function __construct()
    {
        $this->middleware('auth')->except(['create']);
    }

    public function create()
    {
        $jenis = JenisKendaraan::all();
        return view('parkir.create', compact('jenis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'pemilik' => 'required',
            'nopol' => 'required',
            'thn_beli' => 'required',
            'deskripsi' => 'required',
            'kapasitas_kursi' => 'required',
            'jenis_kendaraan_id' => 'required',
        ]);

        Parkir::create($request->all());

        return redirect()->route('parkir.index')->with('success', 'Kendaraan berhasil didaftarkan.');
    }

    public function edit($id)
    {
        $parkir = Parkir::find($id);
        return view('parkir.form', ['parkir' => $parkir]);
    }

    public function view($id)
    {
        $parkir = Parkir::find($id);
        return view('parkir.view', ['parkir' => $parkir]);
    }

    public function destroy($id)
    {
        Parkir::find($id)->delete();
        return redirect()->route('parkir.index')->with('success', 'Kendaraan berhasil dihapus.');
    }

}