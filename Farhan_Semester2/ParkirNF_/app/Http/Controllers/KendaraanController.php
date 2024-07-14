<?php

namespace App\Http\Controllers;

use App\Models\Jenis;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class KendaraanController extends Controller
{
    public function index()
    {
        $data_layout = [
            'title' => 'Halaman Kendaraan'
        ];

        $list_kendaraan =  Kendaraan::all();
        View::share($data_layout);
        return view('kendaraan.index', ['list_kendaraan' => $list_kendaraan]);
    }

    public function create()
    {
        $list_jenis = Jenis::all();
        return view('kendaraan.form', ['kendaraan' => new Kendaraan(), 'list_jenis' => $list_jenis]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'merk' => 'required',
            'pemilik' => 'required',
            'nopol' => 'required',
            'thn_beli' => 'required',
            'deskripsi' => 'required',
            'jenis_kendaraan_id' => 'required',
            'kapasitas_kursi' => 'required|integer',
            'rating' => 'required',
            'jenis_kendaraan_id' => 'required|exists:jenis,id',
        ]);

        Kendaraan::create($request->all());

        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $kendaraan = Kendaraan::find($id);
        $list_jenis = Jenis::all();
        return view('kendaraan.form', ['kendaraan' => $kendaraan, 'list_jenis' => $list_jenis]);
    }

    public function view($id)
    {
        $kendaraan = Kendaraan::find($id);
        return view('kendaraan.view', ['kendaraan' => $kendaraan]);
    }

    public function destroy($id)
    {
        Kendaraan::find($id)->delete();
        return redirect()->route('kendaraan.index')->with('success', 'Kendaraan berhasil dihapus.');
    }
}