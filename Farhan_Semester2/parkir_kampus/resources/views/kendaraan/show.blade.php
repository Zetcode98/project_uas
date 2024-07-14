@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Data Kendaraan</h1>
    <a href="{{ route('kendaraan.create') }}" class="btn btn-primary">Tambah Kendaraan</a>
    <table class="table">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Pemilik</th>
                <th>No. Polisi</th>
                <th>Tahun Beli</th>
                <th>Jenis Kendaraan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kendaraan as $item)
                <tr>
                    <td>{{ $item->merk }}</td>
                    <td>{{ $item->pemilik }}</td>
                    <td>{{ $item->nopol }}</td>
                    <td>{{ $item->thn_beli }}</td>
                    <td>{{ $item->jenis->nama }}</td>
                    <td>
                        <a href="{{ route('kendaraan.show', $item->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('kendaraan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('kendaraan.destroy', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
