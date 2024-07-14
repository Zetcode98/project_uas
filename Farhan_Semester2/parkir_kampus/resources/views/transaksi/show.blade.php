@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Transaksi</h1>
        <a href="{{ route('admin.transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Mulai</th>
                    <th>Akhir</th>
                    <th>Keterangan</th>
                    <th>Biaya</th>
                    <th>Kendaraan</th>
                    <th>Area Parkir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transaksi as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->mulai }}</td>
                        <td>{{ $item->akhir }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->biaya }}</td>
                        <td>{{ $item->kendaraan->merk }}</td>
                        <td>{{ $item->area_parkir->nama }}</td>
                        <td>
                            <a href="{{ route('admin.transaksi.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.transaksi.destroy', $item->id) }}" method="POST" style="display:inline-block;">
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