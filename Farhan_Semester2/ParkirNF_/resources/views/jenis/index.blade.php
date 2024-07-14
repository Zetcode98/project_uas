@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Daftar Jenis</h2>
    <a href="{{ route('jenis.create') }}" class="btn btn-primary">Tambah Jenis</a>
    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_jenis as $jenis)
                <tr>
                    <td>{{ $jenis->nama }}</td>
                    <td>
                        <a href="{{ route('jenis.view', $jenis->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('jenis.edit', $jenis->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('jenis.destroy', $jenis->id) }}" method="POST" style="display:inline;">
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
