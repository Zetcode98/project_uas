@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Kendaraan</h2>
    <form action="{{ route('parkir.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="merk">Merk Kendaraan:</label>
            <input type="text" name="merk" id="merk" class="form-control" value="{{ old('merk') }}" required>
        </div>
        <div class="form-group">
            <label for="pemilik">Nama Pemilik:</label>
            <input type="text" name="pemilik" id="pemilik" class="form-control" value="{{ old('pemilik') }}" required>
        </div>
        <div class="form-group">
            <label for="nopol">Nomor Polisi:</label>
            <input type="text" name="nopol" id="nopol" class="form-control" value="{{ old('nopol') }}" required>
        </div>
        <div class="form-group">
            <label for="thn_beli">Tahun Beli:</label>
            <input type="text" name="thn_beli" id="thn_beli" class="form-control" value="{{ old('thn_beli') }}" required>
        </div>
        <div class="form-group">
            <label for="kapasitas_kursi">Kapasitas Kursi:</label>
            <input type="number" name="kapasitas_kursi" id="kapasitas_kursi" class="form-control" value="{{ old('kapasitas_kursi') }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi:</label>
            <textarea name="deskripsi" id="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
        </div>
        <div class="form-group">
            <label for="jenis_kendaraan_id">Jenis Kendaraan:</label>
            <select name="jenis_kendaraan_id" id="jenis_kendaraan_id" class="form-control" required>
                @foreach($jenis as $item)
                    <option value="{{ $item->id }}" {{ old('jenis_kendaraan_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
