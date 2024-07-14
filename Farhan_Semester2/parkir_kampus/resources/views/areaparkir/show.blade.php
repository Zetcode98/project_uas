@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Area Parkir</h1>
        <a href="{{ route('admin.area_parkir.create') }}" class="btn btn-primary">Tambah Area Parkir</a>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Lokasi</th>
                    <th>Kapasitas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($areaParkirs as $areaParkir)
                    <tr>
                        <td>{{ $areaParkir->id }}</td>
                        <td>{{ $areaParkir->nama }}</td>
                        <td>{{ $areaParkir->lokasi }}</td>
                        <td>{{ $areaParkir->kapasitas }}</td>
                        <td>
                            <a href="{{ route('admin.area_parkir.edit', $areaParkir->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.area_parkir.destroy', $areaParkir->id) }}" method="POST" style="display:inline-block;">
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