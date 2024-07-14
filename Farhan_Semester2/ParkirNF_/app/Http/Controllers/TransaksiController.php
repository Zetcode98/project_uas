<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class TransaksiController extends Controller
{
    public function index()
    {
        $data_layout = [
            'title' => 'Halaman Transaksi'
        ];

        $list_transaksi =  Transaksi::all();
        View::share($data_layout);
        return view('transaksi.index', ['list_transaksi' => $list_transaksi]);
    }

    public function create()
    {
        $list_kendaraan = Kendaraan::all();
        return view('transaksi.form', ['transaksi' => new Transaksi(), 'list_kendaraan' => $list_kendaraan]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'tanggal' => 'required|date',
            'biaya' => 'required|numeric',
        ]);

        Transaksi::create($request->all());

        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $transaksi = Transaksi::find($id);
        $list_kendaraan = Kendaraan::all();
        return view('transaksi.form', ['transaksi' => $transaksi, 'list_kendaraan' => $list_kendaraan]);
    }

    public function view($id)
    {
        $transaksi = Transaksi::find($id);
        return view('transaksi.view', ['transaksi' => $transaksi]);
    }

    public function destroy($id)
    {
        Transaksi::find($id)->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus.');
    }
}