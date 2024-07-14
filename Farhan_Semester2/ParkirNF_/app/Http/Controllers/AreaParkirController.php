<?php

namespace App\Http\Controllers;

use App\Models\AreaParkir;
use App\Models\Kampus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AreaParkirController extends Controller
{
    public function index()
    {
        $data_layout = [
            'title' => 'Halaman AreaParkir'
        ];

        $list_areaparkir =  AreaParkir::all();
        View::share($data_layout);
        return view('areaparkir.index', ['list_areaparkir' => $list_areaparkir]);
    }

    public function create()
    {
        $list_kampus = Kampus::all();
        return view('areaparkir.form', ['areaParkir' => new AreaParkir(), 'list_kampus' => $list_kampus]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kapasitas' => 'required|integer',
            'keterangan' => 'nullable',
            'kampus_id' => 'required|exists:kampus,id',
        ]);

        AreaParkir::create($request->all());

        return redirect()->route('areaparkir.index')->with('success', 'Area Parkir berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $areaParkir = AreaParkir::find($id);
        $list_kampus = Kampus::all();
        return view('areaparkir.form', ['areaParkir' => $areaParkir, 'list_kampus' => $list_kampus]);
    }

    public function view($id)
    {
        $areaParkir = AreaParkir::find($id);
        return view('areaparkir.view', ['areaParkir' => $areaParkir]);
    }

    public function destroy($id)
    {
        AreaParkir::find($id)->delete();
        return redirect()->route('areaparkir.index')->with('success', 'Area Parkir berhasil dihapus.');
    }
}
