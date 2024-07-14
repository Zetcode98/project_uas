@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Parkir</h2>
    <a href="{{ route('create') }}" class="btn btn-primary">Tambah Parkir</a>
    <table class="table">
        <thead>
            <tr>
                <th>Merk</th>
                <th>Pemilik</th>
                <!-- kolom lain sesuai kebutuhan -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_parkir as $parkir)
                <tr>
                    <td>{{ $parkir->merk }}</td>
                    <td>{{ $parkir->pemilik }}</td>
                    <!-- kolom lain sesuai kebutuhan -->
                    <td>
                        <a href="{{ route('parkir.view', $parkir->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('parkir.edit', $parkir->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('parkir.destroy', $parkir->id) }}" method="POST" style="display:inline;">
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
